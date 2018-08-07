 <?php
// Template Name: Teacher's Corner

get_header();	
?>
<section class="section section-alt p-0 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h2><?php the_field('section_1_title'); ?></h2>
				<p><?php the_field('section_1_text'); ?></p>
				<div id="teacher-corner-farm">
					<img src="<?php the_field('section_1_image'); ?>" class="img img-responsive">
				</div>
			</div>
			<div class="col-lg-4">
				<ul class="list-unstyled">
					<li class="mb-1"><a href="<?php the_field('section_1_button_1_link'); ?>" class="btn btn-secondary btn-arrow"><?php the_field('section_1_button_1_label'); ?></a></li>
					<li class="mb-1"><a href="<?php the_field('section_1_button_2_link'); ?>" class="btn btn-green btn-arrow"><?php the_field('section_1_button_2_label'); ?></a></li>
					<li><a href="<?php the_field('section_1_button_3_link'); ?>" class="btn btn-primary btn-arrow"><?php the_field('section_1_button_3_label'); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="<?php the_field('section_2_button_link'); ?>"><img src="<?php the_field('section_2_image'); ?>" class="img img-fluid" /></a>
				</div>
				<div class="col-lg-6">
					<h2><?php the_field('section_2_title'); ?></h2>
					<p><?php the_field('section_2_text'); ?></p>
					<a href="<?php the_field('section_2_button_link'); ?>" class="btn btn-primary btn-lg"><?php the_field('section_2_button_label'); ?></a>
				</div>			
			</div>
		</div>
	</div>
</section>
<section class="section section-alt">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h2><?php the_field('section_3_title'); ?></h2>
					<p><?php the_field('section_3_text'); ?></p>
					<a href="<?php the_field('section_3_button_1_link'); ?>" class="btn btn-primary btn-lg">Order Map - 36" X 24"</a>&nbsp;&nbsp;<a href="<?php the_field('section_3_button_2_link'); ?>" class="btn btn-secondary btn-lg"><?php the_field('section_3_button_2_label'); ?></a>
				</div>
				<div class="col-lg-4">
					<a href="<?php the_field('section_3_button_1_link'); ?>"><img src="<?php the_field('section_3_image'); ?>" class="img img-fluid" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();	
?>