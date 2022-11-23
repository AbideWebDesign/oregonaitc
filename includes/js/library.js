jQuery( document ).ready( function( $ ) {
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	$( '#library-hold' ).click( function( e ) {

		var total_qty = 0;
		
		var errors = false;
		
		$( '#error-max-qty' ).addClass( 'd-none' );
		
		$( '#error-kit-qty' ).addClass( 'd-none' );
		
		$.each( $( '.resource-qty' ), function( index, value ) { // Check for errors in quantity

			if ( $( this ).val() == 0 ) {
				
				$( this ).addClass( 'is-invalid' );
				
				$( '#error-kit-qty' ).removeClass( 'd-none' );
				
				errors = true;
																
			} else if ( parseInt ( $( this ).val() ) > parseInt( $( this ).attr( 'max' ) ) ) {

				$( this ).addClass( 'is-invalid' ); 
				
				$( '#error-kit-qty-max' ).removeClass( 'd-none' );
				
				$( '#error-kit-qty-max-text').append(' Max amount you can order is ' + $( this ).attr( 'max' ) + '.' );
				
				errors = true;
				
			} else {
				
				$( this ).removeClass( 'is-invalid' );
				
			}

			total_qty += parseInt( $( this ).val() )
		
		} );
		
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
		 
		if ( ! $( '#students').val() ) {
			 
			errors = true;
			
			$( '#error-students' ).removeClass( 'd-none' );
			
			$( '#students').addClass( 'is-invalid' );
			 
		} else {
			
			$( '#error-students' ).addClass( 'd-none' );
			
			$( '#students').removeClass( 'is-invalid' );
			
		}
		
		if ( ! errors ) {
			
			$( '#confirmationModal' ).modal('show');
			
		}
		
	} );
	
	$( document ).on( 'click', '[data-gaevent]', function( e ) {

		var $link = $(this);
		
		var csvEventData = $link.data('gaevent');

		var eventParams = csvEventData.split(',');

		if ( ! eventParams ) { return; }
	        
        eventCategory = eventParams[0]
        
        eventAction = eventParams[1]
        
        eventLabel = eventParams[2]
    
		gtag( 'event',eventAction,{ 'event_category': eventCategory,'event_label': eventLabel } )
        
    } );

} );