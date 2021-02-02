<?php
 
session_start(); 

get_header(); 

get_template_part('library/library', 'top');

if ( have_posts() ):

	while ( have_posts() ) : the_post();
		
		$terms = get_the_terms($id, 'resource_type');	
		
		$categories = get_the_terms($id, 'resource_category');
		
		$id = get_the_ID();
		
		$available = get_field_object('total_available', $id);
		
		$image = get_field('resource_image');
		
		$branch = get_the_terms(get_the_ID(), 'branch');
		
		// Check if item was added
		if ( isset($_GET['action']) && $_GET['action']=="add" ) {
			
			
			$message = '<i class="fa fa-check-square"></i> Resource added to cart. <a href="' . home_url() . '/library/' . $branch[0]->slug . '">Keep browsing</a> or <a href="' . home_url() . '/place-hold">view cart</a> and place hold.';
		}
		
		?>
		<div class="section section-sm section-alt">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="card bg-primary mb-2">
							<div class="card-body">
								<h5 class="card-title text-white mb-1">Reserve Item</h3>
								
								<?php if ( get_field('track_inventory') ):?>
								
									<p class="mb-1 text-white text-md"><strong>Total Available: </strong> <?php the_field('total_available'); ?> (of <?php the_field('total_copies'); ?>)</p>
								
								<?php endif; ?>
								
								<?php if ( is_user_logged_in() ): ?>
								
									<?php if ( isset( $_SESSION['cart'][$id] ) ): ?> 
								
										<p class="mb-1"><a href="#" class="btn btn-white btn-block disabled"><i class="fa fa-shopping-cart"></i> In Cart</a></p>
							 			<p class="mb-0"><a class="btn btn-secondary btn-block" href="<?php echo home_url(); ?>/place-hold"></i> Check Out</a></p>										 		
								
									<?php elseif ( $available['value'] > 0 ): ?>
								
										<p class="mb-0"><a href="<?php the_permalink(); ?>?id=<?php the_ID(); ?>&action=add&branch=<?php echo $branch[0]->slug; ?>" class="btn btn-white btn-block">Place Hold</a></p>
								
									<?php endif; ?>
								
								<?php else: ?>
								
									<p class="text-center mb-0"><a href="<?php echo home_url(); ?>/login?redirect_to=oregonaitc.org/place-hold/?resource_id=<?php the_ID(); ?>" class="btn btn-white btn-block">Login to Hold</a></p>
								
								<?php endif; ?> 
							
							</div>
						</div>
						<div class="card d-none d-md-block">
							<div class="card-body">
								<h5 class="card-title mb-1">Resource Type</h5>
								<p class="mb-2 text-md"><?php foreach($terms as $term) echo rtrim($term->name, "s"); ?></p>
								<h5 class="card-title mb-1">Age Range</h5>
								<p class="mb-0 text-md"><?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						
						<?php if ( isset($message) ): ?>
						
							<div id="msg-added" class="card bg-green mb-3 p-3">
								<p class="m-0 text-md text-white "><?php echo $message; ?></p>
							</div>
							
						<?php endif; ?>
						
						<div class="card mb-1">
							<div class="card-body">									
								<h2><?php the_field('resource_name'); ?></h2>
								<p class="m-0 text-md" id="author"><?php the_field('resource_authors'); ?></p>	
								<p class="m-0 text-grey text-md">Categories: 
									
									<?php $x = 0; ?>
									
									<?php foreach ( $categories as $category ): ?>
										
										<?php echo ( $x > 0 ) ? ", " : ""; ?>
										
										<a href='/library/<?php echo $branch[0]->slug; ?>/?fwp_resource_category=<?php echo $category->slug; ?>' /><?php echo $category->name; ?></a>
										
										<?php $x++; ?>
									
									<?php endforeach; ?>
								
								</p>							
								<div class="addthis_sharing_toolbox"></div>
							</div>
						</div>
						<div class="card bg-primary mb-1">
							<div class="card-body">
								<h5 class="card-title text-white mb-0">Resource Description</h5>
							</div>
						</div>
						<div class="card mb-1">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 mb-md-0')); ?></div>
									<div class="col-lg-8">
										<div class="text-description"><?php the_field('resource_description'); ?></div>
									</div>
								</div>
							</div>
						</div>
												
						<?php get_template_part('library/library', 'related-resources'); ?>
						
						<?php get_template_part('library/library', 'comments'); ?>
						
						<?php get_template_part('library/library', 'featured-resources'); ?>
						
					</div>
				</div>
			</div>
		</div>
		
	<?php endwhile; ?>
	
<?php endif;  ?>

<?php get_footer(); ?>	