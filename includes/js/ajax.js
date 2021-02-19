$( '.kit-qty' ).change( function() {
	
	var data = {
		qty: 		$( this ).val(),
		id: 		$( this ).data( 'id' ),
		action: 	'set_quantity_session',
		security: 	ajax_object.ajax_nonce	
	};
		
	$.ajax( {
	
		type: 'POST',
		url: ajax_object.ajax_url,
		data: data,
		success: function( response ) {},
		fail: function( response ) {
	
			console.log( 'failure' );
	
		},
	
	} );	

} );
