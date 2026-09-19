<?php

/** @var Portfolio $portfolio */

// Variables de la section
$experiences = $portfolio->getExperiences();
?>

<!-- Parcours -->
<section id="parcours">
    <div class="section-header reveal">
        <span class="section-label"><i class="fas fa-route"></i> Mon histoire</span>
        <h2>Parcours</h2>
        <p>Un cheminement guidé par la passion et la curiosité technique</p>
    </div>

    <div class="timeline">
        <?php foreach ($experiences as $experience): ?>
            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-date"><?= e($experience->getDate()) ?></div>
                <h3><?= e($experience->getTitle()) ?></h3>
                <h4><?= e($experience->getCompany()) ?></h4>
                <p><?= e($experience->getDescription()) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
