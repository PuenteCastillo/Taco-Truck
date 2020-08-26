<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nsc
 */

get_header();
?>
<section class="page_top_image default inner_spacing">
	<div class="page_top_bg bgtop" style="background-image:url(<?php echo get_field('blog_default_banner_image','option');?>">
	    <div class="overlay" style="background-color: #000000;opacity:0.6"></div>
	</div>
    <div class="container">
    	<div class="module_title">
    	    <h4 class="accent_color"><?php echo get_field('blog_default_banner_sub_head','option');?></h4> 
    	    <h2><?php echo get_field('blog_default_banner_header','option');?></h2>
    	</div>
    </div>
</section>
<section class="blog_listing inner_spacing">	
    <div class="container">		
	    <div class="row">
		    <div class="col-12 col-sm-12 col-md-7 col-lg-8">
		  	    <div class="wide_column">
		  	        <?php if ( have_posts() ) : ?>
                        <div class="row cards_row">
                			<?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 cards_col">
    		                    	<div class="card h-100">
    		                    	    <a href="<?php the_permalink(); ?>" class="card_block_link"></a>
    					        		<div class="card_image_wrap">
    							        	<?php if ( has_post_thumbnail() ) { $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
                                                <div class="card_image" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
                                            <?php }else {?>
                                                <div class="card_image" style="background-image: url('<?php echo get_field('blog_default_featured_image','options');?>');"></div>
                                            <?php } ?>
    							        </div>
    							        <div class="card-body">
    								        <span class="card_date"><?php echo get_the_date();?></span>
    								        <h4 class="card-title primary_color"><?php echo get_the_title();?></h4>
    								        <?php if ( has_excerpt() ) { ?> <p><?php echo get_the_excerpt();?></p> <?php }?>
    								        <span class="link secondary_link">Read More <i class="fal fa-long-arrow-right"></i></span>
    							        </div>
    						        </div>
    					        </div>
                    		<?php endwhile;?>
                		</div>
                        <?php the_posts_pagination( array(
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
		  	<div class="col-12 col-sm-12 col-md-5 col-lg-4">    
		  	    <div class="narrow_column">
                    <?php get_sidebar();?>
		  	    </div>
		  	</div>
		</div>
	</div>
</section>
<?php
get_footer();