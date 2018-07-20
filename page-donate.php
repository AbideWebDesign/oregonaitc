<?php 

/* Template Name: Donate Page */ 

get_header();
?>
<div class="section section-xs bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 class="card-title text-white mb-0 py-1">Donate to Oregon AITC</h3>
			</div>
		</div>
	</div>
</div>
<div class="section section-alt">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<h1 class="mb-4"><?php the_field('donate_title'); ?></h1>
				<p class="lead mb-5"><?php the_field('donate_text'); ?></p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-5 d-flex align-contents-stretch mb-4 mb-lg-0">
				<div class="card w-100">
					<div class="card-body">
						<h3 class="text-center"><?php the_field('donate_box_1_title'); ?></h3>
						<form class="form form-donation" id="form" action="https://oregonaitc.nationbuilder.com/donate" method="GET">
						    <div class="input-group input-group-lg mb-2">
						        <div class="input-group-prepend">
							        <div class="input-group-text">$</div>
						        </div>
						        <input type="number" class="form-control" placeholder="40.00" min="1.00" /> 
						    </div>
						    <script>
						        jQuery('#custom-donation').change(function() {
						            
						            // Stripe accepts payment amounts in cents so we have to convert dollars to cents by multiplying by 100
						            var amount = jQuery(this).val();
						            var fee = ((amount * 0.029) + 0.3).toFixed(2);
						            var total = eval(amount) + eval(fee);
						            jQuery( "#amount" ).attr( "value", amount );
						            jQuery( "#total" ).attr( "value", total );
						            jQuery( "#fee" ).text( "of $" + fee );        
						            
						        });
						    </script>
						    <div class="checkbox mb-3">
						        <label>
						            <input class="mt-1" type="checkbox" name="pay-fee" id="pay-fee" aria-invalid="false"> <span class="text-md"><?php the_field('donate_box_1_text'); ?> </span>
						        </label>
						    </div>
						    <input type="hidden" id="amount" name="amount" value="" />
						    <input type="hidden" id="total" name="total" value="" />
						    <button id="customButton" class="btn btn-primary btn-lg btn-block"><?php the_field('donate_box_1_label'); ?> </button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-5 d-flex align-contents-stretch">
				<div class="card w-100">
					<div class="card-body">
						<h3 class="text-center"><?php the_field('donate_box_2_title'); ?></h3>
						<p class="lead"><?php the_field('donate_box_2_text'); ?></p>
						<a href="<?php the_field('donate_box_2_link'); ?>" class="btn btn-secondary btn-lg btn-block"><?php the_field('donate_box_2_label'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>	