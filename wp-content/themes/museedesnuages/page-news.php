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
            <p class="headerSubtitle">Découvrez ici nos actualités sur nos différentes thématiques.</p>
        </div>
        <div class="headerTerms">
            <ul class="subMenu">
                <li class="activeTerm termLink" data-attribute="allArticles" data-type="articles">articles</li>
                <li class="termLink" data-type="socialNetworks">réseaux sociaux</li>
            </ul>
        </div>
        <div>
            <ul class="termsLinks" id="articles">
                <li class="termLink activeTerm" data-attribute="allArticles">
                    voir tout
                </li>
                <?php if ($terms = get_terms('theme', 'orderbyname')):
                 foreach ($terms as $term): ?>
                    <li class="termLink" data-attribute="<?php echo $term->name; ?>"><?php echo $term->name; ?></li>
                <?php endforeach;
                endif;
                ?>
            </ul>
        </div>
        <!-- articles by terms -->
        <?php if ($terms = get_terms('theme', 'orderbyname')):
             foreach ($terms as $term): ?>
                <div class="listArticles" id="<?php echo $term->name; ?>" id="articles">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $term_loop = new WP_Query( array(
                    'post_type' => 'news',
                    'posts_per_page' => 7,
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'theme',
                            'field' => 'slug',
                            'terms' => $term->name,
                        )
                    ),
                    'paged' => $paged )
                );
                ?>

                <?php while ( $term_loop->have_posts() ) : $term_loop->the_post(); ?>

                    <a class="article" href="<?= get_permalink() ?>"  title="<?= the_title_attribute( 'echo=0' ) ?>">
                        <img class="bgArticle" src="<?php the_post_thumbnail() ?>" alt="background">
                        <div class="gradient"></div>
                        <div class="content">
                            <div class="info">
                                <p class="theme"><?php echo $term->name; ?></p>
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
                <?php wp_pagenavi( array( 'query' => $term_loop ) ); ?>
                </div>
            <?php endforeach;
        endif;
        ?>

        <!-- all articles -->
        <div class="listArticles" id="allArticles" id="articles">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

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
        <!-- Social networks -->
        <div>
            <ul id="socialNetworks" class="termsLinks">
                <li class="termLink activeTerm" data-attribute="facebookFeed">facebook</li>
                <li class="termLink activeTerm" data-attribute="twitterFeed">twitter</li>
                <li class="termLink activeTerm" data-attribute="instagramFeed">instagram</li>
                <li class="termLink activeTerm" data-attribute="linkedinFeed">linkedin</li>
            </ul>
        </div>
        <div id="facebookFeed" class="socialFeed">
            <?php //echo do_shortcode('[ff id="1"]')?>
            <p>facebook feed</p>
        </div>
        <div id="twitterFeed" class="socialFeed">
            <?php //echo do_shortcode('[ff id="2"]')?>
            <p>twitter feed</p>
        </div>
        <div id="instagramFeed" class="socialFeed">
            <?php //echo do_shortcode('[ff id="3"]')?>
            <p>instagramfeed</p>
        </div>
        <div id="linkedinFeed" class="socialFeed">
            <p>linkedin feed</p>
        </div>
    </div>

<?php get_footer(); ?>
