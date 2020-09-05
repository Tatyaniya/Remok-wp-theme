<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package r-group
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" type="image/x-icon">

	<?php wp_head(); ?>
</head>


<body>
    <div class="wrap">
        <header class="header">
            <div class="container header__container">
                <a href="<?php echo site_url(); ?>" class="Remok Group">
                    <img src="img/logo.png" alt="Remok Group">
                </a>
                <nav class="menu header__menu">
                    <div class="hamburger">
                        <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path
                                class="line top"
                                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path
                                class="line middle"
                                d="m 70,50 h -40" />
                            <path
                                class="line bottom"
                                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                        </svg>
                    </div>

                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'header_menu',
                            'menu'            => 'header-menu', 
                            'container'       => false, 
                            'menu_class'      => 'menu-index menu__list',
                            'echo'            => true,
                            'depth'           => 0,
                            'walker'          => '',
                        ] );
                    ?>

                </nav>
                <div class="phones header__phones">
                    <div class="phones__item">
                        <a href="tel:+38050 7 000 117" class="phones__link">050 7 000 117</a>
                    </div>
                    <div class="phones__item">
                        <a href="tel:+38068 4 101 552" class="phones__link">068 4 101 552</a>
                    </div>
                </div>
            </div>
        </header>


