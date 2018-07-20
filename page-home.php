<?php
/**
 * Template Name: Home Page
 *
 * @package oregonaitc
 */

get_header();

$section_1_image = get_field('section_1_image');
$section_3_image = get_field('section_3_image');
?>

<?php get_template_part('template/block', 'jumbotron'); ?>

<!-- Section About Start -->
<div class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-4">
				<?php echo wp_get_attachment_image($section_1_image['id'], 'square', 0, array('class' => 'img-fluid rounded-circle mb-4 mb-sm-0')); ?>
			</div>
			<div class="col-md-6 offset-md-1 d-flex flex-column">
				<div class="mb-4 lead-text text-center text-sm-left"><?php the_field('section_1_text'); ?></div>
				<div class="text-center text-sm-left"><a class="btn btn-primary" href="<?php the_field('section_1_link'); ?>"><?php the_field('section_1_label'); ?></a></div>
			</div>
		</div>
	</div>
</div>
<!-- Section About End -->
<!-- Section Programs Start --> 
<div class="section section-alt pb-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-8 text-center">
				<h2 class="mb-4"><?php the_field('section_2_title'); ?></h2>
				<div class="lead-text mb-4"><?php the_field('section_2_text'); ?></div>
				<a class="btn btn-primary" href="<?php the_field('section_2_link'); ?>"><?php the_field('section_2_label'); ?></a>
			</div>
		</div>
	</div>
</div>
<div class="section-arrow section-arrow-alt"></div>
<div class="section">
	<div class="container">
		<?php get_template_part('template/block', 'card-horizontal'); ?>
	</div>
</div>
<div class="section section-alt">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-3">
				<img src="http://oregonaitc.local/wp-content/uploads/2018/07/oregon-map.png" class="img-fluid mb-4 mb-sm-0" />
			</div>
			<div class="col-md-9 text-center text-sm-left">
				<h2 class="mb-2"><?php the_field('section_3_title'); ?></h2>
				<div class="lead-text mb-4"><?php the_field('section_3_text'); ?></div>
				<a href="<?php the_field('section_3_link'); ?>" class="btn btn-secondary"><?php the_field('section_3_label'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
