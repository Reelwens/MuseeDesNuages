<?php
/**
 * Template Name: Contact
**/
get_header();
?>
    <div class="contact">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo" class="logoMDN" /></a>
        <div class="headerPage">
            <h1 class="headerTitle"><?php the_field('header_title'); ?></h1>
            <p class="headerSubtitle"><?php the_field('header_subtitle'); ?></p>
            <div class="contactInfos">
                <div class="contactPhone">
                    <div class="contactLabel">Téléphone</div>
                    <div class="textContent"><?php the_field('header_phone'); ?></div>
                </div>
                <div class="contactMail">
                    <div class="contactLabel">E-mail</div>
                    <div class="textContent"><?php the_field('header_email'); ?></div>
                </div>
                <div class="contactSocial">
                    <div class="contactLabel">Nous suivre</div>
                    <a href="<?php the_field('header_facebook'); ?>"><img src="<?= THEME_URL ?>/assets/img/Facebook.svg" alt="Facebook" class="facebook" /></a>
                    <a href="<?php the_field('header_twitter'); ?>"><img src="<?= THEME_URL ?>/assets/img/Twitter.svg" alt="Twitter" class="twitter" /></a>
                    <a href="<?php the_field('header_insta'); ?>"><img src="<?= THEME_URL ?>/assets/img/Instagram.svg" alt="Instagram" class="instagram" /></a>
                    <a href="<?php the_field('header_linkedin'); ?>"><img src="<?= THEME_URL ?>/assets/img/Linkedin.svg" alt="Linkedin" class="linkedin" /></a>
                </div>
            </div>
        </div>
        <?php if( have_rows('founder') ): ?>
            <div class="founders">

                <?php while ( have_rows('founder') ) : the_row();
                    // vars
                    $name = get_sub_field('founder_name');
                    $status = get_sub_field('founder_status');
                    $photo = get_sub_field('founder_photo');

                ?>

                <div class="founder">

                    <?php if( $name ): ?>
                        <p class="founderName"><?php echo $name; ?></p>
                    <?php endif; ?>

                    <?php if( $status ): ?>
                        <p class="founderStatus"><?php echo $status; ?></p>
                    <?php endif; ?>

                    <?php if( $photo ): ?>
                        <div class="founderPhoto"><img src="<?php echo $photo; ?>"/></div>
                    <?php endif; ?>

                </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>
        <div class="contactForm">
            <div class="formHeader">
                <h2><?php the_field('form_title'); ?></h2>
                <p><?php the_field('form_subtitle'); ?></p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="45" title="Contact"]' ); ?>
        </div>
    </div>

<?php get_footer(); ?>
