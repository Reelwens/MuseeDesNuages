    <footer id="footer">
        <div class="footer_left">
            <img src="<?= THEME_URL ?>/assets/img/logoWhite.png" alt="Logo" class="logoFooter" />
            <a href="tel:+33683853390" class="number">+33 (0)6 83 85 33 90</a>
            <a href="mailto:museedesnuages@gmail.com" class="mail">museedesnuages@gmail.com</a>
            <p class="newsletterTitle">Newsletter</p>
            <div class="newsletterInput">
                <input type="text" placeholder="Email" />
                <img src="<?= THEME_URL ?>/assets/img/transfer.svg" alt="Arrow" class="arrow" />
            </div>
        </div>

        <div class="footer_right">
            <a href="<?= home_url() ?>/" class="navLink">Accueil</a>
            <a href="<?= home_url() ?>/visit" class="navLink">Visite</a>
            <a href="<?= home_url() ?>/news" class="navLink">Actualités</a>
            <a href="<?= home_url() ?>/services" class="navLink">Prestations</a>
            <a href="<?= home_url() ?>/contact" class="navLink">Contact</a>

            <div class="social">
                <a href="#"><img src="<?= THEME_URL ?>/assets/img/Facebook.svg" alt="Facebook" class="facebook" /></a>
                <a href="#"><img src="<?= THEME_URL ?>/assets/img/Twitter.svg" alt="Twitter" class="twitter" /></a>
                <a href="#"><img src="<?= THEME_URL ?>/assets/img/Instagram.svg" alt="Instagram" class="instagram" /></a>
                <a href="#"><img src="<?= THEME_URL ?>/assets/img/Linkedin.svg" alt="Linkedin" class="linkedin" /></a>
            </div>
        </div>
        <p class="copyright">©Copyright 2018</p>
    </footer>

    <div class="extra">
        <div class="loader display">Chargement...</div>
    </div>

    <?php wp_footer();  ?>
</body>
</html>
