<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences — Portfolio BTS SIO</title>

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
        <a href="competences.html" class="nav-link active">
            <i class="fa-solid fa-list-check"></i>
            <span>Compétences</span>
        </a>
        <a href="realisations.html" class="nav-link">
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
    <div class="page-eyebrow"><i class="fa-solid fa-list-check"></i> &nbsp;Référentiel BTS SIO</div>
    <h1 class="page-title">Compétences</h1>
    <p class="page-subtitle">Les 6 blocs de compétences du BTS SIO — option SLAM — couverts dans ce portfolio.</p>
    <div class="page-divider"></div>
</div>

<!-- B1 -->
<div class="competence-block fade-in open">
    <div class="competence-header">
        <span class="competence-num">B1</span>
        <i class="fa-solid fa-server" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Gérer le patrimoine informatique</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Recenser et identifier les ressources numériques</li>
                    <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                    <li>Mettre en place et vérifier les niveaux d'habilitation associés à un service</li>
                    <li>Vérifier les conditions de la continuité d'un service informatique</li>
                    <li>Gérer des sauvegardes</li>
                    <li>Vérifier le respect des règles d'utilisation des ressources</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="realisations.html#glpi" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> GLPI
                    </a>
                    <a href="realisations.html#ocs" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> OCS
                    </a>
                    <a href="realisations.html#acaba" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> ACABA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B2 -->
<div class="competence-block fade-in">
    <div class="competence-header">
        <span class="competence-num">B2</span>
        <i class="fa-solid fa-headset" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Répondre aux incidents et aux demandes d'assistance et d'évolution</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Collecter, suivre et orienter des demandes</li>
                    <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                    <li>Traiter des demandes concernant les applications</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="realisations.html#acaba" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> ACABA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B3 -->
<div class="competence-block fade-in">
    <div class="competence-header">
        <span class="competence-num">B3</span>
        <i class="fa-solid fa-globe" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Développer la présence en ligne de l'organisation</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Participer à la valorisation de l'image de l'organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                    <li>Référencer les services en ligne de l'organisation et mesurer leur visibilité</li>
                    <li>Participer à l'évolution d'un site Web exploitant les données de l'organisation</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="realisations.html#checkmystars" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> CheckMyStars
                    </a>
                    <a href="realisations.html#dramaltech" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> Dramaltech
                    </a>
                    <a href="realisations.html#acaba" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> ACABA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B4 -->
<div class="competence-block fade-in">
    <div class="competence-header">
        <span class="competence-num">B4</span>
        <i class="fa-solid fa-diagram-project" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Travailler en mode projet</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                    <li>Planifier les activités</li>
                    <li>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="realisations.html#checkmystars" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> CheckMyStars
                    </a>
                    <a href="realisations.html#acaba" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> ACABA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B5 -->
<div class="competence-block fade-in">
    <div class="competence-header">
        <span class="competence-num">B5</span>
        <i class="fa-solid fa-rocket" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Mettre à disposition des utilisateurs un service informatique</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                    <li>Déployer un service</li>
                    <li>Accompagner les utilisateurs dans la mise en place d'un service</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="realisations.html#checkmystars" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> CheckMyStars
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B6 -->
<div class="competence-block fade-in">
    <div class="competence-header">
        <span class="competence-num">B6</span>
        <i class="fa-solid fa-user-graduate" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title">Organiser son développement professionnel</span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <li>Mettre en place son environnement d'apprentissage personnel</li>
                    <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                    <li>Gérer son identité professionnelle</li>
                    <li>Développer son projet professionnel</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="accueil.html" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> Portfolio
                    </a>
                    <a href="realisations.html#veille" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> Veille
                    </a>
                </div>
            </div>
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
    <div class="page-eyebrow"><i class="fa-solid fa-list-check"></i> &nbsp;Référentiel BTS SIO</div>
    <h1 class="page-title">Compétences</h1>
    <p class="page-subtitle">Les 6 blocs de compétences du BTS SIO — option SLAM — couverts dans ce portfolio.</p>
    <div class="page-divider"></div>
</div>

