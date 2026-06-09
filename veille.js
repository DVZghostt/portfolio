/**
 * veille.js — Veille technologique · Kylian Lebigot Portfolio
 *
 * ┌─────────────────────────────────────────────────────────────────┐
 * │  CONFIGURATION REQUISE — À LIRE AVANT DE DÉPLOYER              │
 * │                                                                 │
 * │  Cette page utilise l'API GNews.io pour récupérer les articles. │
 * │  → Inscription gratuite sur https://gnews.io (30 secondes)     │
 * │  → Copiez votre clé API dans la variable GNEWS_API_KEY ci-bas  │
 * │  → Quota gratuit : 100 requêtes/jour · 10 articles/requête     │
 * │                                                                 │
 * │  Sans clé : la page tente Google News RSS via proxy CORS       │
 * └─────────────────────────────────────────────────────────────────┘
 */

/* ══════════════════════════════════════════════════════════
   ① CONFIGURATION — MODIFIEZ ICI
   ══════════════════════════════════════════════════════════ */
const CONFIG = {
  // Collez ici votre clé GNews.io (https://gnews.io — inscription gratuite)
  GNEWS_API_KEY: 'VOTRE_CLE_GNEWS_ICI',

  // Nombre max d'articles par requête (max 10 avec la clé gratuite)
  MAX_ARTICLES: 10,

  // Langue et pays ciblés pour les résultats
  LANG:    'fr',
  COUNTRY: 'fr',

  // Proxies CORS essayés en ordre pour le fallback Google News RSS
  CORS_PROXIES: [
    'https://api.allorigins.win/raw?url=',
    'https://corsproxy.io/?',
    'https://cors-anywhere.herokuapp.com/',
  ],
};

/* ══════════════════════════════════════════════════════════
   ② REQUÊTES PAR CATÉGORIE
   ══════════════════════════════════════════════════════════ */

// Termes de recherche envoyés à GNews.io pour chaque catégorie
const QUERIES = {
  ia: [
    'intelligence artificielle LLM modèle langage',
    'ChatGPT Gemini Claude IA générative 2025',
    'machine learning deep learning IA',
  ],
};

// Flux Google News RSS utilisés en fallback (aucune clé requise)
const GOOGLE_NEWS_RSS = {
  ia: 'https://news.google.com/rss/search?q=intelligence+artificielle+IA+2025&hl=fr-FR&gl=FR&ceid=FR:fr',
};

/* ══════════════════════════════════════════════════════════
   ÉTAT GLOBAL
   ══════════════════════════════════════════════════════════ */
let allArticles = { ia: [] };
let currentTab  = 'ia';
let searchQuery = '';
let showAll = false;
const MAX_VISIBLE_ARTICLES = 10;

/* ══════════════════════════════════════════════════════════
   UTILITAIRES
   ══════════════════════════════════════════════════════════ */

/** Formate une date ISO en français. */
function formatDate(dateStr) {
  if (!dateStr) return '';
  const d = new Date(dateStr);
  if (isNaN(d)) return dateStr;
  return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'long', year: 'numeric' });
}

/** Échappe les caractères HTML dangereux. */
function escHtml(str) {
  return String(str ?? '')
    .replace(/&/g, '&amp;').replace(/</g, '&lt;')
    .replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
}

/** Extrait le texte brut d'un fragment HTML. */
function stripHtml(html) {
  const tmp = document.createElement('div');
  tmp.innerHTML = html ?? '';
  return tmp.textContent || tmp.innerText || '';
}

/** Tronque un texte à maxLen caractères. */
function truncate(str, maxLen = 220) {
  const clean = stripHtml(str).trim();
  return clean.length <= maxLen ? clean : clean.slice(0, maxLen).replace(/\s+\S*$/, '') + '…';
}

/** Vérifie qu'un article est daté de 2025 ou plus récent. */
function isRecent(dateStr) {
  if (!dateStr) return false;
  return new Date(dateStr).getFullYear() >= 2025;
}

/** Dédoublonne un tableau d'articles par titre. */
function deduplicate(articles) {
  const seen = new Set();
  return articles.filter(art => {
    const key = (art.title || '').toLowerCase().slice(0, 60);
    if (seen.has(key)) return false;
    seen.add(key);
    return true;
  });
}

