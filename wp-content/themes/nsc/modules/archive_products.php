<section class="products inner_spacing">
    <div class="container">		
	    <div class="module_title" data-aos="fade-up">
		    <?php if( get_sub_field('archproduct_section_title') ) : ?>
		        <<?php echo get_sub_field('archproduct_section_title_tag');?> class="primary_color"><?php echo get_sub_field('archproduct_section_title'); ?></<?php echo get_sub_field('archproduct_section_title_tag');?>>
		    <?php endif; ?>
		</div>
		<div class="row products_row <?php if ( get_sub_field('archproduct_product_card_border')=="yes" ) { echo 'show_border'; } ?>">
		    <?php
		    $pro_border_radius=get_sub_field('archproduct_product_card_border_radius');
            $featured_posts = get_sub_field('archproduct_products');
            if( $featured_posts ): ?>
                <?php foreach( $featured_posts as $post ): 
                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); 
                    $product = wc_get_product( get_the_ID() );
                    //echo "<pre>";print_r($product);
                ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 product_col" data-aos="fade-up">
        				<div class="product_column" style="border-radius: <?php echo $pro_border_radius;?>px;">
        				    <?php if ( has_post_thumbnail() ) { ?>
        					    <div class="product_img"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>" alt="img"></div>
        					<?php } ?>
        					<div class="product_body">
        						<h5 class="accent_color"><?php echo $product->get_sku();?></h5>
        						<h3 class="primary_color"><?php echo $product->get_name();?></h3>
        					</div>
        					<div class="product_footer">
        						<a href="<?php echo get_permalink( $product->get_id() ); ?>" class="link secondary_link">See More <i class="fal fa-long-arrow-right"></i></a>
        					</div>
        				</div>
        			</div>
                <?php endforeach; ?>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>
		</div>	
	</div>
</section>