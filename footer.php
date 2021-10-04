<?php if ( get_query_var('view') == 'print' ): ?>

	</div>

<?php else: ?>

	<?php $logo = get_field('logo_white', 'options'); ?>
	
	<div id="footer-global-top" class="section section-primary">
	
		<div class="container">
	
			<div class="row justify-content-center">
	
				<div class="col-md-6 mb-5 mb-md-0 text-center border-white border-right">
	
					<h4 class="mb-4"><?php the_field('footer_top_left_title', 'options'); ?></h4>
	
					<?php echo do_shortcode('[gravityform id=13 title=false description=false ajax=true tabindex=49]'); ?>
	
				</div>
	
				<div class="col-md-6 text-center">
	
					<h4 class="mb-4"><?php the_field('footer_top_right_title', 'options'); ?></h4>
	
					<p class="text-white mb-3"><?php the_field('footer_top_right_text', 'options'); ?></p>
	
					<ul class="list-inline mb-0">
	
						<li class="list-inline-item"><a href="<?php the_field('facebook_url', 'options'); ?>"><i class="fab fa-facebook-square fa-2x"></i></a></li>
	
						<li class="list-inline-item"><a href="<?php the_field('twitter_url', 'options'); ?>"><i class="fab fa-twitter-square fa-2x"></i></a></li>
	
						<li class="list-inline-item"><a href="<?php the_field('pinterest_url', 'options'); ?>"><i class="fab fa-pinterest-square fa-2x"></i></a></li>
	
					</ul>
	
				</div>
	
			</div>
	
		</div>
	
	</div>
	
	<div id="footer" class="section section-blue-dark pb-3">
	
		<div class="container">
	
			<div class="row justify-content-center align-content-center">
	
				<div class="col-4 col-md-3 text-center mb-3 mb-md-4">
	
					<a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image($logo['id'], 'large', 0, array('class' => 'img-fluid', 'alt' => $logo['alt'], 'style' => 'width: 75px')); ?></a>
	
				</div>
	
			</div>
	
			<div class="row">
	
				<div class="col-12 mb-3 text-center">
	
					<?php ubermenu( 'footermenu' ); ?>
	
				</div>
	
			</div>
	
			<div class="row">
	
				<div class="col-12 mb-4 text-center">
	
					<ul class="list-inline mb-0 text-md">
	
						<li class="list-inline-item border-white border-right pr-0 pr-sm-3"><?php the_field('address', 'options'); ?>, <?php the_field('city', 'options'); ?></li>
	
						<li class="list-inline-item border-white border-right pr-0 pr-sm-3"><?php the_field('phone', 'options'); ?></li>
	
						<li class="list-inline-item pr-0 mr-0"><a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a></li>
	
					</ul>
	
				</div>
	
			</div>
	
			<div id="footer-bottom" class="pt-4">
	
				<div class="row">
	
					<div class="col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
	
						<span class="border-right pr-sm-3 mr-sm-2 d-block d-sm-inline">&copy; <?php echo date('Y'); ?> Oregon Agriculture in the Classroom</span>
	
						<a href="#">Privacy Policy</a>
	
					</div>
	
					<div class="col-sm-6 text-center text-sm-right">
	
						Website Design & Maintaince by <a href="https://abidewebdesign.com" target="_blank">Abide Web Design</a>
	
					</div>
	
				</div>
	
			</div>
	
		</div>
	
	</div>
	
<?php endif; ?>

<?php wp_footer(); ?>