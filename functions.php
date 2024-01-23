<?php
/**
 * Enqueue Styles
 */

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
	
	$parent_style = 'abide-style';
	
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
	
	wp_enqueue_style( 'fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css' );
  	
}

/**
 * Enqueue Scripts
 */
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_scripts' );

function enqueue_child_theme_scripts() {
	
	if ( is_page_template('page-map.php') || is_page_template('page-map-2020.php') ) {
	
		wp_enqueue_script( 'oregon-map', get_stylesheet_directory_uri() . '/includes/js/oregon-map.js', array( 'jquery', 'bootstrap' ), null, true );
	
	}
	
	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, null );
	
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'library.js', get_stylesheet_directory_uri() . '/includes/js/library-min.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/includes/js/library.js'), true );
	
	wp_enqueue_script( 'fancybox.js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), true );

	// Library resource scripts
	if ( is_page_template( 'page-library-hold.php' ) ) {
	
		wp_enqueue_style( 'gijgo.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.10/combined/css/gijgo.min.css' );
	
		wp_enqueue_script( 'gijgo.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.10/combined/js/gijgo.min.js', 'jquery', '', true );
	
		wp_enqueue_script( 'date-picker.js', get_stylesheet_directory_uri() . '/includes/js/date-picker.js', 'gijgo.min.js', '', true );
			
	}

}

add_action( 'wp_enqueue_scripts', 'ajax_site_scripts', 999 ) ;

function ajax_site_scripts() {
	
    // Enqueue our JS file
    wp_enqueue_script( 'ajax_js', get_stylesheet_directory_uri() . '/includes/js/ajax.js', array( 'jquery' ), '', true );
    
    // Provide a global object to our JS file containing the AJAX url and security nonce
    wp_localize_script( 'ajax_js', 'ajax_object',
        
        array (
            'ajax_url'      => admin_url('admin-ajax.php'),
            'ajax_nonce'    => wp_create_nonce('ajax_nonce'),
        )
        
    );
    
}

add_action('admin_head', 'admin_styles');

function admin_styles() {
	
  echo '<style>
  	#wpf-meta { display: none !important; }
 	 .gform-settings__wrapper--full{ max-width:90% !important;}
 	 .notice-otgs, .otgs-installer-notice, .notice.wcs-nux__notice,[data-icon]:before, .icon-access:before, .icon-access-logo:before, .icon-bootstrap:before, .icon-bootstrap-logo:before, .icon-bootstrap-original-logo:before, .icon-bootstrap-pagination:before, .icon-breadcrumbs:before, .icon-btn-dropdowns:before, .icon-buttons:before, .icon-conditional-alert:before, .icon-conditional-if:before, .icon-content-template:before, .icon-cred:before, .icon-cred-logo:before, .icon-input-groups:before, .icon-labels:before, .icon-layouts:before, .icon-layouts-genesis:before, .icon-layouts-genesis-logo:before, .icon-layouts-logo:before, .icon-list-group:before, .icon-many-to-many:before, .icon-module:before, .icon-module-logo:before, .icon-navbar:before, .icon-one-to-many:before, .icon-one-to-one:before, .icon-packager:before, .icon-packager-logo:before, .icon-panels:before, .icon-toolset:before, .icon-toolset-blocks:before, .icon-toolset-export:before, .icon-toolset-genesis-logo:before, .icon-toolset-logo:before, .icon-toolset-map:before, .icon-toolset-map-logo:before, .icon-types:before, .icon-types-logo:before, .icon-views:before, .icon-views-logo:before, .icon-wells:before, .icon-wpml-logo:before {display: none !important;}
 	 .acf-escaped-html-notice{ display: none; }
  </style>';

}

/*
 * Register query var
 */
add_filter( 'query_vars', 'oregonaitc_query_vars' );

function oregonaitc_query_vars( $qvars ) {

	$qvars[] = 'view';

	return $qvars;

}

/*
 * Remove unused dashboard widgets
 */
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

function remove_dashboard_widgets() {
	
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	
	remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
	remove_meta_box('wc_admin_dashboard_setup', 'dashboard', 'normal');
	remove_meta_box('dashboard_custom_feed', 'dashboard', 'normal');
	
}

/**
 * Register Menus
 */
register_nav_menu( 'Menu Footer', 'Footer Menu' );

/**
 * Custom Sizes
 */
