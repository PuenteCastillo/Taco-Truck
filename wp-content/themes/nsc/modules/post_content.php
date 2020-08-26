<?php
$main_title_tag=get_sub_field('post_cnt_section_title_tag');
if ( get_sub_field('post_cnt_section_background_type') == "color" ){
    $bgstyle='style="background-color:'.get_sub_field('post_cnt_section_background_color').';"';
    $sctbg='';
}
else{
    $bgstyle='style="background-image:url('.get_sub_field('post_cnt_section_background_image').');"';
    $sctbg='section_bg';
}
if ( get_sub_field('post_cnt_section_posts_style') == "styleone" ){
?>
<section class="related_products related_products_style1 inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
	<div class="container">
		<div class="module_title text-center" data-aos="fade-up">			
			<?php if( get_sub_field('post_cnt_section_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('post_cnt_section_title'); ?></<?php echo $main_title_tag; ?>><?php endif; ?>
		</div>
        <?php $posts = get_sub_field('post_cnt_section_posts'); ?>
        <?php if ( $posts ): ?>
            <div class="related_products_slider" id="related_products_slider">
        		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
        			<a href="<?php the_permalink(); ?>" class="thumb_column">
        			    <?php if ( has_post_thumbnail() ) { $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
                            <div class="thumb_image" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
                        <?php }else {?>
                            <div class="thumb_image" style="background-image: url('<?php echo get_field('blog_default_featured_image','options');?>');"></div>
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
                                    echo "<h6>".trim( $output, $separator )."</h6>";
                                }?>
        						<h5><?php the_title(); ?></h5>
        					</div>
        					<?php if ( has_excerpt() ) { ?> <p><?php echo get_the_excerpt();?>...</p> <?php }?>
        					<span class="morelink">Read More <i class="far fa-long-arrow-right"></i></span>
        				</div>
            		</a>
        		<?php endforeach; wp_reset_postdata(); ?>
            </div>
            <?php if ( count($posts) > 3 )  {?>
                <div class="pagination_nav text-center">
                	<a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>		
                	<div id="related_products_dots"></div>
                	<a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>
                </div>
            <?php } wp_reset_postdata();
        endif;
        ?>
        <?php 
        $link = get_sub_field('post_cnt_section_view_all_cta');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="text-center"><a class="viewlink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
        <?php endif; ?>
	</div>
</section>

<?php } elseif ( get_sub_field('post_cnt_section_posts_style') == "styletwo" ) { ?>

<section class="latest_news inner_spacing">	
	<div class="container">
		<div class="module_title text-center">			
			<?php if( get_sub_field('post_cnt_section_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('post_cnt_section_title'); ?></<?php echo $main_title_tag; ?>><?php endif; ?>
		</div>
		<?php  
		$totlpost=0;
		if ( get_sub_field('post_cnt_section_posts') ) {
		    $posts = get_sub_field('post_cnt_section_posts'); 
		    $totlpost=count($posts) + 1;
        }   
		if ( $posts ): ?>
        <div class="latest_news_slider" id="latest_news_slider">
           	<?php $i=1;$k=1;foreach ( $posts as $post ) : setup_postdata( $post ); ?>
     	    	    <?php if ($i==1 ) {echo '<div><div class="row">';}?>
        			<div class="col-12 col-sm-12 col-md-6 col-lg-6 <?php echo $i." ".$k++;?>" data-aos="fade-up">
        				<div class="latest_news_block">
        					<h6 class="tertiary_color"><?php echo get_the_date();?></h6>
        					<h4 class="primary_color"><?php the_title(); ?></h4>
            				<?php if ( has_excerpt() ) { ?> <p><?php echo get_the_excerpt();?>...</p> <?php }?>
            				<a href="<?php the_permalink(); ?>" class="morelink">Read More <i class="far fa-long-arrow-right"></i></a>
        				</div>
        			</div>
        			<?php if ( $i==4 ) {echo '</div></div>';$i=1;} else { $i++; }?>
        			<?php if ( $k==$totlpost && $i<4 ) {echo '</div></div>';}?>
        	<?php endforeach; ?>
        </div>
        <?php if ( count($posts) > 4 )  {?>
            <div class="pagination_nav text-center">
            <a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>
            <div id="latest_news_slider_dots"></div>
            <a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>
            </div>
        <?php } wp_reset_postdata();
        endif;
        ?> 
        <?php 
        $link = get_sub_field('post_cnt_section_view_all_cta');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="text-center"><a class="viewlink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
        <?php endif; ?>
	</div>
</section>
<?php } else { ?>
    <section class="related_products post_content_style3 inner_spacing <?php echo $sctbg;?>" <?php echo $bgstyle;?>>
    	<div class="container">
    		<div class="module_title text-center" data-aos="fade-up">			
    			<?php if( get_sub_field('post_cnt_section_title') ) : ?><<?php echo $main_title_tag;?> class="primary_color"><?php echo get_sub_field('post_cnt_section_title'); ?></<?php echo $main_title_tag; ?>><?php endif; ?>
    		</div>
            <?php $posts = get_sub_field('post_cnt_section_posts'); ?>
            <?php if ( $posts ): ?>
                <div class="related_products_slider" id="post_content_slider">
            		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            			<a href="<?php the_permalink(); ?>" class="thumb_column" style="border-radius: 0 10px 10px 10px;">
            			    <?php if ( has_post_thumbnail() ) { $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');  ?>
                                <div class="thumb_image" style="background-image: url('<?php echo $featured_img_url; ?>');"></div>
                            <?php }else {?>
                                <div class="thumb_image" style="background-image: url('<?php echo get_field('blog_default_featured_image','options');?>');"></div>
                            <?php } ?>
            				<div class="thumb_body">
            					<div class="thumb_title">
            					    <div class="postdate_title">
                					    <span class="postdate"><?php echo get_the_date('d');?><br><?php echo get_the_date('M');?></span>
                					    <?php 
                					    $categories = get_the_category();
                                        $separator = ' ';
                                        $output = '';
                                        if ( ! empty( $categories ) ) {
                                            foreach( $categories as $category ) {
                                                $output .= esc_html( $category->name ) . $separator;
                                            }
                                            echo "<h6>".trim( $output, $separator )."</h6>";
                                        }?>
                                    </div>
                					<h5><?php the_title(); ?></h5>
            					</div>
            					<?php if ( has_excerpt() ) { ?> <p><?php echo get_the_excerpt();?>...</p> <?php }?>
            					<span class="morelink">Read More <i class="far fa-long-arrow-right"></i></span>
            				</div>
                		</a>
            		<?php endforeach; wp_reset_postdata(); ?>
                </div>
                <?php if ( count($posts) > 3 )  {?>
                    <div class="pagination_nav text-center">
                    	<a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>		
                    	<div id="post_content_dots"></div>
                    	<a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>
                    </div>
                <?php } wp_reset_postdata();
            endif;
            ?>
            <?php 
            $link = get_sub_field('post_cnt_section_view_all_cta');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="text-center"><a class="viewlink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
            <?php endif; ?>
    	</div>
    </section>
<?php } ?>