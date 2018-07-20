<?php get_header(); ?>
<?php $args = array('post_type' => 'calendar-contestant', 'posts_per_page' => -1, 'toolset_relationships' => array('role' => 'child', 'related_to' => $post, 'relationship' => array('calendar-contest', 'calendar-contestant'))); ?>
<?php $query_winners = new WP_Query($args); ?>
<div class="section section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="mb-0"><a href="<?php echo home_url('/'); ?>/programs/calendar/winner-archives/"><i class="fas fa-caret-left"></i> Back to Winners Archive</a></p>
				<h2 class="mb-0"><?php the_title(); ?> Winners</h2>
			</div>
		</div>
	</div>
</div>
<div class="section section-alt">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-center align-items-stretch">
			<?php while($query_winners->have_posts()): $query_winners->the_post(); ?>	
				<?php $type = get_the_terms(get_the_ID(), 'award-type'); ?>
				<?php if($type[0]->name == 'Winner'): ?>
					<?php $image = get_field('artwork', get_the_ID()); ?>							
					<div class="col-sm-6 col-md-4 col-lg-3 mb-5">
						<div class="card">
							<a data-fancybox href="<?php echo $image['sizes']['large']; ?>"  data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid card-image-top')); ?></a>
							<div class="card-body text-center">
								<h5 class="card-title mb-0"><a data-fancybox href="<?php echo $image['sizes']['large']; ?>" data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php the_field('name', get_the_ID()); ?></a></h5>
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
<div class="section section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="mb-0"><a href="<?php echo home_url('/'); ?>/programs/calendar/winner-archives/"><i class="fas fa-caret-left"></i> Back to Winners Archive</a></p>
				<h2 class="mb-0"><?php the_title(); ?> Honorable Mentions</h2>
			</div>
		</div>
	</div>
</div>
<div class="section section-alt">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-center align-items-stretch">
			<?php while($query_winners->have_posts()): $query_winners->the_post(); ?>	
				<?php $type = get_the_terms(get_the_ID(), 'award-type'); ?>
				<?php if($type[0]->name == 'Honorable Mention'): ?>
					<?php $image = get_field('artwork', get_the_ID()); ?>							
					<div class="col-sm-6 col-md-4 col-lg-3 mb-5">
						<div class="card">
							<a data-fancybox href="<?php echo $image['sizes']['large']; ?>"  data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid card-image-top')); ?></a>
							<div class="card-body text-center">
								<h5 class="card-title mb-0"><a data-fancybox href="<?php echo $image['sizes']['large']; ?>" data-caption="<?php the_field('name', get_the_ID()); ?><br><?php the_field('school', get_the_ID()); ?><br><?php the_field('grade', get_the_ID()); ?>"><?php the_field('name', get_the_ID()); ?></a></h5>
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

<?php get_footer(); ?>	