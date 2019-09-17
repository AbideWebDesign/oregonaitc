<?php
$type = get_post_type(get_the_ID());

if ($type == 'resource') { 
	$types = get_the_terms(get_the_ID(), 'resource_type');
	$categories = get_the_terms(get_the_ID(), 'resource_category');
}

if ($type == 'lessonplan') { 
	$types = get_the_terms(get_the_ID(), 'lessonplan_type');
	$categories = get_the_terms(get_the_ID(),'lessonplan_category');
}

$available = get_field('total_available');
$image = get_field('resource_image');
$branch = get_queried_object();
?>

<div class="row mb-3">
	<div class="col-12">
		<div class="card w-100">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4 col-lg-3">
						
						<?php if ( $type == 'resource' ): ?>
						
							<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 mb-lg-0 w-100')); ?></a>
						
							<?php if ( is_user_logged_in() ): ?>
						
								<?php if ( isset($_SESSION['cart'][$id]) ): ?>
						
						 			<p class="text-center mt-2 mb-0">
						 				<a href="#" class="btn btn-secondary btn-disabled btn-sm btn-block d-none d-lg-block"><i class="fas fa-shopping-cart"></i> In Cart</a>
						 			</p>
						
								<?php elseif ( $available > 0 ): ?>
						
						 			<p class="text-center mt-2 mb-0">
						 				<a href="<?php the_permalink(); ?>?id=<?php the_ID(); ?>&action=add&branch=<?php echo $branch->name; ?>" class="btn btn-primary btn-sm btn-block d-none d-lg-block">Place Hold</a>
						 			</p>
						
						 		<?php elseif ( $available == 0 ): ?>
						
						 			<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm btn-block disabled mt-2 d-none d-lg-block">Place Hold</a>
						
								<?php endif; ?>
						
							<?php else: ?>
						
								<p class="text-center m-0">
									<a href="<?php echo home_url(); ?>/login?redirect_to=oregonaitc.org/place-hold/?resource_id=<?php the_ID(); ?>" class="btn btn-primary btn-sm btn-block mt-2 d-none d-lg-block">Login to Hold</a>
								</p>
						
							<?php endif; ?>
						
						<?php elseif ( $type == 'lessonplan' ): ?> 
						
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block btn-sm d-none d-lg-block">View Lesson</a>
						
						<?php endif; ?>
						
						<?php if ( $type == 'resource' ): ?><p class="mt-2 mb-0 text-sm d-none d-lg-block"><strong>Total Available: </strong><?php the_field('total_available'); ?> (of <?php the_field('total_copies'); ?>)</p><?php endif; ?>
					
					</div>
					<div class="col-sm-8 col-lg-9">
						<div class="border-bottom border-light mb-2">
							<h5 class="card-title"><a href="<?php the_permalink(); ?>?branch=<?php echo $branch->name; ?>"><?php the_title(); ?></a></h5>
					
							<?php if ( $type == 'lessonplan' ): ?>
					
								<p class="text-sm m-0"><?php the_field('lesson_plan_time_estimate'); ?> min	lesson</p>
					
							<?php elseif ( $type == 'resource' ): ?>
					
								<p class="text-sm m-0"><?php the_field('resource_authors'); ?></p>
					
							<?php endif; ?>
					
						</div>
					
						<?php if ( $type == 'resource' ): ?>
							
							<div class="text-md text-description">
							
								<?php if ( get_field('short_description') ): ?>
							
									<?php the_field('short_description'); ?>
							
								<?php else: ?>
							
									<?php the_field('resource_description'); ?>
							
								<?php endif; ?>
							
							</div>
							
						<?php elseif ( $type == 'lessonplan' ): ?>
						
							<div class="text-md text-description">
								
								<?php if ( get_field('short_description') ): ?>
								
									<?php the_field('short_description'); ?>
								
								<?php else: ?>
								
									<?php the_field('lesson_plan_description'); ?>
								
								<?php endif; ?>
							
							</div>
						
						<?php endif; ?>
						
						<div class="card-footer px-0 pb-0">				
							<p class="text-md text-grey m-0 pt-2 border-top border-light">Categories: 
							
							<?php $last = end($categories); ?>
							
							<?php foreach ( $categories as $category ): ?>
							
								<?php if ( $category == $last ): ?>
									
									<a href="<?php echo home_url(); ?>/<?php echo ($type == 'resource') ? 'library/' . $branch->slug . '/?fwp_resource_category' : 'lessonplan?fwp_lesson_plan_categories'; ?>=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a> 
								
								<?php else: ?>
								
									<a href="<?php echo home_url(); ?>/<?php echo ($type == 'resource') ? 'library/' . $branch->slug . '/?fwp_resource_category' : 'lessonplan?fwp_lesson_plan_categories'; ?>=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>, 
								
								<?php endif; ?>
							
							<?php endforeach; ?>						
							
							<?php if ( $type == 'resource' ): ?>
								
								| Type: 
								
								<?php foreach ( $types as $type ): ?>
								
									<a href="<?php echo home_url(); ?>/library/<?php echo $branch->slug; ?>/?fwp_resource_type=<?php echo $type->slug; ?>"><?php echo rtrim($type->name, "s"); ?></a>
								
								<?php endforeach; ?>
								
							<?php endif; ?>
							
							<?php if ( $type == 'resource' ): ?>
							
								| Age: <?php the_field('grade_level_minimum'); ?> - <?php the_field('grade_level_maximum'); ?></p>	
							
							<?php elseif ( $type == 'lessonplan' ): ?>
							
								| Age: <?php the_field('lesson_plan_grade_level_minimum'); ?> - <?php the_field('lesson_plan_grade_level_maximum'); ?></p>
							
							<?php endif; ?>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>