<?php
/**
 * Theme Updater
 */
require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AbideWebDesign/oregonaitc',
	__FILE__,
	'oregonaitc'
);
$myUpdateChecker->setBranch('master'); 

/**
 * Enqueue Styles
 */
function enqueue_child_theme_styles() {
	
	$parent_style = 'abide-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
	
	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );	
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

/**
 * Enqueue Scripts
 */
function enqueue_child_theme_scripts() {
	if (is_page_template('page-map.php')) {
		wp_enqueue_script( 'oregon-map', get_stylesheet_directory_uri() . '/includes/js/oregon-map.js', array( 'jquery', 'bootstrap' ), null, true );
	}
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, null );
	wp_enqueue_script( 'jquery' );
	
	// Library resource scripts
	if (is_page_template('page-library-hold.php')) {
		wp_enqueue_style( 'gijgo.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.10/combined/css/gijgo.min.css' );
		wp_enqueue_script( 'gijgo.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.10/combined/js/gijgo.min.js', 'jquery', '', true );
		wp_enqueue_script( 'date-picker.js', get_stylesheet_directory_uri() . '/includes/js/date-picker.js', 'gijgo.min.js', '', true );
	}
	
	// Remove woocommerce scripts
	if (!is_woocommerce() && !is_cart() && !is_checkout()) {
		remove_action('wp_enqueue_scripts', [WC_Frontend_Scripts::class, 'load_scripts']);
		remove_action('wp_print_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
		remove_action('wp_print_footer_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');

/**
 * Register Menus
 */
register_nav_menu( 'Menu Footer', 'Footer Menu' );

/**
 * Custom Sizes
 */
add_image_size('logo-sm', 300, 150);
add_image_size('jumbotron', 1280, 600, true);
add_image_size('jumbotron-mobile', 375, 500, true);
add_image_size('card-3', 255, 141, true);
add_image_size('card-4', 362, 200, true);
add_image_size('photo-3', 255, 170, true);

/**
 * Remove WP User Frontend contact methods
 */
function remove_custom_user_contact_methods() {
    
    remove_filter( 'user_contactmethods', 'modify_contact_methods' );

}

add_action( 'plugins_loaded', 'remove_custom_user_contact_methods' );

remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

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

add_filter('user_contactmethods', 'yoast_seo_admin_user_remove_social', 99);

/**
 * ACF Options page
 */
if ( function_exists('acf_add_options_page') ) {
	
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
function my_facetwp_is_main_query( $is_main_query, $query ) {
    if ( isset( $query->query_vars['facetwp'] ) ) {
        $is_main_query = true;
    }
    return $is_main_query;
}
add_filter( 'facetwp_is_main_query', 'my_facetwp_is_main_query', 10, 2 );

/**
 * SearchWP
 */
function search_media_direct_link( $permalink, $post ) {
	
	if ( is_search() && 'attachment' === get_post_type( $post ) ) {
		
		$permalink = wp_get_attachment_url( $post->ID );
		
	}

	return esc_url( $permalink );
}
add_filter( 'the_permalink', 'search_media_direct_link', 10, 2 );

/**
 * Add custom fields to search
 */
function searchwp_acf_repeater_keys( $keys ) {
	$keys[] = 'page_blocks_%';

	return $keys;
}

add_filter( 'searchwp_custom_field_keys', 'searchwp_acf_repeater_keys' );

/**
 * Add search highlight
 */
function searchwp_term_highlight_auto_excerpt( $excerpt ) {
	global $post;

	if ( ! is_search() ) {
		return $excerpt;
	}

	// prevent recursion
	remove_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	$global_excerpt = '...' . searchwp_term_highlight_get_the_excerpt_global( $post->ID, null, get_search_query() ) . '...';

	add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	return wp_kses_post( $global_excerpt );
}

add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

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
	
	update_user_meta( $user_id, 'address_type', rgar( $entry, '3' ) );
	update_user_meta( $user_id, 'addr1', rgar( $entry, '4.1' ) );
	update_user_meta( $user_id, 'addr2', rgar( $entry, '4.2' ) );
	update_user_meta( $user_id, 'city', rgar( $entry, '4.3' ) );
	update_user_meta( $user_id, 'thestate', rgar( $entry, '4.4' ) );
	update_user_meta( $user_id, 'zip', rgar( $entry, '4.5' ) );
	update_user_meta( $user_id, 'phone1', rgar( $entry, '5' ) );
	update_user_meta( $user_id, 'user_email', rgar( $entry, '6' ) );
	update_user_meta( $user_id, 'school', rgar( $entry, '8' ) );
	update_user_meta( $user_id, 'school_district', rgar( $entry, '13' ) );	
	update_user_meta( $user_id, 'county', rgar( $entry, '9' ) );	
	update_user_meta( $user_id, 'library_user_role', rgar( $entry, '10' ) );	
	update_user_meta( $user_id, 'grade', rgar( $entry, '11' ) );	
	update_user_meta( $user_id, 'subscribe', rgar( $entry, '12.1' ) );	

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
	
	$headers = array('Content-Type: text/html; charset=UTF-8');
	
	$order = array();
	
	// Run through order
	foreach($_SESSION['cart'] as $id=>$value) {
		$resource = get_field_object('resource_name', $id);
		$name = $resource['value'];
		$branch = $value['branch'];
		$link = get_permalink($id);	
		$arrival_date = $_POST[$id];
		$return_date = $_POST['return-date-picker-' . $id];		
		
		// Update quantity available and checkout total
		$available = get_field_object('total_available', $id);
		$a = $available['value'] - 1;
		
		$total = get_field_object('checked_out_total', $id);
		$types = get_the_terms($id, 'resource_type');
		$quantity = 1;
		
		foreach($types as $type) {
			if ($type->name == "Kits") {
				$t = $total['value'] + $_POST['q'.$id];
				$quantity = $_POST['q'.$id];
			} else {
				$t = $total['value'] + 1;
			}
		}
		
		$usertotal = get_user_meta($current_user->ID, 'total_library_checkouts'); 
		$ut = (int)$usertotal + 1;
		
		update_field('total_available', $a, $id);
		update_field('checked_out_total', $t, $id);
		
		// Update user checkout total
		update_user_meta($current_user->ID, 'total_library_checkouts', $ut);
		
		// Add to content string
		$content .= "<tr><td>$name</td><td>$branch</td><td>$quantity</td><td>$arrival_date</td><td>$return_date</td><td><a href='$link' target='_blank'>Resource Link</a></td></tr>";
		
		$item = array(
			'url' => $link,
			'target' => '_blank',
			'title' => $name	
		);
		
		// Add to order array
		$order[] = array(
			'item' => $item,
			'branch' => $branch,
			'quantity' => $quantity,
			'arrival' => $arrival_date,
			'return' => $return_date,
		);
	}
	
	// Check if there is a comment
	if (isset($_POST['comment'])) {
		$content .= "<p><strong>Comments</strong><br>" . $_POST['comment'] . "</p>";
		$comment = $_POST['comment'];
	} 
	
	$content .="</table>";
	
	// Create new Order post		
	$post_data = array(
		'post_type'     => 'resource_order',
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_title'    => 'temp',
	);
	
	// Insert the post into Wordpress
 	$post_id = wp_insert_post($post_data, true);
 	
	if($post_id) {		
		$title = 'Order #' . $post_id;
		$post = array(
			'ID' => $post_id,
			'post_title' => $title,	
		);
		wp_update_post($post);
		
		foreach($order as $o) {
			// Add row to repeater field
			add_row('order', $o, $post_id);
		}
		
		update_field('user', $current_user, $post_id);
		update_field('mailing_address', $mailing_address, $post_id);
		update_field('contact_information', $contact_info, $post_id);
		
		if ($comment) {
			update_field('comment', $comment, $post_id);
		}
	} 
		
	// Send notification
	wp_mail(get_field('library_order_email', 'options'), 'Library Hold Placed', $content, $headers);
}

function washington_county_filter($query) {
	if (!is_admin() && $query->is_main_query() && $query->is_tax('branch', 'washington_county')){
		$query->set('tax_query', array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'branch',
                'field' => 'slug',
                'terms' => array('oregon', 'washington_county'),
                'operator' => 'IN'
            )
        ));			
	}
}
add_action('pre_get_posts','washington_county_filter', 999);

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
add_filter( 'woocommerce_shipping_rate_cost', 'wc_shipping_cost_tiers', 10, 2 );

