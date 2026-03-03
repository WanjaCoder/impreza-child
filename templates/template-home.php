<?php
/* Template Name: Custom Home */
get_header();
?>

<main class="tw-home">
    <header class="tw-top" id="top">
        <div class="tw-container tw-top-inner">
            <a class="tw-brand" href="#top" aria-label="Startseite">
                <span class="tw-brand-icon"><i class="fa-solid fa-shirt" aria-hidden="true"></i></span>
                <span class="tw-brand-text">Logo</span>
            </a>

            <button class="tw-nav-toggle" type="button" aria-expanded="false" aria-label="Navigation umschalten">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>

            <nav class="tw-nav" aria-label="Hauptnavigation">
                <a href="#leistungen">Leistungen</a>
                <a href="#referenzen">Referenzen</a>
                <a href="#ablauf">Ablauf</a>
                <a href="#kontakt">Kontakt</a>
            </nav>

            <a class="tw-btn tw-btn--small tw-btn--blue tw-btn--desktop" href="#kontakt">Beratung fuer Unternehmen</a>
        </div>
    </header>

    <section class="tw-hero" data-animate>
        <div class="tw-container">
            <div class="tw-hero-content">
                <h1>Firmenkleidung mit Logo professionell bestickt &amp; bedruckt</h1>
                <p>Fuer Unternehmen, Handwerk &amp; Organisationen - langlebig, einheitlich, zuverlaessig.</p>
                <div class="tw-actions">
                    <a class="tw-btn tw-btn--orange" href="#kontakt">Unverbindlich anfragen</a>
                    <a class="tw-btn tw-btn--outline" href="#kontakt">Beratung anfordern</a>
                </div>
            </div>
        </div>
    </section>

    <section class="tw-benefits" data-animate>
        <div class="tw-container">
            <ul class="tw-benefit-list">
                <li><i class="fa-solid fa-check" aria-hidden="true"></i> Firmenkunden &amp; Handwerksbetriebe</li>
                <li><i class="fa-solid fa-check" aria-hidden="true"></i> Eigene Produktion vor Ort</li>
                <li><i class="fa-solid fa-check" aria-hidden="true"></i> Langjaehrige Erfahrung in der B2B-Veredelung</li>
                <li><i class="fa-solid fa-check" aria-hidden="true"></i> Persoenliche Ansprechpartner</li>
            </ul>
        </div>
    </section>

    <section class="tw-logos" data-animate>
        <div class="tw-container tw-logos-row">
            <span class="tw-logo-item"><i class="fa-solid fa-house" aria-hidden="true"></i> MEIER BAU</span>
            <span class="tw-logo-item"><i class="fa-solid fa-truck" aria-hidden="true"></i> ACME LOGISTICS</span>
            <span class="tw-logo-item"><i class="fa-solid fa-microchip" aria-hidden="true"></i> HOFMANN TECH</span>
            <span class="tw-logo-item"><i class="fa-solid fa-soap" aria-hidden="true"></i> PerfectClean</span>
        </div>
    </section>

    <section class="tw-services" id="leistungen">
        <div class="tw-container tw-services-grid">
            <article class="tw-service-card" style="--card-bg: url('https://images.pexels.com/photos/14331365/pexels-photo-14331365.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400')" data-animate>
                <div class="tw-service-overlay">
                    <h3>Stickerei<br>fuer Arbeits-&amp;<br>Firmenkleidung</h3>
                    <ul>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Robuste &amp; hochwertige Veredelung</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Ideal fuer taegliche Einsaetze &amp; Arbeitskleidung</li>
                    </ul>
                    <a class="tw-btn tw-btn--small tw-btn--orange" href="#kontakt">Mehr erfahren</a>
                </div>
            </article>

            <article class="tw-service-card" style="--card-bg: url('https://images.pexels.com/photos/30710507/pexels-photo-30710507.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400')" data-animate>
                <div class="tw-service-overlay">
                    <h3>Textildruck<br>fuer Unternehmen</h3>
                    <ul>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Fuer groessere Serien &amp; Events</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Praezise Drucke nach CI-Vorgaben</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Perfekt fuer Promotion &amp; Teamkleidung</li>
                    </ul>
                    <a class="tw-btn tw-btn--small tw-btn--orange" href="#kontakt">Mehr erfahren</a>
                </div>
            </article>
        </div>
    </section>

    <section class="tw-process" id="ablauf">
        <div class="tw-container">
            <h2 data-animate>So laeuft die Zusammenarbeit</h2>
            <div class="tw-steps">
                <article class="tw-step" data-animate>
                    <span class="tw-step-num">1</span>
                    <span class="tw-step-icon"><i class="fa-solid fa-comments" aria-hidden="true"></i></span>
                    <p>Beratung &amp; Bedarfsklaerung</p>
                </article>
                <article class="tw-step" data-animate>
                    <span class="tw-step-num">2</span>
                    <span class="tw-step-icon"><i class="fa-solid fa-shirt" aria-hidden="true"></i></span>
                    <p>Muster &amp; Freigabe</p>
                </article>
                <article class="tw-step" data-animate>
                    <span class="tw-step-num">3</span>
                    <span class="tw-step-icon"><i class="fa-solid fa-gears" aria-hidden="true"></i></span>
                    <p>Produktion &amp; Veredelung</p>
                </article>
                <article class="tw-step" data-animate>
                    <span class="tw-step-num">4</span>
                    <span class="tw-step-icon"><i class="fa-solid fa-truck-fast" aria-hidden="true"></i></span>
                    <p>Lieferung &amp; Nachbestellung</p>
                </article>
            </div>
        </div>
    </section>

    <section class="tw-references" id="referenzen">
        <div class="tw-container">
            <h2 data-animate>Referenzen &amp; Projekte</h2>
            <div class="tw-reference-grid">
                <article class="tw-reference-card" data-animate>
                    <img src="https://images.pexels.com/photos/6765517/pexels-photo-6765517.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400" alt="Arbeitskleidung in Produktion">
                    <div class="tw-reference-body">
                        <h3>Arbeitskleidung fuer Handwerksbetrieb</h3>
                        <p><strong>100+</strong> bestickte Polos &amp; Jacken</p>
                    </div>
                </article>

                <article class="tw-reference-card" data-animate>
                    <img src="https://images.pexels.com/photos/10952730/pexels-photo-10952730.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400" alt="Corporate Wear fuer Unternehmen">
                    <div class="tw-reference-body">
                        <h3>Corporate Wear fuer Unternehmen</h3>
                        <p><strong>300+</strong> Teile, CI-konforme Umsetzung</p>
                    </div>
                </article>
            </div>

            <a class="tw-more-projects" href="#kontakt">Weitere Projekte anzeigen <i class="fa-solid fa-angle-right" aria-hidden="true"></i></a>
        </div>

        <div class="tw-dark-cta" data-animate>
            <h3>Bereit fuer professionelle Firmenkleidung?</h3>
            <div class="tw-actions">
                <a class="tw-btn tw-btn--orange" href="#kontakt">Angebot anfragen</a>
                <a class="tw-btn tw-btn--outline" href="#kontakt">Persoenliche Beratung</a>
            </div>
        </div>
    </section>

    <section class="tw-partner" id="kontakt">
        <div class="tw-container">
            <h2 data-animate>Ihr Partner fuer Firmenkleidung</h2>
            <div class="tw-partner-grid">
                <ul class="tw-partner-list" data-animate>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Eigene Produktion - kein Zwischenhaendler</li>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Stick &amp; Druck aus einer Hand</li>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Langjaehrige Expertise mit Unternehmen</li>
                    <li><i class="fa-solid fa-check" aria-hidden="true"></i> Planbare Qualitaet &amp; feste Ansprechpartner</li>
                </ul>

                <div class="tw-contact-actions" data-animate>
                    <a class="tw-btn tw-btn--orange" href="#top">Jetzt Anfrage senden</a>
                    <a class="tw-btn tw-btn--blue" href="#top">Persoenliche Beratung</a>
                    <p><i class="fa-solid fa-phone" aria-hidden="true"></i> 02261 / 123456</p>
                    <p><i class="fa-solid fa-envelope" aria-hidden="true"></i> info@beispieltextil.de</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="tw-footer">
        <div class="tw-container">
            <p>Textilveredelung fuer Unternehmen - Arbeitskleidung | Firmenkleidung | Corporate Wear</p>
            <div class="tw-footer-links">
                <a href="#top">Impressum</a>
                <a href="#top">Datenschutz</a>
                <a href="#top">Kontakt</a>
            </div>
        </div>
    </footer>
</main>

<?php get_footer(); ?>
