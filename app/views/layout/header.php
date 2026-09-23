<nav>
    <div class="logo">Zirod</div>
    <ul class="nav-links" id="navLinks">
        <li><a href="#home"><?= t('nav_home') ?></a></li>
        <li><a href="#about"><?= t('nav_about') ?></a></li>
        <li><a href="#skills"><?= t('nav_skills') ?></a></li>
        <li><a href="#journey"><?= t('nav_journey') ?></a></li>
        <li><a href="#projects"><?= t('nav_projects') ?></a></li>
        <li><a href="#contact"><?= t('nav_contact') ?></a></li>
    </ul>
    
    <div class="nav-controls">
        <div class="lang-selector">
        <button class="lang-btn" id="langBtn">
            <span id="currentLang"><?= $current_lang === 'fr' ? 'Français' : 'English' ?></span>
            <span>▾</span>
        </button>
        <div class="lang-dropdown" id="langDropdown">
            <div class="lang-option <?= $current_lang === 'en' ? 'active' : '' ?>" data-lang="en">🇬🇧 English</div>
            <div class="lang-option <?= $current_lang === 'fr' ? 'active' : '' ?>" data-lang="fr">🇫🇷 Français</div>
        </div>
        </div>
        
        <button class="theme-toggle" id="themeToggle" title="Toggle theme">
        <span id="themeIcon">🌙</span>
        </button>
        
        <button class="menu-toggle" id="menuToggle">☰</button>
    </div>
</nav>