/**
 * Add custom field for Fall Harvest Dinner product page. 
 */

function harvest_product_custom_field() {
    
    if ( is_single( '2019-fall-harvest-dinner-tickets' ) ) {
	    
	    $value = isset( $_POST['_harvest_attendees'] ) ? sanitize_text_field( $_POST['_harvest_attendees'] ) : '';
	    
	    printf( '<div class="form-group"><label for="_harvest_attendees">%s</label><input class="form-control" name="_harvest_attendees" type="textarea" value="%s" /></div>', __( 'Please Provide Names of Attendees', 'oregonaitc' ), esc_attr( $value ) );
	    
    } 
    
}
add_action( 'woocommerce_before_add_to_cart_button', 'harvest_product_custom_field', 9 );

/*
 * Add custom data to the cart item
 */
function harvest_add_cart_item_data( $cart_item, $product_id ) {

    if ( isset( $_POST['_harvest_attendees'] ) ) {
	    
        $cart_item['harvest_attendees'] = sanitize_text_field( $_POST['_harvest_attendees'] );
        
    }

    return $cart_item;

}
add_filter( 'woocommerce_add_cart_item_data', 'harvest_add_cart_item_data', 10, 2 );

/*
 * Add meta to order item
 */
function harvest_add_order_item_meta( $item_id, $values ) {

    if ( ! empty( $values['harvest_attendees'] ) ) {
		
		wc_add_order_item_meta( $item_id, 'Dinner Attendees', $values['harvest_attendees'] );           
    
    }
}
add_action( 'woocommerce_add_order_item_meta', 'harvest_add_order_item_meta', 10, 2 );

