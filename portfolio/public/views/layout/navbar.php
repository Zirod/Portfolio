<nav id="navbar">
    <div class="nav-container">
        <a href="/" class="logo">
            <?= e($portfolio->getName()) ?>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#services">Services</a></li>
            <li><a href="#parcours">Parcours</a></li>
            <li><a href="#realisations">Réalisations</a></li>
            <li><a href="#contact" class="nav-cta">Contact</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>