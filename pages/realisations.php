<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations — Portfolio BTS SIO</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- Sidebar Navigation -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="brand-icon">
            <i class="fa-solid fa-terminal"></i>
        </div>
        <div class="brand-text">
            <span class="brand-name">Kylian LEBIGOT</span>
            <span class="brand-sub">BTS SIO SLAM · 2026</span>
        </div>
        <button class="theme-toggle-btn" id="themeToggleBtn" title="Changer le thème">
            <i class="fa-solid fa-moon" id="themeIcon"></i>
            <span id="themeLabel">Mode sombre</span>
        </button>
    </div>

    <nav class="sidebar-nav">
        <a href="accueil.html" class="nav-link">
            <i class="fa-solid fa-house"></i>
            <span>Accueil</span>
        </a>
        <a href="competences.html" class="nav-link">
            <i class="fa-solid fa-list-check"></i>
            <span>Compétences</span>
        </a>
        <a href="realisations.html" class="nav-link active">
            <i class="fa-solid fa-diagram-project"></i>
            <span>Réalisations</span>
        </a>
        <a href="docs.html" class="nav-link">
            <i class="fa-solid fa-folder-open"></i>
            <span>Documents</span>
        </a>
        <a href="bilan.html" class="nav-link">
            <i class="fa-solid fa-chart-line"></i>
            <span>Bilan</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <span class="badge-option">Option SLAM</span>
    </div>
</div>

<!-- Mobile Top Bar -->
<div class="mobile-topbar">
    <button class="burger-btn" id="burgerBtn">
        <i class="fa-solid fa-bars"></i>
    </button>
    <span class="mobile-title">Portfolio BTS SIO</span>
    <span class="badge-option-sm">SLAM</span>
</div>

<!-- Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Main Content -->
<div class="main-content" id="mainContent">

<div class="page-header fade-in">
    <div class="page-eyebrow"><i class="fa-solid fa-diagram-project"></i> &nbsp;Épreuve E5</div>
    <h1 class="page-title">Réalisations professionnelles</h1>
    <p class="page-subtitle">Projets réalisés en formation et en milieu professionnel — Session 2026</p>
    <div class="page-divider"></div>
</div>

<!-- Filtres -->
<div class="d-flex gap-2 mb-4 fade-in flex-wrap">
    <button class="btn active" data-filter="all"
        style="background:rgba(0,229,255,.1);border:1px solid var(--border);color:var(--accent);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-border-all"></i> Toutes
    </button>
    <button class="btn" data-filter="formation"
        style="background:transparent;border:1px solid var(--border);color:var(--text-muted);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-school"></i> Formation
    </button>
    <button class="btn" data-filter="stage"
        style="background:transparent;border:1px solid var(--border);color:var(--text-muted);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-building"></i> Stage / Alternance
    </button>
</div>

<div class="row g-4">

<!-- Portfolio -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="portfolio">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">Portfolio BTS SIO</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B6 — Développement professionnel</span>
        </div>

        <p class="realisation-desc">Création d'un portfolio en ligne permettant de recenser et présenter les réalisations professionnelles dans le cadre de l'épreuve E5 du BTS SIO.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">PHP</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">Bootstrap</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">Font Awesome</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- GLPI -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="glpi">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">GLPI</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B1 — Patrimoine informatique</span>
        </div>

        <p class="realisation-desc">Mise en place et administration d'un système de gestion de parc informatique et de helpdesk avec GLPI. Gestion des tickets, inventaire des ressources.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">GLPI</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">PHP</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">MySQL</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- CheckMyStars -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="checkmystars">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">CheckMyStars</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B3 — Présence en ligne</span>
            <span class="comp-tag">B4 — Mode projet</span>
            <span class="comp-tag">B5 — Mise à disposition</span>
        </div>

        <p class="realisation-desc">Application web développée dans le cadre d'un projet de formation. Implique le développement, la gestion de projet et le déploiement d'un service.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">À compléter</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- Veille -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="veille">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">Veille informationnelle</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            Tout au long de l'année
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B6 — Développement professionnel</span>
        </div>

        <p class="realisation-desc">Mise en place d'une stratégie de veille technologique et informationnelle. Utilisation d'outils de curation et suivi des actualités du domaine IT.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">Feedly</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">Netvibes</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">À compléter</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- OCS -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="ocs">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">OCS Inventory</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B1 — Patrimoine informatique</span>
        </div>

        <p class="realisation-desc">Déploiement et configuration d'OCS Inventory pour l'inventaire automatisé du parc informatique. Intégration avec GLPI.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">OCS Inventory</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">Apache</span>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">MySQL</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- Dramaltech -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="dramaltech">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">Dramaltech</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B3 — Présence en ligne</span>
        </div>

        <p class="realisation-desc">Projet de développement web impliquant la présence en ligne d'une organisation. Participation à l'évolution et au référencement du site.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">À compléter</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

