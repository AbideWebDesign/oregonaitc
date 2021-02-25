jQuery( document ).ready( function( $ ) {

	$( '#library-hold' ).click( function( e ) {

		var total_qty = 0;
		
		var errors = false;
		
		$( '#error-max-qty' ).addClass( 'd-none' );
		
		$( '#error-kit-qty' ).addClass( 'd-none' );
		
		$.each( $( '.kit-qty' ), function( index, value ) { // Check for errors in quantity

			if ( $( this ).val() == 0 ) {
				
				$( this ).addClass( 'is-invalid' );
				
				$( '#error-kit-qty' ).removeClass( 'd-none' );
				
				errors = true;
																
			} else {
				
				$( this ).removeClass( 'is-invalid' );
				
			}

			total_qty ++;
		
		} );
		
		$.each( $( '.resource-qty' ), function( index, value ) { // Count additional quantities.

			total_qty += parseInt( $( this ).val() );
		
		} );
		
		if ( total_qty > 30 ) { // Limit total number of items to 30
									
			errors = true;
			
			$( '#error-max-qty' ).removeClass( 'd-none' );
			
		}
		
		 if ( ! $( '#termCheck').prop( 'checked' ) ) {
			 
			 errors = true;
			 
			 $( '#termCheck').addClass( 'is-invalid' );
			 
		 } else {
			 
			  $( '#termCheck').removeClass( 'is-invalid' );
			 
		 }
		 
		 if ( ! $( '#shippingCheck').prop( 'checked' ) ) {
			 
			 errors = true;
			 
			 $( '#shippingCheck').addClass( 'is-invalid' );
			 
		 } else {
			 
			  $( '#shippingCheck').removeClass( 'is-invalid' );
			 
		 }
		
		if ( ! errors ) {
			
			$( '#confirmationModal' ).modal('show');
			
		}
		
	} );

} );