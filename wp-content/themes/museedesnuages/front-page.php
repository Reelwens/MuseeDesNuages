<?php get_header();  ?>

    <div id="front-page">
        <div class="hero" data-type="parallax" data-depth="0.00">
            <div class="texts" data-type="parallax" data-depth="0.5">
                <div class="title"><span class="second">musée</span><span class="main">des nuages</span></div>
                <p>Le musée des nuages est un musée du 21e siècle, sans murs ni visages.<br />Nulle part et partout à la fois.</p>
            </div>

            <div class="parallax">
                <div class="mountain layer" data-type="parallax" data-depth="0.2"></div>
                <div class="cloud layer" data-type="parallax" data-depth="0.01"></div>
            </div>
        </div>

        <div class="path">
            <img src="<?= THEME_URL ?>/assets/img/path.svg" alt="Tracé" class="pathImg">
            <div class="gradient" id="gradient"></div>

            <div id="triggerGradient"></div>
        </div>
    </div>

<?php get_footer(); ?>
