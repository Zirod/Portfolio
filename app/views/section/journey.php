<section id="journey">
    <div class="section-header reveal">
        <span class="section-tag"><?= t('journey_tag') ?></span>
        <h2 class="section-title"><?= t('journey_title') ?></h2>
        <p class="section-subtitle"><?= t('journey_subtitle') ?></p>
    </div>
    
    <div class="journey-container">
        <?php foreach ($journey as $index => $item): ?>
        <div class="journey-item reveal">
        <div class="journey-content">
            <div class="journey-year">
            <?= $item['year'] ?><?= isset($item['year_suffix']) ? $item['year_suffix'][$current_lang] : '' ?>
            </div>
            <h3><?= $item['title'][$current_lang] ?></h3>
            <div class="location"><?= $item['location'] ?></div>
            <p><?= $item['desc'][$current_lang] ?></p>
        </div>
        <div class="journey-dot"></div>
        </div>
        <?php endforeach; ?>
    </div>
</section>