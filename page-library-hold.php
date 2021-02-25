<?php /* Template Name: Library Hold Page */ ?>

<?php

session_start();
	
get_header(); 

get_template_part( 'library/library', 'top' ); 

$current_user = wp_get_current_user();

$errors = array();

$branches = array( 'Oregon', 'Washington County' );

$b = array();

if( isset( $_POST['submit'] ) ) { // Submit Cart
			
	if ( count( $errors ) == 0 ) {
		
		$status = submit_library_order();
		
		session_unset();
	
	} 

} 

if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ) { // Validate Cart

	foreach ( $_SESSION['cart'] as $id => $value ) {

		if ( $value == 'branch' ) {

			$b[] = $value['branch'];
			
		}
		
	}
	
	if ( in_array( 'Washington County', $b ) ) {

		if ( get_user_meta( get_current_user_id(), 'county', true ) != 'Washington' ) {
		
			$errors[] = 'You have items from the Washington County Resource Library, but you do not live in that county. Washington County resources can only be checked out by users in that county.';

		}
	
	}

}

?>

<div class="section section-sm section-alt">

	<div class="container">

		<div class="row">

			<div class="col">

				<div class="card">

					<div class="card-body">

						<?php if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ): ?>
							
							<h2 class="mb-2"><?php the_title(); ?></h2>
							
							<?php if ( count( $errors ) > 0 ): ?>
								
								<?php foreach ( $errors as $error ): ?>
								
									<div class="alert alert-danger" role="alert">

										<p class="m-0 text-md"><i class="fa fa-exclamation-circle"></i> <?php echo $error; ?></p>

									</div>
								
								<?php endforeach; ?>
							
							<?php endif; ?>
							
							<div id="error-max-qty" class="alert alert-danger d-none" role="alert">

								<p class="m-0 text-md"><i class="fa fa-exclamation-circle"></i> <?php the_field('library_order_max_quantity_message', 'options'); ?></p>

							</div>
							
							<div id="error-kit-qty" class="alert alert-danger d-none" role="alert">

								<p class="m-0 text-md"><i class="fa fa-exclamation-circle"></i> <?php the_field('library_order_kit_quantity_message', 'options'); ?></p>

							</div>
							
							<form method="post" id="form" class="inb30" action="<?php echo home_url(); ?>/place-hold">

								<div class="table-responsive">

									<table class="table table-bordered text-md	">
										
										<thead>
											
											<tr><th><?php _e('Resource Name'); ?></th><th><?php _e('Branch'); ?></th><th><?php _e('Qty'); ?></th><th><?php _e('Type'); ?></th><th><?php _e('Age Group'); ?></th><th><?php _e('Arrival Date'); ?></th><th><?php _e('Return Date'); ?></th><th></th></tr>
										
										</thead>
										
										<?php foreach ( $_SESSION['cart'] as $id=>$value ): ?>											
											
											<?php $permalink = get_permalink($id); ?>
											
											<?php $types = get_the_terms($id, 'resource_type'); ?>
											
											<?php $categories = get_the_terms($id, 'resource_category'); ?>
											
											<?php $qty = ( isset( $_SESSION['cart'][$id]['qty'] ) ? $_SESSION['cart'][$id]['qty'] : '0' ); ?>
											
											<tr>

												<td class="align-middle"><a href="<?php echo $permalink; ?>"><?php the_field('resource_name', $id); ?></a></td>

												<td class="align-middle"><?php echo ucfirst( $value['branch'] ); ?></td>

												<td class="align-middle">
													
													<?php foreach ( $types as $type ): ?>
														
														<?php if ( $type->name == 'Kits' || $type->name == 'Printed Materials' ): $kit = true; ?>
															
															<input class="kit-qty form-control" type="number" name="q<?php echo $id ?>" id="q<?php echo $id ?>" data-id="<?php echo $id; ?>" value="<?php echo $qty; ?>">
															      													
      													<?php else: ?>
      													      														
      														<input class="resource-qty form-control" type="number" name="q<?php echo $id ?>" id="q<?php echo $id ?>" value="1" readonly="readonly">
      													
														<?php endif; ?>
													
													<?php endforeach; ?>
																										
												</td>

												<td class="align-middle"><?php foreach ( $types as $type ) echo rtrim( $type->name, "s" ); ?></td>

												<td class="align-middle"><?php the_field('minimum_age_group', $id); ?> - <?php the_field('maximum_age_group', $id); ?></td>

												<td class="align-middle"><input name="<?php echo $id; ?>" id="<?php echo $id; ?>" class="datepicker" width="150" readonly="readonly" /></td>

												<td class="align-middle">

													<div class="input-group">

														<input name="return-date-picker-<?php echo $id; ?>" id="return-date-picker-<?php echo $id; ?>" class="form-control" width="150" value="<?php echo date('n/d/Y', strtotime("+35 days"))?>" readonly="readonly" />

													</div>

												</td>

												<td class="align-middle text-center"><a href="<?php echo home_url(); ?>/place-hold?action=remove&id=<?php echo $id; ?>"><i class="fas fa-trash"></i></a></td>

											</tr>
										
										<?php endforeach; ?>		
									
									</table>

								</div>

								<div class="row">

									<div class="col-lg-5">

										<div class="form-group mb-3">

											<h5 class="card-title"><label for="comment"><?php _e('Comments:'); ?></label></h5>

										  	<textarea class="form-control input-lg" rows="3" name="comment" id="comment"></textarea>

										</div>
										
										<h5 class="card-title"><?php _e('Shipping Information:'); ?></h5>
										
										<div class="text-md">
											
											<?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?><br />
											
											<?php echo $current_user->school; ?><br />
											
											<?php echo $current_user->addr1; ?><br />
											
											<?php if ( $current_user->addr2 != '' ): ?>
											
												<?php echo $current_user->addr2; ?><br />
											
											<?php endif; ?>
											
											<?php echo $current_user->city; ?>, <?php echo $current_user->thestate; ?> <?php echo $current_user->zip; ?><br />
											
											<a href="<?php echo home_url('/member-profile/?a=edit'); ?>"><?php _e('Edit Address'); ?></a>

										</div>

									</div>
									
									<div class="col-lg-7 mb-3 mb-lg-0">

										<h5 class="card-title"><?php _e('Before You Submit:'); ?></h5> 

										<div class="card bg-light border mb-3">

											<div class="card-body">
												
												<div class="cart-notice text-md">
												
													<?php the_field('library_hold_message', 'options'); ?>
													
													<div class="custom-control custom-checkbox mt-3 mb-2 ">

														<input type="checkbox" class="custom-control-input" id="termCheck">
				
														<label class="custom-control-label" for="termCheck"><?php _e('I agree to the Terms and Conditions.'); ?> <a href="<?php echo home_url('/lending-library-terms-and-conditions/'); ?>" target="_blank"><?php _e('View terms and conditions'); ?></a>.</label>
														
														<div class="invalid-feedback"><?php _e('You must agree to our terms before placing an order.'); ?></div>
			
													</div>
													
													<div class="custom-control custom-checkbox mb-3 text-md">
			
														<input type="checkbox" class="custom-control-input" id="shippingCheck">
				
														<label class="custom-control-label" for="shippingCheck"><?php _e('I confirm that the shipping address and information is correct.'); ?></label>
														
														<div class="invalid-feedback"><?php _e('Please confirm your shipping address information.'); ?></div>
			
													</div>
												
													<a id="library-hold" class="btn btn-primary btn-lg text-white <?php echo ( count( $errors ) > 0 ? 'disabled' : '' ) ?>"><?php _e('Place Hold'); ?></a>

												</div>
													
											</div>

										</div>
									
									</div>

								</div>
								
								<?php get_template_part('library/library', 'confirmation-modal'); ?>
							
							</form>
						
						<?php elseif ( isset( $_POST['submit'] ) && ! $error ): ?> 
							
							<div class="p-5">
								
								<h1 class="mb-3 text-center"><?php _e('Success!'); ?></h1>
						
								<div class="text-description text-center text-lg"><?php the_field('library_hold_success_message', 'options'); ?></div> 
								
							</div>
						
						<?php elseif ( $error ): ?>
							
							<h2 class="mb-3"><?php the_title(); ?></h2>
							
							<div class="text-description"><?php the_field('library_hold_error_message', 'options'); ?></div>
						
						<?php else: ?>
							
							<div class="p-5">
								
								<h1 class="mb-3 text-center"><?php _e('Library Cart'); ?></h1>
						
								<div class="text-description text-center text-lg"><?php the_field('library_hold_empty_message', 'options'); ?></div> 
								
							</div>
						
						<?php endif; ?>
					
					</div> <!-- Card Body End -->
					
				</div> <!-- Card End -->
				
			</div> <!-- Col End -->

		</div> <!-- Row End -->

	</div> <!-- Container End -->

</div> <!-- Section End -->

<?php get_footer(); ?>	