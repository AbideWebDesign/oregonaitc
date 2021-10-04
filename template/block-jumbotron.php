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
	
		<div class="container h-100">
		
			<div class="row h-100">
		
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
	
						<div class="jumbotron-content d-flex flex-column">
	
							<h1><?php the_field('jumbotron_title'); ?></h1>
	
							<?php if ( get_field('jumbotron_text') ): ?>
	
								<p class="mb-0"><?php the_field('jumbotron_text'); ?></p>
	
							<?php endif; ?>
	
						</div>
	
					</div>
	
				</div>
	
			</div>
	
		</div>
	
	</div>
	
<?php endif; ?>