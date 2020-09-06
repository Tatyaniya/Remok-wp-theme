<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package r-group
 */

get_header( 'inner' );
?>

    <main class="main">
        <section class="blogPage">
            <div class="container blogPage__container">
                <h2 class="blogPage__title">Блог</h2>
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
                <div class="blogPage__content">
                    <aside class="blogPage__aside">

                        <?php $args = array(
                            'orderby' => 'name',
                            'style' => 'none',
                            'title_li' => ''
                        );
                        
                        wp_list_categories($args); ?>

                    </aside>


                    <article class="article blogPage__article">

                        <h3 class="article__title"><?php the_title(); ?></h3>
                        <div class="article__content">

                            <?php the_content(); ?>

                            <?php the_time( 'd.m.Y' ); ?>

                        </div>

                    </article>
                </div>
            </div>
        </section>
    </main>

<?php

get_footer();
