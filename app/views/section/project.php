<section id="projects">
    <div class="section-header reveal">
        <span class="section-tag"><?= t('projects_tag') ?></span>
        <h2 class="section-title"><?= t('projects_title') ?></h2>
        <p class="section-subtitle"><?= t('projects_subtitle') ?></p>
    </div>
    
    <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
        <div class="project-card reveal">
        <div class="project-image">
            <!-- SVG placeholder conservé -->
            <svg viewBox="0 0 400 250" xmlns="http://www.w3.org/2000/svg">
            <rect width="400" height="250" fill="#12121a"/>
            <rect x="20" y="20" width="360" height="30" rx="4" fill="#1a1a24"/>
            <circle cx="35" cy="35" r="5" fill="#ef4444"/><circle cx="50" cy="35" r="5" fill="#f59e0b"/><circle cx="65" cy="35" r="5" fill="#10b981"/>
            <rect x="20" y="70" width="170" height="160" rx="8" fill="url(#g1)" opacity="0.9"/>
            <rect x="210" y="70" width="170" height="75" rx="8" fill="#1a1a24"/>
            <rect x="210" y="155" width="170" height="75" rx="8" fill="#1a1a24"/>
            </svg>
        </div>
        <div class="project-content">
            <div class="project-type"><?= $project['type'] ?></div>
            <h3><?= $project['title'][$current_lang] ?></h3>
            <p><?= $project['desc'][$current_lang] ?></p>
            <div class="project-stack">
            <?php foreach ($project['stack'] as $tech): ?>
                <span><?= $tech ?></span>
            <?php endforeach; ?>
            </div>
            <div class="project-links">
            <a href="<?= $project['demo'] ?>">🔗 <?= t('project_demo') ?></a>
            <a href="<?= $project['github'] ?>">📂 GitHub</a>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>