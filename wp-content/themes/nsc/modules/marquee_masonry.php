<?php
$head='';
if( get_sub_field('mrq_msn_header') ) {  $head='<h2>'.get_sub_field('mrq_msn_header').'</h2>';}

$cont='';
if( get_sub_field('mrq_msn_content') ) { $cont='<p>'.get_sub_field('mrq_msn_content').'</p>';}

$ctlnk='';
$alink='';
$link = get_sub_field('mrq_msn_cta_button');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        $ctlnk='<span class="'.ctabtntype(get_sub_field('mrq_msn_cta_button_type')).'">'.esc_html( $link_title ).ctabtntypearrow(get_sub_field('mrq_msn_cta_button_type')).'</span>';
        $alink='href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'"'; 
    endif;



$cards = get_sub_field('mrq_msn_cta_images');
    if(have_rows('mrq_msn_cta_images')):
        $count = count($cards);
    endif;

$i=1;



if ( have_rows('mrq_msn_cta_images') ) :
?>
<section class="marquee marquee_4 <?php echo $count;?>">
	<div class="container-fluid p-0">
	
            <?php while( have_rows('mrq_msn_cta_images') ) : the_row(); ?>
        
                <?php if ( $i==1 ) { ?>
                <div class="grid" id="visible_grid_imgs">
			    <div class="grid-sizer"></div>
                <div class="grid-item grid-item--width2 grid-item--height2">
    				<div class="grid_item_block_bg" style="background-image: url('<?php echo get_sub_field('mrq_msn_cta_image');?>');"></div>
    				<a <?php echo $alink;?> class="grid-item-block">
    					<div class="hover_overlay">
    						<div class="hover_overlay_inner">
    							<div class="intro_content">
    							    <?php echo $head;?>
    							    <?php echo $cont;?>
    							</div>
    	                            <?php echo $ctlnk;?>
    						</div>
    					</div>
    				</a>
    			</div>    
                <?php } if ($i==2 || $i==3){ ?>
                    <div class="grid-item grid-item--width2 d-none d-lg-block">
        				<div class="grid_item_block_bg" style="background-image: url('<?php echo get_sub_field('mrq_msn_cta_image');?>');"></div>				
        			</div>    
                <?php } ?>
                <?php if ( $i==3 ){ ?></div><?php }?>

                <?php if ( $count>3 && $i>3 ) { ?>
                    <?php if ( $i==4 ){ ?><div id="hidden_grid_imgs" class="hide"><?php }?>
                    <div class="grid-item">
    				    <div class="grid_item_block_bg" style="background-image: url('<?php echo get_sub_field('mrq_msn_cta_image');?>');"></div>			
    			    </div>
    			    <?php if ( $i==$count ){ ?></div><?php }?>
                <?php } ?>
                
            <?php $i++; endwhile; ?>
    </div>	
</section>
<?php endif; ?>