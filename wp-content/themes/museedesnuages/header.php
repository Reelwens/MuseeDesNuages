<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Un musée sans mur, dont l'entrée est partout et la sortie nulle part. Pour y entrer, il suffit de lever la tête." />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/img/favicon-96x96.png" sizes="96x96">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="toggleMenu">
		<?php include 'assets/img/menuToggle.svg' ?>
	</div>
	<div class="toggleSound">
		<div class="bar bar_0"></div>
		<div class="bar bar_1"></div>
		<div class="bar bar_2"></div>
		<div class="bar bar_3"></div>
		<div class="bar bar_4"></div>
		<div class="bar bar_5"></div>
		<div class="bar bar_6"></div>
	</div>

    <header class="menu">
		<nav>
			<div class="mobileTop"></div>
            <a href="<?= home_url() ?>" class="home menuItem menu_0">
				<img src="<?= THEME_URL ?>/assets/img/bg-home.png" alt="Background" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">01</p>
					<p class="name">Accueil</p>
					<p class="description">Découvrez nos valeurs à travers différentes interactions mettant en avant nos créations.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/visit" class="visit menuItem menu_1">
				<img src="<?= THEME_URL ?>/assets/img/bg-home.png" alt="Background" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">02</p>
					<p class="name">Visite</p>
					<p class="description">Plongez dans l’expérience de notre musée virtuel. Découvrez nos différentes collections.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/news" class="news menuItem menu_2">
				<img src="<?= THEME_URL ?>/assets/img/bg-home.png" alt="Background" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">03</p>
					<p class="name">Actualités</p>
					<p class="description">Articles sur l’eau, l’air et la lumière ainsi que notre flux Twitter des remarques de nos artistes.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/services" class="services menuItem menu_3">
				<img src="<?= THEME_URL ?>/assets/img/bg-home.png" alt="Background" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">04</p>
					<p class="name">Prestations</p>
					<p class="description">Découvrez ici toutes nos prestations mise en place pour les entreprises et les collectivités territoriales.</p>
				</div>
            </a>

            <a href="<?= home_url() ?>/contact" class="contact menuItem menu_4">
				<img src="<?= THEME_URL ?>/assets/img/bg-home.png" alt="Background" class="background">
				<div class="mask"></div>
				<div class="text">
					<p class="number">05</p>
					<p class="name">Contact</p>
					<p class="description">Toutes nos informations pratiques ainsi qu’un formulaire de contact pour nous joindre.</p>
				</div>
            </a>
        </nav>
    </header>
