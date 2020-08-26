<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nsc
 */

get_header();

if ( get_field('banner_image') ) { 
    $bnnrimg=get_field('banner_image');
} else {
    $bnnrimg=get_field('blog_default_banner_image','option');
}

$skcls='';
if ( get_field('single_blog_slant_banner', 'option')=="yes" ) {
    if ( get_field('single_blog_banner_slant_position', 'option')=="left" )
    {
        $skcls='skew skew_left';
    } else {
	    $skcls='skew skew_right';
	}
}
?>
<section class="page_top_image default inner_spacing <?php echo $skcls;?>">
	<div class="page_top_bg bgtop" style="background-image:url(<?php echo $bnnrimg;?>">
	    <div class="overlay" style="background-color: #000000;opacity:0.6"></div>
	</div>
    <div class="container">
    	<div class="module_title">
    	    <h4 class="accent_color"><?php echo get_field('blog_default_banner_sub_head','option');?></h4> 
    	    <h2><?php echo get_the_title();?></h2>
    	</div>
    </div>
</section>
<section class="blog_single inner_spacing">	
    <div class="container">		
        <div class="post_cover">
            	<div class="row">
    		        <div class="col-12 col-sm-12 col-md-6 col-lg-6 post_left_Data">		        	
    	        		<div class="post_text"><?php the_author_meta( 'display_name'); ?> <span class="divider">|</span> <?php echo get_the_date(); ?></div>
    	        		<a href="mailto:<?php echo get_the_author_meta( 'user_email'); ?>"><?php echo get_the_author_meta( 'user_email'); ?></a>
    		        </div>
    		        <div class="col-12 col-sm-12 col-md-6 col-lg-6 post_right_Data">
    		            <?php $categories = get_the_category();
                        foreach( $categories as $category) {
                            $name = $category->name;
                            $category_link = get_category_link( $category->term_id );
                            echo "<a href='$category_link' class='btn btn_primary'>".esc_attr($name)."</a>";
                        }?>
    		        </div>
    		   </div>        	
        </div>
        
	    <div class="row">
	        <!--<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h1><?php single_post_title(); ?></h1></div>-->
	        
	        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
		  	    <div class="wide_column">
    	          <?php
    	          
                		while ( have_posts() ) :
                			the_post();?>
                            
                    		<div class="top_blog_content"><?php the_content();?></div>

                			<?php // If comments are open or we have at least one comment, load up the comment template.
                			if ( comments_open() || get_comments_number() ) :
                				comments_template();
                			endif;
                
                		endwhile; // End of the loop.
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