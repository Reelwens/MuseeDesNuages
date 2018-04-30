<?php get_header();  ?>

    <div id="front-page">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.png" alt="Logo" class="logoMDN" data-type="parallax" data-depth="0.5" /></a>
        <div class="hero" data-type="parallax" data-depth="0.00">
            <div class="catchingText" data-type="parallax" data-depth="0.6">
                <div class="websiteTitle"><span class="second">musée</span><span class="main">des nuages</span></div>
                <p class="resume">Un musée de notre siècle<br />où l'art inspire notre sensibilité environnementale</p>
            </div>

            <div class="scrollInvitation" data-type="parallax" data-depth="0.6">
                <p>défiler vers le bas<span class="hiddenMobile"> pour plonger dans les nuages</span></p>
                <div class="lineScroll"><img src="<?= THEME_URL ?>/assets/img/line_scroll.svg" alt="Line scroll"></div>
            </div>

            <div class="parallax">
                <div class="cloud_4 layer" data-type="parallax" data-depth="0.5"></div>
                <div class="cloud_3 layer" data-type="parallax" data-depth="0.4"></div>
                <div class="cloud_2 layer" data-type="parallax" data-depth="0.3"></div>
                <div class="cloud_1 layer" data-type="parallax" data-depth="0.01"></div>
            </div>
        </div>

        <div class="clouds">
            <img class="underParallax" src="<?= THEME_URL ?>/assets/img/under_parallax.png" alt="cloud">
        </div>

        <div class="path">
            <img src="<?= THEME_URL ?>/assets/img/skeleton.svg" alt="Tracé" class="pathImg">

            <div id="triggerGradient"></div>
        </div>
    </div>

<?php get_footer(); ?>
