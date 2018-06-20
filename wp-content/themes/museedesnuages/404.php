<?php
get_header();
?>
<div class="error__page">
    <div class="headerPage">
        <h1 class="headerTitle">Page non trouvée</h1>
        <p class="headerSubtitle">Désolée, la page demandée n'existe pas dans le musée des nuages...</p>
        <a href="<?= home_url() ?>" class="button">
            <span>Retour à l'accueil</span>
            <img src="<?= THEME_URL ?>/assets/img/arrow_right.svg" alt="Flèche" />
        </a>
    </div>
</div>
