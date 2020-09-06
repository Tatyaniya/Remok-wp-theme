<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package r-group
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="blogPage__aside">

    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    
    <!-- <p>І етап  як правильно проводити заміри</p>
    <p class="active">Інструкція з монтажу та поради</p> -->
</aside>

<!-- <aside id="secondary" class="widget-area">
	
</aside> -->
