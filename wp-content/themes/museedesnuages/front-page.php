<?php get_header();  ?>

    <div id="front-page">
        <div class="hero" data-type="parallax" data-depth="0.00">
            <div class="catchingText" data-type="parallax" data-depth="0.5">
                <div class="websiteTitle"><span class="second">musée</span><span class="main">des nuages</span></div>
                <p class="resume">Un musée de notre siècle<br />où l'art inspire notre sensibilité environnementale</p>
            </div>

            <div class="parallax">
                <div class="cloud_4 layer" data-type="parallax" data-depth="0.4"></div>
                <div class="cloud_3 layer" data-type="parallax" data-depth="0.35"></div>
                <div class="cloud_2 layer" data-type="parallax" data-depth="0.3"></div>
                <div class="cloud_1 layer" data-type="parallax" data-depth="0.01"></div>
            </div>
        </div>

        <div class="path">
            <img src="<?= THEME_URL ?>/assets/img/path.svg" alt="Tracé" class="pathImg">
            <div class="gradient" id="gradient"></div>

            <div id="triggerGradient"></div>
        </div>
    </div>

<?php get_footer(); ?>
