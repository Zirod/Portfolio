<section id="about">
    <div class="section-header reveal">
        <span class="section-tag"><?= t('about_tag') ?></span>
        <h2 class="section-title"><?= t('about_title') ?></h2>
    </div>
    
    <div class="about-grid">
        <div class="about-image reveal">
        <div class="about-image-wrapper">
            <div class="about-image-placeholder">👨‍💻</div>
        </div>
        </div>
        
        <div class="about-text reveal">
        <p><?= t('about_p1_prefix') ?><strong><?= $developer['name'] ?></strong><?= t('about_p1_suffix') ?><strong><?= $developer['alias'] ?></strong><?= t('about_p1_desc') ?></p>
        <p><?= t('about_p2') ?></p>
        <p><?= t('about_p3') ?></p>
        
        <div class="about-stats">
            <div class="stat-card">
            <div class="stat-number"><?= $developer['stats']['years'] ?></div>
            <div class="stat-label"><?= t('stat_years') ?></div>
            </div>
            <div class="stat-card">
            <div class="stat-number"><?= $developer['stats']['projects'] ?></div>
            <div class="stat-label"><?= t('stat_projects') ?></div>
            </div>
            <div class="stat-card">
            <div class="stat-number"><?= $developer['stats']['clients'] ?></div>
            <div class="stat-label"><?= t('stat_clients') ?></div>
            </div>
            <div class="stat-card">
            <div class="stat-number"><?= $developer['stats']['remote'] ?></div>
            <div class="stat-label">Remote</div>
            </div>
        </div>
        
        <div class="code-window">
            <div class="code-header">
            <div class="code-dot red"></div><div class="code-dot yellow"></div><div class="code-dot green"></div>
            </div>
            <div class="code-body">
            <span class="code-line"><span class="code-keyword">const</span> <span class="code-var">developer</span> = {</span>
            <span class="code-line">&nbsp;&nbsp;name: <span class="code-string">"<?= $developer['name'] ?>"</span>,</span>
            <span class="code-line">&nbsp;&nbsp;alias: <span class="code-string">"<?= $developer['alias'] ?>"</span>,</span>
            <span class="code-line">&nbsp;&nbsp;role: <span class="code-string">"<?= $developer['role'] ?>"</span>,</span>
            <span class="code-line">&nbsp;&nbsp;location: <span class="code-string">"<?= $developer['location'] ?>"</span>,</span>
            <span class="code-line">&nbsp;&nbsp;stack: [<span class="code-string">"Next.js"</span>, <span class="code-string">"Node"</span>,</span>
            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">"PHP"</span>, <span class="code-string">"Fastify"</span>],</span>
            <span class="code-line">&nbsp;&nbsp;<span class="code-func">available</span>: () => <span class="code-keyword">true</span>,</span>
            <span class="code-line">&nbsp;&nbsp;<span class="code-func">coffee</span>: <span class="code-string">"∞"</span></span>
            <span class="code-line">};</span>
            </div>
        </div>
        </div>
    </div>
</section>