add_image_size( 'logo-sm', 300, 150 );
add_image_size( 'jumbotron', 1280, 600, true );
add_image_size( 'jumbotron-mobile', 375, 500, true );
add_image_size( 'card-3', 255, 141, true );
add_image_size( 'card-4', 362, 200, true );
add_image_size( 'photo-3', 255, 170, true );

/**
 * Remove WP User Frontend contact methods
 */
 
add_action( 'plugins_loaded', 'remove_custom_user_contact_methods' );

function remove_custom_user_contact_methods() {
    
	remove_filter( 'user_contactmethods', 'modify_contact_methods' );

}

remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

add_filter('user_contactmethods', 'yoast_seo_admin_user_remove_social', 99);

function yoast_seo_admin_user_remove_social ( $contactmethods ) {
	
	unset( $contactmethods['myspace'] );
	unset( $contactmethods['wikipedia'] );
	unset( $contactmethods['facebook'] );
	unset( $contactmethods['linkedin'] );
	unset( $contactmethods['pinterest'] );
	unset( $contactmethods['soundcloud'] );
	unset( $contactmethods['tumblr'] );
	unset( $contactmethods['twitter'] );
	unset( $contactmethods['youtube'] );
	unset( $contactmethods['instagram'] );	
	return $contactmethods;
	
}

/**
 * ACF Options page
 */
if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Subscriptions',
		'menu_title'	=> 'Subscriptions',
		'menu_slug' 	=> 'subscriptions',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-tickets-alt',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Map Settings',
		'menu_title'	=> 'Map Settings',
		'menu_slug' 	=> 'map-settings',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-location-alt',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Angus',
		'menu_title' 	=> 'Angus',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Apple',
		'menu_title' 	=> 'Apple',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Beans',
		'menu_title' 	=> 'Beans',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Beet',
		'menu_title' 	=> 'Beet',
		'parent_slug' 	=> 'map-settings',
	));
		
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Berries',
		'menu_title' 	=> 'Berries',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blueberries',
		'menu_title' 	=> 'Blueberries',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Broccoli',
		'menu_title' 	=> 'Broccoli',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Carrot',
		'menu_title' 	=> 'Carrot',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Cherries',
		'menu_title' 	=> 'Cherries',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Christmas Tree',
		'menu_title' 	=> 'Christmas Tree',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Corn',
		'menu_title' 	=> 'Corn',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Crab',
		'menu_title' 	=> 'Crab',
		'parent_slug' 	=> 'map-settings',
	));
		
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Cranberries',
		'menu_title' 	=> 'Cranberries',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Dairy',
		'menu_title' 	=> 'Dairy',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Easter Lilies',
		'menu_title' 	=> 'Easter lilies',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Eggs',
		'menu_title' 	=> 'Eggs',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Filberts',
		'menu_title' 	=> 'Filberts',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Fish',
		'menu_title' 	=> 'Fish',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Grapes',
		'menu_title' 	=> 'Grapes',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Grass Seed',
		'menu_title' 	=> 'Grass Seed',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hay',
		'menu_title' 	=> 'Hay',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hops',
		'menu_title' 	=> 'Hops',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Mint',
		'menu_title' 	=> 'Mint',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Nursery',
		'menu_title' 	=> 'Nursery',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Onions',
		'menu_title' 	=> 'Onions',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pears',
		'menu_title' 	=> 'Pears',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Potatoes',
		'menu_title' 	=> 'Potatoes',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pumpkin',
		'menu_title' 	=> 'Pumpkin',
		'parent_slug' 	=> 'map-settings',
	));	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sheep',
		'menu_title' 	=> 'Sheep',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Shrimp',
		'menu_title' 	=> 'Shrimp',
		'parent_slug' 	=> 'map-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tree',
		'menu_title' 	=> 'Tree',
		'parent_slug' 	=> 'map-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Watermelon',
		'menu_title' 	=> 'Watermelon',
		'parent_slug' 	=> 'map-settings',
	));	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Wheat',
		'menu_title' 	=> 'Wheat',
		'parent_slug' 	=> 'map-settings',
	));
}
/**
 * FacetWP
 */
function oregonaitc_facetwp_is_main_query( $is_main_query, $query ) {
    
    if ( isset( $query->query_vars['facetwp'] ) ) {
    
        $is_main_query = true;
    
    }
    
    return $is_main_query;

}
add_filter( 'facetwp_is_main_query', 'oregonaitc_facetwp_is_main_query', 10, 2 );


/**
 * Pagination Links
 */
