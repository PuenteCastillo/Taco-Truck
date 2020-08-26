<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nsc
 */

get_header();
?>
<section class="search_page inner_spacing">
    <div class="container">
        <div class="row">
	        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

		        <div class="wide_column">
            		<?php if ( have_posts() ) : ?>
            			<header class="page-header">
            				<h1 class="page-title">News</h1>
            			</header><!-- .page-header -->
            
            			<?php
            			/* Start the Loop */
            			while ( have_posts() ) :
            				the_post();?>
            
            				<a href="<?php echo esc_url( get_field('redirect_url') );?>" class="search_post clearfix" target="_blank">
                                    <?php if ( has_post_thumbnail() ) { ?><div class="search_post_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"></div><?php } ?>
                                    <div class="search_post_content">
                                        <span class="search_post_date"><?php the_time( 'l, F j, Y' ); ?></span>
                                        <h3 class="primary_color"><?php echo get_the_title();?></h3>
                                        <?php the_excerpt(); ?>
                                        <span class="accent_color">Read More <i class="fas fa-caret-right"></i></span>
                                    </div>
                            </a>
            
            			<?php endwhile;
            
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
		</div>
    </div>
</section>
<?php
get_footer();
