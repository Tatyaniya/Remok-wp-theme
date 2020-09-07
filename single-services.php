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

    <section class="screedFloor">
        <div class="container screedFloor__container">
            <h2 class="screedFloor__title"><?php the_title(); ?></h2>
            <div class="screedFloor__desc">

                <?php the_content(); ?>

                <?php 
                    //wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>
    <section class="popularity">
        <div class="container popularity__container">
            <h3 class="popularity__title"><?php the_field('title-2-s'); ?></h3>
            <ul class="popularity__list">
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('1_advantage'); ?>
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('2_advantage'); ?>
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('3_advantage'); ?>
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('4_advantage'); ?>
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('5_advantage'); ?>
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        <?php the_field('6_advantage'); ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="screedOrder">
        <div class="container screedOrder__container">
            <h3 class="screedOrder__title"><?php the_field('title-3-s'); ?></h3>
            <div class="screedOrder__info">
                <div class="screedOrder__cont">
                    <div class="screedOrder__desc">
                        <?php the_field('text-3-s'); ?>
                        <div class="screedOrder__phones">
                            <p>Номери телефонів:</p>
                            <div class="screedOrder__item">
                                <a href="tel:+38<?php the_field('tel-1'); ?>" class="screedOrder__phone">
                                    <?php the_field('tel-1'); ?>
                                </a>
                            </div>
                            <div class="screedOrder__item">
                                <a href="tel:+38<?php the_field('tel-2'); ?>" class="screedOrder__phone">
                                    <?php the_field('tel-2'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="screedOrder__links">
                            <a href="javascript:void(0);" class="screedOrder__link-order">Замовити послугу</a>
                            <a href="index.html#calc" class="screedOrder__link-calc">Розрахувати вартість</a>
                        </div>
                    </div>
                </div>
                <div class="screedOrder__img">

                    <img src="<?php echo get_field('image-3-s')['url']; ?>" alt="<?php echo get_field('image-3-s')['alt']; ?>">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="installation">
        <div class="container installation__container">
            <h2 class="installation__title"><?php the_field('title-4-s'); ?></h2>
            <div class="installation__img">
                <img src="<?php echo get_field('image-4-s')['url']; ?>" alt="<?php echo get_field('image-4-s')['alt']; ?>">
            </div>
            <div class="installation__gallery">
                <?php echo do_shortcode( '[rl_gallery id="95"]' ); ?>
            </div>
        </div>
    </section>

</main>

<?php

get_footer();