function show_pagination_links() {
    
    global $wp_query;

    $page_tot   = $wp_query->max_num_pages;
    $page_cur   = get_query_var( 'paged' );
    $big        = 999999999;

    if ( $page_tot == 1 ) return;

    echo paginate_links( array(
            'base'      => str_replace( $big, '%#%',get_pagenum_link( 999999999, false ) ), // need an unlikely integer cause the url can contains a number
            'format'    => '?paged=%#%',
            'current'   => max( 1, $page_cur ),
            'total'     => $page_tot,
            'prev_next' => true,
			'prev_text'    => __('&lsaquo; Previous', 'progression'),
			'next_text'    => __('Next &rsaquo;', 'progression'),
            'end_size'  => 1,
            'mid_size'  => 2,
            'type'      => 'list'
        )
    );
    
}

/**
 * WP-Membership
 */
function oregonaitc_register_links( $string ) {
   
    $string = str_replace( '<li><a href="https://oregonaitc.org">Begin using the site.</a></li>	', '', $string);     
   
    return $string;

}
add_filter( 'wpmem_register_links', 'oregonaitc_register_links' );
 
function oregonaitc_forgot_link( $str ) {
	
    return home_url() . '/password-reset';

}
add_filter( 'wpmem_forgot_link', 'oregonaitc_forgot_link' );

function oregonaitc_username_link_str( $str, $link ) {
	
	return "<a href=" . home_url('/username-lost') .">Retrieve Username</a>";

}
add_filter( 'wpmem_username_link_str', 'oregonaitc_username_link_str', 10, 2 );

function remove_username_field_filter( $fields, $tag ) {
 
    if ( 'register' == $tag ) {
	    
        unset( $fields['username'] );
    
    }
     
    return $fields;

}
add_filter( 'wpmem_fields', 'remove_username_field_filter', 10, 2 );
 
function set_email_for_username_filter( $fields ) {
 	
 	$fields['username'] = $fields['user_email'];
    
    return $fields;

}
add_filter( 'wpmem_pre_validate_form', 'set_email_for_username_filter' );

function oregonaitc_login_redirect( $redirect_to, $user_id ) {
    
    return home_url( '/library/' );

}
add_filter( 'wpmem_login_redirect', 'oregonaitc_login_redirect', 10, 2 );

/**
 * Woocommerce
 */
function add_woocommerce_support() {
	
	add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'add_woocommerce_support' );

