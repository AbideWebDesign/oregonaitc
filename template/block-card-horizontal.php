<?php if ( get_query_var( 'view' ) != 'print' ): ?>

	<?php if ( have_rows( 'cards_horizontal' ) ): ?>
		
		<?php $counter = 1; ?>	

		<?php while ( have_rows( 'cards_horizontal' ) ) : the_row(); ?>
		
			<?php $img = get_sub_field('card_image'); ?>

			<?php $color = get_sub_field('card_color'); ?>

			<?php ! ( $counter % 2 ) ? $direction = 'right' : $direction = 'left'; ?> 
				
			<div class="row justify-content-center align-items-center card-horizontal card-horizontal-<?php echo $direction; ?> card-<?php echo $color; ?>">

				<div class="col-md-5">

					<?php if ( $direction == 'right' ): ?>

						<a href="<?php the_sub_field('card_link'); ?>"><?php echo wp_get_attachment_image( $img['id'], 'square', 0, array( 'class' => 'img-fluid rounded-circle mx-auto d-block d-sm-none mb-4 mb-sm-0', 'alt' => $img['alt'] ) ); ?></a>

						<div class="card-horizontal-title mb-4 d-none d-sm-block"><h3><?php the_sub_field('card_title'); ?></h3></div>

						<div class="card-horizontal-text mb-4 d-none d-sm-block"><?php the_sub_field('card_text'); ?></div>

						<div class="d-none d-sm-block"><a class="btn btn-<?php echo $color; ?>" href="<?php the_sub_field('card_link'); ?>">Learn More <i class="fa fa-caret-right"></i></a></div>

					<?php else: ?>					

						<a href="<?php the_sub_field('card_link'); ?>"><?php echo wp_get_attachment_image( $img['id'], 'square', 0, array( 'class' => 'img-fluid rounded-circle mx-auto d-block mb-4 mb-sm-0', 'alt' => $img['alt'] ) ); ?></a>

					<?php endif; ?>

				</div>

				<div class="col-md-5 offset-md-1">

					<?php if ( $direction == 'right' ): ?>

						<a href="<?php the_sub_field('card_link'); ?>"><?php echo wp_get_attachment_image( $img['id'], 'square', 0, array( 'class' => 'img-fluid rounded-circle mx-auto d-none d-sm-block mb-4 mb-sm-0', 'alt' => $img['alt'] ) ); ?></a>

						<div class="card-horizontal-title mb-4 d-block d-sm-none"><h3><?php the_sub_field('card_title'); ?></h3></div>

						<div class="card-horizontal-text mb-4 d-block d-sm-none"><?php the_sub_field('card_text'); ?></div>

						<div class="d-block d-sm-none"><a class="btn btn-<?php echo $color; ?>" href="<?php the_sub_field('card_link'); ?>">Learn More <i class="fa fa-caret-right"></i></a></div>

					<?php else: ?>

						<div class="card-horizontal-title mb-4"><h3><?php the_sub_field('card_title'); ?></h3></div>

						<div class="card-horizontal-text mb-4"><?php the_sub_field('card_text'); ?></div>

						<div><a class="btn btn-<?php echo $color; ?>" href="<?php the_sub_field('card_link'); ?>"><i class="fa fa-caret-<?php echo $direction; ?>"></i> Learn More</a></div>				

					<?php endif; ?>	

				</div>

			</div>

			<?php $counter++; ?>

		<?php endwhile; ?>
	
	<?php endif; ?>
	
<?php endif; ?>