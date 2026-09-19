<?php

/** @var Portfolio $portfolio */

// Variables de la section
$socials = $portfolio->getSocials();
?>

<!-- Footer -->
<footer>
    <div class="social-links">
        <?php foreach ($socials as $name => $url): ?>
            <a href="<?= e(url_or_hash($url)) ?>" aria-label="<?= e(ucfirst($name)) ?>"><i class="fab fa-<?= e($name) ?>"></i></a>
        <?php endforeach; ?>
    </div>
    <p>© <?= date('Y') ?> — Conçu et développé avec passion. Tous droits réservés.</p>
</footer>