function custom_override_checkout_fields( $fields ) {
	
	$fields['billing']['billing_first_name']['placeholder'] = $fields['billing']['billing_first_name']['label'];
	$fields['billing']['billing_last_name']['placeholder'] = $fields['billing']['billing_last_name']['label'];
	$fields['billing']['billing_company']['placeholder'] = "School or Organization";
	$fields['billing']['billing_address_1']['placeholder'] = "Billing Address 1";
	$fields['billing']['billing_address_2']['placeholder'] = "Billing Address 2";
	$fields['billing']['billing_address_2']['placeholder'] = $fields['billing']['billing_city']['label'];
	$fields['billing']['billing_postcode']['placeholder'] = $fields['billing']['billing_postcode']['label'];
	$fields['billing']['billing_city']['placeholder'] = "City";
	$fields['billing']['billing_email']['placeholder'] = $fields['billing']['billing_email']['label'];
	$fields['billing']['billing_phone']['placeholder'] = $fields['billing']['billing_phone']['label'];
	$fields['shipping']['shipping_address_1']['placeholder'] = "Shipping Address 1";
	$fields['shipping']['shipping_address_2']['placeholder'] = "Shipping Address 2";
    return $fields;
    
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

/** 
 * Gravity Forms
 */

// Auto login to site after GF User Registration Form Submittal
add_action( 'gform_user_registered','oregonaitc_autologin', 10, 4 );

function oregonaitc_autologin( $user_id, $config, $entry, $password ) {

	wp_set_auth_cookie( $user_id, false, '' );
	
}

/**
 * Resource Library
 */
 
// Library hold submission
function submit_library_order() {
	
	$current_user = wp_get_current_user();
	
	$mailing_address = $current_user->school
				. "<br>"
				. $current_user->address_type
				. "<br>"
				. $current_user->addr1
				. " "
				. $current_user->addr2
				. "<br>" 
				. $current_user->city
				. ", "
				. $current_user->thestate
				. " "
				. $current_user->zip;
	
	$contact_info = $current_user->user_email
				. "<br>"
				. $current_user->phone1;
				
	// Send email notification
	$content = "<h2>Library Order Details</h2><p><strong>Library User:</strong><br>" 
				. $current_user->user_firstname 
				. " " 
				. $current_user->user_lastname
				. "<br>"
				. $current_user->county
				. "<br><br>" 
				. "<strong>Mailing Address:</strong><br>"
				. $mailing_address
				. "<br><br>"
				. "<strong>Contact Information:</strong><br>"
				. $contact_info	
				. "</p>"						
				. "<table border='0' cellpadding='10' style='border: 1px solid #ccc;'>
					<tr>
						<td><strong>Resource Name</strong></td>
						<td><strong>Branch</strong></td>
						<td><strong>Quantity</strong></td>
						<td><strong>Arrival</strong></td>
						<td><strong>Return</strong></td>
						<td><strong>Link</strong></td>
					</tr>";
	
	$headers = array( 'Content-Type: text/html; charset=UTF-8', 'From: Oregon Agriculture in the Classroom <noreply@oregonaitc.org>', 'Reply-To: Oregon Agriculture in the Classroom <aitc@oregonstate.edu>');
	
	$order = array();
	
	// Run through order
	foreach( $_SESSION['cart'] as $id=>$value ) {
		
		$name = get_field( 'resource_name', $id );
		
		$branch = $value['branch'];
	
		$link = get_permalink( $id );	
	
		$arrival_date = $_POST[$id];
	
		$return_date = $_POST['return-date-picker-' . $id];		

		$total = get_field('checked_out_total', $id);
		
		$t = $total + $_POST['q'.$id];
		
		$quantity = ( isset( $_POST['q'.$id] ) ? $_POST['q'.$id] : 1 );
	
		$types = get_the_terms($id, 'resource_type');
		
		$usertotal = get_user_meta( $current_user->ID, 'total_library_checkouts' ); 
		
		$ut = (int) $usertotal + 1;
			
		// Update quantity available and checkout total
		
		if ( ! get_field('unlimited_quantity', $id) && get_field('track_inventory', $id) ) {
			
			$available = get_field('total_available', $id);
			
			$a = $available - $quantity;
			
			update_field( 'total_available', $a, $id );
			
		}
						
		update_field( 'checked_out_total', $t, $id );
		
		// Update user checkout total
		update_user_meta( $current_user->ID, 'total_library_checkouts', $ut );
		
		// Add to content string
		$content .= "<tr><td>$name</td><td>$branch</td><td>$quantity</td><td>$arrival_date</td><td>$return_date</td><td><a href='$link' target='_blank'>Resource Link</a></td></tr>";
		
		$item = array (
			'url' => $link,
			'target' => '_blank',
			'title' => $name	
		);
		
		// Add to order array
		$order[] = array (
			'item' => $item,
			'branch' => $branch,
			'quantity' => $quantity,
			'arrival' => $arrival_date,
			'return' => $return_date,
		);
		
	}
	
	$content .= "</table>";
	
	// Check if there is a comment
	if ( isset( $_POST['comment'] ) ) {
		
		$comment = $_POST['comment'];
		
		$content .= '<p><strong>Comments</strong><br>' . $comment . '</p>';
			
	} 
	
	$content .= '<p><strong>Students Reached: </strong>' . $_POST['students'] . '</p>';
	
	// Create new Order post		
	$post_data = array(
		'post_type'     => 'resource_order',
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_title'    => 'temp',
	);
	
	// Insert the post into Wordpress
 	$post_id = wp_insert_post( $post_data, true );
 	
	if ( $post_id ) {		
		
		$title = 'Order #' . $post_id;
		
		$post = array(
			'ID' => $post_id,
			'post_title' => $title,	
		);
		
		wp_update_post( $post );
		
		foreach( $order as $o ) {
			
			// Add row to repeater field
			add_row( 'order', $o, $post_id );
		
		}
		
		update_field( 'user', $current_user, $post_id );
		
		update_field( 'order_number', $post_id, $post_id );
		
		update_field( 'order_name', $current_user->user_firstname . ' ' . $current_user->user_lastname, $post_id );
		
		update_field( 'order_email', $current_user->user_email, $post_id );
	
		update_field( 'mailing_address', $mailing_address, $post_id );
	
		update_field( 'contact_information', $contact_info, $post_id );
		
		update_field( 'students_reached', $_POST['students'], $post_id );
		
		if ( $comment ) {
			
			update_field( 'comment', $comment, $post_id );
		
		}
	
	} 
	
	// Send notification
	wp_mail( get_field('library_order_email', 'options'), 'Library Hold Placed - #' . $post_id, $content, $headers );
	
	wp_mail( $current_user->user_email, 'Library Order Confirmation - #' . $post_id, $content, $headers );
	
	unset( $_SESSION['cart'] );
	
}

function washington_county_filter( $query ) {
	
	if ( !is_admin() && $query->is_main_query() && $query->is_tax( 'branch', 'washington_county' ) ) {
		
		$query->set( 'tax_query', array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'branch',
                'field' => 'slug',
                'terms' => array( 'oregon', 'washington_county' ),
                'operator' => 'IN'
            )
        ) );
        			
	}
	
}
add_action( 'pre_get_posts','washington_county_filter', 999 );

