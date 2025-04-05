<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arhitektura_Teme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
    <div class="container">
        <!-- Lijeva strana: Logo -->
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php 
                    if ( has_custom_logo() ) {
                        the_custom_logo(); 
                    } else { 
                        echo '<h1 class="site-title">' . get_bloginfo( 'name' ) . '</h1>'; 
                    }
                ?>
            </a>
        </div>
        <!-- Desna strana: Navigacija -->
        <nav id="site-navigation" class="main-navigation">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-links'
                    )
                );
            ?>
        </nav>
    </div>
</header>

