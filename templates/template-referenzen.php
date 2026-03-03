<?php
/* Template Name: Referenzen */
get_header();

$home_url = home_url('/');
$leistung_url = tw_child_page_url(array('leistungen', 'leistung'));
$referenzen_url = tw_child_page_url(array('referenzen'));
$ablauf_url = tw_child_page_url(array('ablauf'));
$kontakt_url = tw_child_page_url(array('kontakt'));
$datenschutz_url = tw_child_page_url(array('datenschutz'));
$impressum_url = tw_child_page_url(array('impressum', 'impresium'));
?>

<main class="tw-subpage tw-page-referenzen">
    <header class="tw-top" id="top">
        <div class="tw-container tw-top-inner">
            <a class="tw-brand" href="<?php echo esc_url($home_url); ?>" aria-label="Startseite">
                <span class="tw-brand-icon" aria-hidden="true"></span>
                <span class="tw-brand-text">Textilveredelung B2B</span>
            </a>

            <button class="tw-nav-toggle" type="button" aria-expanded="false" aria-label="Navigation umschalten">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>

            <nav class="tw-nav" aria-label="Hauptnavigation">
                <a href="<?php echo esc_url($leistung_url); ?>">Leistungen</a>
                <a class="is-active" href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a>
                <a href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a>
                <a href="<?php echo esc_url($kontakt_url); ?>">Kontakt</a>
            </nav>

            <a class="tw-btn tw-btn--small tw-btn--blue tw-btn--desktop" href="<?php echo esc_url($kontakt_url); ?>">Beratung fuer Unternehmen</a>
        </div>
    </header>

    <section class="tw-sub-hero">
        <div class="tw-container">
            <span class="tw-sub-badge">Referenzen</span>
            <h1>Projekte &amp; Beispiele</h1>
            <p>Hier zaehlen nicht "schoene Bilder", sondern relevante Infos: Einsatz, Menge, Veredelung - damit Unternehmen schnell vergleichen koennen.</p>
        </div>
    </section>

    <section class="tw-sub-main">
        <div class="tw-container">
            <div class="tw-sub-grid tw-sub-grid--three">
                <article class="tw-sub-card">
                    <h2>Arbeitskleidung fuer Handwerksbetrieb</h2>
                    <p class="tw-sub-note">Veredelung: Stickerei - Menge: ca. 120 Teile</p>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Jacken &amp; Polos mit Brustlogo</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Einsatz: taeglicher Aussendienst</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Nachbestellungen moeglich</li>
                    </ul>
                </article>

                <article class="tw-sub-card">
                    <h2>Corporate Wear fuer Dienstleister</h2>
                    <p class="tw-sub-note">Veredelung: Druck + Stick - Menge: 250+ Teile</p>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Mehrere Standorte einheitlich ausgestattet</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> CI-konforme Freigabeprozesse</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Serien- &amp; Nachbestelllogik</li>
                    </ul>
                </article>

                <article class="tw-sub-card">
                    <h2>Teamwear fuer Organisation</h2>
                    <p class="tw-sub-note">Veredelung: Stickerei - Menge: 80 Teile</p>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Hoodies mit Logo + Namensoption</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Einsatz: Events &amp; Oeffentlichkeitsarbeit</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Saubere Groessenabwicklung</li>
                    </ul>
                </article>
            </div>

            <article class="tw-sub-cta">
                <div>
                    <h3>Sie moechten aehnliche Projekte umsetzen?</h3>
                    <p>Kurze Anfrage genuegt - wir melden uns mit konkreten naechsten Schritten.</p>
                </div>
                <div class="tw-sub-cta-actions">
                    <a class="tw-btn tw-btn--orange" href="<?php echo esc_url($kontakt_url); ?>">Projekt anfragen</a>
                    <a class="tw-btn tw-sub-btn-light" href="<?php echo esc_url($leistung_url); ?>">Leistungen ansehen</a>
                </div>
            </article>
        </div>
    </section>

    <footer class="tw-sub-footer">
        <div class="tw-container tw-sub-footer-grid">
            <div>
                <a class="tw-brand tw-brand--small" href="<?php echo esc_url($home_url); ?>">
                    <span class="tw-brand-icon" aria-hidden="true"></span>
                    <span class="tw-brand-text">Textilveredelung B2B</span>
                </a>
                <p>Referenzen &amp; Projekte - klare Infos fuer B2B-Entscheider.</p>
            </div>
            <div>
                <h4>Navigation</h4>
                <ul>
                    <li><a href="<?php echo esc_url($leistung_url); ?>">Leistungen</a></li>
                    <li><a href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a></li>
                    <li><a href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a></li>
                    <li><a href="<?php echo esc_url($kontakt_url); ?>">Kontakt</a></li>
                </ul>
            </div>
            <div>
                <h4>Rechtliches</h4>
                <ul>
                    <li><a href="<?php echo esc_url($impressum_url); ?>">Impressum</a></li>
                    <li><a href="<?php echo esc_url($datenschutz_url); ?>">Datenschutz</a></li>
                </ul>
            </div>
        </div>
        <div class="tw-container">
            <p class="tw-sub-copy">&copy; 2026 Textilveredelung B2B</p>
        </div>
    </footer>
</main>

<?php get_footer(); ?>