// Check for both branches in placing holds
function in_array_all($needles, $haystack) {
	
   return empty(array_diff($needles, $haystack));

}

// Check if any key exists
function in_array_any($needles, $haystack) {
   
   return !empty(array_intersect($needles, $haystack));

}

/**
 * Filters the shipping method cost to account for tiered quantity pricing.
 */
add_filter( 'woocommerce_shipping_rate_cost', 'wc_shipping_cost_tiers', 10, 2 );

function wc_shipping_cost_tiers( $cost, $method ) {

	// see if this shipping instance is one we want to modify cost for
	
	if ( in_array( $method->get_instance_id(), array( 1 ) ) && WC()->cart ) {
		
		$cart_item_count = WC()->cart->get_cart_contents_count();

		// if we have items that need shipping, round the quantity / 2 to the nearest whole number
		// this produces tiered cost increases for every 2 items
		
		if ( $cart_item_count >= 1 ) {
			
			$cart_items = WC()->cart->get_cart_contents();
			
			foreach( $cart_items as $item ) {
				
				if ( $item['product_id'] == 529 || $item['product_id'] == 542 ) {
					
					if( $item['quantity'] == 1 ) {
						
						$cost += 6;
						
					} elseif ( $item['quantity'] == 2 ) {
						
						$cost += 8;
						
					} elseif ( $item['quantity'] == 3 ) {
						
						$cost += 10;
						
					} elseif ( $item['quantity'] >= 4 && $item['quantity'] <= 8 ) {
						
						$cost += 12;
						
					} else {
						
						$cost += $item['quantity'] * 1.5;
					
					}
					
				} 
				
			}
		}
	}

	return $cost;
}

/**
 * Add custom field for Fall Harvest Dinner product page. 
 */
add_action( 'woocommerce_before_add_to_cart_button', 'harvest_product_custom_field', 9 );

function harvest_product_custom_field() {
    
    if ( is_single( '2019-fall-harvest-dinner-tickets' ) ) {
	    
	    $value = isset( $_POST['_harvest_attendees'] ) ? sanitize_text_field( $_POST['_harvest_attendees'] ) : '';
	    
	    printf( '<div class="form-group"><label for="_harvest_attendees">%s</label><input class="form-control" name="_harvest_attendees" type="textarea" value="%s" /></div>', __( 'Please Provide Names of Attendees', 'oregonaitc' ), esc_attr( $value ) );
	    
    } 
    
}

/*
 * Add custom data to the cart item
 */
add_filter( 'woocommerce_add_cart_item_data', 'harvest_add_cart_item_data', 10, 2 );

function harvest_add_cart_item_data( $cart_item, $product_id ) {

    if ( isset( $_POST['_harvest_attendees'] ) ) {
	    
        $cart_item['harvest_attendees'] = sanitize_text_field( $_POST['_harvest_attendees'] );
        
    }

    return $cart_item;

}

/*
 * Add meta to order item
 */
add_action( 'woocommerce_add_order_item_meta', 'harvest_add_order_item_meta', 10, 2 );

function harvest_add_order_item_meta( $item_id, $values ) {

    if ( ! empty( $values['harvest_attendees'] ) ) {
		
		wc_add_order_item_meta( $item_id, 'Dinner Attendees', $values['harvest_attendees'] );           
    
    }
}

/*
 * Get item data to display in cart
 */
add_filter( 'woocommerce_get_item_data', 'harvest_get_item_data', 10, 2 );

function harvest_get_item_data( $other_data, $cart_item ) {

    if ( isset( $cart_item['harvest_attendees'] ) ){

        $other_data[] = array(
            'name' => __( 'Dinner Attendees', 'oregonaitc' ),
            'value' => sanitize_text_field( $cart_item['harvest_attendees'] )
        );

    }

    return $other_data;

}

/*
 * Load cart data from session
 */
