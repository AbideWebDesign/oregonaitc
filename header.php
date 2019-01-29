<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oregonaitc
 */
 
$logo = get_field('logo_color', 'options'); 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon shortcut" href="<?php the_field('fav_icon', 'options'); ?>" type="image/png" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37648780-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-71986030-1');
	</script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="search">
	<div id="search-bar">
		<div class="search-bar-inner">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form role="search" id="sites-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
							<div class="row">
								<div class="col-11">
									<label class="sr-only" for="search-text">Search</label>
									<input type="text" class="search-field" id="search-text" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
								</div>
								<div class="col-1 d-flex justify-content-end">
									<button type="submit" id="ss-icon" class="d-flex align-content-center"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="global-header">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-lg-4 d-none d-md-block">
				<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image($logo['id'], 'full', 0, array('class' => 'img-fluid pt-2', 'alt' => $logo['alt'])); ?></a>
			</div>
			<div class="col-sm-12 col-md-7 col-lg-8">
				<?php if (is_user_logged_in()): ?>
					<div id="row-account" class="row d-none d-lg-block">
						<div class="col d-flex flex-row-reverse">
							<div class="text-md"><a  href="<?php echo home_url(); ?>/login?a=logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></div>
							<div class="pr-3 text-md"><a  href="<?php echo home_url(); ?>/member-profile"><i class="fas fa-user"></i> Profile</a></div>
							<div class="pr-3 text-md"><a  href="<?php echo home_url(); ?>/place-hold"><i class="fas fa-shopping-cart"></i> Library Cart</a></div>
						</div>
					</div>
				<?php else: ?>
					<div class="row">
						<div id="row-account" class="col d-none d-lg-flex flex-row-reverse">
							<div class="text-md"><a href="<?php echo home_url(); ?>/login"><i class="fas fa-sign-in-alt"></i> Log In</a></div>
							<div class="pr-3 text-md"><a  href="<?php echo home_url(); ?>/signup"><i class="fas fa-user-plus"></i> Sign Up</a></div>
						</div>
					</div>
				<?php endif; ?>
				<div class="row justify-content-center justify-content-lg-end align-items-center mt-lg-3">
					<div class="col d-flex flex-row-lg-reverse justify-content-center justify-content-lg-end flex-nowrap">
						<div class="pr-2 order-1"><a href="<?php the_field('header_button_1_link', 'options'); ?>" class="btn btn-primary btn-lg"><?php the_field('header_button_1_label', 'options'); ?></a></div>
						<div class="order-2"><a href="<?php the_field('header_button_2_link', 'options'); ?>" class="btn btn-secondary btn-lg"><?php the_field('header_button_2_label', 'options'); ?></a></div>
						<div class="d-flex align-items-center order-3 ml-3"><a href="#" id="search-toggle"><i class="fa fa-search"></i></a></div>
						<div id="mobile-menu" class="order-3"><?php shiftnav_toggle( 'shiftnav-main' , '' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button') ); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="global-header-mobile" class="d-md-none">
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1">
				<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image($logo['id'], 'full', 0, array('class' => 'img-fluid', 'alt' => $logo['alt'])); ?></a>
			</div>
		</div>
	</div>
</div>
<div id="global-navbar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php ubermenu( 'main' , array( 'menu' => 2 ) ); ?>
			</div>
		</div>
    </div>
</div>