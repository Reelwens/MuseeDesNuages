<?php get_header();  ?>

    <div class="visit">
        <a href="/"><img src="<?= THEME_URL ?>/assets/img/logoWhite.png" alt="Logo" class="logoMDN" /></a>
        <div class="background"></div>

        <section class="frame frame-1">
            <div class="texts">
                <h1 class="title">Nos collections</h1>
                <p class="bio">Découvrez-ici l’intégralité de nos collections réparties en quatre thématiques.<br />Laissez-vous guider par le sens de la visite. </p>
            </div>

            <div class="tickets">
                <img src="<?= THEME_URL ?>/assets/img/ticket1.png" alt="Ticket">
                <img src="<?= THEME_URL ?>/assets/img/ticket2.png" alt="Ticket">
            </div>

            <div class="scrollInvitation">
                <p>défiler vers le bas</p>
                <div class="lineScroll"><img src="<?= THEME_URL ?>/assets/img/line_scroll.svg" alt="Line scroll"></div>
            </div>
        </section>

        <section class="frame frame-2">
            <img class="frameForm" src="<?= THEME_URL ?>/assets/img/water-shape.svg" alt="Water shape" />
            <div class="frameName">L'eau</div>

            <div class="subFrame subFrame-1">
                <p class="description">Les nuages sont des châteaux d’eau suspendus, emportés par des vents qu’aucune frontière ne contraint. Ils n’ont pas attendu les effets de la mondialisation pour organiser des flux planétaires et pour redistribuer de façon peu équitable les ressources hydriques auxquelles notre société d’abondance s’est habituée.<br /><br />Autour des puits, des fontaines, des lavoirs ou d’un verre en terrasse, l’eau est un facteur de convivialité. Du monumental ouvrage d’art conçu pour l’irrigation, au robinet de confort, l'eau fut de tout temps un vecteur de culture.</p>
            </div>

            <div class="subFrame subFrame-2">
                <h2 class="subFrameName">Châteaux d'eau</h2>
                <p class="description">Un château d’eau est un repère, un signe de prospérité, un témoin de civilisation. Intégrer un château d’eau dans les collections du musée des nuages c’est « restaurer » le regard des habitants sur leurs équipements urbains.</p>
                <img src="<?= THEME_URL ?>/assets/img/castle1.png" alt="Chateau" class="card card-1" />
                <img src="<?= THEME_URL ?>/assets/img/castle2.png" alt="Chateau" class="card card-2" />
                <img src="<?= THEME_URL ?>/assets/img/castle3.png" alt="Chateau" class="card card-3" />
                <a href="#" class="buttonDetail">Voir le détail du projet</a>
            </div>

            <div class="subFrame subFrame-3">
                <h2 class="subFrameName">Bouteilles</h2>
                <p class="description">Bouteilles et verres à eau estampillés musée des nuages sont des petits monuments individuels dédiés à la conscience de l’eau et à son partage.</p>
                <img src="<?= THEME_URL ?>/assets/img/bottle-1.png" alt="Bouteille" class="card card-1" />
                <img src="<?= THEME_URL ?>/assets/img/bottle-2.png" alt="Bouteille" class="card card-2" />
                <img src="<?= THEME_URL ?>/assets/img/bottle-3.png" alt="Bouteille" class="card card-3" />
                <a href="#" class="buttonDetail">Voir le détail du projet</a>
            </div>


        </section>
    </div>

<?php get_footer(); ?>
