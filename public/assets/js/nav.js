window.addEventListener("load", () => {
    try {
        const toggleButton = document.getElementById("menu-toggle-button");
        const menuDropdown = document.getElementById("navbar-menu-mobile");
        const menuIconOpen = document.getElementById("menu-icon-open");
        const menuIconClose = document.getElementById("menu-icon-close");
        const nav = document.getElementById("main-nav");
        const SCROLL_THRESHOLD = 50;

        // safe helper for navbar height (0 if nav missing)
        const getNavbarHeight = () => (nav ? nav.offsetHeight : 0);

        // Scroll handler (guard for null nav)
        const handleScroll = () => {
            if (!nav) return;
            if (window.scrollY > SCROLL_THRESHOLD) {
                nav.classList.add(
                    "backdrop-blur-md",
                    "shadow-lg",
                    "bg-white/95",
                    "border-gray-200"
                );
                nav.classList.remove(
                    "bg-white/30",
                    "border-white/20",
                    "shadow-sm"
                );
            } else {
                nav.classList.remove(
                    "backdrop-blur-md",
                    "shadow-lg",
                    "bg-white/95",
                    "border-gray-200"
                );
                nav.classList.add(
                    "bg-white/30",
                    "border-white/20",
                    "shadow-sm"
                );
            }
        };

        if (nav) {
            window.addEventListener("scroll", handleScroll);
            handleScroll();
        }

        // Mobile toggle - only attach if elements exist
        const toggleMenu = () => {
            if (
                !menuDropdown ||
                !toggleButton ||
                !menuIconOpen ||
                !menuIconClose
            )
                return;
            const wasHidden = menuDropdown.classList.toggle("hidden");
            // isExpanded in previous code was confusing; we set aria-expanded correctly:
            const isExpanded = !menuDropdown.classList.contains("hidden");
            menuIconOpen.classList.toggle("hidden", isExpanded);
            menuIconClose.classList.toggle("hidden", !isExpanded);
            toggleButton.setAttribute("aria-expanded", String(isExpanded));
        };

        if (toggleButton && menuDropdown) {
            toggleButton.addEventListener("click", toggleMenu);
        }

        // Universal smooth-scroll function using bounding client rect (works reliably)
        const smoothScrollToElement = (targetEl) => {
            if (!targetEl) return;
            const navbarHeight = getNavbarHeight();
            const rect = targetEl.getBoundingClientRect();
            const top = Math.round(rect.top + window.scrollY - navbarHeight);
            window.scrollTo({ top, behavior: "smooth" });
        };

        // Attach to navbar links (if present) — keep old behavior (close mobile menu)
        const allNavLinks = document.querySelectorAll(
            "#navbar-menu a, #navbar-menu-mobile a"
        );
        allNavLinks.forEach((link) => {
            link.addEventListener("click", (e) => {
                const href = link.getAttribute("href") || "";
                if (!href.startsWith("#")) return;
                const targetSelector = href;
                const target = document.querySelector(targetSelector);
                if (!target) return;
                e.preventDefault();
                smoothScrollToElement(target);
                // Close mobile menu if it's open
                if (
                    menuDropdown &&
                    !menuDropdown.classList.contains("hidden")
                ) {
                    toggleMenu();
                }
            });
        });

        // Attach to ALL anchor links on page (includes your Contact button)
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", (e) => {
                const href = anchor.getAttribute("href");
                if (!href || href === "#") return; // ignore bare "#"
                const target = document.querySelector(href);
                if (!target) return;
                e.preventDefault();
                smoothScrollToElement(target);
            });
        });

        console.log(
            "Smooth scroll: listeners attached. Navbar present:",
            !!nav
        );
    } catch (err) {
        // Never let an error stop other scripts — log it for debugging
        console.error("Smooth scroll script error:", err);
    }
});

document.addEventListener("DOMContentLoaded", () => {
    // Animate text group (left side)
    document.querySelectorAll(".fade-up").forEach((el, i) => {
        setTimeout(() => {
            el.classList.add("show");
        }, 200 * i);
    });

    // Animate card (right side)
    setTimeout(() => {
        document.querySelector(".slide-right").classList.add("show");
    }, 600);
});

document.addEventListener("DOMContentLoaded", () => {
    const showMoreBtn = document.querySelector("#projects button");
    const hiddenCards = document.querySelectorAll(
        "#projects-grid [data-hidden]"
    );

    let isExpanded = false; // Tracks if extra cards are shown

    showMoreBtn.addEventListener("click", () => {
        if (!isExpanded) {
            // Show all hidden cards
            hiddenCards.forEach((card) => card.classList.remove("hidden"));
            showMoreBtn.querySelector("span").textContent =
                "Show Less Projects";
            isExpanded = true;
        } else {
            // Hide extra cards
            hiddenCards.forEach((card) => card.classList.add("hidden"));
            showMoreBtn.querySelector("span").textContent =
                "Show More Projects";
            isExpanded = false;
        }
    });
});

document.querySelectorAll(".project-card").forEach((card) => {
    const spotlight = document.createElement("div");
    spotlight.classList.add("spotlight");
    card.appendChild(spotlight);

    let targetX = 0,
        targetY = 0;
    let currX = 0,
        currY = 0;

    const animate = () => {
        currX += (targetX - currX) * 0.08; // smoothing
        currY += (targetY - currY) * 0.08;

        spotlight.style.left = currX + "px";
        spotlight.style.top = currY + "px";

        requestAnimationFrame(animate);
    };

    animate();

    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        targetX = e.clientX - rect.left;
        targetY = e.clientY - rect.top;
    });
});

document
    .getElementById("contact-form")
    .addEventListener("submit", function (e) {
        e.preventDefault(); // prevent default form submission

        const name = encodeURIComponent(document.getElementById("name").value);
        const email = encodeURIComponent(
            document.getElementById("email").value
        );
        const subject = encodeURIComponent(
            document.getElementById("subject").value
        );
        const message = encodeURIComponent(
            document.getElementById("message").value
        );

        // Gmail compose URL
        const gmailLink = `https://mail.google.com/mail/?view=cm&fs=1&to=norezali.dev@gmail.com&su=${subject}&body=Name: ${name}%0AEmail: ${email}%0A%0A${message}`;

        // Open Gmail in a new tab
        window.open(gmailLink, "_blank");
    });
