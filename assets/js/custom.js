(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        var topBar = document.querySelector(".tw-top");
        var navToggle = document.querySelector(".tw-nav-toggle");
        var navLinks = document.querySelectorAll(".tw-nav a");
        var animatedItems = document.querySelectorAll("[data-animate]");

        var setHeaderState = function () {
            if (!topBar) {
                return;
            }
            topBar.classList.toggle("tw-top--scrolled", window.scrollY > 12);
        };

        setHeaderState();
        window.addEventListener("scroll", setHeaderState, { passive: true });

        if (navToggle) {
            navToggle.addEventListener("click", function () {
                var isOpen = document.body.classList.toggle("tw-nav-open");
                navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
            });
        }

        navLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                document.body.classList.remove("tw-nav-open");
                if (navToggle) {
                    navToggle.setAttribute("aria-expanded", "false");
                }
            });
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth > 980) {
                document.body.classList.remove("tw-nav-open");
                if (navToggle) {
                    navToggle.setAttribute("aria-expanded", "false");
                }
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener("click", function (event) {
                var href = this.getAttribute("href");
                if (!href || href === "#") {
                    return;
                }

                var target = document.querySelector(href);
                if (!target) {
                    return;
                }

                event.preventDefault();
                var offset = topBar ? topBar.offsetHeight : 0;
                var targetTop = target.getBoundingClientRect().top + window.scrollY - offset + 4;
                window.scrollTo({ top: targetTop, behavior: "smooth" });
            });
        });

        if (!animatedItems.length) {
            return;
        }

        if ("IntersectionObserver" in window) {
            var observer = new IntersectionObserver(
                function (entries, currentObserver) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        entry.target.classList.add("tw-in-view");
                        currentObserver.unobserve(entry.target);
                    });
                },
                {
                    threshold: 0.18,
                    rootMargin: "0px 0px -40px 0px"
                }
            );

            animatedItems.forEach(function (item) {
                observer.observe(item);
            });
        } else {
            animatedItems.forEach(function (item) {
                item.classList.add("tw-in-view");
            });
        }
    });
})();
