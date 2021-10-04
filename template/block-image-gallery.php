<?php if ( get_query_var( 'view' ) != 'print' || ! get_sub_field('hide_on_print') ): ?>

	<?php $images = get_sub_field('gallery'); ?>
	
	<?php if ( $images ): ?>
	
	    <div class="row justify-content-center">
	
	        <?php foreach ( $images as $image ): ?>
	
	            <div class="col-sm-3 mb-4">
	
		            <?php if ( get_sub_field('type') == 'Photos' ): ?>
	
	            		<a data-fancybox href="<?php echo $image['sizes']['large']; ?>" ><?php echo wp_get_attachment_image( $image['ID'], 'square', 0, array( 'class' => 'img-fluid' ) ); ?></a>
	
					<?php else: ?>
	
						<?php if ( get_field( 'image_link', $image['id'] ) ): ?>
	
	            			<a href="<?php the_field('image_link', $image['id']); ?>" >
	
		            	<?php endif; ?>
	
		            	<?php echo wp_get_attachment_image( $image['ID'], 'square-3', 0, array( 'class' => 'img-fluid' ) ); ?>
	
		            	<?php if ( get_field('image_link', $image['id']) ): ?>
	
	            			</a>
	
	            		<?php endif; ?>
	
	            	<?php endif; ?>
	
	            </div>
	
	        <?php endforeach; ?>
	
	    </div>
	
	<?php endif; ?>
	
<?php endif; ?>