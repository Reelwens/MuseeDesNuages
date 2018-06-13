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
        </div>
        <!-- ANCHORS -->
        <?php if( have_rows('services_list') ): ?>
            <div class="headerAnchors">
                <ul class="anchorsLinks">
                    <?php while ( have_rows('services_list') ) : the_row();
                        $title = get_sub_field('service_title');
                    ?>

                    <?php if( $title ): ?>
                        <li class="anchor"><a href="#"><?php echo $title; ?></a></li>
                    <?php endif; ?>

                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
        <!-- TEXT INTRO -->
        <?php if( get_field('intro_text') ): ?>
            <div class="servicesIntro">
                <p><?php the_field('intro_text'); ?></p>
            </div>
        <?php endif; ?>
        <!-- SERVICES -->
        <?php if( have_rows('services_list') ): ?>
            <div class="servicesList">

                <?php while ( have_rows('services_list') ) : the_row();
                    // vars
                    $name = get_sub_field('service_title');
                    $text = get_sub_field('service_text');
                    $list_title = get_sub_field('services_list_title');
                    $list = get_sub_field('services_list');
                    $photo = get_sub_field('service_img');

                ?>

                <div class="service">

                    <p class="serviceName"><?php echo $name; ?></p>
                    <p class="serviceText"><?php echo $text; ?></p>

                    <?php if( $list_title ): ?>
                        <p class="serviceListTitle"><?php echo $list_title; ?></p>
                    <?php endif; ?>

                     <?php if( $list ): ?>
                        <p class="serviceList"><?php echo $list; ?></p>
                    <?php endif; ?>

                    <div class="servicePhoto"><img src="<?php echo $photo; ?>"/></div>

                </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
