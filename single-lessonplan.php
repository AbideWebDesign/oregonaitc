<?php
 
session_start(); 

get_header(); 

if ( have_posts() ) :
	
	while ( have_posts() ) : the_post();

		$categories = get_the_terms ( $id, 'lessonplan_category' );
		$id = get_the_ID();
				
		?>
		
		<?php get_template_part('library/library', 'top'); ?>
		
		<div class="section section-sm section-alt">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="card bg-primary mb-3">
								<div class="card-body">
									<h5 class="card-title text-white">Lesson Overview</h5>
									<ul class="fa-ul mx-4 mb-3">
										<li class="text-white text-md"><span class="fa-li"><i class="fas fa-clock pr-2"></i></span><?php the_field('lesson_plan_time_estimate'); ?> Minutes</li>
									
									<?php if ( get_field('lesson_plan_essential_skills') ): ?> 
									
										<li class="text-white text-md"><span class="fa-li"><i class="fas fa-star pr-2"></i></span><?php the_field('lesson_plan_essential_skills'); ?></li>
									
									<?php endif; ?>
									
										<li class="text-white text-md"><span class="fa-li"><i class="fas fa-child pr-2"></i></span><?php the_field('lesson_plan_grade_level_minimum'); ?> - <?php the_field('lesson_plan_grade_level_maximum'); ?> Grade</li>
									
									<?php if ( get_field('lesson_plan_subject_standards') ): ?> 
									
										<li class="text-white text-md"><span class="fa-li"><i class="fas fa-university pr-2"></i></span>State Standards:<br><small><?php the_field('lesson_plan_subject_standards'); ?></small></li>
									
									<?php endif; ?>
									
									</ul>
									
									<?php if ( get_field('lesson_plan_pdf') ): ?>
									
										<p class="text-center m-0"><a target="_blank" href="<?php the_field('lesson_plan_pdf'); ?>" class="btn btn-white btn-sm btn-block" onClick="gtag('send', 'event', 'Lesson Plans', 'Download', '<?php the_title(); ?>', 10);"><i class="fa fa-download"></i> Download PDF</a></p>
									
									<?php endif; ?>
									
									<?php if ( get_field('lesson_plan_pdf_sp') ): ?>
									
										<p class="text-center mt-1 mb-0"><a target="_blank" href="<?php the_field('lesson_plan_pdf_sp'); ?>" class="btn btn-white btn-sm btn-block" onClick="gtag('send', 'event', 'Lesson Plans', 'Download', '<?php the_title(); ?> - SP', 10);"><i class="fa fa-download"></i> Download PDF (Spanish)</a></p>
									
									<?php endif; ?>
									
									<?php if ( get_field('link_to_matrix') ): ?>
									
										<p class="text-center mt-2 mb-0"><a href="<?php the_field('matrix_link'); ?>" class="btn btn-white btn-sm btn-block"><i class="fa fa-external-link-alt"></i> View Lesson</a></p>
									
									<?php endif; ?>
								
								</div>
							</div>
							<div class="card mb-3 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title">Materials List</h5>
									<div class="list-description text-md"><?php the_field('lesson_plan_materials'); ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="card">
								<div class="card-body">
									<h2><?php the_title(); ?></h2>
									<p class="text-grey text-md mb-2">Categories: 
										
										<?php $x = 0; ?>
										
										<?php foreach ( $categories as $category ): ?>
											
											<?php echo ($x > 0) ? ", " : ""; ?>
												
												<a href="<?php echo home_url(); ?>/lessonplan/?fwp_lesson_plan_categories=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
											
											<?php $x++; ?>
										
										<?php endforeach; ?>
										
									</p>							
									<div class="addthis_sharing_toolbox"></div>
									<div class="border-top py-2"></div>
									<p><?php the_field('lesson_plan_description'); ?></p>
									
									<?php the_field('lesson_plan_instructions'); ?>
									
									<?php if ( get_field('image_1') ): ?>
									
									<?php $image = get_field('image_1'); ?>
									
										<ul class="list-inline">
											<li class="inline-list-item">
												<a data-fancybox href="<?php the_field('image_1'); ?>"><?php echo wp_get_attachment_image($image['id'], 'col-7', 0, array('class' => 'img-fluid')); ?></a>
											</li>
											<?php if ( get_field('image_2') ): ?>
											
												<?php $image = get_field('image_2'); ?>
												
												<li class="inline-list-item">
													<a data-fancybox href="<?php the_field('image_2'); ?>"><?php echo wp_get_attachment_image($image['id'], 'col-7', 0, array('class' => 'img-fluid')); ?></a>
												</li>
												
											<?php endif; ?>
											
											<?php if ( get_field('image_3') ): ?>
											
												<?php $image = get_field('image_3'); ?>
												
												<li class="inline-list-item">
													<a data-fancybox href="<?php the_field('image_3'); ?>"><?php echo wp_get_attachment_image($image['id'], 'col-7', 0, array('class' => 'img-fluid')); ?></a>
												</li>
												
											<?php endif; ?>
											
											<?php if ( get_field('image_4') ): ?>
											
												<?php $image = get_field('image_4'); ?>
												
												<li class="inline-list-item">
													<a data-fancybox href="<?php the_field('image_4'); ?>"><?php echo wp_get_attachment_image($image['id'], 'col-7', 0, array('class' => 'img-fluid')); ?></a>
												</li>
												
											<?php endif; ?>
											
										</ul>
										
									<?php endif; ?>
									
								</div>
							</div>
							
							<?php comments_template('/comments-library.php'); ?> 
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php endwhile; ?>

<?php endif;  ?>

<?php 
get_footer(); 

?>	