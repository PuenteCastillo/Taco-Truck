<?php if ( get_field('footer_style', 'option')=="styletwo" ) {
    $footer_style="footer_style_two";
} else {
    $footer_style="footer_style_one";
}
$colsize="col footer_col";
$col_i=0;
if ( is_active_sidebar( 'foot-sidebar-1' ) ) { $col_i++; }
if ( is_active_sidebar( 'foot-sidebar-2' ) ) { $col_i++; }
if ( is_active_sidebar( 'foot-sidebar-3' ) ) { $col_i++; }
if ( is_active_sidebar( 'foot-sidebar-4' ) ) { $col_i++; }
if ( is_active_sidebar( 'foot-sidebar-5' ) ) { $col_i++; }
if ($col_i==0) { $col_i='';} else { $col_i='footer_col_'.$col_i; }
    				

?>
    <footer id="colophon" class="site-footer nortek_footer <?php echo $footer_style;?>">
	    <div class="site-info">	
		    
		    <?php if( $col_i!='' ) { ?>
		    <div class="footer_top">	
			    <div class="container">
				    <div class="row footer_row <?php echo $col_i;?>">
	
    					
    					<?php  if ( is_active_sidebar( 'foot-sidebar-1' ) ) { ?>
    					    <div class="<?php echo $colsize;?>"><?php dynamic_sidebar( 'foot-sidebar-1' ); ?></div>
    					<?php } ?>
    					<?php  if ( is_active_sidebar( 'foot-sidebar-2' ) ) { ?>
    					    <div class="<?php echo $colsize;?>"><?php dynamic_sidebar( 'foot-sidebar-2' ); ?></div>
    					<?php } ?>
    					<?php  if ( is_active_sidebar( 'foot-sidebar-3' ) ) { ?>
    					    <div class="<?php echo $colsize;?>"><?php dynamic_sidebar( 'foot-sidebar-3' ); ?></div>
    					<?php } ?>
    					<?php  if ( is_active_sidebar( 'foot-sidebar-4' ) ) { ?>
    					    <div class="<?php echo $colsize;?>"><?php dynamic_sidebar( 'foot-sidebar-4' ); ?></div>
    					<?php } ?>

    					<?php if ( get_field('footer_style', 'option')=="styletwo" ) { 
    					    if ( is_active_sidebar( 'foot-sidebar-5' ) ) { ?>
    					        <div class="<?php echo $colsize;?>"><?php dynamic_sidebar( 'foot-sidebar-5' ); ?></div>
    					 <?php } } ?>

				    </div>
			    </div>
		    </div>	
            <?php } ?>
            
    		<div class="copyright_block <?php if ( get_field('footer_style', 'option')=="styletwo" ) { echo 'border_top'; }?>" >
    			<div class="container">
    				<div class="copyright_inner">
    					<div class="copyright_left mr-auto">
    					    <?php if ( get_field('copyright_text','option') ) { 
    					        echo "<p>".do_shortcode(get_field('copyright_text','option'))."</p><span class='divider'>|</span>"; 
    					    }?> 
    					    <?php if ( get_field('part_of_family_text','option') ) { 
    					        echo "<p>".get_field('part_of_family_text','option')."</p>"; 
    					    }?> 
    					</div>
    					<div class="copyright_right ml-auto">
                            <div class="copyright_links">
        					    <?php
                                $link = get_field('terms_and_condition_link','option');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a> <span class="divider">|</span>
                                <?php endif; ?>
                                 <?php
                                $link = get_field('privacy_link','option');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php if ( get_field('footer_style', 'option')=="styleone" ) { echo do_shortcode('[sociallinks]'); }?>
    					</div>
    				</div>
    			</div>
    		</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>