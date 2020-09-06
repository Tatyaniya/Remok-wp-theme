<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package r-group
 */

get_header( 'inner' );
?>

<main class="main">
        <section class="blogPage blogPage-404">
            <div class="container blogPage__container">
                <h2 class="blogPage__title">Такої сторінки у нас немає.</h2>
                <div class="blogPage__subtitle">Перейти до послуг:</div>
                <nav class="blogPage__menu">

                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'services-menu',
                            'menu'            => 'services-menu', 
                            'container'       => false, 
                            'menu_class'      => 'blogPage__list',
                            'echo'            => true,
                            'depth'           => 0,
                            'walker'          => '',
                        ] );
                    ?>

                </nav>
                
            </div>
        </section>
    </main>


	
<?php
get_footer();