<!-- ACABA -->
<div class="col-lg-6 realisation-item fade-in" data-type="formation" id="acaba">
    <div class="realisation-card">
        <span class="realisation-badge badge-formation">
            <i class="fa-solid fa-school"></i>
            Formation
        </span>

        <h4 class="realisation-title">ACABA</h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            À compléter
        </div>

        <div class="realisation-competences">
            <span class="comp-tag">B1 — Patrimoine informatique</span>
            <span class="comp-tag">B2 — Incidents & assistance</span>
            <span class="comp-tag">B3 — Présence en ligne</span>
            <span class="comp-tag">B4 — Mode projet</span>
        </div>

        <p class="realisation-desc">Projet complet couvrant plusieurs blocs de compétences : gestion du patrimoine informatique, réponse aux incidents, développement de la présence en ligne et travail en mode projet.</p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">À compléter</span>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>
            <p class="no-doc">
                <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                Aucun document — déposez vos fichiers dans <code>docs/</code>
            </p>
        </div>
    </div>
</div>

</div>

<!-- Réalisations de 2e année (stage/alternance) -->
<div class="mt-5 fade-in">
    <div class="d-flex align-items-center gap-3 mb-4">
        <div style="height:1px;flex:1;background:var(--border)"></div>
        <span style="font-family:var(--font-mono);font-size:12px;color:var(--text-muted);white-space:nowrap">
            RÉALISATIONS EN MILIEU PROFESSIONNEL — 2<sup>ÈME</sup> ANNÉE
        </span>
        <div style="height:1px;flex:1;background:var(--border)"></div>
    </div>

    <div class="card-dark" style="border-style:dashed">
        <div class="text-center py-3">
            <i class="fa-solid fa-building fa-2x mb-3" style="color:var(--text-muted)"></i>
            <h5 style="color:var(--text-muted)">Réalisations en entreprise à compléter</h5>
            <p style="color:var(--text-muted);font-size:14px;margin:0">
                Ajoutez vos réalisations de stage / alternance dans ce fichier en ajoutant <code>type="stage"</code>.
            </p>
        </div>
    </div>
</div>

</div><!-- /.main-content -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>
</html>

<div class="page-header fade-in">
    <div class="page-eyebrow"><i class="fa-solid fa-diagram-project"></i> &nbsp;Épreuve E5</div>
    <h1 class="page-title">Réalisations professionnelles</h1>
    <p class="page-subtitle">Projets réalisés en formation et en milieu professionnel — Session <?= ANNEE ?></p>
    <div class="page-divider"></div>
</div>

<!-- Filtres -->
<div class="d-flex gap-2 mb-4 fade-in flex-wrap">
    <button class="btn active" data-filter="all"
        style="background:rgba(0,229,255,.1);border:1px solid var(--border);color:var(--accent);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-border-all"></i> Toutes
    </button>
    <button class="btn" data-filter="formation"
        style="background:transparent;border:1px solid var(--border);color:var(--text-muted);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-school"></i> Formation
    </button>
    <button class="btn" data-filter="stage"
        style="background:transparent;border:1px solid var(--border);color:var(--text-muted);font-size:13px;border-radius:20px;padding:6px 16px">
        <i class="fa-solid fa-building"></i> Stage / Alternance
    </button>
</div>

<div class="row g-4">

<?php
$realisations = [
    [
        'id'          => 'portfolio',
        'nom'         => 'Portfolio BTS SIO',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Création d\'un portfolio en ligne permettant de recenser et présenter les réalisations professionnelles dans le cadre de l\'épreuve E5 du BTS SIO.',
        'competences' => ['B6 — Développement professionnel'],
        'technologies'=> ['PHP', 'Bootstrap', 'Font Awesome'],
        'docs'        => [], // Ajouter vos docs ici : ['nom' => 'Rapport', 'fichier' => 'rapport.pdf']
    ],
    [
        'id'          => 'glpi',
        'nom'         => 'GLPI',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Mise en place et administration d\'un système de gestion de parc informatique et de helpdesk avec GLPI. Gestion des tickets, inventaire des ressources.',
        'competences' => ['B1 — Patrimoine informatique'],
        'technologies'=> ['GLPI', 'PHP', 'MySQL'],
        'docs'        => [],
    ],
    [
        'id'          => 'checkmystars',
        'nom'         => 'CheckMyStars',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Application web développée dans le cadre d\'un projet de formation. Implique le développement, la gestion de projet et le déploiement d\'un service.',
        'competences' => ['B3 — Présence en ligne', 'B4 — Mode projet', 'B5 — Mise à disposition'],
        'technologies'=> ['À compléter'],
        'docs'        => [],
    ],
    [
        'id'          => 'veille',
        'nom'         => 'Veille informationnelle',
        'type'        => 'formation',
        'periode'     => 'Tout au long de l\'année',
        'description' => 'Mise en place d\'une stratégie de veille technologique et informationnelle. Utilisation d\'outils de curation et suivi des actualités du domaine IT.',
        'competences' => ['B6 — Développement professionnel'],
        'technologies'=> ['Feedly', 'Netvibes', 'À compléter'],
        'docs'        => [],
    ],
    [
        'id'          => 'ocs',
        'nom'         => 'OCS Inventory',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Déploiement et configuration d\'OCS Inventory pour l\'inventaire automatisé du parc informatique. Intégration avec GLPI.',
        'competences' => ['B1 — Patrimoine informatique'],
        'technologies'=> ['OCS Inventory', 'Apache', 'MySQL'],
        'docs'        => [],
    ],
    [
        'id'          => 'dramaltech',
        'nom'         => 'Dramaltech',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Projet de développement web impliquant la présence en ligne d\'une organisation. Participation à l\'évolution et au référencement du site.',
        'competences' => ['B3 — Présence en ligne'],
        'technologies'=> ['À compléter'],
        'docs'        => [],
    ],
    [
        'id'          => 'acaba',
        'nom'         => 'ACABA',
        'type'        => 'formation',
        'periode'     => 'À compléter',
        'description' => 'Projet complet couvrant plusieurs blocs de compétences : gestion du patrimoine informatique, réponse aux incidents, développement de la présence en ligne et travail en mode projet.',
        'competences' => ['B1 — Patrimoine informatique', 'B2 — Incidents & assistance', 'B3 — Présence en ligne', 'B4 — Mode projet'],
        'technologies'=> ['À compléter'],
        'docs'        => [],
    ],
];

