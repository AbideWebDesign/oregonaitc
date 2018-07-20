<?php 
global $qode_options_proya;
?>
<?php
$_post_format = get_post_format();
$type = get_post_type($id);
$id = substr(get_the_ID(), 5);
	
if ($type == 'resource') { 
	$terms = get_the_terms( $id, 'resource_type' );
	$categories = get_the_terms ( $id, 'resource_category' );
}
if ($type == 'lessonplan') { 
	$terms = get_the_terms( $id, 'lessonplan_type' );
	$categories = get_the_terms ( $id, 'lessonplan_category' );
}
$id = get_the_ID();
$available = get_field_object('total_available', $id);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="box-library-search">
		<div class="">
			<div class="vc_row">
			<?php if ($type == 'resource') { ?>
				<div class="vc_col-md-9">
					<div class="box box-wrap">
						<div class="vc_row">
							<div class="vc_col-md-3">
								<div class="post_image">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<img class="vc_img vc_img-responsive" src="<?php the_field('resource_image', $id) ?>" alt="<?php the_field('resource_name', the_ID()); ?>" />
									</a>
								</div>
							</div>
							<div class="vc_col-md-9">
								<h3 class="nospace"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="small nospace"><?php the_field('resource_authors'); ?></p>
								<div class="separator normal center"></div>
								<p class="small nospace"><?php the_field('resource_description'); ?></p>
								<div class="separator normal center"></div>
								<p class="small nospace text-grey">Categories: 
								
								<?php 
								
									$last = end($categories);
									foreach($categories as $category) {
										if ($category == $last) {
											echo "<a href='/resource_category/$category->slug' />" . $category->name . "</a> "; 
										} else {
											echo "<a href='/resource_category/$category->slug' />" . $category->name . "</a>, "; 
										}
									}	
								?>
								
								| Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?> | Age: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?></p>	
							</div>
						</div>
					</div>
				</div>
				<div class="vc_col-md-3 box-cta box-wrap">
					<h3>Reserve Item</h3>
					<p class="nospace"><strong>Total Available: </strong> <?php the_field('total_available'); ?> (of <?php the_field('total_copies'); ?>)</p>
					<?php 
											 
					 	if ( is_user_logged_in() ):
					 		
					 		if( isset($_SESSION['cart'][$id]) ): 
					 		
					 		?>	
					 			<p class="text-center nospace-bottom">
					 				<a href="#" class="qbutton small white inverse"><i class="fa fa-shopping-cart"></i> In Cart</a>
					 			</p>
					 		<?php 
					 		
					 		elseif ( $available['value'] > 0 ): 
					 			
					 		?>
					 			<p class="text-center nospace-bottom">
					 				<a href="<?php the_permalink(); ?>?id=<?php the_ID(); ?>&action=add" class="qbutton small white">Place Hold</a>
					 			</p>
					 		<?php 
					 		
					 		endif; 
					 		
					 	else: 
					 	
					 	?>
					 		<p class="text-center nospace-bottom">
					 			<a href="/login?redirect_to=oregonaitc.org/place-hold/?resource_id=<?php the_ID(); ?>" class="qbutton small white">Login to Hold</a>
					 		</p>
					 	<?php 
					 
					 	endif; 
					 
					 ?> 
				</div>
			</div>
		</div>
		<?php } ?>
			<?php if ($type == 'lessonplan') { ?>
				<div class="vc_col-md-9">
					<div class="box box-wrap">
						<div class="vc_row">
							
							<div class="vc_col-md-12">
								<h3 class="nospace"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="small nospace"><?php the_field('lesson_plan_time_estimate'); ?> Min</p>
								<div class="separator normal center"></div>
								<p class="small nospace"><?php the_field('lesson_plan_description'); ?></p>
								<div class="separator normal center"></div>
								<p class="small nospace text-grey">Categories: 
								
								<?php 
								
									$last = end($categories);
									foreach($categories as $category) {
										if ($category == $last) {
											echo "<a href='/lessonplan_category/$category->slug' />" . $category->name . "</a> "; 
										} else {
											echo "<a href='/lessonplan_category/$category->slug' />" . $category->name . "</a>, "; 
										}
									}	
								?>
								
								| Age: <?php the_field('lesson_plan_grade_level_minimum'); ?> - <?php the_field('lesson_plan_grade_level_maximum'); ?></p>	
							</div>
						</div>
					</div>
				</div>
				<div class="vc_col-md-3 box-cta box-orange box-wrap">
					<p class="text-center nospace">
			 			<a href="<?php the_permalink(); ?>" class="qbutton small white">View Lesson</a>
			 		</p>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
</article>


