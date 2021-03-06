<?php get_header();  ?>
    <div id="front-page">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo du musée des nuages" class="logoMDN" data-type="parallax" data-depth="0.5" /></a>
        <div class="toggleSound">
    		<div class="bar bar_0"></div>
    		<div class="bar bar_1"></div>
    		<div class="bar bar_2"></div>
    		<div class="bar bar_3"></div>
    		<div class="bar bar_4"></div>
    		<div class="bar bar_5"></div>
    	</div>
        <div class="hero">
            <div class="catchingText" data-type="parallax" data-depth="0.6">
                <div class="websiteTitle"><span class="second">musée</span><span class="main">des nuages</span></div>
                <p class="resume"><?php the_field('resume_sous-titre'); ?></p>
            </div>

            <div class="scrollInvitation" data-type="parallax" data-depth="0.6">
                <p><?php the_field('scroll'); ?></p>
                <div class="lineScroll"><img src="<?= THEME_URL ?>/assets/img/line_scroll.svg" alt="Ligne scroll"></div>
            </div>

            <div class="parallax">
                <div class="cloud_4 layer" data-type="parallax" data-depth="0.5"></div>
                <div class="cloud_3 layer" data-type="parallax" data-depth="0.4"></div>
                <div class="cloud_2 layer" data-type="parallax" data-depth="0.3"></div>
                <div class="cloud_1 layer" data-type="parallax" data-depth="0.005"></div>
                <div class="androidFix"></div>
            </div>
        </div>

        <div class="clouds">
            <img class="underParallax" src="<?= THEME_URL ?>/assets/img/under_parallax.png" alt="nuages">

            <div class="pattern one">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuages" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuages" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuages" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuages" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern two">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern three">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern four">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern five">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern six">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern seven">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern eight">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
                <img class="cloudElement three" src="<?= THEME_URL ?>/assets/img/cloudElement_3.png" alt="nuage" data-type="parallax" data-depth="-0.4">
                <img class="cloudElement four" src="<?= THEME_URL ?>/assets/img/cloudElement_4.png" alt="nuage" data-type="parallax" data-depth="-0.2">
            </div>

            <div class="pattern nine">
                <img class="cloudElement one" src="<?= THEME_URL ?>/assets/img/cloudElement_1.png" alt="nuage" data-type="parallax" data-depth="-0.1">
                <img class="cloudElement two" src="<?= THEME_URL ?>/assets/img/cloudElement_2.png" alt="nuage" data-type="parallax" data-depth="-0.3">
            </div>
        </div>

        <div class="path">
            <img src="<?= THEME_URL ?>/assets/img/skeleton.svg" alt="Tracé" class="pathImg">

            <div id="triggerGradient"></div>

            <div class="heading">
                <p class="second"><?php the_field('tete_de_texte_1'); ?></p>
                <p class="first"><?php the_field('tete_de_texte_2'); ?></p>
            </div>

            <div class="point point-1"></div>
            <p class="paragraph paragraph-1">
                <?php the_field('paragraphe_1'); ?>
            </p>
            <div class="point point-2"></div>
            <p class="paragraph paragraph-2">
                <?php the_field('paragraphe_2'); ?>
            </p>
            <div class="point point-3"></div>
            <p class="paragraph paragraph-3">
                <?php the_field('paragraphe_3'); ?>
            </p>
            <div class="point point-4"></div>
            <p class="paragraph paragraph-4">
                <?php the_field('paragraphe_4'); ?>
            </p>
            <div class="point point-5 big"><img src="<?= THEME_URL ?>/assets/img/art-icon.svg" alt="Art" /></div>
            <p class="paragraph paragraph-5"><?php the_field('paragraphe_5'); ?></p>
            <div class="point point-6"></div>
            <p class="paragraph paragraph-6">
                <?php the_field('paragraphe_6'); ?>
            </p>
            <div class="point point-7"></div>
            <p class="paragraph paragraph-7">
                <?php the_field('paragraphe_7'); ?>
            </p>
            <div class="point point-8"></div>
            <p class="paragraph paragraph-8">
                <?php the_field('paragraphe_8'); ?>
            </p>
            <div class="point point-9 big"><img src="<?= THEME_URL ?>/assets/img/climat-icon.svg" alt="Climat" /></div>
            <p class="paragraph paragraph-9"><?php the_field('paragraphe_9'); ?></p>
            <div class="point point-10"></div>
            <p class="paragraph paragraph-10">
                <?php the_field('paragraphe_10'); ?>
            </p>
            <div class="point point-11"></div>
            <p class="paragraph paragraph-11">
                <?php the_field('paragraphe_11'); ?>
            </p>
            <div class="point point-12"></div>
            <p class="paragraph paragraph-12">
                <?php the_field('paragraphe_12'); ?>
            </p>
            <div class="point point-13"></div>
            <p class="paragraph paragraph-13">
                <?php the_field('paragraphe_13'); ?>
            </p>
            <div class="point point-14"></div>
            <p class="paragraph paragraph-14">
                <?php the_field('paragraphe_14'); ?>
            </p>
            <div class="point point-15 big"><img src="<?= THEME_URL ?>/assets/img/partage-icon.svg" alt="Partage" /></div>
            <p class="paragraph paragraph-15"><?php the_field('paragraphe_15'); ?></p>
            <div class="point point-16"></div>
            <p class="paragraph paragraph-16">
                <?php the_field('paragraphe_16'); ?>
            </p>
            <div class="point point-17"></div>
            <p class="paragraph paragraph-17">
                <?php the_field('paragraphe_17'); ?>
            </p>
            <div class="point point-18"></div>
            <p class="paragraph paragraph-18">
                <?php the_field('paragraphe_18'); ?>
            </p>
            <div class="point point-19"></div>
            <p class="paragraph paragraph-19">
                <?php the_field('paragraphe_19'); ?>
            </p>
            <div class="point point-20"></div>
            <p class="paragraph paragraph-20">
                <?php the_field('paragraphe_20'); ?>
            </p>
            <div class="point point-21"></div>
            <div class="paragraph paragraph-21">
                <div class="partner iesa">
                    <img src="<?= get_field('partenaire_1_image'); ?>" alt="iesa" />
                    <p><?php the_field('partenaire_1'); ?></p>
                </div>
                <div class="partner studialis">
                    <img src="<?= get_field('partenaire_2_image'); ?>" alt="hetic" />
                    <p><?php the_field('partenaire_2'); ?></p>
                </div>
                <div class="partner iesa-incub">
                    <img src="<?= get_field('partenaire_3_image'); ?>" alt="iesa incubateur" />
                    <p><?php the_field('partenaire_3'); ?></p>
                </div>
                <div class="partner upup">
                    <img src="<?= get_field('partenaire_4_image'); ?>" alt="up&up" />
                    <p><?php the_field('partenaire_4'); ?></p>
                </div>
                <div class="partner medef">
                    <img src="<?= get_field('partenaire_5_image'); ?>" alt="courants faibles" />
                    <p><?php the_field('partenaire_5'); ?></p>
                </div>
            </div>

            <div class="picture picture-1">
                <img src="<?= get_field('picture_1'); ?>" alt="Sylvain Soussan, fondateur" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1_left.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2_left.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_1'); ?></p>
            </div>

            <div class="picture picture-2">
                <img src="<?= get_field('picture_2'); ?>" alt="Sylvain Soussan, fondateur" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_2'); ?></p>
            </div>

            <div class="picture picture-3">
                <img src="<?= get_field('picture_3'); ?>" alt="Vitre vers le ciel" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1_left.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2_left.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_3'); ?></p>
            </div>

            <div class="picture picture-4">
                <img src="<?= get_field('picture_4'); ?>" alt="Chaises longues" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_4'); ?></p>
            </div>

            <div class="picture picture-5">
                <img src="<?= get_field('picture_5'); ?>" alt="Chateau d'eau" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1_left.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2_left.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_5'); ?></p>
            </div>

            <div class="picture picture-6">
                <img src="<?= get_field('picture_6'); ?>" alt="Turell" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1_left.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2_left.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_6'); ?></p>
            </div>

            <div class="picture picture-7">
                <img src="<?= get_field('picture_7'); ?>" alt="Fujiko Nakaya" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_7'); ?></p>
            </div>

            <div class="picture picture-8">
                <img src="<?= get_field('picture_8'); ?>" alt="Atelier collaboratif" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1_left.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2_left.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_8'); ?></p>
            </div>

            <div class="picture picture-9">
                <img src="<?= get_field('picture_9'); ?>" alt="Atelier de création" class="mainPicture" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_1.png" alt="nuage" class="cloud-1" data-type="parallax" data-depth="-0.2" />
                <img src="<?= THEME_URL ?>/assets/img/cloud_on_image_2.png" alt="nuage" class="cloud-2" data-type="parallax" data-depth="-0.3" />
                <p class="legend"><?php the_field('legend_picture_9'); ?></p>
            </div>

            <a href="/services" class="button seeRealizations">
                <span>Nos prestations</span>
                <img src="<?= THEME_URL ?>/assets/img/arrow_right.svg" alt="Flèche" />
            </a>

            <div class="conclusion">
                <p class="conclusion-1">Le musée des nuages propose des interventions auprès des entreprises, aux acteurs territoriaux et aux particuliers à travers la RSE, des expositions et ateliers.</p>
                <p class="conclusion-2">Découvrez ce que le Musée des Nuages peut faire pour vous.</p>

                <a href="/contact" class="button takeContact">
                    <span>Prendre contact</span>
                    <img src="<?= THEME_URL ?>/assets/img/arrow_right.svg" alt="Flèche" />
                </a>
            </div>

        </div>
    </div>

    <!-- Ambiance sound -->
    <audio id="sound" autoplay loop>
        <source src="<?= THEME_URL ?>/assets/sound/refuge.mp3" type="audio/mp3" />
    </audio>

    <div class="extra">
        <div class="interaction artInteraction">
            <div class="backArea">
                <div class="backButton">
                    <img src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                </div>
            </div>
            <div class="content">
                <img src="<?= THEME_URL ?>/assets/img/art-icon.svg" alt="Art" class="iconInteraction art" />
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('interaction_1') ):

                     // loop through the rows of data
                    while ( have_rows('interaction_1') ) : the_row();

                        if( get_row_layout() == 'section' ):

                            ?><div class="section"><?php the_sub_field('section'); ?></div><?php

                        elseif( get_row_layout() == 'title' ):

                            ?><div class="title"><?php the_sub_field('title'); ?></div><?php

                        elseif( get_row_layout() == 'picture' ):

                            ?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                        elseif( get_row_layout() == 'text' ):

                            ?><div class="text"><?php the_sub_field('text'); ?></div><?php

                        endif;

                    endwhile;

                else :

                    ?><p class="studySubTitle">Aucun résultat</p><?php

                endif;

                ?>
                <a class="interactionButton" href="/services">Découvrir nos prestations</a>
            </div>
        </div>
        <div class="interaction climatInteraction">
            <div class="backArea">
                <div class="backButton">
                    <img src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                </div>
            </div>
            <div class="content">
                <img src="<?= THEME_URL ?>/assets/img/climat-icon.svg" alt="climat" class="iconInteraction climat" />
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('interaction_2') ):

                     // loop through the rows of data
                    while ( have_rows('interaction_2') ) : the_row();

                        if( get_row_layout() == 'section' ):

                            ?><div class="section"><?php the_sub_field('section'); ?></div><?php

                        elseif( get_row_layout() == 'title' ):

                            ?><div class="title"><?php the_sub_field('title'); ?></div><?php

                        elseif( get_row_layout() == 'picture' ):

                            ?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                        elseif( get_row_layout() == 'text' ):

                            ?><div class="text"><?php the_sub_field('text'); ?></div><?php

                        endif;

                    endwhile;

                else :

                    ?><p class="studySubTitle">Aucun résultat</p><?php

                endif;

                ?>
                <a class="interactionButton" href="/services">Découvrir nos prestations</a>
            </div>
        </div>
        <div class="interaction shareInteraction">
            <div class="backArea">
                <div class="backButton">
                    <img src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                </div>
            </div>
            <div class="content">
                <img src="<?= THEME_URL ?>/assets/img/share-icon.svg" alt="partage" class="iconInteraction share" />
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('interaction_3') ):

                     // loop through the rows of data
                    while ( have_rows('interaction_3') ) : the_row();

                        if( get_row_layout() == 'section' ):

                            ?><div class="section"><?php the_sub_field('section'); ?></div><?php

                        elseif( get_row_layout() == 'title' ):

                            ?><div class="title"><?php the_sub_field('title'); ?></div><?php

                        elseif( get_row_layout() == 'picture' ):

                            ?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                        elseif( get_row_layout() == 'text' ):

                            ?><div class="text"><?php the_sub_field('text'); ?></div><?php

                        endif;

                    endwhile;

                else :

                    ?><p class="studySubTitle">Aucun résultat</p><?php

                endif;

                ?>
                <a class="interactionButton" href="/services">Découvrir nos prestations</a>
            </div>
        </div>
        <div class="loader">
            <img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo musée des nuages" class="logo" />
        </div>
    </div>


<?php get_footer(); ?>
