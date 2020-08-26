<section class="two_column_grid <?php if ( get_sub_field('enable_bottom_line')=="yes" ) { echo 'show_border'; }?>">	
    <div class="container">		
	    <div class="row m-0">
		    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pl-0 pr-0">
		  	    <?php the_sub_field('twocolgrid_left_column');?>
		  	</div> 
		  	<div class="col-12 col-sm-12 col-md-6 col-lg-5 pl-0 pr-0 offset-lg-2">    
		  	    <?php the_sub_field('twocolgrid_right_column');?>
		  	</div>
		</div>
	</div>
</section>