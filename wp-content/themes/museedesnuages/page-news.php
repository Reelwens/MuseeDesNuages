<?php

/**
 * Template Name: All news
**/

get_header();

?>

    <h1>Actualités</h1>

    <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 10 ) ); ?>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php the_title( '<h2 class="articleTitle"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>
