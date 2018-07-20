<!-- List Group Block -->
<?php $x = 0; ?>
<div class="row justify-content-center">
	<div class="col-md-10">
		<h2 class="text-center mb-4"><?php the_sub_field('list_group_title'); ?></h2>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-12">
		<div id="accordion">
			<?php if (have_rows('list_group')): ?>
				<?php while (have_rows('list_group')): the_row(); ?>
					<?php $x ++; ?>
					<div class="card p-3 mb-3">
						<div class="card-header" id="heading<?php echo $x; ?>">
							<h5 class="mb-0">
								<button class="btn btn-link d-block collapsed" data-toggle="collapse" data-target="#collapse<?php echo $x; ?>" aria-expanded="false" aria-controls="collapse<?php echo $x; ?>">
									<?php the_sub_field('list_item_title'); ?>
								</button>
							</h5>
						</div>
						<div id="collapse<?php echo $x; ?>" class="collapse" aria-labelledby="heading<?php echo $x; ?>" data-parent="#accordion">
							<div class="card-body"><?php the_sub_field('list_item_text'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- List Group Block -->