foreach ($realisations as $r) : ?>
<div class="col-lg-6 realisation-item fade-in" data-type="<?= $r['type'] ?>" id="<?= $r['id'] ?>">
    <div class="realisation-card">
        <span class="realisation-badge <?= $r['type'] === 'stage' ? 'badge-stage' : 'badge-formation' ?>">
            <i class="fa-solid <?= $r['type'] === 'stage' ? 'fa-building' : 'fa-school' ?>"></i>
            <?= $r['type'] === 'stage' ? 'Stage' : 'Formation' ?>
        </span>

        <h4 class="realisation-title"><?= htmlspecialchars($r['nom']) ?></h4>

        <div class="realisation-period">
            <i class="fa-regular fa-calendar"></i>
            <?= htmlspecialchars($r['periode']) ?>
        </div>

        <div class="realisation-competences">
            <?php foreach ($r['competences'] as $comp) : ?>
            <span class="comp-tag"><?= htmlspecialchars($comp) ?></span>
            <?php endforeach; ?>
        </div>

        <p class="realisation-desc"><?= htmlspecialchars($r['description']) ?></p>

        <!-- Technologies -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <?php foreach ($r['technologies'] as $tech) : ?>
            <span style="font-size:11px;padding:3px 9px;background:rgba(0,229,255,.06);border:1px solid rgba(0,229,255,.2);border-radius:6px;color:var(--accent);font-family:var(--font-mono)">
                <?= htmlspecialchars($tech) ?>
            </span>
            <?php endforeach; ?>
        </div>

        <!-- Documents -->
        <div class="realisation-docs">
            <p style="font-size:11px;color:var(--text-muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:1px;font-family:var(--font-mono)">
                <i class="fa-solid fa-paperclip" style="color:var(--accent)"></i> Documents associés
            </p>

            <?php if (!empty($r['docs'])) : ?>
                <?php foreach ($r['docs'] as $doc) : ?>
                <a href="docs/<?= htmlspecialchars($doc['fichier']) ?>" target="_blank" class="doc-link">
                    <i class="fa-solid fa-file-pdf"></i>
                    <span><?= htmlspecialchars($doc['nom']) ?></span>
                    <i class="fa-solid fa-arrow-up-right-from-square ms-auto" style="font-size:10px;color:var(--text-muted)"></i>
                </a>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="no-doc">
                    <i class="fa-regular fa-folder-open" style="color:var(--text-muted)"></i>
                    Aucun document — déposez vos fichiers dans <code>docs/</code>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endforeach; ?>

</div>

<!-- Réalisations de 2e année (stage/alternance) -->
<div class="mt-5 fade-in">
    <div class="d-flex align-items-center gap-3 mb-4">
        <div style="height:1px;flex:1;background:var(--border)"></div>
        <span style="font-family:var(--font-mono);font-size:12px;color:var(--text-muted);white-space:nowrap">
            RÉALISATIONS EN MILIEU PROFESSIONNEL — 2<sup>ÈME</sup> ANNÉE
        </span>
        <div style="height:1px;flex:1;background:var(--border)"></div>
    </div>

    <div class="card-dark" style="border-style:dashed">
        <div class="text-center py-3">
            <i class="fa-solid fa-building fa-2x mb-3" style="color:var(--text-muted)"></i>
            <h5 style="color:var(--text-muted)">Réalisations en entreprise à compléter</h5>
            <p style="color:var(--text-muted);font-size:14px;margin:0">
                Ajoutez vos réalisations de stage / alternance directement dans <code>pages/realisations.php</code>
                en changeant <code>'type' => 'stage'</code>.
            </p>
        </div>
    </div>
</div>
