<div class="container">

	<div id="search-form" class="row search-form-top bg-blue">

		<div class="col-md-6">

			<?php get_search_form(); ?>

		</div>

		<?php if ( is_user_logged_in() ): ?>

			<?php $current_user = wp_get_current_user(); ?>

			<div class="col-md-6 text-right">

				<p class="mb-0 text-white pt-2">Welcome back, <strong><?php echo $current_user->user_firstname; ?></strong></p>

				<p class="mb-0 text-white"><small><a href="/login/?a=logout" class="plain-link">log out</a></small></p>

			</div>

		<?php else: ?>

			<div class="col-md-6 text-right">

				<a href="/login">Log in</a>

				<a href="/signup" class="btn btn-primary btn-sm">Sign up</a>

			</div>

		<?php endif; ?>

	</div>

</div>