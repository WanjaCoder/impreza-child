<?php
/* Template Name: Ablauf */
get_header();

$home_url = home_url('/');
$leistung_url = tw_child_page_url(array('leistungen', 'leistung'));
$referenzen_url = tw_child_page_url(array('referenzen'));
$ablauf_url = tw_child_page_url(array('ablauf'));
$kontakt_url = tw_child_page_url(array('kontakt'));
$datenschutz_url = tw_child_page_url(array('datenschutz'));
$impressum_url = tw_child_page_url(array('impressum', 'impresium'));
?>

<main class="tw-subpage tw-page-ablauf">
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
                <a href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a>
                <a class="is-active" href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a>
                <a href="<?php echo esc_url($kontakt_url); ?>">Kontakt</a>
            </nav>

            <a class="tw-btn tw-btn--small tw-btn--blue tw-btn--desktop" href="<?php echo esc_url($kontakt_url); ?>">Beratung fuer Unternehmen</a>
        </div>
    </header>

    <section class="tw-sub-hero">
        <div class="tw-container">
            <span class="tw-sub-badge">Ablauf</span>
            <h1>Planbar. Transparent. B2B-tauglich.</h1>
            <p>Unser Ablauf ist so aufgebaut, dass Einkauf/HR/Marketing schnell entscheiden koennen und die Umsetzung ohne Reibung laeuft - inklusive Nachbestellungen.</p>
        </div>
    </section>

    <section class="tw-sub-main">
        <div class="tw-container">
            <div class="tw-sub-grid tw-sub-grid--four">
                <article class="tw-sub-card tw-sub-step-card">
                    <span class="tw-sub-step-num">1</span>
                    <h2>Bedarf klaeren</h2>
                    <p>Welche Textilien? Welche Mengen? Einsatz (Indoor/Outdoor)? Termin? CI-Vorgaben?</p>
                </article>

                <article class="tw-sub-card tw-sub-step-card">
                    <span class="tw-sub-step-num">2</span>
                    <h2>Empfehlung &amp; Freigabe</h2>
                    <p>Wir empfehlen Stick oder Druck passend zum Einsatz und erstellen eine Freigabe (Layout/Positionierung).</p>
                </article>

                <article class="tw-sub-card tw-sub-step-card">
                    <span class="tw-sub-step-num">3</span>
                    <h2>Produktion &amp; Qualitaetscheck</h2>
                    <p>Saubere Umsetzung, dokumentierter Check, klare Kommunikation bei Rueckfragen.</p>
                </article>

                <article class="tw-sub-card tw-sub-step-card">
                    <span class="tw-sub-step-num">4</span>
                    <h2>Lieferung &amp; Nachbestellung</h2>
                    <p>Wiederbestellungen jederzeit moeglich - gleiche Optik, gleiche Qualitaet, gleiche Positionen.</p>
                </article>
            </div>

            <div class="tw-sub-grid tw-sub-grid--two">
                <article class="tw-sub-card">
                    <h2>Was wir von Ihnen brauchen</h2>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Logo (Vektor ideal: PDF/SVG/AI)</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Textilien/Marke/Material (falls schon vorhanden)</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Mengen + Groessenverteilung</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wunschpositionen (Brust/Ruecken/Aermel)</li>
                    </ul>
                </article>

                <article class="tw-sub-card">
                    <h2>Typische B2B-Fragen</h2>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wie schnell geht eine Nachbestellung?</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wie stellen wir CI-Konformitaet sicher?</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wie laeuft Freigabe &amp; Abstimmung?</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Gibt es Muster vor Serienproduktion?</li>
                    </ul>
                </article>
            </div>

            <article class="tw-sub-cta">
                <div>
                    <h3>Sie moechten direkt starten?</h3>
                    <p>Schicken Sie uns Logo + Menge - wir melden uns kurzfristig.</p>
                </div>
                <div class="tw-sub-cta-actions">
                    <a class="tw-btn tw-btn--orange" href="<?php echo esc_url($kontakt_url); ?>">Anfrage senden</a>
                    <a class="tw-btn tw-sub-btn-light" href="<?php echo esc_url($referenzen_url); ?>">Referenzen ansehen</a>
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
                <p>Transparenter Ablauf fuer Unternehmen - von der Freigabe bis zur Nachbestellung.</p>
            </div>
            <div>
                <h4>Navigation</h4>
                <ul>
                    <li><a href="<?php echo esc_url($leistung_url); ?>">Leistungen</a></li>
                    <li><a href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a></li>
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
