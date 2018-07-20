<?php
// Template Name: Teacher's Corner

get_header();	
?>
<section class="bg-gray">
	<div class="container p60">
		<div class="container_inner">
			<div class="vc_col-sm-8">
				<h2><?php the_field('section_1_title'); ?></h2>
				<p><?php the_field('section_1_text'); ?></p>
				<div id="teacher-corner-farm">
					<img src="<?php the_field('section_1_image'); ?>" class="img img-responsive">
				</div>
			</div>
			<div class="col-sm-4">
				<ul class="list-unstyled">
					<li class="inb10"><a href="<?php the_field('section_1_button_1_link'); ?>" class="qbutton big_large_full_width btn-orange btn-arrow"><?php the_field('section_1_button_1_label'); ?></a></li>
					<li class="inb10"><a href="<?php the_field('section_1_button_2_link'); ?>" class="qbutton big_large_full_width btn-green btn-arrow"><?php the_field('section_1_button_2_label'); ?></a></li>
					<li><a href="<?php the_field('section_1_button_3_link'); ?>" class="qbutton big_large_full_width btn-blue btn-arrow"><?php the_field('section_1_button_3_label'); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="bg-white">
	<div class="p60">
		<div class="container_inner">
			<div class="vc_row">
				<div class="vc_col-sm-6">
					<a href="<?php the_field('section_2_button_link'); ?>"><img src="<?php the_field('section_2_image'); ?>" class="img img-responsive" /></a>
				</div>
				<div class="vc_col-sm-6">
					<h2><?php the_field('section_2_title'); ?></h2>
					<p><?php the_field('section_2_text'); ?></p>
					<a href="<?php the_field('section_2_button_link'); ?>" class="qbutton large"><?php the_field('section_2_button_label'); ?></a>
				</div>			
			</div>
		</div>
	</div>
</section>
<section class="bg-blue">
	<div class="p30">
		<div class="container_inner">
			<div class="vc_row">
				<div class="vc_col-sm-8">
					<h2><?php the_field('section_3_title'); ?></h2>
					<p><?php the_field('section_3_text'); ?></p>
					<a href="<?php the_field('section_3_button_1_link'); ?>" class="qbutton large btn-white">Order Map - 36" X 24"</a>&nbsp;&nbsp;<a href="<?php the_field('section_3_button_2_link'); ?>" class="qbutton large btn-white"><?php the_field('section_3_button_2_label'); ?></a>
				</div>
				<div class="vc_col-sm-4">
					<a href="<?php the_field('section_3_button_1_link'); ?>"><img src="<?php the_field('section_3_image'); ?>" class="img img-responsive" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();	
?>