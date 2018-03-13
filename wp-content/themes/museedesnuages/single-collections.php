<?php get_header();  ?>

    <p>Ma collection</p>

    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
        }
    }
    ?>

<?php get_footer(); ?>
