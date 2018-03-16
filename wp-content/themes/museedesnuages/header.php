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
	<div class="toggleHeader"></div>
    <header id="header">

		<?php // SYNTAXE : wp_nav_menu( array $args = array() )
		$args=array(
		    'theme_location' => 'header', // nom du slug
		    'menu' => 'header_fr', // nom à donner cette occurence du menu
		    'menu_class' => 'menuHeader', // class à attribuer au menu
		);
		wp_nav_menu($args);
		?>
    </header>
