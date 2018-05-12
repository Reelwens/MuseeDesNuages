    <footer id="footer">
        <div class="footer_left">
            <img src="<?= THEME_URL ?>/assets/img/logoWhite.png" alt="Logo" class="logoFooter" />
            <a href="tel:+33683853390" class="number">+33 (0)6 83 85 33 90</a>
            <a href="mailto:museedesnuages@gmail.com" class="mail">museedesnuages@gmail.com</a>
            <p class="copyright">©Copyright 2018</p>
        </div>

        <div class="footer_right">
            <a href="<?= home_url() ?>/" class="navLink">Accueil</a>
            <a href="<?= home_url() ?>/visit" class="navLink">Visite</a>
            <a href="<?= home_url() ?>/news" class="navLink">Actualités</a>
            <a href="<?= home_url() ?>/services" class="navLink">Prestations</a>
            <a href="<?= home_url() ?>/contact" class="navLink">Contact</a>
        </div>
    </footer>

    <div class="extra">
        <div class="loader display">Chargement...</div>
    </div>

    <?php wp_footer();  ?>
</body>
</html>
