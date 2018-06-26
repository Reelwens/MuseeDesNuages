    <footer id="footer">
        <div class="footer_left">
            <img src="<?= THEME_URL ?>/assets/img/logoWhite.svg" alt="Logo" class="logoFooter" />
            <a href="tel:+33683853390" class="number">+33 (0)6 83 85 33 90</a>
            <a href="mailto:museedesnuages@gmail.com" class="mail">accueil@museedesnuages.fr</a>
            <p class="newsletterTitle">Recevoir la newsletter</p>
            <div class="newsletterInput">
                <input type="text" placeholder="Email" disabled title="À venir prochainement" />
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
                <a href="https://www.facebook.com/lemuseedesnuages/" target="_blank"><img src="<?= THEME_URL ?>/assets/img/Facebook.svg" alt="Facebook" class="facebook" /></a>
                <a href="https://twitter.com/museedes_nuages"><img src="<?= THEME_URL ?>/assets/img/Twitter.svg" alt="Twitter" class="twitter" /></a>
                <a href="https://www.instagram.com/museedesnuages/"><img src="<?= THEME_URL ?>/assets/img/Instagram.svg" alt="Instagram" class="instagram" /></a>
                <a href="https://www.linkedin.com/in/mus%C3%A9e-des-nuages-climat-artistique-0578b3133/"><img src="<?= THEME_URL ?>/assets/img/Linkedin.svg" alt="Linkedin" class="linkedin" /></a>
            </div>
        </div>
        <div class="legalNotices"><a href="/legalnotices">Mentions légales</a></div>
        <p class="copyright">© Copyright 2018</p>
    </footer>

    <?php wp_footer();  ?>
</body>
</html>
