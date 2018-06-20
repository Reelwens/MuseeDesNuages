<?php

/**
 * Template Name: All news
**/

get_header();

?>

    <div class="news">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo" class="logoMDN" /></a>
        <div class="headerPage">
            <h1 class="headerTitle">Nos actualités</h1>
            <p class="headerSubtitle">Lorem Ipsum Dolores Dolores Dolores Dolores</p>
        </div>
        <div class="headerTerms">
            <ul class="subMenu">
                <li><a href="#">articles</a></li>
                <li><a href="#">réseaux sociaux</a></li>
            </ul>
            <ul class="termsLinks">
                <li class="termLink"><a href="#">voir tout</a></li>
                <?php if ($terms = get_terms('theme', 'orderbyname')):
                 foreach ($terms as $term): ?>
                    <li class="termLink"><a href="#"><?php echo $term->name; ?></a></li>
                <?php endforeach;
                endif;
                ?>
            </ul>
        </div>

        <div class="listArticles">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $category = (get_query_var('category'));

        $loop = new WP_Query( array(
            'post_type' => 'news',
            'posts_per_page' => 7,
            'order' => 'DESC',
            'paged' => $paged )
        );

        // Displays article terms with commas
        function display_terms() {
            $terms = get_the_terms( get_the_ID() , 'theme' );
            $multiple_terms = '';
            if ($terms) {
                foreach ( $terms as $term ) {
                    $multiple_terms .= $term->name . ', ';
                }
                $multiple_terms = rtrim( $multiple_terms, ', ' );
                echo $multiple_terms;
            }
        }

        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <a class="article" href="<?= get_permalink() ?>"  title="<?= the_title_attribute( 'echo=0' ) ?>">
                <img class="bgArticle" src="<?php the_post_thumbnail() ?>" alt="background">
                <div class="gradient"></div>
                <div class="content">
                    <div class="info">
                        <p class="theme"><?php echo display_terms(); ?></p>
                        <p class="date"><?= get_the_date() ?></p>
                    </div>
                    <div class="articleTitle">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="articleResume"><?php the_excerpt(); ?></div>
                </div>
                <div class="readMore">Lire plus</div>
            </a>

        <?php endwhile; ?>
        <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
        </div>
    </div>


<?php get_footer(); ?>
