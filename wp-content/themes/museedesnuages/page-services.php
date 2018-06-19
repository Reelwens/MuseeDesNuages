<?php

/**
 * Template Name: Prestations
**/

get_header();
?>
    <div class="services">
        <div class="headerPage">
            <h1 class="headerTitle">Nos prestations</h1>
            <p class="headerSubtitle">Découvrez ici toutes nos prestations mise en place pour les entreprises et les collectivités territoriales.</p>
            <!-- ANCHORS -->
        <?php if( have_rows('services_list') ):
            $i = 0;
        ?>
            <div class="headerAnchors">
                <ul class="anchorsLinks">
                    <?php while ( have_rows('services_list') ) : the_row();
                        $title = get_sub_field('service_title');
                        $i++;
                    ?>

                    <?php if( $title ): ?>
                        <li class="anchor"><a href="<?= '#service' . $i ?>"><?php echo $title; ?></a></li>
                    <?php endif; ?>

                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
        </div>

        <!-- TEXT INTRO -->
        <?php if( get_field('intro_text') ): ?>
            <div class="servicesIntro">
                <p class="chapeau"><?php the_field('chapeau'); ?></p>
                <p><?php the_field('intro_text'); ?></p>
                <a href="#" class="button">
                    <span>Nous contacter</span>
                    <img src="<?= THEME_URL ?>/assets/img/arrow_right.svg" alt="Flèche" />
                </a>
            </div>
        <?php endif; ?>
        <!-- SERVICES -->
        <?php if( have_rows('services_list') ):
            $i = 0;
        ?>
            <div class="servicesList">

                <?php while ( have_rows('services_list') ) : the_row();
                    // vars
                    $name = get_sub_field('service_title');
                    $text = get_sub_field('service_text');
                    $list_title = get_sub_field('services_list_title');
                    $list = get_sub_field('services_list');
                    $photo = get_sub_field('service_img');
                    $i++;

                ?>

                <div class="service" id="<?= 'service' . $i ?>">

                    <h2 class="serviceName"><?php echo $name; ?></h2>
                    <p class="serviceText"><?php echo $text; ?></p>

                    <?php if( $list_title ): ?>
                        <p class="serviceListTitle"><?php echo $list_title; ?></p>
                    <?php endif; ?>

                     <?php if( $list ): ?>
                        <div class="serviceList"><?php echo $list; ?></div>
                    <?php endif; ?>

                    <div class="servicePhoto"><img src="<?php echo $photo; ?>"/></div>

                </div>

                <?php endwhile; ?>

                <a href="#" class="button">
                    <span>Nous contacter</span>
                    <img src="<?= THEME_URL ?>/assets/img/arrow_right.svg" alt="Flèche" />
                </a>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
