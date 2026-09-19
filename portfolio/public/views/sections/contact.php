<?php

/** @var Portfolio $portfolio */

// Variables de la section
$contact    = $portfolio->getContact();
$csrfToken  = ContactController::getCsrfToken();
?>

<!-- Contact -->
<section id="contact">
    <div class="section-header reveal">
        <span class="section-label"><i class="fas fa-paper-plane"></i> Parlons de votre projet</span>
        <h2>Contact</h2>
        <p>Un projet en tête ? Discutons-en ensemble</p>
    </div>

    <div class="contact-wrapper reveal">
        <div class="contact-section">
            <form class="contact-form" id="contactForm" novalidate>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Objet de votre message">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Décrivez votre projet ou votre demande..." required></textarea>
                </div>
                <div style="text-align:center">
                <!-- Piège à robots : champ caché -->
                <input type="text" name="website" value="" class="honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">
                <input type="hidden" name="_token" value="<?= e($csrfToken) ?>">
                <button type="submit" class="btn-primary">
                    <i class="fas fa-paper-plane"></i> Envoyer le message
                </button>
                </div>
            </form>

            <div class="contact-info">
                <?php if (!empty($contact['email'])): ?>
                    <div class="contact-info-item">
                        <span class="info-icon"><i class="fas fa-envelope"></i></span>
                        <div>
                            <span>Email</span>
                            <a href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($contact['location'])): ?>
                    <div class="contact-info-item">
                        <span class="info-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <div>
                            <span>Localisation</span>
                            <?= e($contact['location']) ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($contact['availability'])): ?>
                    <div class="contact-info-item">
                        <span class="info-icon"><i class="fas fa-clock"></i></span>
                        <div>
                            <span>Disponibilité</span>
                            <?= e($contact['availability']) ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
