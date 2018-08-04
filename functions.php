<?php

require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AbideWebDesign/oregonaitc',
	__FILE__,
	'oregonaitc'
);

$myUpdateChecker->setBranch('master'); 

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
	
	$parent_style = 'abide-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
	
	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );	
}

register_nav_menu( 'Menu Footer', 'Footer Menu' );

add_image_size('logo-sm', 300, 150);
add_image_size('jumbotron', 1280, 600, true);
add_image_size('jumbotron-mobile', 375, 500, true);

/* Pagniation links */
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


/* Pagniation links */
function show_pagination_links_home()
{
    global $blogloop;

    $page_tot   = $blogloop->max_num_pages;
    $big        = 999999999;
	if ( get_query_var('paged') ) {
	    $paged = get_query_var('paged');
	} else if ( get_query_var('page') ) {
	    $paged = get_query_var('page');
	} else {
	    $paged = 1;
	}
	
    if ( $page_tot == 1 ) return;

    echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ), // need an unlikely integer cause the url can contains a number
            'format'    => '?paged=%#%',
            'current'   => max( 1, $paged ),
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

/* 
** WP-Membership
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

add_filter( 'wpmem_register_links', 'my_register_links' );
function my_register_links( $string ) {
    $string = str_replace( '<li><a href="https://oregonaitc.org">Begin using the site.</a></li>	', '', $string);     
    return $string;
}

/* 
** Woocommerce Functions 
*/
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

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
