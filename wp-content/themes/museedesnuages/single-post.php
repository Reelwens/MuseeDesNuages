<?php

/**
 * Template Name: Single posts
**/

get_header();

// Displays article terms with commas
function display_category() {
    $category = get_the_category( get_the_ID() , 'category' );
    $multiple_category = '';
    if ($category) {
        foreach ( $category as $term ) {
            $multiple_category .= $term->name . ', ';
        }
        $multiple_category = rtrim( $multiple_category, ', ' );
        echo $multiple_category;
    }
}

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
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoGrey.svg" alt="Logo musée des nuages" class="logoMDN" /></a>
        <a href="../news/"><img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" /></a>

        <div class="theme"><span><?php echo display_category(); ?></span></div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



        <div class="article">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <div class="bottomArticle">
            <div class="social">
                <a href="https://www.facebook.com/lemuseedesnuages/" target="_blank"><img src="<?= THEME_URL ?>/assets/img/facebook2.svg" alt="Logo Facebook" class="socialIcon" /></a>
                <a href="https://twitter.com/museedes_nuages" target="_blank"><img src="<?= THEME_URL ?>/assets/img/twitter2.svg" alt="Logo Twitter" class="socialIcon" /></a>
                <a href="https://www.linkedin.com/in/mus%C3%A9e-des-nuages-climat-artistique-0578b3133/" target="_blank"><img src="<?= THEME_URL ?>/assets/img/linkedin2.svg" alt="Logo LinkedIn" class="socialIcon" /></a>
            </div>
            <div class="author">
                <p class="introduction">Posté par</p>
                <p class="name"><?php the_author(); ?></p>
            </div>
        </div>
        <div class="back"><a href="../news/">Retour aux articles</a></div>

        <?php endwhile; else: ?>
        <p>Aucun contenu n'a été trouvé.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
