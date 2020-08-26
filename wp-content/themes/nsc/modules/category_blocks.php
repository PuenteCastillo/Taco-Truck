<?php if ( have_rows('category_content_blocks') ) : ?>

<section class="stacked_2_col inner_spacing">

	<div class="container">

		<div class="row stacked_row">

            <?php while( have_rows('category_content_blocks') ) : the_row(); ?>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 stacked_col" data-aos="fade-up">

        			<div class="stacked_col_inner">

        				<?php if( get_sub_field('catcnt_block_title') ) : ?><div class="stacked_title underline_show"><h5 class="primary_color"><?php the_sub_field('catcnt_block_title'); ?></h5></div><?php endif; ?>

                        <?php if( get_sub_field('catcnt_block_content') ) : the_sub_field('catcnt_block_content'); endif; ?>

                        <?php if ( have_rows('catcnt_block_subblocks') ) : ?>

                            <?php while( have_rows('catcnt_block_subblocks') ) : the_row(); ?>

                                <?php if( get_sub_field('catcnt_subblock_title') ) : ?><i><?php echo get_sub_field('catcnt_subblock_title'); ?></i><br><?php endif; ?>

                                <?php if ( have_rows('catcnt_subblock_list') ) : ?>

                                    <div class="links_data">

                                        <?php while( have_rows('catcnt_subblock_list') ) : the_row(); ?>

                                            <?php 

                                            $link = get_sub_field('catcnt_subblock_list_link');

                                            if( $link ): 

                                                $link_url = $link['url'];

                                                $link_title = $link['title'];

                                                $link_target = $link['target'] ? $link['target'] : '_self';

                                            ?>

                                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                                            <?php endif; ?>

                                        <?php endwhile; ?>

                                    </div>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                </div>    

            <?php endwhile; ?>

        </div>

	</div>	

</section>

<?php endif; ?>