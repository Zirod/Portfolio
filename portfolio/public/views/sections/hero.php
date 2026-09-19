<?php

/** @var Portfolio $portfolio */

// Variables de la section
$stats        = $portfolio->getStats();
$profileImage = $portfolio->getProfileImage();
$name         = $portfolio->getName();
?>

<!-- Hero -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                Disponible pour de nouveaux projets
            </div>
            <h1>Développeur<br>Full Stack<br><span class="gradient-text">créatif &amp; agile</span></h1>
            <p class="hero-description">
                Je conçois des applications web performantes en combinant expertise technique et intelligence artificielle — pour livrer rapidement sans compromettre la qualité ni les fondations humaines.
            </p>
            <div class="hero-buttons">
                <a href="#services" class="btn-primary">
                    Découvrir mes services <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#contact" class="btn-secondary">
                    <i class="fas fa-envelope"></i> Me contacter
                </a>
            </div>
            <div class="hero-stats">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <span class="stat-number"><?= e($stat['number']) ?></span>
                        <span class="stat-label"><?= e($stat['label']) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-wrapper">
                <div class="hero-image-bg"></div>
                <img src="<?= e(url_or_hash($profileImage)) ?>" alt="Photo de profil de <?= e($name) ?>" class="hero-image">
            </div>
            <div class="hero-floating-badge badge-1">
                <span class="badge-icon"><i class="fas fa-code"></i></span>
                Full Stack
            </div>
            <div class="hero-floating-badge badge-2">
                <span class="badge-icon"><i class="fas fa-robot"></i></span>
                IA Powered
            </div>
            <div class="hero-floating-badge badge-3">
                <span class="badge-icon"><i class="fas fa-bolt"></i></span>
                Rapide &amp; Fiable
            </div>
        </div>
    </div>
</section>