/* ══════════════════════════════════════════════════════════
   SOURCE 1 — API GNEWS.IO
   CORS natif autorisé · JSON direct · clé gratuite requise
   ══════════════════════════════════════════════════════════ */

/**
 * Récupère des articles depuis l'API GNews.io pour un mot-clé donné.
 * Retourne [] si la clé est absente/invalide ou si la requête échoue.
 */
async function fetchGNews(query, category) {
  if (!CONFIG.GNEWS_API_KEY || CONFIG.GNEWS_API_KEY === 'VOTRE_CLE_GNEWS_ICI') return [];

  const url = new URL('https://gnews.io/api/v4/search');
  url.searchParams.set('q',       query);
  url.searchParams.set('lang',    CONFIG.LANG);
  url.searchParams.set('country', CONFIG.COUNTRY);
  url.searchParams.set('max',     CONFIG.MAX_ARTICLES);
  url.searchParams.set('from',    '2025-01-01T00:00:00Z');
  url.searchParams.set('sortby',  'publishedAt');
  url.searchParams.set('token',   CONFIG.GNEWS_API_KEY);

  try {
    const resp = await fetch(url.toString(), { signal: AbortSignal.timeout(10000) });
    if (!resp.ok) {
      console.warn(`[GNews] HTTP ${resp.status} pour "${query}"`);
      return [];
    }
    const data = await resp.json();
    if (!Array.isArray(data.articles)) return [];

    return data.articles
      .filter(a => isRecent(a.publishedAt))
      .map(a => ({
        title:   a.title          || 'Sans titre',
        link:    a.url            || '#',
        date:    a.publishedAt    || '',
        source:  a.source?.name   || 'Source inconnue',
        category,
        image:   a.image          || null,
        summary: truncate(a.description || a.content || '', 220),
      }));
  } catch (err) {
    console.warn(`[GNews] Erreur pour "${query}" :`, err.message);
    return [];
  }
}

/** Lance toutes les requêtes GNews d'une catégorie en parallèle. */
async function loadFromGNews(category) {
  const results = await Promise.all(
    QUERIES[category].map(q => fetchGNews(q, category))
  );
  return deduplicate(
    results.flat().sort((a, b) => new Date(b.date) - new Date(a.date))
  );
}

/* ══════════════════════════════════════════════════════════
   SOURCE 2 — GOOGLE NEWS RSS (fallback via proxy CORS)
   Aucune clé requise · moins fiable selon l'hébergeur
   ══════════════════════════════════════════════════════════ */

/**
 * Parse un document XML RSS et retourne des articles normalisés.
 */
function parseRSSXML(xmlText, category, sourceName) {
  try {
    const parser = new DOMParser();
    const doc    = parser.parseFromString(xmlText, 'application/xml');

    if (doc.querySelector('parsererror')) {
      console.warn('[RSS] Erreur de parsing XML');
      return [];
    }

    return Array.from(doc.querySelectorAll('item'))
      .map(item => {
        const title   = item.querySelector('title')?.textContent?.trim()   || '';
        const link    = item.querySelector('link')?.textContent?.trim()
                     || item.querySelector('guid')?.textContent?.trim()    || '#';
        const pubDate = item.querySelector('pubDate')?.textContent?.trim() || '';
        const desc    = item.querySelector('description')?.textContent     || '';
        const srcEl   = item.querySelector('source');

        // Extraction d'image depuis enclosure ou balise media:content
        const enclosure    = item.querySelector('enclosure');
        const mediaContent = item.querySelector('content');
        let image = null;
        if (enclosure?.getAttribute('type')?.startsWith('image/')) {
          image = enclosure.getAttribute('url');
        } else if (mediaContent?.getAttribute('url')) {
          image = mediaContent.getAttribute('url');
        } else {
          const m = desc.match(/<img[^>]+src=["']([^"']+)["']/i);
          if (m) image = m[1];
        }

        return {
          title,
          link,
          date:    pubDate ? new Date(pubDate).toISOString() : '',
          source:  srcEl?.textContent?.trim() || sourceName,
          category,
          image:   image && /^https?:\/\//.test(image) ? image : null,
          summary: truncate(desc, 220),
        };
      })
      .filter(a => isRecent(a.date));
  } catch (err) {
    console.warn('[RSS] Parsing échoué :', err.message);
    return [];
  }
}

