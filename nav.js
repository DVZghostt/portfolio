function renderNav(activePage) {
  const pages = [
    { href: 'index.html', label: 'Accueil' },
    { href: 'competences.html', label: 'Compétences' },
    { href: 'projets.html', label: 'Projets' },
    { href: 'certifications.html', label: 'Certifications' },
    { href: 'veille.html', label: 'Veille techno' },
  ];
  const links = pages.map(p =>
    `<a href="${p.href}" class="${p.href === activePage ? 'active' : ''}">${p.label}</a>`
  ).join('');
  document.getElementById('nav-placeholder').innerHTML = `
    <nav>
      <a class="nav-logo" href="index.html">KL · Portfolio</a>
      <div class="nav-links">${links}</div>
      <span class="nav-badge">BTS SIO SLAM 2026</span>
    </nav>`;
}

function renderFooter() {
  document.getElementById('footer-placeholder').innerHTML = `
    <footer>
      <p><strong>Kylian Lebigot</strong> — BTS SIO SLAM — Lycée Saint-Paul Bourdon Blanc — Session 2026</p>
      <p style="margin-top:8px">N° candidat : 2303833063 · <a href="https://dvzghostt.github.io/portfolio/accueil.html" target="_blank">dvzghostt.github.io/portfolio</a></p>
    </footer>`;
}

function toggleCollapse(id) {
  const body = document.getElementById('body-' + id);
  const header = document.getElementById('head-' + id);
  body.classList.toggle('open');
  header.classList.toggle('open');
}
