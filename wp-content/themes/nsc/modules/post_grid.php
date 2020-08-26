<?php

if ( get_sub_field('post_grid_explore_link_text') ){ $explorebtntxt=get_sub_field('post_grid_explore_link_text'); } else{ $explorebtntxt='Explore'; }

$noofcolumns=get_sub_field('post_grid_no_of_columns');

if ( $noofcolumns==2 ) {

    $colclass="col-12 col-sm-12 col-md-6 col-lg-6";

    $lsclss="listcol_2";

} else if ( $noofcolumns==3 ) {

    $colclass="col-12 col-sm-12 col-md-6 col-lg-4";

    $lsclss="listcol_3";

} else { 

    $colclass="col-12 col-sm-12 col-md-4 col-lg-3";

    $lsclss="listcol_4";

}

?>

<section class="products_2_col inner_spacing">

	<div class="container">

		<div class="products_col_middle">

			<div class="row products_col_row <?php echo $lsclss;?>">

			    <?php if ( get_sub_field('post_grid_show_recent_products') == "true" ){ ?>

                    <?php

                        $nooproduct=get_sub_field('post_grid_no_of_products');

                        $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => $nooproduct, 'orderby' =>'date','order' => 'DESC' );

                        $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                        <div class="<?php echo $colclass;?> products_col" data-aos="fade-in">

        					<div class="products_content">

        					    <?php if (has_post_thumbnail( $loop->post->ID )){?><img src="<?php echo get_the_post_thumbnail_url($loop->post->ID);?>" alt="img"><?php } ?>

        						<div class="product_foo">

        							<span class="product_caption primary_color"><?php the_title(); ?></span>

        							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="morelink"><?php echo $explorebtntxt;?> <i class="fal fa-long-arrow-right"></i></a>

        						</div>

        					</div>

    				    </div>

                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>

                <?php } else { ?>

                    <?php $posts = get_sub_field('post_grid_products'); ?>

                    <?php if ( $posts ): ?>

                            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

                            <div class="<?php echo $colclass;?> products_col" data-aos="fade-in">

            					<div class="products_content">

            					    <?php if (has_post_thumbnail()){?><img src="<?php echo get_the_post_thumbnail_url();?>" alt="img"><?php } ?>

            						<div class="product_foo">

            							<span class="product_caption primary_color"><?php the_title(); ?></span>

            							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="morelink"><?php echo $explorebtntxt;?> <i class="fal fa-long-arrow-right"></i></a>

            						</div>

            					</div>

        				    </div>

                            <?php endforeach; wp_reset_postdata(); ?>

                    <?php endif; ?>

                <?php } ?>

			</div>	

		</div>

	</div>

</section>