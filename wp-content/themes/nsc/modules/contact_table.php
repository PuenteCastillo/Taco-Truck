<section class="contact_table <?php if (get_sub_field('enable_bottom_line') == " yes ") {
    echo 'show_border';
}?>">
	<div class="container">
		<div class="row header p-0">
			<div class="col-md-6 col-12 ">
				<?php if (get_sub_field('primary_contact_name')) {?>
				<h4> <?php echo get_sub_field('primary_contact_name') ?> <h4>
			<?php }?>
					<?php if (get_sub_field('primary_contact_position')) {?>
					<p class="possition"><?php echo get_sub_field('primary_contact_position') ?></p>
					<?php }?>
					<?php if (get_sub_field('primary_contact_phone_#')) {?>
					<a href="tel:<?php echo get_sub_field('primary_contact_phone_#') ?>"><p> <i class="fas fa-phone"></i> 	&nbsp;	&nbsp; 	&nbsp; <?php echo get_sub_field('primary_contact_phone_#') ?> </p></a>
					<?php }?>
					<?php if (get_sub_field('primary_contact_email')) {?>
					<a href="mailto:<?php echo get_sub_field('primary_contact_email') ?>"><p> <i class="fas fa-envelope"></i> 	&nbsp;	&nbsp; 	&nbsp; <?php echo get_sub_field('primary_contact_email') ?></span></p></a>
					<?php }?>

			</div>
			<?php if (get_sub_field('map_download')) {?>
			<div class="col-md-6 col-12 set-height">
				<a href="<?php echo get_sub_field('map_download') ?>" download><p>  <span class="download"> Download this Map &nbsp;	&nbsp; &nbsp; <i class="fas fa-download"></i> </span></p></a>
			</div>
			<?php }?>
		</div>
		<div class="row">
		<?php $i = 0;if (have_rows('table')): ?>
		<?php while (have_rows('table')): the_row();?>
																																		<?php $i++;endwhile;?>
		<?php endif;?>

		<?php if (have_rows('table')): ?>
		<?php while (have_rows('table')): the_row();?>

				<div class="<?php if ($i === 1) {echo 'col-12 this-is-1';} else if ($i === 2) {echo 'col-lg-6 col-md-6 col-12 this-is-2';} else if ($i === 3) {echo 'col-lg-4 col-md-6 col-12 this-is-3';}?>" >
					<?php if (get_sub_field('column_title')) {?>
					<h4> <?php echo get_sub_field('column_title') ?> </h4>
				<?php }?>
				<?php while (have_rows('column')): the_row();?>
					<?php if (get_sub_field('style')) {?>
					<div class="content-block-one <?php if (get_sub_field('dark_text')) {echo 'white-text';} else {echo 'black-text';}?>" <?php if (get_sub_field('background_color')) {echo 'style="background-color: ' . get_sub_field('background_color') . '"';}?> >
						<?php if (get_sub_field('name')) {?>
						<h4><?php echo get_sub_field('name') ?></h4>
						<?php }?>
						<?php if (get_sub_field('position')) {?>
						<p>
							<?php echo get_sub_field('position') ?> </p>
						<?php }?>
						<?php if (get_sub_field('phone_#')) {?>
						<a href="tel:<?php echo get_sub_field('v') ?>">
							<p> <i class="fas fa-phone"></i> &nbsp; &nbsp; &nbsp;
								<?php echo get_sub_field('phone_#') ?> </p>
						</a>
						<?php }?>
						<?php if (get_sub_field('email')) {?>
						<a href="mailto:<?php echo get_sub_field('email') ?>">
							<p> <i class="fas fa-envelope"></i> &nbsp; &nbsp; &nbsp;
								<?php echo get_sub_field('email') ?> </span>
							</p>
						</a>
						<?php }?> </div>
					<?php } else {?>
					<div class="content-block-two">
						<?php if (get_sub_field('name')) {?>
						<h4 class="black-text"><?php echo get_sub_field('name') ?></h4>
						<?php }?>
						<?php if (get_sub_field('position')) {?>
						<p>
							<?php echo get_sub_field('position') ?> </p>
						<?php }?>
						<?php if (get_sub_field('phone_#')) {?>
						<a href="tel:<?php echo get_sub_field('v') ?>">
							<p> <i class="fas fa-phone"></i> &nbsp; &nbsp; &nbsp;
								<?php echo get_sub_field('phone_#') ?> </p>
						</a>
						<?php }?>
						<?php if (get_sub_field('email')) {?>
						<a href="mailto:<?php echo get_sub_field('email') ?>">
							<p> <i class="fas fa-envelope"></i> &nbsp; &nbsp; &nbsp;
								<?php echo get_sub_field('email') ?> </span>
							</p>
						</a>
						<?php }?> </div>
					<?php }?>
					<?php endwhile;?> </div>
			<?php endwhile;?>
			<?php endif;?> </div>
</section>