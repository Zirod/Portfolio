<footer>
    <div class="footer-grid">
        <div class="footer-brand">
        <div class="logo">&lt;Zirod /&gt;</div>
        <p><?= t('footer_desc') ?></p>
        <div class="footer-social">
            <a href="<?= $developer['github'] ?>" target="_blank" title="GitHub">🐙</a>
            <a href="<?= $developer['linkedin'] ?>" target="_blank" title="LinkedIn">💼</a>
            <a href="<?= $developer['twitter'] ?>" target="_blank" title="Twitter">🐦</a>
            <a href="mailto:<?= $developer['email'] ?>" title="Email">📧</a>
        </div>
        </div>
        
        <div class="footer-column">
        <h4><?= t('footer_nav') ?></h4>
        <ul>
            <li><a href="#home"><?= t('nav_home') ?></a></li>
            <li><a href="#about"><?= t('nav_about') ?></a></li>
            <li><a href="#skills"><?= t('nav_skills') ?></a></li>
            <li><a href="#journey"><?= t('nav_journey') ?></a></li>
            <li><a href="#projects"><?= t('nav_projects') ?></a></li>
            <li><a href="#contact"><?= t('nav_contact') ?></a></li>
        </ul>
        </div>
        
        <div class="footer-column">
        <h4><?= t('footer_services') ?></h4>
        <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">API REST</a></li>
            <li><a href="#">Fullstack Apps</a></li>
            <li><a href="#">Consulting</a></li>
        </ul>
        </div>
        
        <div class="footer-column">
        <h4><?= t('footer_tech') ?></h4>
        <ul>
            <li><a href="#">Next.js</a></li>
            <li><a href="#">Node.js</a></li>
            <li><a href="#">TypeScript</a></li>
            <li><a href="#">PostgreSQL</a></li>
            <li><a href="#">PHP</a></li>
        </ul>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>© <?= date('Y') . ' ' . $developer['name'] ?> · <?= $developer['alias'] ?>. <?= t('footer_rights') ?></p>
        <p><?= t('footer_built') ?> <span class="heart"> Zirod </span> <?= t('footer_from') ?></p>
    </div>
</footer>