/**
 * Tente de récupérer un flux RSS via plusieurs proxies CORS successifs.
 * S'arrête au premier succès.
 */
async function fetchRSSWithProxy(rssUrl, category) {
  for (const proxy of CONFIG.CORS_PROXIES) {
    const proxyUrl = proxy + encodeURIComponent(rssUrl);
    try {
      const resp = await fetch(proxyUrl, {
        signal:  AbortSignal.timeout(10000),
        headers: { 'Accept': 'application/rss+xml, application/xml, text/xml, */*' },
      });

      if (!resp.ok) {
        console.warn(`[RSS] Proxy "${proxy}" → HTTP ${resp.status}`);
        continue;
      }

      const text = await resp.text();
      if (!text.includes('<item') && !text.includes('<entry')) {
        console.warn(`[RSS] Proxy "${proxy}" → réponse non RSS`);
        continue;
      }

      const articles = parseRSSXML(text, category, 'Google News');
      if (articles.length > 0) {
        console.info(`[RSS] ✅ Succès via proxy "${proxy}" (${articles.length} articles)`);
        return articles;
      }
    } catch (err) {
      console.warn(`[RSS] Proxy "${proxy}" → ${err.message}`);
      // continue avec le proxy suivant
    }
  }

  console.warn(`[RSS] Tous les proxies ont échoué pour "${category}"`);
  return [];
}

/* ══════════════════════════════════════════════════════════
   CHARGEMENT PRINCIPAL
   ══════════════════════════════════════════════════════════ */

/**
 * Charge les articles d'une catégorie :
 *   1. GNews.io si la clé est configurée
 *   2. Fallback Google News RSS via proxy CORS
 */
async function loadCategory(category) {
  // ① Tentative GNews.io
  let articles = await loadFromGNews(category);

  // ② Fallback RSS si GNews est vide (clé absente ou erreur)
  if (articles.length === 0) {
    console.info(`[Veille] GNews vide pour "${category}", tentative RSS…`);
    articles = await fetchRSSWithProxy(GOOGLE_NEWS_RSS[category], category);
  }

  return deduplicate(articles).sort((a, b) => new Date(b.date) - new Date(a.date));
}

/* ══════════════════════════════════════════════════════════
   RENDU
   ══════════════════════════════════════════════════════════ */

/** Construit le HTML d'une carte article. */
function buildCard(art) {
  const catLabel = 'Intelligence Artificielle';
  const catClass = 'news-cat-blue';

  const imgHtml = art.image
    ? `<div class="news-img-wrap">
         <img src="${escHtml(art.image)}" alt="" class="news-img" loading="lazy"
              onerror="this.parentElement.remove()">
       </div>`
    : '';

  return `
    <div class="news-card">
      ${imgHtml}
      <div class="news-meta">
        <span class="news-source">${escHtml(art.source)}</span>
        <span class="veille-date">${formatDate(art.date)}</span>
      </div>
      <a class="news-title" href="${escHtml(art.link)}" target="_blank" rel="noopener noreferrer">
        ${escHtml(art.title)}
      </a>
      ${art.summary ? `<p class="news-desc">${escHtml(art.summary)}</p>` : ''}
      <div class="news-footer">
        <span class="news-cat ${catClass}">${catLabel}</span>
        <a class="news-link" href="${escHtml(art.link)}" target="_blank" rel="noopener noreferrer">
          Lire l'article →
        </a>
      </div>
    </div>`;
}

/** Filtre et affiche les articles de l'onglet actif. */
function renderArticles() {
  const grid    = document.getElementById('news-grid');
  const countEl = document.getElementById('articles-count');
  const emptyEl = document.getElementById('empty-state');
  const q       = searchQuery.toLowerCase().trim();
  const activeArticles = allArticles[currentTab] || allArticles.ia;

  const filtered = activeArticles.filter(art =>
    !q
    || art.title.toLowerCase().includes(q)
    || art.summary.toLowerCase().includes(q)
    || art.source.toLowerCase().includes(q)
  );

  if (countEl) countEl.textContent = filtered.length;

  if (filtered.length === 0) {
    grid.innerHTML = '';
    emptyEl.classList.remove('hidden');
    updateShowMoreButton(0);
    return;
  }

  emptyEl.classList.add('hidden');
  const visibleArticles = showAll ? filtered : filtered.slice(0, MAX_VISIBLE_ARTICLES);
  grid.innerHTML = visibleArticles.map(buildCard).join('');
  updateShowMoreButton(filtered.length);
}

