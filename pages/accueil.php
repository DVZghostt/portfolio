<?php /* pages/accueil.php */ ?>

<div class="page-header fade-in">
    <div class="hero-section">
        <div class="hero-tag">
            <i class="fa-solid fa-terminal"></i>
            BTS SIO · SESSION <?= ANNEE ?>
        </div>
        <h1 class="page-title"> <?= PRENOM ?> <?= NOM ?> </h1>
        <p class="hero-role">Étudiant BTS Services Informatiques aux Organisations — Option SLAM<br>
            Développeur d'applications · 2<sup>ème</sup> année</p>
        <div class="hero-meta">
            <div class="hero-meta-item">
                <i class="fa-solid fa-building-columns"></i>
                <span><?= CENTRE_FORMATION ?></span>
            </div>
            <div class="hero-meta-item">
                <i class="fa-solid fa-code-branch"></i>
                <span>Option SLAM</span>
            </div>
            <div class="hero-meta-item">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Session <?= ANNEE ?></span>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-3 fade-in">
        <a href="?page=competences" class="card-dark d-block text-decoration-none">
            <div class="card-icon"><i class="fa-solid fa-list-check"></i></div>
            <h5>6 Compétences</h5>
            <p>Toutes les compétences du référentiel BTS SIO couvertes dans ce portfolio.</p>
        </a>
    </div>
    <div class="col-md-6 col-lg-3 fade-in">
        <a href="?page=realisations" class="card-dark d-block text-decoration-none">
            <div class="card-icon"><i class="fa-solid fa-diagram-project"></i></div>
            <h5>Réalisations</h5>
            <p>Projets réalisés en formation et en milieu professionnel.</p>
        </a>
    </div>
    <div class="col-md-6 col-lg-3 fade-in">
        <a href="?page=docs" class="card-dark d-block text-decoration-none">
            <div class="card-icon"><i class="fa-solid fa-folder-open"></i></div>
            <h5>Documents</h5>
            <p>Tous les livrables, rapports et preuves de compétences.</p>
        </a>
    </div>
    <div class="col-md-6 col-lg-3 fade-in">
        <a href="?page=bilan" class="card-dark d-block text-decoration-none">
            <div class="card-icon"><i class="fa-solid fa-chart-line"></i></div>
            <h5>Bilan</h5>
            <p>Synthèse des compétences et développement professionnel.</p>
        </a>
    </div>
</div>

