<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Assignment_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div class="col-lg-4 max-width">
                    
<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div>
 