<?php
$main_title_tag=get_sub_field('blog1_sec_title_tag');
$sub_head_tag=get_sub_field('blog1_sec_sub_head_tag');
$pribtn_left_top_rad=get_sub_field('blog1_sec_left_top_border_radius');
$pribtn_left_bottom_rad=get_sub_field('blog1_sec_left_bottom_border_radius');
$pribtn_right_top_rad=get_sub_field('blog1_sec_right_top_border_radius');
$pribtn_right_bottom_rad=get_sub_field('blog1_sec_right_bottom_border_radius');
$brdrradius=$pribtn_left_top_rad."px ".$pribtn_right_top_rad."px ".$pribtn_right_bottom_rad."px ".$pribtn_left_bottom_rad."px";
?>

<section class="blog_module inner_spacing" <?php if ( get_sub_field('blog1_sec_section_background_color') ) { ?> style="background-color:<?php echo get_sub_field('blog1_sec_section_background_color');?>" <?php } ?>>
	<div class="container">
		<div class="module_title text-center" data-aos="fade-up">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-12 col-md-12 col-lg-7">
					<?php if( get_sub_field('blog1_sec_title') ) : ?><<?php echo $main_title_tag;?> class="accent_color"><?php echo get_sub_field('blog1_sec_title'); ?></<?php echo $main_title_tag;?>><?php endif; ?>
				    <?php if( get_sub_field('blog1_sec_sub_head') ) : ?><<?php echo $sub_head_tag; ?> class="primary_color"><?php echo get_sub_field('blog1_sec_sub_head'); ?></<?php echo $sub_head_tag; ?>><?php endif; ?>
				</div>
			</div>
		</div>
		
        <?php
        global $post;
        $myposts = get_posts( array(
            'posts_per_page' => get_option( 'posts_per_page' ),
        ) );
        if ( $myposts ) : ?>
        	<div class="blog_slider" id="blog_slider">	    
            <?php foreach ( $myposts as $post ) :
              setup_postdata( $post ); ?>
                <a href="<?php the_permalink(); ?>" class="thumb_column" style="width: 100%; display: inline-block;" tabindex="-1" data-aos="fade-up">
                <?php if ( has_post_thumbnail() ) { $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
                    <div class="thumb_image" style="background-image: url('<?php echo $featured_img_url; ?>');border-radius:<?php echo $brdrradius;?>;"></div>
                <?php }else {?>
                    <div class="thumb_image" style="background-image: url('<?php echo get_field('blog_default_featured_image','options');?>');border-radius:<?php echo $brdrradius;?>;"></div>
                <?php } ?>
				<div class="thumb_body">
					<div class="thumb_title">
					    <?php 
					    $categories = get_the_category();
                        $separator = ' ';
                        $output = '';
                        if ( ! empty( $categories ) ) {
                            foreach( $categories as $category ) {
                                $output .= esc_html( $category->name ) . $separator;
                            }
                            echo "<h6 class='accent_color'>".trim( $output, $separator )."</h6>";
                        }?>
						<h4 class="primary_color"><?php echo get_the_title(); ?></h4> 
						<small class="thumb_date"><?php echo get_the_date();?></small>
					</div>
					<?php if ( has_excerpt() ) { ?> <p><?php echo get_the_excerpt();?></p> <?php }?>
					<span class="readmore"><i class="fal fa-arrow-right"></i> Read More</span>
				</div>
			    </a>
            <?php endforeach; ?>
            </div>
            <?php if ( count($myposts) > 3 )  {?>
                <div class="pagination_nav text-center">
        			<a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>		
        			<div id="dots_parent"></div>
        			<a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>
        		</div>     
            <?php } wp_reset_postdata();endif;?>
	</div>
</section>