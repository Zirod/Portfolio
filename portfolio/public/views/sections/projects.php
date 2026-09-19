<?php

/** @var Portfolio $portfolio */

// Variables de la section
$projects = $portfolio->getProjects();
?>

<!-- Réalisations -->
<section id="realisations">
    <div class="section-header reveal">
        <span class="section-label"><i class="fas fa-folder-open"></i> Portfolio</span>
        <h2>Réalisations</h2>
        <p>Quelques projets qui illustrent mon savoir-faire</p>
    </div>

    <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
            <div class="project-card reveal">
                <img src="<?= e(url_or_hash($project->getImage())) ?>" alt="<?= e($project->getTitle()) ?>" class="project-image">
                <div class="project-content">
                    <h3><?= e($project->getTitle()) ?></h3>
                    <p><?= e($project->getDescription()) ?></p>
                    <div class="project-tech">
                        <?php foreach ($project->getTechnologies() as $technology): ?>
                            <span><?= e($technology) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-links">
                        <a href="<?= e(url_or_hash($project->getProjectUrl())) ?>"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
                        <a href="<?= e(url_or_hash($project->getGithubUrl())) ?>"><i class="fab fa-github"></i> Code source</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
