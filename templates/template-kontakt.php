<?php
/* Template Name: Kontakt */
get_header();

$home_url = home_url('/');
$leistung_url = tw_child_page_url(array('leistungen', 'leistung'));
$referenzen_url = tw_child_page_url(array('referenzen'));
$ablauf_url = tw_child_page_url(array('ablauf'));
$kontakt_url = tw_child_page_url(array('kontakt'));
$datenschutz_url = tw_child_page_url(array('datenschutz'));
$impressum_url = tw_child_page_url(array('impressum', 'impresium'));
?>

<main class="tw-subpage tw-page-kontakt">
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
                <a href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a>
                <a class="is-active" href="<?php echo esc_url($kontakt_url); ?>">Kontakt</a>
            </nav>

            <a class="tw-btn tw-btn--small tw-btn--blue tw-btn--desktop" href="<?php echo esc_url($kontakt_url); ?>">Beratung fuer Unternehmen</a>
        </div>
    </header>

    <section class="tw-sub-hero">
        <div class="tw-container">
            <span class="tw-sub-badge">Kontakt</span>
            <h1>Unverbindliche Anfrage</h1>
            <p>Je klarer die Angaben, desto schneller kommt ein belastbares Angebot. (Im Live-Betrieb: Formular an E-Mail/CRM anbinden.)</p>
        </div>
    </section>

    <section class="tw-sub-main">
        <div class="tw-container">
            <div class="tw-sub-grid tw-sub-grid--two">
                <article class="tw-sub-card">
                    <h2>Ihre Daten</h2>
                    <form class="tw-sub-form" method="post" action="#">
                        <label for="company">Firma</label>
                        <input id="company" name="company" type="text" placeholder="z. B. Mustermann GmbH">

                        <label for="contact_person">Ansprechpartner</label>
                        <input id="contact_person" name="contact_person" type="text" placeholder="Vor- und Nachname">

                        <label for="email">E-Mail</label>
                        <input id="email" name="email" type="email" placeholder="name@firma.de">

                        <label for="phone">Telefon (optional)</label>
                        <input id="phone" name="phone" type="text" placeholder="+49 ...">

                        <label for="project_info">Projektinfos</label>
                        <textarea id="project_info" name="project_info" rows="5" placeholder="Textilien, Menge, Veredelung (Stick/Druck), Positionen, Termin, Besonderheiten ..."></textarea>

                        <p class="tw-sub-note">Tipp: Logo als Vektordatei (PDF/SVG/AI) beschleunigt die Umsetzung.</p>
                        <button type="submit" class="tw-btn tw-btn--orange">Anfrage absenden</button>
                        <p class="tw-sub-note tw-sub-note--small">Hinweis: Dies ist ein Demo Template ohne Backend-Anbindung.</p>
                    </form>
                </article>

                <article class="tw-sub-card">
                    <h2>Direktkontakt</h2>
                    <p><strong>Telefon:</strong> 02261 / 123456</p>
                    <p><strong>E-Mail:</strong> info@beispieltextil.de</p>
                    <p><strong>Standort:</strong> Gummersbach / Oberberg</p>
                    <hr class="tw-sub-divider">
                    <h3>Damit wir schnell ein Angebot machen koennen</h3>
                    <ul class="tw-sub-list">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Menge + Groessenverteilung</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Textilien (Marke/Material) oder Wunsch</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Logo-Datei (idealerweise Vektor)</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Position(en): Brust/Ruecken/Aermel</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Wunschtermin / Deadline</li>
                    </ul>

                    <div class="tw-sub-mini-cta">
                        <div>
                            <h4>Schon ein konkretes Projekt?</h4>
                            <p>Dann schau kurz in die Referenzen.</p>
                        </div>
                        <div class="tw-sub-mini-actions">
                            <a class="tw-btn tw-sub-btn-light tw-btn--small" href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a>
                            <a class="tw-btn tw-btn--blue tw-btn--small" href="<?php echo esc_url($leistung_url); ?>">Leistungen</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <footer class="tw-sub-footer">
        <div class="tw-container tw-sub-footer-grid">
            <div>
                <a class="tw-brand tw-brand--small" href="<?php echo esc_url($home_url); ?>">
                    <span class="tw-brand-icon" aria-hidden="true"></span>
                    <span class="tw-brand-text">Textilveredelung B2B</span>
                </a>
                <p>Kontakt fuer Unternehmen - schnelle, klare Abstimmung und planbare Umsetzung.</p>
            </div>
            <div>
                <h4>Navigation</h4>
                <ul>
                    <li><a href="<?php echo esc_url($leistung_url); ?>">Leistungen</a></li>
                    <li><a href="<?php echo esc_url($referenzen_url); ?>">Referenzen</a></li>
                    <li><a href="<?php echo esc_url($ablauf_url); ?>">Ablauf</a></li>
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
