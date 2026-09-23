<section class="hero" id="home">
  <div class="hero-container">
    <div class="hero-content">
      <div class="hero-badge"><?= t('hero_badge') ?></div>
      <h1>
        <?= t('hero_greeting') ?><br>
        <span class="gradient"><?= $developer['name'] ?></span>
      </h1>
      <div class="hero-alias">
        <span><?= t('hero_alias_prefix') ?></span>
        <span class="tag"><?= $developer['alias'] ?></span>
        <span><?= t('hero_alias_suffix') ?></span>
      </div>
      <div class="typing" id="typing"></div>
      <p><?= t('hero_desc') ?></p>
      <div class="hero-buttons">
        <a href="#projects" class="btn btn-primary"><?= t('hero_btn_projects') ?> →</a>
        <a href="#contact" class="btn btn-secondary"><?= t('hero_btn_contact') ?></a>
      </div>
    </div>
    
    <div class="hero-visual">
      <div class="hero-illustration">
        <!-- SVG conservé à l'identique pour la concision -->
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="heroGrad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#8b5cf6"/><stop offset="100%" stop-color="#06b6d4"/></linearGradient>
            <linearGradient id="screenGrad" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#1a1a24"/><stop offset="100%" stop-color="#12121a"/></linearGradient>
          </defs>
          <circle cx="250" cy="250" r="220" fill="url(#heroGrad)" opacity="0.08"/>
          <circle cx="250" cy="250" r="180" fill="url(#heroGrad)" opacity="0.05"/>
          <rect x="80" y="380" width="340" height="12" rx="4" fill="#2a2a3a"/>
          <rect x="100" y="392" width="8" height="60" fill="#2a2a3a"/>
          <rect x="392" y="392" width="8" height="60" fill="#2a2a3a"/>
          <rect x="120" y="180" width="260" height="170" rx="10" fill="#1a1a24" stroke="#2a2a3a" stroke-width="2"/>
          <rect x="135" y="195" width="230" height="140" rx="4" fill="url(#screenGrad)"/>
          <rect x="150" y="210" width="60" height="4" rx="2" fill="#c084fc"/>
          <rect x="215" y="210" width="80" height="4" rx="2" fill="#86efac"/>
          <rect x="150" y="222" width="40" height="4" rx="2" fill="#60a5fa"/>
          <rect x="195" y="222" width="100" height="4" rx="2" fill="#fbbf24"/>
          <rect x="165" y="234" width="120" height="4" rx="2" fill="#e4e4e7" opacity="0.6"/>
          <rect x="165" y="246" width="90" height="4" rx="2" fill="#86efac"/>
          <rect x="260" y="246" width="50" height="4" rx="2" fill="#06b6d4"/>
          <rect x="150" y="258" width="70" height="4" rx="2" fill="#c084fc"/>
          <rect x="225" y="258" width="110" height="4" rx="2" fill="#e4e4e7" opacity="0.6"/>
          <rect x="165" y="270" width="140" height="4" rx="2" fill="#fbbf24"/>
          <rect x="150" y="282" width="50" height="4" rx="2" fill="#60a5fa"/>
          <rect x="205" y="282" width="80" height="4" rx="2" fill="#86efac"/>
          <rect x="165" y="294" width="100" height="4" rx="2" fill="#e4e4e7" opacity="0.6"/>
          <rect x="150" y="306" width="60" height="4" rx="2" fill="#c084fc"/>
          <rect x="215" y="306" width="2" height="6" fill="#10b981"><animate attributeName="opacity" values="1;0;1" dur="1s" repeatCount="indefinite"/></rect>
          <rect x="235" y="350" width="30" height="20" fill="#2a2a3a"/>
          <rect x="210" y="368" width="80" height="6" rx="2" fill="#2a2a3a"/>
          <rect x="160" y="395" width="180" height="25" rx="4" fill="#1a1a24" stroke="#2a2a3a" stroke-width="1"/>
          <g fill="#2a2a3a">
            <rect x="168" y="400" width="12" height="6" rx="1"/><rect x="183" y="400" width="12" height="6" rx="1"/><rect x="198" y="400" width="12" height="6" rx="1"/><rect x="213" y="400" width="12" height="6" rx="1"/><rect x="228" y="400" width="12" height="6" rx="1"/><rect x="243" y="400" width="12" height="6" rx="1"/><rect x="258" y="400" width="12" height="6" rx="1"/><rect x="273" y="400" width="12" height="6" rx="1"/><rect x="288" y="400" width="12" height="6" rx="1"/><rect x="303" y="400" width="12" height="6" rx="1"/><rect x="318" y="400" width="12" height="6" rx="1"/><rect x="175" y="410" width="12" height="6" rx="1"/><rect x="190" y="410" width="12" height="6" rx="1"/><rect x="205" y="410" width="12" height="6" rx="1"/><rect x="220" y="410" width="50" height="6" rx="1"/><rect x="273" y="410" width="12" height="6" rx="1"/><rect x="288" y="410" width="12" height="6" rx="1"/><rect x="303" y="410" width="12" height="6" rx="1"/>
          </g>
          <rect x="380" y="360" width="30" height="35" rx="4" fill="#8b5cf6" opacity="0.8"/>
          <path d="M 410 370 Q 425 375 410 390" stroke="#8b5cf6" stroke-width="3" fill="none" opacity="0.8"/>
          <path d="M 385 355 Q 388 345 391 355" stroke="#e4e4e7" stroke-width="1.5" fill="none" opacity="0.5"><animate attributeName="opacity" values="0.2;0.6;0.2" dur="2s" repeatCount="indefinite"/></path>
          <path d="M 395 355 Q 398 345 401 355" stroke="#e4e4e7" stroke-width="1.5" fill="none" opacity="0.5"><animate attributeName="opacity" values="0.6;0.2;0.6" dur="2s" repeatCount="indefinite"/></path>
          <rect x="70" y="340" width="30" height="40" rx="4" fill="#06b6d4" opacity="0.8"/>
          <path d="M 85 340 Q 75 310 85 290 Q 95 310 85 340" fill="#10b981"/>
          <path d="M 85 340 Q 70 320 75 300" stroke="#10b981" stroke-width="2" fill="none"/>
          <path d="M 85 340 Q 100 320 95 300" stroke="#10b981" stroke-width="2" fill="none"/>
          <text x="60" y="150" font-family="monospace" font-size="24" fill="#8b5cf6" opacity="0.6">{ }</text>
          <text x="420" y="130" font-family="monospace" font-size="20" fill="#06b6d4" opacity="0.6">&lt;/&gt;</text>
          <text x="440" y="280" font-family="monospace" font-size="22" fill="#10b981" opacity="0.6">( )</text>
          <text x="40" y="260" font-family="monospace" font-size="18" fill="#fbbf24" opacity="0.6">=&gt;</text>
        </svg>
        
        <div class="floating-badge badge-1">
          <div class="icon">⚛️</div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-dim);"><?= t('badge_specialized') ?></div>
            <div>Next.js</div>
          </div>
        </div>
        <div class="floating-badge badge-2">
          <div class="icon">🚀</div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-dim);"><?= t('badge_experience') ?></div>
            <div><?= $developer['stats']['years'] ?> years</div>
          </div>
        </div>
        <div class="floating-badge badge-3">
          <div class="icon">✓</div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-dim);"><?= t('badge_projects') ?></div>
            <div><?= $developer['stats']['projects'] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>