add_filter( 'woocommerce_get_cart_item_from_session', 'harvest_get_cart_item_from_session', 20, 2 );

function harvest_get_cart_item_from_session( $cart_item, $values ) {

    if ( isset( $values['harvest_attendees'] ) ){
	    
        $cart_item['harvest_attendees'] = $values['harvest_attendees'];
        
    }

    return $cart_item;

}

/*
 * Show custom field in order overview
 */
add_filter( 'woocommerce_order_item_product', 'harvest_order_item_product', 10, 2 );

function harvest_order_item_product( $cart_item, $order_item ){

    if( isset( $order_item['harvest_attendees'] ) ){
	    
        $cart_item_meta['harvest_attendees'] = $order_item['harvest_attendees'];
    
    }

    return $cart_item;

}

/* 
 * Add the field to order emails 
 */ 
add_filter('woocommerce_email_order_meta_fields', 'harvest_email_order_meta_fields');

function harvest_email_order_meta_fields( $fields ) { 
   
    $fields['harvest_attendees'] = __( 'Dinner Attendees', 'oregonaitc' ); 
    return $fields; 

} 

/**
 * Resource Library
 */
add_action( 'pre_get_posts', 'lesson_plan_sort_order' );

function lesson_plan_sort_order($query){
    
    if (  is_post_type_archive( 'lessonplan' ) ) {
    
       //Set the order ASC or DESC
       $query->set( 'order', 'ASC' );
    
       //Set the orderby
       $query->set( 'orderby', 'title' );
    
    } 
    
} 

/**
 * Resource Redirects
 */
add_action( 'template_redirect', 'library_redirects' );

function library_redirects() {

	if ( is_page( 'place-hold' ) && ! is_user_logged_in() ) {

		wp_redirect( '/library' ); 

		exit;
		
    }
        
}

/**
 * Ajax function to return event shipping address meta values
 */ 
add_action( 'wp_ajax_set_quantity_session', 'set_quantity_session' );
add_action( 'wp_ajax_nopriv_set_quantity_session', 'set_quantity_session' );

function set_quantity_session() {

	if ( ! wp_verify_nonce( $_POST['security'], 'ajax_nonce' ) ) {

		wp_send_json_error( array( 'message' => 'Nonce is invalid.' ) );
	
	}
	
	$id = $_POST['id'];
	
	$qty = $_POST['qty'];
	
	$_SESSION['cart'][$id]['qty'] = $qty;
		
	wp_send_json_success( array( 'message' => 'success', 'quantity' => $qty, 'ID' => $id ) );

}

/** 
 * Change Gravity Forms Spinner
 */
add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );

function spinner_url( $image_src, $form ) {
	
	return  'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

}

/**
 * Sort grade levels in dropdown filter
 */
add_filter( 'facetwp_facet_orderby', 'grade_level_sort', 10, 2 );

function grade_level_sort ( $orderby, $facet ) {
    
    if ( 'lesson_plan_grades' == $facet['name'] ) {
    
        $orderby = 'FIELD(f.facet_display_value, "K", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12")';
    
    }
    
    return $orderby;
    
}

/**
 * Woocommerce - turn off upsell ads
 */
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );
add_filter( 'jetpack_show_promotions', '__return_false', 20 );


/**
 * Woocommerce - Get Oregonized Online Viewer Access
 */
function oregonaitc_go_access_fields() {
    
    $fields = array(
		array(
            'type'        => 'select',
            'label'       => __( 'Valid Subscription', 'oregonaitc' ),
            'id'		  => 'go_access_valid',
            'options' 	  => array( 'yes' => 'Yes', 'no' => 'No' ),
		),
	    array(
            'type'        => 'text',
            'label'       => __( 'Get Oregonized Code', 'oregonaitc' ),
            'id'		  => 'go_access_code',
            'placeholder' => __( '', 'oregonaitc' ),
		),	
    );   

    return $fields;
}

/**
 *  Add custom fields on virtual book purchases
 */
add_action( 'woocommerce_order_status_completed', 'oregonaitc_woocommerce_order_status_completed', 10, 1 );

function oregonaitc_woocommerce_order_status_completed( $order_id ) {
	
	$current_user = wp_get_current_user();
	
	$order = wc_get_order( $order_id );
	
	foreach ( $order->get_items() as $item_id => $item ) {
   
		$product_id = $item->get_product_id();
		
		if ( $product_id == '25012' ) {

			$row = array (
				'teacher'		=> $current_user->ID,
				'access_code'	=> wp_generate_password( 8, false ),
				'valid'			=> true,
			);
		
			add_row( 'teachers', $row, 'option' );								
			
		}
		
	}

}

