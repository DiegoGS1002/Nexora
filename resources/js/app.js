import './bootstrap';

// ── Scroll Reveal ──────────────────────────────────────────────────
const revealObserver = new IntersectionObserver(
    (entries) => entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            revealObserver.unobserve(e.target);
        }
    }),
    { threshold: 0.12 }
);
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ── Animated Counters ──────────────────────────────────────────────
function animateCounter(el) {
    const target   = parseInt(el.dataset.target, 10);
    const duration = 1800;
    const step     = target / (duration / 16);
    let current    = 0;
    const timer    = setInterval(() => {
        current += step;
        if (current >= target) {
            el.textContent = target + (el.dataset.suffix || '');
            clearInterval(timer);
        } else {
            el.textContent = Math.floor(current) + (el.dataset.suffix || '');
        }
    }, 16);
}

const counterObserver = new IntersectionObserver(
    (entries) => entries.forEach(e => {
        if (e.isIntersecting) {
            animateCounter(e.target);
            counterObserver.unobserve(e.target);
        }
    }),
    { threshold: 0.5 }
);
document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));

// ── Navbar scroll ──────────────────────────────────────────────────
const navbar = document.querySelector('.navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.style.background = window.scrollY > 60
            ? 'rgba(2,6,23,0.97)'
            : 'rgba(2,6,23,0.80)';
    });
}

// ── Mobile menu toggle ─────────────────────────────────────────────
const menuBtn    = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
}
