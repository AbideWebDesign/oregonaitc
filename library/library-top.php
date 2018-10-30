<?php 
if (is_user_logged_in()) {
	if(isset( $_GET['action']) && $_GET['action']=="add") {	
		if(!isset( $_SESSION['cart'][$_GET['id']])) { 
			$_SESSION['cart'][$_GET['id']] = $_GET['id'];
		}
	} elseif (isset( $_GET['action'] ) && $_GET['action']=="remove") {
		if(isset($_SESSION['cart'][$_GET['id']])) { 
			unset($_SESSION['cart'][$_GET['id']]);
		}
	}
}
?>
<div class="section section-xs <?php echo (is_tax('branch', 'oregon') ? 'section-primary' : 'section-secondary'); ?>">
	<div class="container">
		<div id="search-form" class="row search-form-top justify-content-center align-items-center">
			<div class="col-lg-5 col-sm-12 mt-4 mt-lg-0 order-3 order-lg-1">
				<h5 class="card-title text-white m-0">
					<?php if(is_tax()): ?>
						<a class="text-white" href="<?php get_term_link($post); ?>"><?php echo (is_tax('branch', 'oregon') ? 'Oregon' : 'Washington'); ?> Resource Library</a> 
					<?php elseif(is_archive('lessonplan')): ?>
						<a class="text-white" href="<?php home_url(); ?>/lessonplan">Lesson Plans</a>
					<?php endif; ?>
				</h5>
			</div>
			<?php if (is_user_logged_in()): ?> 
				<?php $current_user = wp_get_current_user(); ?>
				<div class="col-lg-5 col-9 welcome d-flex flex-lg-row-reverse order-1 order-lg-2">
					<div class="d-flex flex-column">
						<div class="text-white text-md">Welcome back, <strong><?php echo $current_user->user_firstname; ?></strong> | <a href="/login/?a=logout" class="plain-link text-white">Log Out</a></div>
					</div>
				</div>
				<div class="col-lg-2 col-3 d-flex flex-row-reverse order-2 order-lg-3">
					<a href="<?php echo home_url(); ?>/place-hold" class="btn btn-white btn-sm"><i class="mr-1 fas fa-shopping-cart"></i> <span class="d-none d-md-inline-block">Library Cart</span></a>
				</div>
			<?php else: ?>
				<div class="col-lg-7 col-12 d-flex flex-lg-row-reverse order-1 order-lg-2">
					<div class="mr-3 mr-lg-0"><a href="<?php echo home_url(); ?>/signup" class="btn btn-white btn-sm">Sign up</a></div>
					<div class="mr-3"><a href="<?php echo home_url(); ?>/login" class="text-white">Log in</a></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>