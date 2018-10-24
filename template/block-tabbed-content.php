<!-- Basic Content Block -->
<?php $x = 0; ?>
<?php $tabID = str_replace(' ', '_', get_sub_field('section_title')); ?>
<div class="tabbed-content">
	<div class="row justify-content-center">
		<div class="col-12 text-center">
			<div class="tabbed-content-header mb-3">
				<h2 class="mb-4"><?php the_sub_field('section_title'); ?></h2>
				<?php if(get_sub_field('section_text')): ?>
					<div class="lead-text mb-5"><?php the_sub_field('section_text'); ?></div>
				<?php endif; ?>
				<ul class="nav nav-tabs justify-content-center" id="tabbed-content-nav" role="tablist">
					<?php if (have_rows('tabs')): ?>
						<?php while (have_rows('tabs')): the_row(); ?>
							<?php $x ++; ?>
							<li class="nav-item">
								<a class="nav-link <?php echo ($x == 1) ? 'active' : ''; ?>" data-toggle="tab" href="#<?php echo $tabID; ?>_<?php echo $x; ?>" role="tab" aria-controls="<?php echo $tabID; ?>_<?php echo $x; ?>" aria-selected="<?php echo ($x == 1) ? 'true' : 'false'; ?>"><?php the_sub_field('tab_title'); ?></a>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="tab-content p-md-5 p-3" id="tab-content">
				<?php if (have_rows('tabs')): ?>
					<?php $x = 0; ?>
					<?php while (have_rows('tabs')): the_row(); ?>
						<?php $x ++; ?>
						<div class="tab-pane fade <?php echo ($x == 1) ? 'show active' : ''; ?>" id="<?php echo $tabID; ?>_<?php echo $x; ?>" role="tabpanel" aria-labelledby="<?php echo $tabID; ?>_<?php echo $x; ?>-tab">
							<?php if(get_sub_field('tab_image')): ?>
								<?php $image = get_sub_field('tab_image'); ?>
								<div class="row">
									<div class="col-md-5">
										<?php echo wp_get_attachment_image($image['id'], 'col-5', 0, array('class' => 'img-fluid mb-4 mb-md-0')); ?>
										<?php if($image['caption']): ?>
											<div class="caption"><?php echo $image['caption']; ?></div>
										<?php endif; ?>
									</div>
									<div class="col-md-7">
										<h2 class="d-block d-md-none mt-3"><?php the_sub_field('tab_title'); ?></h2>
										<?php the_sub_field('tab_content'); ?>
									</div>
								</div>
							<?php else: ?>
								<h2 class="d-block d-md-none mt-3"><?php the_sub_field('tab_title'); ?></h2>
								<?php the_sub_field('tab_content'); ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- Basic Content Block End -->