<?php

/**
 * Template Name: Single news
**/

get_header();

// Displays article terms with commas
function display_terms() {
    $terms = get_the_terms( get_the_ID() , 'theme' );
    $multiple_terms = '';
    if ($terms) {
        foreach ( $terms as $term ) {
            $multiple_terms .= $term->name . ' - ';
        }
        $multiple_terms = rtrim( $multiple_terms, ' - ' );
        echo $multiple_terms;
    }
}

?>

    <div class="singleNews">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoGrey.svg" alt="Logo" class="logoMDN" /></a>

        <div class="theme"><span><?php echo display_terms(); ?></span></div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



        <div class="article">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <div class="bottomArticle">
            <div class="social">
                <a href="https://www.facebook.com/lemuseedesnuages/" target="_blank"><img src="<?= THEME_URL ?>/assets/img/facebook2.svg" alt="Facebook" class="socialIcon" /></a>
                <a href="https://twitter.com/museedes_nuages" target="_blank"><img src="<?= THEME_URL ?>/assets/img/twitter2.svg" alt="Twitter" class="socialIcon" /></a>
                <a href="https://www.linkedin.com/in/mus%C3%A9e-des-nuages-climat-artistique-0578b3133/" target="_blank"><img src="<?= THEME_URL ?>/assets/img/linkedin2.svg" alt="LinkedIn" class="socialIcon" /></a>
            </div>
            <div class="author">
                <p class="introduction">Posté par</p>
                <p class="name"><?php the_author(); ?></p>
            </div>
        </div>

        <?php endwhile; else: ?>
        <p>Aucun contenu n'a été trouvé.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
