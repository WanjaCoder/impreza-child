<?php
/* Template Name: Leistung */
get_header();

$home_url = home_url('/');
$leistung_url = tw_child_page_url(array('leistungen', 'leistung'));
$referenzen_url = tw_child_page_url(array('referenzen'));
$ablauf_url = tw_child_page_url(array('ablauf'));
$kontakt_url = tw_child_page_url(array('kontakt'));
$datenschutz_url = tw_child_page_url(array('datenschutz'));
$impressum_url = tw_child_page_url(array('impressum', 'impresium'));
?>

<main class="tw-subpage tw-page-leistung">
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
                <a class="is-active" href="<?php echo esc_url($leistung_url); ?>">Leistungen</a>
                <a href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a>
                <a href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a>
                <a href="<?php echo esc_url($kontakt_url); ?>">Kontakt</a>
            </nav>

            <a class="tw-btn tw-btn--small tw-btn--blue tw-btn--desktop" href="<?php echo esc_url($kontakt_url); ?>">Beratung fuer Unternehmen</a>
        </div>
    </header>

    <section class="tw-sub-hero">
        <div class="tw-container">
            <span class="tw-sub-badge">Leistungen</span>
            <h1>Stickerei &amp; Textildruck fuer Unternehmen</h1>
            <p>Wir empfehlen die passende Veredelung basierend auf Einsatz, Stoff und gewuenschter Optik - mit sauberer Freigabe und Wiederholbarkeit fuer Nachbestellungen.</p>
        </div>
    </section>

    <section class="tw-sub-main">
        <div class="tw-container">
            <div class="tw-sub-grid tw-sub-grid--two">
                <article class="tw-sub-card">
                    <h2><i class="fa-solid fa-shirt" aria-hidden="true"></i> Stickerei</h2>
                    <p>Die Premium-Option fuer Arbeitskleidung &amp; Corporate Wear: langlebig, hochwertig, professionell.</p>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Ideal fuer haeufiges Waschen &amp; taeglichen Einsatz</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Saubere Kanten &amp; edle Anmutung</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wiederbestellbar mit gleichbleibender Optik</li>
                    </ul>
                    <p class="tw-sub-note">Typische Einsatzbereiche: Jacken, Polos, Sweatshirts, Caps, Workwear.</p>
                </article>

                <article class="tw-sub-card">
                    <h2><i class="fa-solid fa-print" aria-hidden="true"></i> Textildruck</h2>
                    <p>Optimal fuer groessere Motive, Farbflaechen oder Aktionen - perfekt fuer Events und Serien.</p>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Fuer groessere Motive &amp; Serien geeignet</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> CI-konform mit klarer Freigabe</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Einheitlicher Team-Look</li>
                    </ul>
                    <p class="tw-sub-note">Typische Einsatzbereiche: T-Shirts, Hoodies, Teamwear, Promotions.</p>
                </article>
            </div>

            <article class="tw-sub-cta">
                <div>
                    <h3>Welche Veredelung passt zu Ihrem Einsatz?</h3>
                    <p>Schicken Sie kurz Logo, Textilien und Menge - wir geben eine klare Empfehlung.</p>
                </div>
                <div class="tw-sub-cta-actions">
                    <a class="tw-btn tw-btn--orange" href="<?php echo esc_url($kontakt_url); ?>">Unverbindlich anfragen</a>
                    <a class="tw-btn tw-sub-btn-light" href="<?php echo esc_url($ablauf_url); ?>">Ablauf ansehen</a>
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
                <p>Professionelle Firmenkleidung mit Logo - Stickerei &amp; Textildruck fuer Unternehmen.</p>
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
