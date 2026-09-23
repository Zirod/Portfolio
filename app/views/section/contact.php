<section id="contact">
    <div class="section-header reveal">
        <span class="section-tag"><?= t('contact_tag') ?></span>
        <h2 class="section-title"><?= t('contact_title') ?></h2>
        <p class="section-subtitle"><?= t('contact_subtitle') ?></p>
    </div>
    
    <div class="contact-grid">
        <div class="contact-info reveal">
        <div>
            <h3><?= t('contact_heading') ?></h3>
            <p><?= t('contact_desc') ?></p>
        </div>
        
        <div class="contact-methods">
            <a href="mailto:<?= $developer['email'] ?>" class="contact-method">
            <span class="icon">📧</span>
            <div class="info"><div class="label">Email</div><div class="value"><?= $developer['email'] ?></div></div>
            </a>
            <a href="<?= $developer['linkedin'] ?>" target="_blank" class="contact-method">
            <span class="icon">💼</span>
            <div class="info"><div class="label">LinkedIn</div><div class="value">/in/votreprofil</div></div>
            </a>
            <a href="<?= $developer['github'] ?>" target="_blank" class="contact-method">
            <span class="icon">🐙</span>
            <div class="info"><div class="label">GitHub</div><div class="value">@votreusername</div></div>
            </a>
            <a href="<?= $developer['twitter'] ?>" target="_blank" class="contact-method">
            <span class="icon">🐦</span>
            <div class="info"><div class="label">Twitter / X</div><div class="value">@votrehandle</div></div>
            </a>
        </div>
        </div>
        
        <div class="contact-form reveal">
        <form id="contactForm">
            <div class="form-group">
            <label for="name"><?= t('form_name') ?></label>
            <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
            <label for="email"><?= t('form_email') ?></label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
            <label for="subject"><?= t('form_subject') ?></label>
            <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
            <label for="message"><?= t('form_message') ?></label>
            <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="form-submit"><?= t('form_submit') ?> →</button>
        </form>
        </div>
    </div>
</section>