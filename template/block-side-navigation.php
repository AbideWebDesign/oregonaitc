<?php 

global $post;

$fields = get_sub_field('side_navigation');

$parent = $fields['side_navigation_parent'];

$args = array(
	'post_parent' => $parent->ID,
	'post_type' => 'page',
	'post_status' => 'publish',	
);

$children = get_children( $args );

?>

<?php if ( get_query_var( 'view' ) != 'print' ): ?>

	<div class="row">
	
		<div class="col-md-8 align-self-center">
	
			<h2 class="mb-4"><?php echo $fields['section_title']; ?></h2>
	
			<?php echo $fields['section_text']; ?>
	
			<?php if ( $fields['section_button_label'] ): ?>
	
				<a href="<?php echo $fields['section_button_link'];?>" class="btn btn-secondary btn-lg mt-3"><?php echo $fields['section_button_label']; ?></a>
	
			<?php endif; ?>
	
		</div>
	
		<div class="col-md-4">
	
			<div class="side-navigation p-4">
	
				<div class="side-navigation-title">In this section</div>
	
				<div class="side-navigation-content">
	
					<ul class="list-unstyled mb-0">
	
						<li class="parent"><a href="<?php echo get_permalink($parent); ?>"><?php echo $parent->post_title; ?></a></li>
	
						<?php foreach ( $children as $child ): ?>
	
							<?php $current_class = ( $child->ID == $post->ID ) ? 'class="current"' : ''; ?>
	
							<li <?php if ( $current_class ) echo $current_class; ?>><a href="<?php echo get_permalink( $child ); ?>"><?php echo $child->post_title; ?></a>
	
						<?php endforeach; ?>
	
					</ul>
	
				</div>
	
			</div>
	
		</div>
	
	</div>
	
<?php endif; ?>