function updateShowMoreButton(filteredCount) {
  const moreActions = document.getElementById('more-actions');
  const showMoreBtn = document.getElementById('btn-show-more');
  if (!moreActions || !showMoreBtn) return;

  if (filteredCount > MAX_VISIBLE_ARTICLES) {
    moreActions.classList.remove('hidden');
    showMoreBtn.textContent = showAll ? 'Réduire la liste' : 'Afficher les autres articles';
  } else {
    moreActions.classList.add('hidden');
  }
}

/* ══════════════════════════════════════════════════════════
   INITIALISATION
   ══════════════════════════════════════════════════════════ */

async function initVeille() {
  const loadingEl  = document.getElementById('loading-area');
  const contentEl  = document.getElementById('veille-content');
  const errorEl    = document.getElementById('global-error');
  const refreshBtn = document.getElementById('btn-refresh');
  const loadingMsg = document.getElementById('loading-msg');

  // Reset UI
  loadingEl?.classList.remove('hidden');
  contentEl?.classList.add('hidden');
  errorEl?.classList.add('hidden');
  if (refreshBtn) refreshBtn.disabled = true;

  // Alerte si clé non configurée
  const keyMissing = !CONFIG.GNEWS_API_KEY || CONFIG.GNEWS_API_KEY === 'VOTRE_CLE_GNEWS_ICI';
  const alertEl = document.getElementById('api-key-alert');
  if (keyMissing) {
    alertEl?.classList.remove('hidden');
    if (loadingMsg) loadingMsg.textContent = 'Chargement via Google News RSS…';
  } else {
    alertEl?.classList.add('hidden');
    if (loadingMsg) loadingMsg.textContent = 'Chargement des articles via GNews.io…';
  }

  try {
    const iaArticles = await loadCategory('ia');

    allArticles.ia = iaArticles;

    if (iaArticles.length === 0) {
      throw new Error('Aucun article disponible depuis les sources configurées.');
    }

    // Mise à jour des badges
    document.getElementById('badge-ia').textContent = allArticles.ia.length;

    // Horodatage
    const lastUpdateEl = document.getElementById('last-update');
    if (lastUpdateEl) {
      lastUpdateEl.textContent = new Date().toLocaleTimeString('fr-FR', {
        hour: '2-digit', minute: '2-digit',
      });
    }

    loadingEl?.classList.add('hidden');
    contentEl?.classList.remove('hidden');
    renderArticles();

  } catch (err) {
    console.error('[Veille] Erreur globale :', err);
    loadingEl?.classList.add('hidden');
    errorEl?.classList.remove('hidden');
  } finally {
    if (refreshBtn) refreshBtn.disabled = false;
  }
}

/* ══════════════════════════════════════════════════════════
   ÉVÉNEMENTS
   ══════════════════════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {

  // Onglets
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      currentTab = 'ia';
      showAll = false;
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const titleEl = document.getElementById('section-title');
      if (titleEl) titleEl.textContent = '🤖 Intelligence Artificielle';

      const searchEl = document.getElementById('search-input');
      if (searchEl) searchEl.placeholder = 'Rechercher dans les articles IA…';

      renderArticles();
    });
  });

  // Recherche
  const searchInput = document.getElementById('search-input');
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      searchQuery = searchInput.value;
      renderArticles();
    });
    searchInput.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        searchInput.value = '';
        searchQuery = '';
        renderArticles();
      }
    });
  }

  // Bouton Afficher plus / réduire
  const showMoreBtn = document.getElementById('btn-show-more');
  if (showMoreBtn) {
    showMoreBtn.addEventListener('click', () => {
      showAll = !showAll;
      renderArticles();
    });
  }

  // Bouton Actualiser
  const refreshBtn = document.getElementById('btn-refresh');
  if (refreshBtn) {
    refreshBtn.addEventListener('click', () => {
      searchQuery = '';
      if (searchInput) searchInput.value = '';
      showAll = false;
      initVeille();
    });
  }

  // Lancement
  initVeille();
});