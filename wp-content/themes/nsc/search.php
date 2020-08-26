<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nsc
 */

get_header();
?>
<section class="search_page inner_spacing">
    <div class="container">
        <div class="row">
            <?php if ( get_field('enable_sidebar_in_search_result_page','option')=="yes" ) { ?>
		        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
		    <?php } else { ?>
		        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
		    <?php } ?>
		        <div class="wide_column">
            		<?php if ( have_posts() ) : ?>
            			<header class="page-header">
            				<h1 class="page-title">
            					<?php
            					/* translators: %s: search query. */
            					printf( esc_html__( 'Search Results for: %s', 'nsc' ), '<span>' . get_search_query() . '</span>' );
            					?>
            				</h1>
            			</header><!-- .page-header -->
            
            			<?php
            			/* Start the Loop */
            			while ( have_posts() ) :
            				the_post();
            
            				get_template_part( 'template-parts/content', 'search' );
            
            			endwhile;
            
            			    the_posts_pagination( array(
                                'mid_size'=>3,
                            	'prev_text' => _( '<i class="fas fa-angle-left"></i>'),
                            	'next_text' => _( '<i class="fas fa-angle-right"></i>'),
                            ) );
            		else :
            			get_template_part( 'template-parts/content', 'none' );
            		endif;
            		?>
            	 </div>
        	</div>
        	<?php if ( get_field('enable_sidebar_in_search_result_page','option')=="yes" ) { ?>
        	<div class="col-12 col-sm-12 col-md-5 col-lg-4">    
		  	    <div class="narrow_column">
                    <?php get_sidebar();?>
		  	    </div>
		  	</div>
		  	<?php } ?>
		</div>
    </div>
</section>
<?php
//get_sidebar();
get_footer();
