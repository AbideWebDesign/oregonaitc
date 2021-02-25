<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header border-0">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

	  	<?php the_field('library_order_confirmation_message', 'options'); ?>

      </div>

      <div class="modal-footer border-0">

		<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block"><?php _e('Place Hold'); ?></button>	

      </div>

    </div>

  </div>

</div>