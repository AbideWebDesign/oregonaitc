<?php /* Template Name: Matrix */ ?>

<?php get_header(); ?>

<?php 

	if ( isset( $_GET['lpid'] ) ) {
		
		$url = "https://iframe.agclassroom.org/oregon/lesson/" . $_GET['lpid'];
	
	} else {
	
		$url = "https://iframe.agclassroom.org/oregon/";
	}

?>

<?php get_template_part('library/library', 'top'); ?>

<div class="section section-sm section-alt">
	<div class="container">
		<div class="embed-responsive embed-responsive-4by3 bg-white">
			<iframe class="embed-responsive-item" src="<?php echo $url; ?>"></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>