<?php
get_header();

// get all the categories, useful for the navbar
$args = array(
         'orderby' => 'slug',
         'parent' => 0
        );

$categories = get_categories( $args );
?>
    <div class="news">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo" class="logoMDN" /></a>
        <div class="headerPage">
            <h1 class="headerTitle">Nos actualités</h1>
            <p class="headerSubtitle">Découvrez ici nos actualités ainsi que le flux d'informations de nos réseaux sociaux.</p>
            <div class="headerTerms">
                <ul class="subMenu">
                    <li class="activeTerm termLink" data-attribute="allArticles" data-menu="articles">articles</li>
                    <li class="termLink" data-menu="socialNetworks">réseaux sociaux</li>
                </ul>
            </div>
            <div class="headerSocialLinks">
                <ul class="termsLinks" id="articles">
                    <li class="termLink activeTerm" data-attribute="allArticles">
                        voir tout
                    </li>
                    <?php if ($categories):
                    foreach ($categories as $category): ?>
                        <li class="termLink" data-attribute="<?php echo $category->name; ?>"><?php echo $category->name; ?></li>
                    <?php endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <!-- articles by category -->
        <?php if ($categories):
             foreach ($categories as $category): ?>
                <div class="listArticles" id="<?php echo $category->name; ?>" id="articles">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $category_loop = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'order' => 'DESC',
                    'category_name' => $category->name,
                    'paged' => $paged )
                );
                ?>

                <?php while ( $category_loop->have_posts() ) : $category_loop->the_post(); ?>

                    <a class="article" href="<?= get_permalink() ?>"  title="<?= the_title_attribute( 'echo=0' ) ?>">
                        <img class="bgArticle" src="<?php the_post_thumbnail() ?>" alt="background">
                        <div class="gradient"></div>
                        <div class="content">
                            <div class="info">
                                <p class="theme"><?php echo $category->name; ?></p>
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
                <?php wp_pagenavi( array( 'query' => $category_loop ) ); ?>
                </div>
            <?php endforeach;
        endif;
        ?>

        <!-- all articles -->
        <div class="listArticles" id="allArticles" id="articles">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $loop = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 7,
                'order' => 'DESC',
                'paged' => $paged )
            );

        // Displays article category with commas
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

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <a class="article" href="<?= get_permalink() ?>"  title="<?= the_title_attribute( 'echo=0' ) ?>">
                <img class="bgArticle" src="<?php the_post_thumbnail() ?>" alt="background">
                <div class="gradient"></div>
                <div class="content">
                    <div class="info">
                        <p class="theme"><?php echo display_category(); ?></p>
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
        <div class="headerSocialLinks">
            <ul id="socialNetworks" class="termsLinks">
                <li class="termLink activeTerm" data-attribute="facebookFeed">facebook</li>
                <li class="termLink" data-attribute="twitterFeed">twitter</li>
                <li class="termLink" data-attribute="instagramFeed">instagram</li>
                <li class="termLink" data-attribute="linkedinFeed">linkedin</li>
            </ul>
        </div>
        <div id="facebookFeed" class="socialFeed">
            <?php //echo do_shortcode('[ff id="1"]')?>
            <?php echo do_shortcode('[fts_facebook type=page id=1550817941681559 posts=6 description=yes posts_displayed=page_only]') ?>
            <!-- <p>facebook feed</p> -->
        </div>
        <div id="twitterFeed" class="socialFeed">
            <?php //echo do_shortcode('[ff id="2"]')?>
            <?php echo do_shortcode('[fts_twitter twitter_name=museedes_nuages tweets_count=6 cover_photo=no stats_bar=no show_retweets=no show_replies=no]') ?>
            <!-- <p>twitter feed</p> -->
        </div>
        <div id="instagramFeed" class="socialFeed">
            <?php echo do_shortcode('[ff id="3"]')?>
            <!-- <p>instagramfeed</p> -->
        </div>
        <div id="linkedinFeed" class="socialFeed">
            <p>linkedin feed</p>
        </div>
    </div>

<?php get_footer(); ?>

