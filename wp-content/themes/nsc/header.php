<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nsc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if( get_field('tfont_google_font_url', 'option') ){ echo get_field('tfont_google_font_url', 'option'); } ?>
	<?php wp_head(); ?>
	<?php if ( get_field('scripts_in_header', 'option') ) : ?>
        <?php echo get_field('scripts_in_header', 'option'); ?>
    <?php endif; ?>
    <?php if ( get_field('custom_css_for_this_page') ) : ?>
        <style>
            <?php echo get_field('custom_css_for_this_page'); ?>
        </style>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nsc' ); ?></a>
	
	<?php 	if( get_field('enable_hero_image') == "true" ) { get_template_part('modules/hero_image_above_nav'); }?>
	

	<?php 
    	$nav_box_shadow="";
    	$navsticky="";
	    	if( get_field('pg_nav_navigation_style') == "custom" )
			{
				    if( get_field('pg_nav_box_shadow') == "true" ){ $nav_box_shadow="nav_box_shadow"; }
				    if( get_field('pg_nav_sticky_nav') == "true" ){ $navsticky="sticky_header"; }
			}
			else
			{
                    if( get_field('navbar_box_shadow', 'option') == "true" ){ $nav_box_shadow="nav_box_shadow"; }
                    if( get_field('navbar_sticky_nav', 'option') == "true" ){ $navsticky="sticky_header"; }
			}
	?> 
	<header id="masthead" class="site-header <?php echo $navsticky;?> <?php echo $nav_box_shadow;?>">		
		<div class="container">
			<div class="main_header">
				<div class="site-brand">
				    <?php 
	    				$headlogourl="";
	    				if( get_field('pg_nav_navigation_style') == "custom" ){
	        				if ( get_field('pg_nav_page_logo') ){
	        				    $headlogourl=get_field('pg_nav_page_logo');
	        				} else if ( get_field('default_logo_type', 'option') == 'dark' ){
					       	    $headlogourl=get_field('main_logo_dark','options');
					       	}else{
	    				    	$headlogourl=get_field('main_logo_light_version','options');
					       	}
	    				}
					    else{
					       	if ( get_field('default_logo_type', 'option') == 'dark' ){
					       	    $headlogourl=get_field('main_logo_dark','options');
					       	}else{
	    				    	$headlogourl=get_field('main_logo_light_version','options');
					       	}
	                    }   
	    			?>
					<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>" class="logo">
	                    <img src="<?php echo $headlogourl;?>" alt="<?php echo get_bloginfo('name');?>">
				    </a>
				</div><!-- #site-brand -->
				<nav id="site-navigation" class="main-navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'nsc' ); ?></button> -->
					<div class="search_btn d-md-block d-lg-none">
                        <i class="far fa-search icon_search"></i>
                    </div>
					
					<?php 
					$nav_filled_arrow="";
					$nav_bottom_border="";
					$nav_separator="";

					if( get_field('pg_nav_navigation_style') == "custom" )
					{
					    if( get_field('pg_nav_filled_arrow') == "true" ){ $nav_filled_arrow="nav_filled_arrow"; }
					    if( get_field('pg_nav_bottom_border') == "true" ){ $nav_bottom_border="nav_bottom_border"; }
					    if( get_field('pg_nav_separator') == "true" ){ $nav_separator="nav_separator"; }
					}
					else
					{
					    if( get_field('navbar_filled_arrow', 'option') == "true" ){ $nav_filled_arrow="nav_filled_arrow"; }
					    if( get_field('navbar_bottom_border', 'option') == "true" ){ $nav_bottom_border="nav_bottom_border"; }
					    if( get_field('navbar_separator', 'option') == "true" ){ $nav_separator="nav_separator"; }
					}
					?>    
				
					<div class="enumenu_ul <?php echo $nav_filled_arrow." ".$nav_bottom_border." ".$nav_separator;?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
						<div class="header_search_bar">						
							<div class="search_btn d-none d-lg-block">	                            
	                            <i class="far fa-search icon_search"></i>
	                        </div>
							<div class="top_search_field">
		                        <div class="container">
		                        	<div class="search_field_inner">
		                        		<a href="javascript:void(0);" class="search_close_btn"><i class="fal fa-times"></i></a>
			                            <form role="search" method="get" class="search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			                                <input type="search" class="search-field ark-search-field-input" placeholder="Search &hellip;" value="" name="s" />
			                                <button type="submit" class="search-submit"><i class="far fa-search"></i></button>
			                            </form>
		                            </div>                                
		                        </div>
		                    </div>
						</div>
					</div>
				</nav><!-- #site-navigation -->
			</div><!-- .main_header -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	
	<?php if( is_product() && get_field('top_banner') ) { 
	$skcls='';
	if ( get_field('product_detail_page_enable_slant_on_banner', 'option')=="yes" ) {
	    if ( get_field('product_page_banner_slant_position', 'option')=="left" )
	    {
	        $skcls='skew skew_left';
	    } else {
	        $skcls='skew skew_right';
	    }
	}
	?>
    <section class="product_top_banner page_top_image default inner_spacing section_bg <?php echo $skcls;?>">
        	<div class="page_top_bg bgtop" style="background-image:url(<?php echo get_field('top_banner');?>);">
        	    <div class="overlay" style="background-color: #000000;opacity:0.6"></div> 
        	</div>
        </section>
	<?php  } ?>
	
	
