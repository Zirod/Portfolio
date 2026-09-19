<?php

// Serveur de développement PHP (php -S) : laisser le serveur livrer les fichiers statiques.
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
    $file = realpath(__DIR__ . $path);

    if ($file !== false && is_file($file) && strpos($file, __DIR__ . DIRECTORY_SEPARATOR) === 0) {
        return false;
    }
}

require_once __DIR__ . '/portfolio/app/config/config.php';
require_once __DIR__ . '/portfolio/app/Core/Autoload.php';

Autoloader::register();

// Session + jeton CSRF avant tout affichage (le cookie de session doit être envoyé sans sortie préalable).
ContactController::getCsrfToken();

// Route AJAX du formulaire de contact (après autoload, la classe doit être chargeable).
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST'
    && ($_GET['action'] ?? '') === 'contact') {
    ContactController::handle();
}

$portfolio = require DATA_PATH . '/portfolio-data.php';

$controller = new PortfolioController($portfolio);

$controller->index();
