<!-- Button Group Block -->
<div class="row justify-content-center align-items-stretch my-3 button-group">
	<?php if(have_rows('buttons')): ?>
		<?php while(have_rows('buttons')): the_row(); ?>
			<?php $link = (get_sub_field('button_link')) ? get_sub_field('button_link') : get_sub_field('button_link_external'); ?>
			<div class="col-lg-3 col-md-4 mb-3">
				<div class="button-wrap">
					<div class="button-title">
						<a href="<?php echo $link; ?>"><h3 class="mb-5"><?php the_sub_field('button_title'); ?></h3></a>
					</div>
					<div class="button-btn">
						<a href="<?php echo $link; ?>" class="btn btn-primary"><?php the_sub_field('button_label'); ?></a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<!-- Button Group Block End -->