<?php
$competences = [
    [
        'num'   => 'B1',
        'icon'  => 'fa-server',
        'titre' => 'Gérer le patrimoine informatique',
        'activites' => [
            'Recenser et identifier les ressources numériques',
            'Exploiter des référentiels, normes et standards adoptés par le prestataire informatique',
            'Mettre en place et vérifier les niveaux d\'habilitation associés à un service',
            'Vérifier les conditions de la continuité d\'un service informatique',
            'Gérer des sauvegardes',
            'Vérifier le respect des règles d\'utilisation des ressources',
        ],
        'realisations' => ['GLPI', 'OCS', 'ACABA'],
    ],
    [
        'num'   => 'B2',
        'icon'  => 'fa-headset',
        'titre' => 'Répondre aux incidents et aux demandes d\'assistance et d\'évolution',
        'activites' => [
            'Collecter, suivre et orienter des demandes',
            'Traiter des demandes concernant les services réseau et système, applicatifs',
            'Traiter des demandes concernant les applications',
        ],
        'realisations' => ['ACABA'],
    ],
    [
        'num'   => 'B3',
        'icon'  => 'fa-globe',
        'titre' => 'Développer la présence en ligne de l\'organisation',
        'activites' => [
            'Participer à la valorisation de l\'image de l\'organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques',
            'Référencer les services en ligne de l\'organisation et mesurer leur visibilité',
            'Participer à l\'évolution d\'un site Web exploitant les données de l\'organisation',
        ],
        'realisations' => ['CheckMyStars', 'Dramaltech', 'ACABA'],
    ],
    [
        'num'   => 'B4',
        'icon'  => 'fa-diagram-project',
        'titre' => 'Travailler en mode projet',
        'activites' => [
            'Analyser les objectifs et les modalités d\'organisation d\'un projet',
            'Planifier les activités',
            'Évaluer les indicateurs de suivi d\'un projet et analyser les écarts',
        ],
        'realisations' => ['CheckMyStars', 'ACABA'],
    ],
    [
        'num'   => 'B5',
        'icon'  => 'fa-rocket',
        'titre' => 'Mettre à disposition des utilisateurs un service informatique',
        'activites' => [
            'Réaliser les tests d\'intégration et d\'acceptation d\'un service',
            'Déployer un service',
            'Accompagner les utilisateurs dans la mise en place d\'un service',
        ],
        'realisations' => ['CheckMyStars'],
    ],
    [
        'num'   => 'B6',
        'icon'  => 'fa-user-graduate',
        'titre' => 'Organiser son développement professionnel',
        'activites' => [
            'Mettre en place son environnement d\'apprentissage personnel',
            'Mettre en œuvre des outils et stratégies de veille informationnelle',
            'Gérer son identité professionnelle',
            'Développer son projet professionnel',
        ],
        'realisations' => ['Portfolio', 'Veille'],
    ],
];

foreach ($competences as $i => $c) : ?>
<div class="competence-block fade-in <?= $i === 0 ? 'open' : '' ?>">
    <div class="competence-header">
        <span class="competence-num"><?= $c['num'] ?></span>
        <i class="fa-solid <?= $c['icon'] ?>" style="color:var(--accent);width:18px;text-align:center"></i>
        <span class="competence-title"><?= htmlspecialchars($c['titre']) ?></span>
        <i class="fa-solid fa-chevron-down competence-toggle"></i>
    </div>
    <div class="competence-body">
        <div class="row g-4 mt-0">
            <div class="col-lg-8">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Activités professionnelles
                </p>
                <ul class="activite-list">
                    <?php foreach ($c['activites'] as $a) : ?>
                    <li><?= htmlspecialchars($a) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-4">
                <p style="font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-family:var(--font-mono)">
                    Réalisations associées
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($c['realisations'] as $r) : ?>
                    <a href="?page=realisations#<?= strtolower($r) ?>" class="comp-tag text-decoration-none" style="color:var(--accent);border-color:rgba(0,229,255,.3)">
                        <i class="fa-solid fa-arrow-right" style="font-size:10px"></i> <?= htmlspecialchars($r) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php if (empty($c['realisations'])) : ?>
                    <span class="comp-tag" style="font-style:italic">À compléter</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
