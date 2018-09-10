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
add_image_size('card-4', 362, 200, true);
add_image_size('card-3', 255, 141, true);

/**
 * ACF Options page
 */
if( function_exists('acf_add_options_page') ) {
	
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
function show_pagination_links()
{
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
function my_login_inputs($array) {
	$array[0]['name'] = 'Email or Username';
	$array[0]['class'] = 'form-control input-lg';
	$array[0]['div'] = 'form-group';
	$array[1]['class'] = 'form-control input-lg';
	$array[1]['div'] = 'form-group';

	return $array;
}
add_filter('wpmem_login_form_rows', 'my_login_form_rows_filter', 10, 2);

function my_login_form_rows_filter($rows, $action) {
		$rows[] = array( 
			'row_before' => '<div class="form-group">',
			'row_after'  => '</div>'
		);

	return $rows;
}
add_filter( 'wpmem_register_form_args', 'my_register_form_args', 10, 2 );

function my_register_links( $string ) {
    $string = str_replace( '<li><a href="https://oregonaitc.org">Begin using the site.</a></li>	', '', $string);     
    return $string;
}
add_filter( 'wpmem_register_links', 'my_register_links' );

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
 * Nationbuilder
 */
add_filter( 'wpmem_register_data', 'nationbuilder_hook' );

function nationbuilder_hook( $fields ){	
	
	$token = 'aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154'; 
	
	$nb_url = "https://oregonaitc.nationbuilder.com/api/v1/people?access_token=" . $token;
	 
	// Client ID and Secret from Nation Builder
	$CLIENT_ID	= '06f6d62b38696451d21eacfdb4700ea21ff2eee8a46df77a0ece9c85f38753f4';
	$CLIENT_SECRET	= '80234e58d7fa84921e2120295befd33ec55a989651cbe7c7e5b7fb39752ffcef';
	 
	// Start a new OAuth2 Client
	$client = new OAuth2\Client($CLIENT_ID, $CLIENT_SECRET);
	
	$baseApiUrl = 'https://oregonaitc.nationbuilder.com';
	$client->setAccessToken($token);
	
	// Set the headers for the request
	$header = array(
		'Authorization' => $token,
		'Content-Type' => 'application/json', 
		'Accept' => 'application/json'
		);

	$person = array();
	$address = array();
	$tags = array();
	
	$person['email'] = $fields['user_email'];
	$person['first_name'] = $fields['first_name'];
	$person['last_name'] = $fields['last_name'];
	
	
	$address['address1'] = $fields['addr1'];
	$address['address2'] = $fields['addr2'];
	$address['city'] = $fields['city'];
	$address['state'] = $fields['thestate'];
	$address['zip'] = $fields['zip'];
	
	if ($fields['address_type'] == "home") {
		$person['mailing_address'] = $address;
		$person['home_address'] = $address;
	} else {
		$person['mailing_address'] = $address;
		$person['work_address'] = $address;
	}
	
	$person['phone'] = $fields['phone1'];
	
	if ($fields['school_district']) {
		$person['school_district'] = $fields['school_district'];
		array_push($tags, $fields['school_district']);
	}
	
	if ($fields['school']) {
		array_push($tags, $fields['school']);		
	}
	
	$person['county_district'] = $fields['county'];
	
	switch($fields['library_user_role']) {
		case 'Classroom_Teacher':
			$person['employer'] = $fields['school'];
			$person['occupation'] = 'Classroom Teacher';
			array_push($tags, 'Teacher');
			break;
		case 'Informal_Educator':
			array_push($tags, 'Partner');
			break;
		case 'Volunteer':
			array_push($tags, 'Volunteer');
			break;
		case 'Homeschool':
			array_push($tags, 'Other, Homeschool');
			break;
		case 'Parent':
			array_push($tags, 'Other');
			break;
		case 'Administrator':
			array_push($tags, 'Teacher, Administrator');
			$person['employer'] = $fields['school'];
			$person['occupation'] = 'Administrator';
			break;
		case 'Student':
			array_push($tags, 'Other, Student');
			$person['occupation'] = 'Student';
			break;
	}
	
	if (!$person['subscribe']) {
		array_push($tags, 'does not receive emails');
	}
	
	array_push($tags, 'Library User');
	
	$person['tags'] = $tags;
	
	$data = array('person' => $person);
	
    $ch = curl_init();
                    
    curl_setopt($ch, CURLOPT_URL, "https://oregonaitc.nationbuilder.com/api/v1/people/push?access_token=aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

	 
	$json_response = curl_exec($ch);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    if ($curl_error = curl_error($ch)) {
        throw new Exception($curl_error, Exception::CURL_ERROR);
    } else {
        $json_decode = json_decode($result, true);
    }
	
	curl_close($ch);
	
	return $fields;
}

// Add Literacy Project Volunteer Form submissions to Nationbuilder
add_action( 'gform_after_submission_1', 'nb_add_volunteer', 10, 2 );
function nb_add_volunteer( $entry, $form ) {
	
	$token = 'aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154'; 
	
	$nb_url = "https://oregonaitc.nationbuilder.com/api/v1/people/push?access_token=" . $token;
	 
	// Client ID and Secret from Nation Builder
	$CLIENT_ID	= '4f23365530725bc7dd69531cbb367ad0970f5b0f2886d6f39141886eb08be3cf';
	$CLIENT_SECRET	= '31d2b20c9637bfc260bc767c1439245716703b91510ec8c6bc835dee5e4afec2';
	 
	// Start a new OAuth2 Client
	$client = new OAuth2\Client($CLIENT_ID, $CLIENT_SECRET);
	
	$baseApiUrl = 'https://oregonaitc.nationbuilder.com';
	$client->setAccessToken($token);
	
	// Set the headers for the request
	$header = array(
		'Authorization' => $token,
		'Content-Type' => 'application/json', 
		'Accept' => 'application/json'
		);

	$person = array();
	$address = array();
	$tags = array();
		
	$person['email'] = rgar( $entry, '3' );
	$person['first_name'] = rgar( $entry, '1.3' );
	$person['last_name'] = rgar( $entry, '1.6' );
	$person['phone'] = rgar( $entry, '4' );
	
	$address['address1'] = rgar( $entry, '5.1' );
	$address['address2'] = rgar( $entry, '5.2' );
	$address['city'] = rgar( $entry, '5.3' );
	$address['state'] = rgar( $entry, '5.4' );
	$address['zip'] = rgar( $entry, '5.5' );
	
	$person['mailing_address'] = $address;
	$person['home_address'] = $address;

	
	if ( rgar( $entry, '2' ) != "None" ) {
		 array_push( $tags, rgar($entry, '2' ) );
	} 
	
	array_push( $tags, "Literacy Project Volunteer" );
	
	$person['tags'] = $tags;
	$data = array('person' => $person);
	
    $ch = curl_init();
                    
    curl_setopt($ch, CURLOPT_URL, "https://oregonaitc.nationbuilder.com/api/v1/people/push?access_token=aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

	 
	$json_response = curl_exec($ch);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    if ($curl_error = curl_error($ch)) {
        throw new Exception($curl_error, Exception::CURL_ERROR);
    } else {
        $json_decode = json_decode($result, true);
    }
	
	curl_close($ch);
}

// Add Literacy Project Volunteer Form submissions to Nationbuilder
add_action( 'gform_after_submission_2', 'nb_add_teacher', 10, 2 );
function nb_add_teacher( $entry, $form ) {
	
	$token = 'aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154'; 
	
	$nb_url = "https://oregonaitc.nationbuilder.com/api/v1/people/push?access_token=" . $token;

	 
	// Client ID and Secret from Nation Builder
	$CLIENT_ID	= '4f23365530725bc7dd69531cbb367ad0970f5b0f2886d6f39141886eb08be3cf';
	$CLIENT_SECRET	= '31d2b20c9637bfc260bc767c1439245716703b91510ec8c6bc835dee5e4afec2';
	 
	// Start a new OAuth2 Client
	$client = new OAuth2\Client($CLIENT_ID, $CLIENT_SECRET);
	
	$baseApiUrl = 'https://oregonaitc.nationbuilder.com';
	$client->setAccessToken($token);
	
	// Set the headers for the request
	$header = array(
		'Authorization' => $token,
		'Content-Type' => 'application/json', 
		'Accept' => 'application/json'
		);

	$person = array();
	$address = array();
	$tags = array();
		
	$person['first_name'] = rgar( $entry, '1.3' );
	$person['last_name'] = rgar( $entry, '1.6' );
	$person['phone'] = rgar( $entry, '5' );
	$person['email'] = rgar( $entry, '6' );
	$person['recruiter']['employer'] = rgar ( $entry, '2' );
	
	$address['address1'] = rgar( $entry, '7.1' );
	$address['address2'] = rgar( $entry, '7.2' );
	$address['city'] = rgar( $entry, '7.3' );
	$address['state'] = rgar( $entry, '7.4' );
	$address['zip'] = rgar( $entry, '7.5' );
	
	$person['mailing_address'] = $address;
	$person['work_address'] = $address;

	
	
	array_push( $tags, rgar($entry, '3' ) );
	array_push( $tags, "Literacy Project Participant" );
	
	$person['tags'] = $tags;
	$data = array('person' => $person);
	
    $ch = curl_init();
                    
    curl_setopt($ch, CURLOPT_URL, "https://oregonaitc.nationbuilder.com/api/v1/people/push?access_token=aa0fc381738ea46bcbe1fa73f3ba8311f56f4280f637c1caee993fafd4e81154");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

	 
	$json_response = curl_exec($ch);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    if ($curl_error = curl_error($ch)) {
        throw new Exception($curl_error, Exception::CURL_ERROR);
    } else {
        $json_decode = json_decode($result, true);
    }
	
	curl_close($ch);
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
				. "<br>" 
				. "<strong>Mailing Address:</strong><br>"
				. $mailing_address
				. "<br>"
				. "<strong>Contact Information:</strong><br>"
				. $contact_info	
				. "</p>"						
				. "<table border='0' cellpadding='10' style='border: 1px solid #ccc;'>
					<tr>
						<td><strong>Resource Name</strong></td>
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
		$content .= "<tr><td>$name</td><td>$quantity</td><td>$arrival_date</td><td>$return_date</td><td><a href='$link' target='_blank'>Resource Link</a></td></tr>";
		
		$item = array(
			'url' => $link,
			'target' => '_blank',
			'title' => $name	
		);
		
		// Add to order array
		$order[] = array(
			'item' => $item,
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