<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Un musée de notre temps où l'art inspire notre sensibilité environnementale. Un musée sans mur, dont l'entrée est partout et la sortie nulle part. Pour y entrer, il suffit de lever la tête." />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-96x96.png" sizes="96x96">

	<?php wp_head(); ?>
</head>
<body <?php if (is_front_page()) { body_class( 'loading loadingEnding' ); }; ?>>
	<div class="toggleMenu">
		<?php include 'assets/img/menuToggle.svg' ?>
		<p class="textMenu">Menu</p>
	</div>

    <header class="menu">
		<nav>
			<div class="mobileTop"></div>
            <a href="<?= home_url() ?>" class="home menuItem menu_0">
				<img src="<?= THEME_URL ?>/assets/img/menu_1.jpg" alt="Mer de nuages" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">01</p>
					<p class="name">Accueil</p>
					<p class="description">Découvrez l'histoire du&nbsp;;musée des&nbsp;nuages.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/visit" class="visit menuItem menu_1">
				<img src="<?= THEME_URL ?>/assets/img/menu_2.jpg" alt="Aurore boréale" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">02</p>
					<p class="name">Visite</p>
					<p class="description">Découvrez nos collections. Plongez dans notre musée virtuel.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/news" class="news menuItem menu_2">
				<img src="<?= THEME_URL ?>/assets/img/menu_3.jpg" alt="Foudre" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">03</p>
					<p class="name">Actualités</p>
					<p class="description">Articles en liaison avec&nbsp;l'actualité de l'art&nbsp;et&nbsp;de l'environnement.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/services" class="services menuItem menu_3">
				<img src="<?= THEME_URL ?>/assets/img/menu_4.jpg" alt="Etoile filante" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">04</p>
					<p class="name">Prestations</p>
					<p class="description">Nos prestations pour&nbsp;les&nbsp;entreprises et les&nbsp;collectivités territoriales.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/contact" class="contact menuItem menu_4">
				<img src="<?= THEME_URL ?>/assets/img/menu_5.jpg" alt="Etoiles" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">05</p>
					<p class="name">Contact</p>
					<p class="description">Contactez-nous et&nbsp;accédez aux informations pratiques.</p>
				</div>
            </a>
        </nav>
    </header>
