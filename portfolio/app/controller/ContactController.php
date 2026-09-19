<?php

class ContactController
{
    /** Destinataire des messages du formulaire de contact. */
    private const RECIPIENT_EMAIL = 'judizirod0@gmail.com';

    /**
     * Point d'entrée AJAX du formulaire de contact.
     * Répond toujours en JSON et termine la requête.
     */
    public static function handle(): void
    {
        header('Content-Type: application/json; charset=UTF-8');
        header('X-Content-Type-Options: nosniff');

        // Seules les requêtes AJAX POST sont acceptées.
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
            self::json(['success' => false, 'message' => 'Méthode non autorisée.'], 405);
        }

        // Protection CSRF : le jeton doit correspondre à celui de la session.
        $token = (string) ($_POST['_token'] ?? '');
        if (!self::verifyCsrf($token)) {
            self::json(['success' => false, 'message' => 'Session expirée, rechargez la page puis réessayez.'], 403);
        }

        // Piège à robots : champ caché qui ne doit jamais être rempli.
        // On répond "succès" sans rien envoyer, pour ne pas éveiller les soupçons.
        if (!empty(trim((string) ($_POST['website'] ?? '')))) {
            self::json(['success' => true, 'message' => 'Message envoyé ! Je vous réponds sous 24-48h.']);
        }

        // Récupération et nettoyage des champs.
        $data = [
            'name'    => trim((string) ($_POST['name'] ?? '')),
            'email'   => trim((string) ($_POST['email'] ?? '')),
            'subject' => trim((string) ($_POST['subject'] ?? '')),
            'message' => trim((string) ($_POST['message'] ?? '')),
        ];

        // Validation côté serveur.
        $errors = [];

        if (mb_strlen($data['name']) < 2) {
            $errors['name'] = 'Veuillez indiquer votre nom.';
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Adresse email invalide.';
        }

        if (mb_strlen($data['message']) < 10) {
            $errors['message'] = 'Votre message doit contenir au moins 10 caractères.';
        }

        if ($errors !== []) {
            self::json(['success' => false, 'message' => 'Veuillez corriger les champs du formulaire.', 'errors' => $errors], 400);
        }

        // Envoi de l'email.
        $sent = self::sendEmail($data);

        if (!$sent) {
            self::json(['success' => false, 'message' => "Le message n'a pas pu être envoyé. Réessayez dans un instant."], 500);
        }

        self::json(['success' => true, 'message' => 'Message envoyé ! Je vous réponds sous 24-48h.']);
    }

    /**
     * Construit et envoie l'email au format HTML.
     */
    private static function sendEmail(array $data): bool
    {
        $safe = array_map(static fn (string $value): string => htmlspecialchars($value, ENT_QUOTES, 'UTF-8'), $data);

        $host = preg_replace('/[^a-z0-9.\-]/i', '', $_SERVER['HTTP_HOST'] ?? 'localhost') ?: 'localhost';

        $headers = implode("\r\n", [
            'From: Portfolio <no-reply@' . $host . '>',
            'Reply-To: ' . $safe['name'] . ' <' . $safe['email'] . '>',
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=UTF-8',
            'X-Mailer: PHP/' . PHP_VERSION,
        ]);

        $subject = '[Portfolio] ' . ($data['subject'] !== '' ? $data['subject'] : 'Nouveau message de contact');

        $messageHtml = nl2br($safe['message']);

        $body = <<<HTML
<!DOCTYPE html>
<html lang="fr">
<body style="margin:0;padding:24px;background:#f2f2f7;font-family:Arial,Helvetica,sans-serif;">
    <div style="max-width:560px;margin:0 auto;background:#ffffff;border-radius:16px;padding:24px;">
        <h2 style="margin:0 0 16px;color:#1a1a2e;">Nouveau message de contact</h2>
        <p style="margin:0 0 4px;color:#8e8e9e;font-size:12px;text-transform:uppercase;">Nom</p>
        <p style="margin:0 0 12px;color:#1a1a2e;">{$safe['name']}</p>
        <p style="margin:0 0 4px;color:#8e8e9e;font-size:12px;text-transform:uppercase;">Email</p>
        <p style="margin:0 0 12px;color:#1a1a2e;">{$safe['email']}</p>
        <p style="margin:0 0 4px;color:#8e8e9e;font-size:12px;text-transform:uppercase;">Sujet</p>
        <p style="margin:0 0 12px;color:#1a1a2e;">{$safe['subject']}</p>
        <p style="margin:0 0 4px;color:#8e8e9e;font-size:12px;text-transform:uppercase;">Message</p>
        <p style="margin:0;color:#1a1a2e;line-height:1.6;">{$messageHtml}</p>
    </div>
</body>
</html>
HTML;

        return mail(self::RECIPIENT_EMAIL, mb_encode_mimeheader($subject), $body, $headers);
    }

    /**
     * Jeton CSRF de la session courante (créé au premier accès).
     */
    public static function getCsrfToken(): string
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['csrf_token'];
    }

    /**
     * Vérifie le jeton CSRF fourni contre celui de la session.
     */
    private static function verifyCsrf(string $token): bool
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        return isset($_SESSION['csrf_token'])
            && $token !== ''
            && hash_equals($_SESSION['csrf_token'], $token);
    }

    /**
     * Envoie une réponse JSON et termine.
     */
    private static function json(array $payload, int $statusCode = 200): never
    {
        http_response_code($statusCode);
        echo json_encode($payload, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
