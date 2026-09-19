// ===== NAVBAR =====
function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('active');
}

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('navLinks').classList.remove('active');
    });
});

window.addEventListener('scroll', () => {
    const nav = document.getElementById('navbar');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

// ===== SCROLL REVEAL =====
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach(el => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;
        const revealPoint = 80;

        if (elementTop < windowHeight - revealPoint) {
            el.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

// ===== NOTIFICATIONS TOAST =====
function getToastContainer() {
    let container = document.getElementById('toastContainer');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toastContainer';
        document.body.appendChild(container);
    }
    return container;
}

function showToast(message, type = 'success', duration = 4500) {
    const container = getToastContainer();

    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.setAttribute('role', 'status');

    const icon = type === 'success'
        ? '<i class="fas fa-circle-check"></i>'
        : '<i class="fas fa-circle-exclamation"></i>';

    toast.innerHTML = `
        <span class="toast-icon">${icon}</span>
        <span class="toast-message"></span>
        <button type="button" class="toast-close" aria-label="Fermer">
            <i class="fas fa-xmark"></i>
        </button>
    `;

    toast.querySelector('.toast-message').textContent = message;
    container.appendChild(toast);

    // Déclenche l'animation d'entrée.
    requestAnimationFrame(() => toast.classList.add('show'));

    const closeToast = () => {
        toast.classList.remove('show');
        toast.addEventListener('transitionend', () => toast.remove(), { once: true });
        setTimeout(() => toast.remove(), 600); // Filet de sécurité
    };

    toast.querySelector('.toast-close').addEventListener('click', closeToast);
    setTimeout(closeToast, duration);
}

// ===== FORMULAIRE DE CONTACT =====
function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');
    const originalContent = submitBtn.innerHTML;

    const setButtonState = (state) => {
        submitBtn.disabled = state !== 'idle';

        if (state === 'sending') {
            submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> Envoi en cours...';
        } else if (state === 'success') {
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Message envoyé !';
            submitBtn.classList.add('btn-success');
        } else if (state === 'error') {
            submitBtn.innerHTML = '<i class="fas fa-xmark"></i> Échec de l\'envoi';
        } else {
            submitBtn.innerHTML = originalContent;
            submitBtn.classList.remove('btn-success');
        }
    };

    const clearFieldErrors = () => {
        form.querySelectorAll('.field-error').forEach(el => el.remove());
        form.querySelectorAll('.invalid').forEach(el => el.classList.remove('invalid'));
    };

    const showFieldErrors = (errors) => {
        Object.entries(errors).forEach(([field, message]) => {
            const input = form.querySelector(`[name="${field}"]`);
            if (!input) return;

            input.classList.add('invalid');
            const error = document.createElement('small');
            error.className = 'field-error';
            error.textContent = message;
            input.closest('.form-group')?.appendChild(error);
        });
    };

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        clearFieldErrors();

        setButtonState('sending');

        try {
            const response = await fetch('?action=contact', {
                method: 'POST',
                body: new FormData(form),
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });

            const result = await response.json();

            if (result.success) {
                setButtonState('success');
                form.reset(); // Réinitialise le formulaire sans recharger la page
                showToast(result.message || 'Message envoyé !', 'success');

                setTimeout(() => setButtonState('idle'), 4000);
            } else {
                setButtonState('error');
                showToast(result.message || 'Une erreur est survenue.', 'error');

                if (result.errors) {
                    showFieldErrors(result.errors);
                }

                setTimeout(() => setButtonState('idle'), 4000);
            }
        } catch (error) {
            setButtonState('error');
            showToast('Impossible de contacter le serveur. Vérifiez votre connexion.', 'error');
            setTimeout(() => setButtonState('idle'), 4000);
        }
    });
}

document.addEventListener('DOMContentLoaded', initContactForm);
