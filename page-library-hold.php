<?php /* Template Name: Library Hold Page */ 

session_start();
	
get_header(); 

get_template_part( 'library/library', 'top' ); 

$current_user = wp_get_current_user();

$errors = array();

$messages = array();

$branches = array( 'Oregon', 'Washington County' );

$b = array();

if ( isset( $_POST['submit'] ) && isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ) { // Submit Cart
	
	foreach ( $_SESSION['cart'] as $id => $value ) {
		
		// Check to make sure item is still available
		if ( get_field('track_inventory', $id) && ! get_field('unlimited_quantity', $id) ) {
			
			$available = get_field('total_available', $id);
			
			if ( $available <= 0 ) {
				
				unset( $_SESSION['cart'][$id] );
				
				$messages[] = 'The following item has been removed from your cart because it is no longer available: ' . get_the_title( $id );
			
			}
			
		}	
		
	}
			
	if ( count( $errors ) == 0 && count ( $messages ) == 0 ) {
		
		submit_library_order();
	
	} 

} 

if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ) { // Validate Cart

	foreach ( $_SESSION['cart'] as $id => $value ) {

		if ( $value == 'branch' ) {

			$b[] = $value['branch'];
			
		}
		
		// Check to make sure item is still available
		if ( get_field('track_inventory', $id) && ! get_field('unlimited_quantity', $id) ) {
			
			$available = get_field('total_available', $id);
			
			if ( $available <= 0 ) {
				
				unset( $_SESSION['cart'][$id] );
				
				$messages[] = 'The following item has been removed from your cart because it is no longer available: ' . get_the_title( $id );
			
			}
			
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

				<div class="card border">

					<div class="card-body">

						<h3>Library is currently down for maintanance.</h3>					
					</div> <!-- Card Body End -->
					
				</div> <!-- Card End -->
				
			</div> <!-- Col End -->

		</div> <!-- Row End -->

	</div> <!-- Container End -->

</div> <!-- Section End -->

<?php get_footer(); ?>	