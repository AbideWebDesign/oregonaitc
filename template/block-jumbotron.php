<?php
	
$jumbotron_image = get_field('jumbotron_image'); 
	
// Check to see if mobile version is set. If not, use desktop
if ( get_field('jumbotron_image_mobile') ) {

	$jumbotron_image_mobile = get_field('jumbotron_image_mobile');

} else {

	$jumbotron_image_mobile = $jumbotron_image; 

}
	
?>

<?php if ( get_query_var( 'view' ) == 'print' ): ?>

	<?php if ( ! get_sub_field('hide_on_print') ): ?>
	
		<div class="container">
		
			<div class="row">
		
				<div class="col-12">
					
					<h1><?php the_field('jumbotron_title'); ?></h1>
					
				</div>
				
			</div>
			
		</div>
		
	<?php endif; ?>

<?php else: ?>

	<div class="jumbotron jumbotron-fluid">
	
		<div class="jumbotron-bg-wrap">
	
			<?php echo wp_get_attachment_image( $jumbotron_image['id'], 'jumbotron', 0, array( 'class' => 'img-fluid d-none d-lg-block' ) ); ?>
	
			<?php echo wp_get_attachment_image( $jumbotron_image_mobile['id'], 'jumbotron-mobile', 0, array( 'class' => 'img-fluid d-block d-lg-none' ) ); ?>
	
		</div>
	
		<div class="jumbotron-content-wrap">
	
			<div class="container h-100">
	
				<div class="row h-100">
	
					<div class="col-12 d-flex align-items-end h-100">
	
						<div class="jumbotron-content w-100">
	
							<div class="d-flex justify-content-between">
								
								<div class="d-flex flex-column">
											
									<h1><?php the_field('jumbotron_title'); ?></h1>
			
									<?php if ( get_field('jumbotron_text') ): ?>
			
										<p class="mb-0"><?php the_field('jumbotron_text'); ?></p>
			
									<?php endif; ?>
									
								</div>
								
								<div class="d-flex align-self-center">
									
									<div class="mr-2">
										
										<a target="_blank" href="<?php echo get_the_permalink() . '?view=print'; ?>"><i class="fa fa-print text-white"></i></a>
										
									</div>
									
									<div class="mr-2">
										
										<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-square text-white"></i></a>
										
									</div>
								
								</div>
								
							</div>
	
						</div>
	
					</div>
						
				</div>
	
			</div>
	
		</div>
	
	</div>
	
<?php endif; ?>