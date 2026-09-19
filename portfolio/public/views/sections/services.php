<?php

/** @var Portfolio $portfolio */

// Variables de la section
$services = $portfolio->getServices();
?>

<!-- Services -->
<section id="services">
    <div class="section-header reveal">
        <span class="section-label"><i class="fas fa-wand-magic-sparkles"></i> Ce que je fais</span>
        <h2>Services</h2>
        <p>Des solutions sur mesure pour donner vie à vos projets digitaux</p>
    </div>

    <div class="services-grid">
        <?php foreach ($services as $service): ?>
            <div class="service-card reveal">
                <div class="service-icon">
                    <i class="<?= e($service->getIcon()) ?>"></i>
                </div>
                <h3><?= e($service->getTitle()) ?></h3>
                <p><?= e($service->getDescription()) ?></p>
                <div class="service-tags">
                    <?php foreach ($service->getTags() as $tag): ?>
                        <span><?= e($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Stack Technique -->
    <div class="stack-section reveal">
        <h3>Stack Technique</h3>
        <p>Les technologies que je maîtrise au quotidien</p>
        <div class="stack-categories">
            <div class="stack-category">
                <span class="stack-category-label">Front-End</span>
                <div class="stack-items">
                    <div class="stack-item"><i class="fab fa-html5"></i> HTML5</div>
                    <div class="stack-item"><i class="fab fa-css3-alt"></i> CSS3</div>
                    <div class="stack-item"><i class="fab fa-js-square"></i> JavaScript</div>
                    <div class="stack-item"><i class="fab fa-sass"></i> SCSS</div>
                    <div class="stack-item"><i class="fab fa-bootstrap"></i> Bootstrap</div>
                    <div class="stack-item"><i class="fas fa-n"></i> Next.js</div>
                </div>
            </div>
            <div class="stack-category">
                <span class="stack-category-label">Back-End</span>
                <div class="stack-items">
                    <div class="stack-item"><i class="fab fa-php"></i> PHP POO</div>
                    <div class="stack-item"><i class="fab fa-node-js"></i> Node.js</div>
                    <div class="stack-item"><i class="fas fa-bolt"></i> Fastify</div>
                </div>
            </div>
            <div class="stack-category">
                <span class="stack-category-label">Base de données</span>
                <div class="stack-items">
                    <div class="stack-item"><i class="fas fa-database"></i> MySQL</div>
                    <div class="stack-item"><i class="fas fa-database"></i> PostgreSQL</div>
                    <div class="stack-item"><i class="fas fa-layer-group"></i> Prisma ORM</div>
                </div>
            </div>
            <div class="stack-category">
                <span class="stack-category-label">Outils</span>
                <div class="stack-items">
                    <div class="stack-item"><i class="fab fa-git-alt"></i> Git</div>
                    <div class="stack-item"><i class="fas fa-robot"></i> IA</div>
                    <div class="stack-item"><i class="fas fa-terminal"></i> CLI</div>
                </div>
            </div>
        </div>
    </div>

    <!-- AI Section -->
    <div class="ai-section reveal">
        <div class="ai-icon">
            <i class="fas fa-brain"></i>
        </div>
        <h3>L'IA au service du développement</h3>
        <p>J'intègre l'intelligence artificielle dans mon workflow pour offrir une productivité et une rapidité sans précédent, tout en préservant la cohérence technique, les bonnes pratiques et les fondations humaines essentielles à chaque projet.</p>
    </div>
</section>
