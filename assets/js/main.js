// Language selector (recharge la page pour un vrai i18n côté serveur)
const langBtn = document.getElementById('langBtn');
const langDropdown = document.getElementById('langDropdown');
const langOptions = document.querySelectorAll('.lang-option');

langBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    langDropdown.classList.toggle('open');
});

document.addEventListener('click', () => {
    langDropdown.classList.remove('open');
});

langOptions.forEach(option => {
    option.addEventListener('click', () => {
    const lang = option.dataset.lang;
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString(); // Rechargement propre pour le SEO
    });
});

// Theme toggle
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'light') {
    document.body.classList.add('light-theme');
    themeIcon.textContent = '☀️';
}
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('light-theme');
    const isLight = document.body.classList.contains('light-theme');
    themeIcon.textContent = isLight ? '☀️' : '🌙';
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
});

// Mobile menu
const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');
menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => navLinks.classList.remove('open'));
});


function startTyping() {
    clearTimeout(typingTimeout);
    const typingEl = document.getElementById('typing');
    const currentText = typingTexts[typingIndex];
    
    if (isDeleting) {
    typingEl.textContent = currentText.substring(0, charIndex - 1);
    charIndex--;
    } else {
    typingEl.textContent = currentText.substring(0, charIndex + 1);
    charIndex++;
    }
    
    let typeSpeed = isDeleting ? 40 : 80;
    if (!isDeleting && charIndex === currentText.length) {
    typeSpeed = 2000; isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
    isDeleting = false; typingIndex = (typingIndex + 1) % typingTexts.length; typeSpeed = 300;
    }
    typingTimeout = setTimeout(startTyping, typeSpeed);
}
startTyping();

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