/**
 * Validation function for virtual book access
 */
function go_access_check( $access_code ) {
	
	if ( have_rows('teachers', 'options') ) {
		
		while ( have_rows('teachers', 'options') ) {
		
			the_row(); 
			
			if ( get_sub_field('access_code') == $access_code && get_sub_field('valid') ) {
				
				return true;
				
			}
			
		}
		
		return false;
		
	}
	
}

/**
 * Helper function to get virtual book access code
 */
function go_get_access() {
	
	$current_user_id = get_current_user_id();
	
	if ( have_rows('teachers', 'options') ) {
		
		while ( have_rows('teachers', 'options') ) {
		
			the_row(); 
			
			$user_id = get_sub_field('teacher');
						
			if ( $user_id == $current_user_id && get_sub_field('valid') ) {
				
				return get_sub_field('access_code');
				
			}
			
		}
		
		return false;
		
	}
	
}

/*
 * Add Get Oregonized Access code to email notification
 */
add_action( 'woocommerce_email_order_meta', 'oregonaitc_email_order_meta_fields', 10, 3 );

function oregonaitc_email_order_meta_fields( $order, $sent_to_admin, $plain_text ) {
	
	foreach ( $order->get_items() as $item_id => $item ) {
   
		$product_id = $item->get_product_id();
		
		if ( $product_id == '25012' ) {
						
			$access_code = go_get_access();
			
			$access_url = home_url() . '/get-oregonized-digital/?access=' . $access_code;
			
			echo '<h2>Get Oregonized Access</h2><strong>Access URL:</strong> <a href="' . $access_url . '">' . $access_url . '</a><br><strong>Access Code:</strong> ' . $access_code . '<br><br>';

		}
		
	}

	return;
	
}
  
/**
 * Bypass order processing email for Get Oregonized Access orders
 */
add_filter( 'woocommerce_email_recipient_customer_processing_order', 'oregonaitc_disable_order_processing_email', 10, 2 );

function oregonaitc_disable_order_processing_email( $recipient, $order ) {

	$page = $_GET['page'] = isset( $_GET['page'] ) ? $_GET['page'] : '';
	
	if ( 'wc-settings' === $page ) {
		
		return $recipient; 
	
	}
	
	foreach ( $order->get_items() as $item_id => $item ) {
   
		$product_id = $item->get_product_id();
		
		if ( $product_id == '25012' ) {

			$recipient = '';
			
		
		}
		
	}
		
	return $recipient;
		
}

/**
 * Auto Complete Get Oregonized Access orders.
 */
add_action( 'woocommerce_thankyou', 'oregonaitc_auto_complete_order' );

function oregonaitc_auto_complete_order( $order_id ) {
	
    if ( ! $order_id ) {
    
        return;
    
    }

    $order = wc_get_order( $order_id );
    
    foreach ( $order->get_items() as $item_id => $item ) {
   
		$product_id = $item->get_product_id();
		
		if ( $product_id == '25012' ) {
			
			$order->update_status( 'completed' );
			
		}
		
	}
	
}

/**
 * Remove WP-Members fields on Woocommerce checkout
 */
add_filter( 'wpmem_fields', 'oregonaitc_remove_reg_fields_filter', 10, 2 );

function oregonaitc_remove_reg_fields_filter( $fields, $tag ) {
 
    if ( is_checkout() ) {
	    
	    unset( $fields['address_type'] );
        unset( $fields['addr1'] );
        unset( $fields['addr2'] );
        unset( $fields['city'] );
        unset( $fields['thestate'] );
        unset( $fields['zip'] );
        unset( $fields['phone1'] );
        unset( $fields['library_user_role'] );
		unset( $fields['grade'] );
		unset( $fields['county'] );
		unset( $fields['school'] );
		unset( $fields['school_district'] );
		
	}
    
    return $fields;
}

/**
 * Oregon Map Functions
 */
