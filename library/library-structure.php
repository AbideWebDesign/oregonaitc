<?php 
	global $wp_query;
	global $qode_options_proya;
    global $qode_template_name;
	$id = $wp_query->get_queried_object_id();

	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	if(isset($qode_options_proya['blog_page_range']) && $qode_options_proya['blog_page_range'] != ""){
		$blog_page_range = $qode_options_proya['blog_page_range'];
	} else{
		$blog_page_range = $wp_query->max_num_pages;
	}
	
	$filter = "no";
	if(isset($qode_options_proya['blog_masonry_filter'])){
		$filter = $qode_options_proya['blog_masonry_filter'];
	}

   
?>
<div class="blog_holder <?php echo $blog_list_class; ?>">
	<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
		<?php 
			get_template_part('templates/library', 'loop');
		?>
	<?php endwhile; ?>
	<?php if($blog_list != "blog_masonry" && $blog_list != "blog_masonry_date_in_image") { ?>
		<?php if(isset($qode_options_proya['pagination']) && $qode_options_proya['pagination'] != "0") : ?>
			<?php pagination($wp_query->max_num_pages, $blog_page_range, $paged); ?>
		<?php endif; ?>
	<?php } ?>
	<?php else: //If no posts are present ?>
	<div class="entry box box-wrap"> 
		<h3><?php _e('No resources were found.', 'qode'); ?></h3>                       
	</div>
	<?php endif; ?>
</div>
<?php if($blog_list == "blog_masonry" || $blog_list == "blog_masonry_date_in_image") { 
    if($pagination_masonry == "load_more") { 
		if (get_next_posts_link()) { ?>
			<div class="blog_load_more_button_holder">
				<div class="blog_load_more_button"><span rel="<?php echo $wp_query->max_num_pages; ?>"><?php echo get_next_posts_link(__('Show more', 'qode')); ?></span></div>
				<div class="blog_load_more_button_loading"><a href="javascript: void(0)" class="qbutton"><?php _e('Loading...', 'qode'); ?></a></div>
			</div>
		<?php } ?>
	 <?php } elseif($pagination_masonry == "infinite_scroll") { ?>
		<div class="blog_infinite_scroll_button"><span rel="<?php echo $wp_query->max_num_pages; ?>"><?php echo get_next_posts_link(__('Show more', 'qode')); ?></span></div>
	<?php }else { ?>
		<?php if($qode_options_proya['pagination'] != "0") : ?>
			<?php pagination($wp_query->max_num_pages, $blog_page_range, $paged); ?>
		<?php endif; ?>
	<?php } ?>
<?php } ?>