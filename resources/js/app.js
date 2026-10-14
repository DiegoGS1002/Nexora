import './bootstrap';

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!reducedMotion && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-in');
                revealObserver.unobserve(entry.target);
            });
        },
        { rootMargin: '0px 0px -10% 0px', threshold: 0.08 },
    );

    document.querySelectorAll('[data-reveal]').forEach((element) => revealObserver.observe(element));
} else {
    document.querySelectorAll('[data-reveal]').forEach((element) => element.classList.add('is-in'));
}

const menuButton = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (menuButton && mobileMenu) {
    const closeMenu = () => {
        mobileMenu.classList.add('hidden');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Abrir menu');
    };

    menuButton.addEventListener('click', () => {
        const willOpen = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden', !willOpen);
        menuButton.setAttribute('aria-expanded', String(willOpen));
        menuButton.setAttribute('aria-label', willOpen ? 'Fechar menu' : 'Abrir menu');
    });

    mobileMenu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape' || mobileMenu.classList.contains('hidden')) return;
        closeMenu();
        menuButton.focus();
    });
}

document.querySelectorAll('[data-ecosystem]').forEach((ecosystem) => {
    const tabs = [...ecosystem.querySelectorAll('[role="tab"]')];
    const panels = [...ecosystem.querySelectorAll('[role="tabpanel"]')];
    const context = ecosystem.querySelector('.flow-demo__context');

    const selectTab = (tab, moveFocus = false) => {
        tabs.forEach((item) => {
            const selected = item === tab;
            item.setAttribute('aria-selected', String(selected));
            item.tabIndex = selected ? 0 : -1;
        });

        panels.forEach((panel) => {
            panel.hidden = panel.id !== tab.getAttribute('aria-controls');
        });

        if (context) context.textContent = tab.textContent.trim();
        if (moveFocus) tab.focus();
    };

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            selectTab(tab);
            ecosystem.dataset.userControlled = 'true';
        });
        tab.addEventListener('keydown', (event) => {
            let nextIndex = null;
            if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
            if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs.length;
            if (event.key === 'Home') nextIndex = 0;
            if (event.key === 'End') nextIndex = tabs.length - 1;
            if (nextIndex === null) return;
            event.preventDefault();
            selectTab(tabs[nextIndex], true);
        });
    });

    if (!reducedMotion && tabs.length > 1) {
        window.setInterval(() => {
            if (ecosystem.dataset.userControlled === 'true' || document.hidden) return;
            const activeIndex = tabs.findIndex((tab) => tab.getAttribute('aria-selected') === 'true');
            selectTab(tabs[(activeIndex + 1) % tabs.length]);
        }, 4200);
    }
});

document.querySelectorAll('[data-capability]').forEach((band) => {
    const toggle = band.querySelector('.capability-switch');
    if (!toggle) return;

    toggle.addEventListener('click', () => {
        const active = toggle.getAttribute('aria-pressed') !== 'true';
        const title = band.querySelector('p')?.textContent.trim() ?? '';
        band.classList.toggle('is-on', active);
        toggle.setAttribute('aria-pressed', String(active));
        toggle.setAttribute('aria-label', `${active ? 'Desativar' : 'Ativar'} ${title}`);
    });
});
