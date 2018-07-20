<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oregonaitc
 */

get_header();
?>
<div class="section section-alt section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
