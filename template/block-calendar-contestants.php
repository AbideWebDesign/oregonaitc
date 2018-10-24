<?php $calendar_year = get_sub_field('calendar_year'); ?>
<?php $type = get_sub_field('type'); ?>
<?php 
	$args = array(
		'post_type' => 'calendar-contestant', 
		'posts_per_page' => -1, 
		'toolset_relationships' => array(
			'role' => 'child',
			'related_to' => $calendar_year,
			'relationship' => array('calendar-contest', 'calendar-contestant')
		)
	); 
?>
<?php $query = new WP_Query($args); ?>
<div class="row">
	<div class="col-12">
		<div class="d-flex flex-wrap justify-content-center align-items-stretch">						
			<?php while($query->have_posts()): $query->the_post(); ?>
				<?php $child_type = get_the_terms(get_the_ID(), 'award-type'); ?>
				<?php if ($child_type[0]->name == $type->name): ?>
					<?php $image = get_field('artwork', get_the_ID()); ?>
					<div class="col-sm-6 col-md-4 col-lg-3 mb-5 d-flex">
						<div class="card">
							<a data-fancybox href="<?php echo $image['sizes']['large']; ?>"  data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid card-image-top')); ?></a>
							<div class="card-body text-center">
								<h5 class="card-title"><a data-fancybox href="<?php echo $image['url']; ?>" data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php the_field('name', get_the_ID()); ?></a></h5>
								<p class="card-text mb-0"><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?> Grade</p>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