function get_map_icon_html( $icon_group, $icon_image ) {
	
	if ( $icon_group ) {
		
		$learn_more = ( $icon_group['learn_more_page'] ? "<a href='" . $icon_group['learn_more_page'] . "' class='btn btn-primary'>Learn More</a>" : "" );
		
		$video = ( $icon_group['video_url'] ? "<a class='btn btn-secondary ml-2' data-toggle='modal' data-target='#videoModal'>Video</a>" : "" );	
		
		$html = 'class="pop" role="button" tabindex="0" data-toggle="popover" data-html="true" data-trigger="click focus" data-container="body" data-placement="auto right" data-video="' . $icon_group['video_url'] . '" title="' . $icon_group['title'] . '" data-content="';
		$html .= "<div class='media'>
				<div class='pull-left'>
					<img class='media-object' src='" . $icon_image['sizes']['thumbnail'] . "'>
				</div>
				<div class='media-body'>" . 
					$icon_group['content'] . $learn_more . $video . 
				"</div>
			</div>";
		$html .= '"';
		
		return $html;
	
	} else {
		
		return '';
		
	}
	
}

/**
 * Helper Function
 */
if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

/*
 * Check if Harvest Product is in Cart
 */
function harvest_in_cart() {
	
	global $woocommerce;
	
	$product_id = 37592;
	
	$parent_id  = wp_get_post_parent_id( $product_id );
	
	$product_id = $parent_id > 0 ? $parent_id : $product_id;
	
	foreach ( $woocommerce->cart->get_cart() as $cart_item ) {
	    
	    if ( $cart_item['product_id'] === $product_id ) {
	    
	        return true;
	    
	    } else {
	    
	        return false;
	    
	    }
	
	}

}

/*
 * Check if Harvest Product is in Order
 */
function harvest_in_order( $order ) {

	$items = $order->get_items(); 

	foreach ( $items as $item_id => $item ) {

		if ( $item->get_product_id() === 37592 ) {
			
			return true;
			
		}

	}
	
	return false;

}

/**
 * Woocommerce fields
 */
add_action( 'woocommerce_checkout_before_customer_details', 'harvest_custom_checkout_fields' );

function harvest_custom_checkout_fields() {

	if ( harvest_in_cart() ) {
		
		$checkout = WC()->checkout;
	
		echo '<div class="my-3 bg-light border rounded p-3"><h3>' . __('Attendee Names') . '</h3>';
		
		woocommerce_form_field( 'harvest_attendees', array (
		    'type'          => 'textarea',
		    'class'         => array( 'form-row-wide' ),
		    'required'		=> true,
		    'placeholder'   => __('Please provide attendee names, one per line'),
		    ), $checkout->get_value( 'harvest_attendees' ) );
		
		echo '</div>';
		
	}
    
}

/**
 * Validate custom field
 */
add_action('woocommerce_checkout_process', 'harvest_custom_checkout_field_process');

function harvest_custom_checkout_field_process() {

	if ( ! $_POST['harvest_attendees'] && harvest_in_cart() ) {
		
		wc_add_notice( __( 'Please provide attendee names.' ), 'error' );
	
	}

}

/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'harvest_custom_checkout_field_update_order_meta' );

function harvest_custom_checkout_field_update_order_meta( $order_id ) {
	
	if ( ! empty( $_POST['harvest_attendees'] ) ) {
	
	    update_post_meta( $order_id, 'harvest_attendee_names', sanitize_textarea_field( $_POST['harvest_attendees'] ) );
	
	}

}

/**
 * Display field value on the order edit page
 */
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'harvest_custom_checkout_field_display_admin_order_meta', 10, 1 );

function harvest_custom_checkout_field_display_admin_order_meta( $order ){
	
	if ( harvest_in_order( $order ) ) {
		
		echo '<h3 style="margin-bottom:1em;">' . __( 'Attendee Names' ) . '</h3>';
		
		echo '<textarea disabled>' . esc_textarea( get_post_meta( $order->get_id(), 'harvest_attendee_names', true ) ) . '</textarea>';
		
		echo '<style>textarea { resize: none; height: 135px; border: none; color: #777 !important; padding: 0; font-size: 13px; }</style>';
	 	
	}

}

/*
 * Add harvest attendees to email notification
 */
add_action( 'woocommerce_email_after_order_table', 'harvest_email_after_order_table', 10, 4 );

function harvest_email_after_order_table( $order, $sent_to_admin, $plain_text, $email ) { 
	
	if ( harvest_in_order( $order ) ) {
		
		echo '<h2 style="margin-bottom:1em;">' . __( 'Attendee Names' ) . '</h2>';
		
		echo '<textarea disabled>' . esc_textarea( get_post_meta( $order->get_id(), 'harvest_attendee_names', true ) ) . '</textarea>';
		
		echo '<style>textarea { resize: none; height: 135px; border: none; color: #636363 !important; line-height: 150%; padding: 0; font-size: 14px; font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;}</style>';
		
	}

}