<?php

/**
 * Template Name: CGU
**/

get_header();

?>
    <style>
        .toggleMenu svg .menuLines {
            fill: #515B6C;
        }

        .toggleMenu .textMenu {
            color: #515B6C;
        }
    </style>
    <div class="singleNews">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoGrey.svg" alt="Logo" class="logoMDN" /></a>
        <div class="legalNoticesPage">
            <?php the_field('legal_notices'); ?>
        </div>
    </div>

<?php get_footer(); ?>
