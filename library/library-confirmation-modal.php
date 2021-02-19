<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title" id="confirmationModalLabel"><?php _e('Library Hold Confirmation'); ?></h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

	  	<?php the_field('library_order_confirmation_message', 'options'); ?>

      </div>

      <div class="modal-footer">

		<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block"><?php _e('Place Hold'); ?></button>	

      </div>

    </div>

  </div>

</div>