/*
 * Get item data to display in cart
 */
function harvest_get_item_data( $other_data, $cart_item ) {

    if ( isset( $cart_item['harvest_attendees'] ) ){

        $other_data[] = array(
            'name' => __( 'Dinner Attendees', 'oregonaitc' ),
            'value' => sanitize_text_field( $cart_item['harvest_attendees'] )
        );

    }

    return $other_data;

}
add_filter( 'woocommerce_get_item_data', 'harvest_get_item_data', 10, 2 );

/*
 * Load cart data from session
 */
function harvest_get_cart_item_from_session( $cart_item, $values ) {

    if ( isset( $values['harvest_attendees'] ) ){
	    
        $cart_item['harvest_attendees'] = $values['harvest_attendees'];
        
    }

    return $cart_item;

}
add_filter( 'woocommerce_get_cart_item_from_session', 'harvest_get_cart_item_from_session', 20, 2 );

/*
 * Show custom field in order overview
 */
function harvest_order_item_product( $cart_item, $order_item ){

    if( isset( $order_item['harvest_attendees'] ) ){
	    
        $cart_item_meta['harvest_attendees'] = $order_item['harvest_attendees'];
    
    }

    return $cart_item;

}
add_filter( 'woocommerce_order_item_product', 'harvest_order_item_product', 10, 2 );

/* 
 * Add the field to order emails 
 */ 
function harvest_email_order_meta_fields( $fields ) { 
   
    $fields['harvest_attendees'] = __( 'Dinner Attendees', 'oregonaitc' ); 
    return $fields; 

} 
add_filter('woocommerce_email_order_meta_fields', 'harvest_email_order_meta_fields');

/**
 * Resource Library
 */
function lesson_plan_sort_order($query){
    
    if (  is_post_type_archive( 'lessonplan' ) ) {
    
       //Set the order ASC or DESC
       $query->set( 'order', 'ASC' );
    
       //Set the orderby
       $query->set( 'orderby', 'title' );
    
    } 
    
};
add_action( 'pre_get_posts', 'lesson_plan_sort_order' ); 

/**
 * Sort grade levels in dropdown filter
 */
function grade_level_sort ( $orderby, $facet ) {
    
    if ( 'lesson_plan_grades' == $facet['name'] ) {
    
        $orderby = 'FIELD(f.facet_display_value, "K", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12")';
    
    }
    
    return $orderby;
    
}
add_filter( 'facetwp_facet_orderby', 'grade_level_sort', 10, 2 );