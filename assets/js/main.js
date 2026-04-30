/**
 * Portfolio BTS SIO — SLAM
 * main.js — Fichier JavaScript principal
 */

document.addEventListener('DOMContentLoaded', function () {

    /* ════════════════════════════
       SIDEBAR MOBILE
    ════════════════════════════ */
    const sidebar       = document.getElementById('sidebar');
    const burgerBtn     = document.getElementById('burgerBtn');
    const overlay       = document.getElementById('sidebarOverlay');

    if (burgerBtn) {
        burgerBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('open');
        });
    }

    /* ════════════════════════════
       ACCORDÉONS COMPÉTENCES
    ════════════════════════════ */
    document.querySelectorAll('.competence-header').forEach(header => {
        header.addEventListener('click', () => {
            const block = header.closest('.competence-block');
            block.classList.toggle('open');
        });
    });

    /* ════════════════════════════
       ACCORDÉONS DOSSIERS DOCS
    ════════════════════════════ */
    document.querySelectorAll('.doc-folder-header').forEach(header => {
        header.addEventListener('click', () => {
            const folder = header.closest('.doc-folder');
            folder.classList.toggle('open');
        });
    });

    /* ════════════════════════════
       DRAG & DROP UPLOAD ZONE (Désactivé - HTML statique)
    ════════════════════════════ */
    const uploadZone = document.getElementById('uploadZone');
    if (uploadZone) {
        uploadZone.style.display = 'none'; // Désactivé sans PHP
    }

    /* ════════════════════════════
       ANIMATION PROGRESS BARS
    ════════════════════════════ */
    const bars = document.querySelectorAll('.progress-bar-custom');
    if (bars.length > 0) {
        setTimeout(() => {
            bars.forEach(bar => {
                const target = bar.getAttribute('data-width');
                bar.style.width = target + '%';
            });
        }, 300);
    }

    /* ════════════════════════════
       TOAST NOTIFICATIONS
    ════════════════════════════ */
    window.showToast = function (message, type = 'info') {
        let container = document.getElementById('toastContainer');
        if (!container) {
            container = document.createElement('div');
            container.id = 'toastContainer';
            container.style.cssText = `
                position: fixed;
                bottom: 24px;
                right: 24px;
                z-index: 9999;
                display: flex;
                flex-direction: column;
                gap: 10px;
            `;
            document.body.appendChild(container);
        }

        const icons = { info: 'fa-circle-info', success: 'fa-circle-check', error: 'fa-circle-xmark' };
        const colors = { info: '#00e5ff', success: '#22d3ee', error: '#f87171' };

        const toast = document.createElement('div');
        toast.style.cssText = `
            display: flex;
            align-items: center;
            gap: 12px;
            background: #1a2236;
            border: 1px solid ${colors[type]}44;
            border-radius: 10px;
            padding: 14px 18px;
            font-size: 14px;
            color: #e2e8f0;
            box-shadow: 0 8px 24px rgba(0,0,0,0.4);
            max-width: 340px;
            animation: slideInToast .3s ease;
        `;
        toast.innerHTML = `<i class="fa-solid ${icons[type]}" style="color:${colors[type]}"></i> ${message}`;
        container.appendChild(toast);

        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transition = 'opacity .3s';
            setTimeout(() => toast.remove(), 300);
        }, 3500);
    };

    /* ════════════════════════════
       FILTRE RÉALISATIONS
    ════════════════════════════ */
    const filterBtns = document.querySelectorAll('[data-filter]');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            document.querySelectorAll('.realisation-item').forEach(item => {
                if (filter === 'all' || item.getAttribute('data-type') === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    /* ════════════════════════════
       ANIMATION ENTRÉE
    ════════════════════════════ */
    const fadeEls = document.querySelectorAll('.fade-in');
    fadeEls.forEach((el, i) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(16px)';
        el.style.transition = `opacity .4s ease ${i * 0.07}s, transform .4s ease ${i * 0.07}s`;
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, 50);
    });

});

/* ── Animation CSS pour toast ── */
const styleSheet = document.createElement('style');
styleSheet.textContent = `
@keyframes slideInToast {
    from { transform: translateX(100%); opacity: 0; }
    to   { transform: translateX(0);   opacity: 1; }
}
`;
document.head.appendChild(styleSheet);

/* ════════════════════════════
   TOGGLE THÈME DARK / LIGHT
════════════════════════════ */
const themeBtn   = document.getElementById('themeToggleBtn');
const themeIcon  = document.getElementById('themeIcon');
const themeLabel = document.getElementById('themeLabel');

// Restaurer le thème sauvegardé
if (localStorage.getItem('theme') === 'light') {
    document.body.classList.add('light-theme');
    themeIcon.className  = 'fa-solid fa-sun';
    themeLabel.textContent = 'Mode clair';
}

if (themeBtn) {
    themeBtn.addEventListener('click', () => {
        const isLight = document.body.classList.toggle('light-theme');

        if (isLight) {
            themeIcon.className    = 'fa-solid fa-sun';
            themeLabel.textContent = 'Mode clair';
            localStorage.setItem('theme', 'light');
        } else {
            themeIcon.className    = 'fa-solid fa-moon';
            themeLabel.textContent = 'Mode sombre';
            localStorage.setItem('theme', 'dark');
        }
    });
}
