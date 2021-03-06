<?php
/**
 * Template Name: Visites
**/
get_header();
?>

    <div class="visit main">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo musée des nuages" class="logoMDN" /></a>
        <div class="background"></div>
        <div class="arianeString">
            <div class="arianeElement water">
                <?php include ('assets/img/water-shape.svg') ?>
                <p><span>eau</span></p>
            </div>
            <div class="arianeElement cloud">
                <?php include ('assets/img/cloud-shape.svg') ?>
                <p><span>air</span></p>
            </div>
            <div class="arianeElement light">
                <?php include ('assets/img/light-shape.svg') ?>
                <p><span>lumière</span></p>
            </div>
            <div class="arianeElement flash">
                <?php include ('assets/img/flash-shape.svg') ?>
                <p><span>énergie</span></p>
            </div>
        </div>

        <section class="frame frame-1">
            <div class="texts">
                <h1 class="title"><?php the_field('visit_title'); ?></h1>
                <p class="bio"><?php the_field('visit_bio'); ?></p>
            </div>

            <div class="tickets">
                <img src="<?= THEME_URL ?>/assets/img/ticket1.png" alt="Ticket de musée">
                <img src="<?= THEME_URL ?>/assets/img/ticket2.png" alt="Ticket de musée">
            </div>

            <div class="scrollInvitation">
                <p>défiler vers le bas</p>
                <div class="lineScroll"><img src="<?= THEME_URL ?>/assets/img/line_scroll.svg" alt="Ligne scroll"></div>
            </div>
        </section>

        <section class="frame frame-2">
            <img class="frameForm" src="<?= THEME_URL ?>/assets/img/water-shape.svg" alt="Icône eau" />
            <div class="frameName">L'eau</div>

            <div class="subFrame subFrame-1">
                <p class="description introduction"><?php the_field('water_description'); ?></p>
            </div>

            <div class="subFrameImg subFrame-2">
                <img src="<?= get_field('water_1_picture_1'); ?>" alt="Chateau d'eau" class="card card-1" />
                <img src="<?= get_field('water_1_picture_2'); ?>" alt="Chateau d'eau" class="card card-2" />
                <img src="<?= get_field('water_1_picture_3'); ?>" alt="Chateau d'eau" class="card card-3" />
            </div>
            <div class="subFrame subFrame-2">
                <h2 class="subFrameName"><?php the_field('water_1_title'); ?></h2>
                <p class="description"><?php the_field('water_1_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-1">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Eau</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('water_1_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('water_1_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-3">
                <img src="<?= get_field('water_2_picture_1'); ?>" alt="Bouteilles d'eau" class="card card-1" />
                <img src="<?= get_field('water_2_picture_2'); ?>" alt="Bouteilles d'eau" class="card card-2" />
                <img src="<?= get_field('water_2_picture_3'); ?>" alt="Bouteilles d'eau" class="card card-3" />
            </div>
            <div class="subFrame subFrame-3">
                <h2 class="subFrameName"><?php the_field('water_2_title'); ?></h2>
                <p class="description"><?php the_field('water_2_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-2">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Eau</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('water_2_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('water_2_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-4">
                <img src="<?= get_field('water_3_picture_1'); ?>" alt="Fontaines" class="card card-1" />
                <img src="<?= get_field('water_3_picture_2'); ?>" alt="Fontaines" class="card card-2" />
                <img src="<?= get_field('water_3_picture_3'); ?>" alt="Fontaines" class="card card-3" />
            </div>
            <div class="subFrame subFrame-4">
                <h2 class="subFrameName"><?php the_field('water_3_title'); ?></h2>
                <p class="description"><?php the_field('water_3_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-3">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Go back" />
                        <p class="studyTitle">Eau</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('water_3_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('water_3_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-5">
                <img src="<?= get_field('water_4_picture_1'); ?>" alt="Cocktail" class="card card-1" />
                <img src="<?= get_field('water_4_picture_2'); ?>" alt="Cocktail" class="card card-2" />
                <img src="<?= get_field('water_4_picture_3'); ?>" alt="Cocktail" class="card card-3" />
            </div>
            <div class="subFrame subFrame-5">
                <h2 class="subFrameName"><?php the_field('water_4_title'); ?></h2>
                <p class="description"><?php the_field('water_4_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-4">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Go back" />
                        <p class="studyTitle">Eau</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('water_4_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('water_4_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-6">
                <img src="<?= get_field('water_5_picture_1'); ?>" alt="Source d'eau" class="card card-1" />
                <img src="<?= get_field('water_5_picture_2'); ?>" alt="Source d'eau" class="card card-2" />
            </div>
            <div class="subFrame subFrame-6">
                <h2 class="subFrameName"><?php the_field('water_5_title'); ?></h2>
                <p class="description"><?php the_field('water_5_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-5">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Go back" />
                        <p class="studyTitle">Eau</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('water_5_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('water_5_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frame frame-3 horizontalFrame">
            <img class="frameForm" src="<?= THEME_URL ?>/assets/img/cloud-shape.svg" alt="Icône nuage" />
            <div class="frameName">L'air</div>

            <div class="subFrame subFrame-1">
                <p class="description introduction"><?php the_field('air_description'); ?></p>
            </div>

            <div class="subFrameImg subFrame-2">
                <img src="<?= get_field('air_1_picture_1'); ?>" alt="Eventail" class="card card-1" />
                <img src="<?= get_field('air_1_picture_2'); ?>" alt="Eventail" class="card card-2" />
                <img src="<?= get_field('air_1_picture_3'); ?>" alt="Eventail" class="card card-3" />
            </div>
            <div class="subFrame subFrame-2">
                <h2 class="subFrameName"><?php the_field('air_1_title'); ?></h2>
                <p class="description"><?php the_field('air_1_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-6">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Go back" />
                        <p class="studyTitle">Air</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('air_1_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('air_1_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-3">
                <img src="<?= get_field('air_2_picture_1'); ?>" alt="Exposition" class="card card-1" />
                <img src="<?= get_field('air_2_picture_2'); ?>" alt="Exposition" class="card card-2" />
                <img src="<?= get_field('air_2_picture_3'); ?>" alt="Exposition" class="card card-3" />
            </div>
            <div class="subFrame subFrame-3">
                <h2 class="subFrameName"><?php the_field('air_2_title'); ?></h2>
                <p class="description"><?php the_field('air_2_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-7">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Air</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('air_2_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('air_2_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-4">
                <img src="<?= get_field('air_3_picture_1'); ?>" alt="Verrière" class="card card-1" />
                <img src="<?= get_field('air_3_picture_2'); ?>" alt="Verrière" class="card card-2" />
                <img src="<?= get_field('air_3_picture_3'); ?>" alt="Verrière" class="card card-3" />
            </div>
            <div class="subFrame subFrame-4">
                <h2 class="subFrameName"><?php the_field('air_3_title'); ?></h2>
                <p class="description"><?php the_field('air_3_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-8">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Air</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('air_3_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('air_3_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-5">
                <img src="<?= get_field('air_4_picture_1'); ?>" alt="Etats du ciel" class="card card-1" />
                <img src="<?= get_field('air_4_picture_2'); ?>" alt="Etats du ciel" class="card card-2" />
                <img src="<?= get_field('air_4_picture_3'); ?>" alt="Etats du ciel" class="card card-3" />
            </div>
            <div class="subFrame subFrame-5">
                <h2 class="subFrameName"><?php the_field('air_4_title'); ?></h2>
                <p class="description"><?php the_field('air_4_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-9">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Air</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('air_4_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('air_4_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

        </section>
        <section class="frame frame-4">
            <img class="frameForm" src="<?= THEME_URL ?>/assets/img/light-shape.svg" alt="Icône lumière" />
            <div class="frameName">La lumière</div>

            <div class="subFrame subFrame-1">
                <p class="description introduction"><?php the_field('light_description'); ?></p>
            </div>

            <div class="subFrameImg subFrame-2">
                <img src="<?= get_field('light_1_picture_1'); ?>" alt="Chaise longue" class="card card-1" />
                <img src="<?= get_field('light_1_picture_2'); ?>" alt="Chaise longue" class="card card-2" />
                <img src="<?= get_field('light_1_picture_3'); ?>" alt="Chaise longue" class="card card-3" />
            </div>
            <div class="subFrame subFrame-2">
                <h2 class="subFrameName"><?php the_field('light_1_title'); ?></h2>
                <p class="description"><?php the_field('light_1_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-10">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('light_1_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('light_1_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-3">
                <img src="<?= get_field('light_2_picture_1'); ?>" alt="Ombre" class="card card-1" />
                <img src="<?= get_field('light_2_picture_2'); ?>" alt="Ombre" class="card card-2" />
                <img src="<?= get_field('light_2_picture_3'); ?>" alt="Ombre" class="card card-3" />
            </div>
            <div class="subFrame subFrame-3">
                <h2 class="subFrameName"><?php the_field('light_2_title'); ?></h2>
                <p class="description"><?php the_field('light_2_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-11">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('light_2_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('light_2_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-4">
                <img src="<?= get_field('light_3_picture_1'); ?>" alt="Effet de serre" class="card card-1" />
                <img src="<?= get_field('light_3_picture_2'); ?>" alt="Effet de serre" class="card card-2" />
                <img src="<?= get_field('light_3_picture_3'); ?>" alt="Effet de serre" class="card card-3" />
            </div>
            <div class="subFrame subFrame-4">
                <h2 class="subFrameName"><?php the_field('light_3_title'); ?></h2>
                <p class="description"><?php the_field('light_3_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-12">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('light_3_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('light_3_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-5">
                <img src="<?= get_field('light_4_picture_1'); ?>" alt="Chaise longue" class="card card-1" />
                <img src="<?= get_field('light_4_picture_2'); ?>" alt="Chaise longue" class="card card-2" />
            </div>
            <div class="subFrame subFrame-5">
                <h2 class="subFrameName"><?php the_field('light_4_title'); ?></h2>
                <p class="description"><?php the_field('light_4_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-13">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('light_4_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('light_4_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frame frame-5 horizontalFrame">
            <img class="frameForm" src="<?= THEME_URL ?>/assets/img/flash-shape.svg" alt="Icône énergie" />
            <div class="frameName">L'énergie</div>

            <div class="subFrame subFrame-1">
                <p class="description introduction"><?php the_field('energy_description'); ?></p>
            </div>

            <div class="subFrameImg subFrame-2">
                <img src="<?= get_field('energy_1_picture_1'); ?>" alt="Nuages d'objets" class="card card-1" />
                <img src="<?= get_field('energy_1_picture_2'); ?>" alt="Nuages d'objets" class="card card-2" />
                <img src="<?= get_field('energy_1_picture_3'); ?>" alt="Nuages d'objets" class="card card-3" />
            </div>
            <div class="subFrame subFrame-2">
                <h2 class="subFrameName"><?php the_field('energy_1_title'); ?></h2>
                <p class="description"><?php the_field('energy_1_description'); ?></p>
                <a href="#" class="buttonDetail">Voir le détail</a>
                <div class="caseStudy caseStudy-14">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('energy_1_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('energy_1_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>

            <div class="subFrameImg subFrame-3">
                <img src="<?= get_field('energy_2_picture_1'); ?>" alt="Conférences" class="card card-1" />
                <img src="<?= get_field('energy_2_picture_2'); ?>" alt="Conférences" class="card card-2" />
                <img src="<?= get_field('energy_2_picture_3'); ?>" alt="Conférences" class="card card-3" />
            </div>
            <div class="subFrame subFrame-3">
                <h2 class="subFrameName"><?php the_field('energy_2_title'); ?></h2>
                <p class="description"><?php the_field('energy_2_description'); ?></p>
                <a href="#" class="buttonDetail">Les conférences passées</a>
                <div class="caseStudy caseStudy-15">
                    <div class="container">
                        <img class="goBack arrow" src="<?= THEME_URL ?>/assets/img/arrow_left.svg" alt="Flèche retour" />
                        <p class="studyTitle">Lumière</p>
                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows('energy_2_casestudy') ):

                             // loop through the rows of data
                            while ( have_rows('energy_2_casestudy') ) : the_row();

                                if( get_row_layout() == 'title' ):

                                	?><p class="studySubTitle"><?php the_sub_field('title'); ?></p><?php

                                elseif( get_row_layout() == 'paragraph' ):

                                	?><p class="studyParagraph"><?php the_sub_field('paragraph'); ?></p><?php

                                elseif( get_row_layout() == 'picture' ):

                                	?><img src="<?php the_sub_field('picture'); ?>" class="picture" alt="illustration" /><?php

                                endif;

                            endwhile;

                        else :

                            ?><p class="studySubTitle">Aucun résultat</p><?php

                        endif;

                        ?>
                        <div class="goBack button">Retour à la page visite</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
