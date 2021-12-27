<?php
/**
 * Template part for displaying nav
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Assignment_theme
 */

?>

<!--navbar-collapse-->
<div class="collapse navbar-collapse" id="main_nav">
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'assignmenttheme' ); ?></button>
        
            <?php
			    wp_nav_menu(
				array(
					'theme_location' => 'main',
					'menu_id'        => 'primary-menu',
					"container"      => "ul",
					"container_class" => "navbar-nav ml-auto mr-auto",
				)
			);
			?>
            <!-- </nav>#site-navigation
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"> Home </a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
                    </li>
                </ul>
            </div> -->
            <!--/-->
        		
	</header><!-- #masthead -->