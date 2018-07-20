<?php session_start(); ?>
<?php /* Template Name: Library Hold Page */ ?>
<?php get_header(); ?>
<?php
if(isset($_POST['submit'])){ 
	if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { 
		$error = false;
		foreach($_SESSION['cart'] as $id=>$value) {
			if (isset($_POST['q'.$id])) {
				if ($_POST['q'.$id] == 0) {
					$error = true;
				}
			}
		}
		
		$current_user = wp_get_current_user();
			
		// Send email notification
		$message = "<h2>Library Order Details</h2><p><strong>Library User:</strong><br>" 
					. $current_user->user_firstname 
					. " " 
					. $current_user->user_lastname
					. "<br>" 
					. $current_user->school
					. "<br><br>"
					. $current_user->addr1
					. " "
					. $current_user->addr2
					. "<br>" 
					. $current_user->city
					. ", "
					. $current_user->thestate
					. " "
					. $current_user->zip
					. "<br><br>"
					. $current_user->user_email
					. "<br>"
					. $current_user->phone1								
					. "</p><p><strong>Comments</strong><br>"
					. $_POST['comment']
					. "</p>"
					. "<table border='0' cellpadding='10' style='border: 1px solid #ccc;' cellpadding=10>
						<tr>
							<td><strong>Resource Name</strong></td>
							<td><strong>Quantity</strong></td>
							<td><strong>Link</strong></td>
						</tr>";
		$headers = array('Content-Type: text/html; charset=UTF-8');
		
		// Create Order Var
		$order = $message;
		
		// Run through order
		foreach($_SESSION['cart'] as $id=>$value) {
			$resource = get_field_object('resource_name', $id);
			$name = $resource['value'];
			$link = get_permalink( $id );				
			
			// Update quantity available and checkout total
			$available = get_field_object('total_available', $id);
			$a = $available['value'] - 1;
			
			$total = get_field_object('checked_out_total', $id);
			$types = get_the_terms($id, 'resource_type');
			$quantity = 1;
			
			foreach($types as $type) {
				if ($type->name == "Kits") {
					$t = $total['value'] + $_POST['q'.$id];
					$quantity = $_POST['q'.$id];
				} else {
					$t = $total['value'] + 1;
				}
			}
			
			$usertotal = get_user_meta($current_user->ID, 'total_library_checkouts'); 
			$ut = (int)$usertotal + 1;
			
			update_field('total_available', $a, $id);
			update_field('checked_out_total', $t, $id);
			
			// Update user checkout total
			update_user_meta($current_user->ID, 'total_library_checkouts', $ut);
			
			// Add to email
			$message .= 
			"
			<tr>
				<td>$name</td><td>$quantity</td><td><a href='$link' target='_blank'>Resource Link</a></td>
			</tr>
			";
			
			// Update order
			$order .= $message;
		}
		
		// Send notification
		//wp_mail( 'aitc@oregonstate.edu', 'Library Hold Placed', $message, $headers);
		
		// Create new Order post		
		$post_data = array(
			'post_type'     => 'resource_order',
			'post_status'   => 'publish',
			'post_author'   => 1,
			'post_title'    => 'temp',
		);
		
		// Insert the post into Wordpress
	 	$post_id = wp_insert_post($post_data, true);
	 	
		if($post_id) {		
			$title = 'Order #' . $post_id;
			update_post_meta($post_id, 'post_title', $title);
			update_field('details', $order, $post_id); 
			update_field('user', $current_user, $post_id);
		} else {
			$error = true;
		}
		session_unset();
	} 
}
?>
<?php get_template_part('library/library', 'top'); ?>
<div class="section section-sm section-alt">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
							<?php $arrivalDate = date("l, M d", mktime(0, 0, 0, date("m"), date("d")+14, date("y"))); ?>
							<?php $returnDate = date("l, M d", mktime(0, 0, 0, date("m"), date("d")+35, date("Y"))); ?>
							<h2 class="mb-2"><?php the_title(); ?></h2>
							<?php if ($error == "true"): ?>
								<div class="alert alert-danger" role="alert">
									<p class="m-0"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> Please specify quantity of kits you’d like to request (1 per student)</p>
								</div>
							<?php endif; ?>
							<form method="post" id="form" class="inb30" action="<?php echo home_url(); ?>/place-hold">
								<div class="table-responsive">
									<table class="table table-bordered text-md	">
										<tr><th>Resource Name</th><th>Quantity</th><th>Resource Type</th><th>Age Group</th><th>Estimated Arrival</th><th>Return Date</th><th>Remove</th></tr>
										<?php foreach($_SESSION['cart'] as $id=>$value): ?>
											<?php $permalink = get_permalink($id); ?>
											<?php $types = get_the_terms($id, 'resource_type'); ?>
											<?php $categories = get_the_terms($id, 'resource_category'); ?>
											<tr>
												<td><a href="<?php echo $permalink; ?>"><?php the_field('resource_name', $id); ?></a></td>
												<td>
													<?php foreach($types as $type): ?>
														<?php if($type->name == "Kits"): $kit = true; ?>
															<input style="width:50px;padding: 0 5px;font-weight:bold;" type="text" name="q<?php echo $id ?>" id="q<?php echo $id ?>" value="1">
														<?php endif; ?>
													<?php endforeach; ?>
													<?php echo (!$kit) ? 1 : ''; ?>
												</td>
												<td><?php foreach($types as $type) echo rtrim($type->name, "s"); ?></td>
												<td><?php the_field('minimum_age_group', $id); ?> - <?php the_field('maximum_age_group', $id); ?></td>
												<td><?php echo $arrivalDate; ?></td>
												<td><?php echo $returnDate; ?></td>
												<td><a href="<?php echo home_url(); ?>/place-hold?action=remove&id=<?php echo $id; ?>">Remove Item</a></td>
											</tr>
										<?php endforeach; ?>		
									</table>
								</div>
								<div class="row">
									<div class="col-lg-6 mb-3 mb-lg-0">
										<h5 class="card-title">Before You Submit</h5> 
										<div class="card bg-light">
											<div class="card-body">
												<div class="text-md text-description"><?php the_field('library_hold_message', 'options'); ?></div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group m-0">
											<h5 class="card-title"><label for="comment">Comments:</label></h5>
										  	<textarea class="form-control input-lg" rows="3" name="comment" id="comment"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="text-center mt-3">
											<button type="submit" name="submit" class="btn btn-primary btn-lg">Place Hold</button>	
										</div>
									</div>
								</div>
							</form>
						<?php elseif(isset($_POST['submit']) && !$error): ?> 
							<h2 class="mb-3">Success!</h2>
							<div class="text-description"><?php the_field('library_hold_success_message', 'options'); ?></div> 
						<?php elseif($error): ?>
							<h2 class="mb-3"><?php the_title(); ?></h2>
							<div class="text-description"><?php the_field('library_hold_error_message', 'options'); ?></div>
						<?php else: ?>
							<h2 class="mb-3">Library Cart</h2>
							<div class="text-description"><?php the_field('library_hold_empty_message', 'options'); ?></div> 
						<?php endif; ?>
					</div> <!-- Card Body End -->
				</div> <!-- Card End -->
			</div> <!-- Col End -->
		</div> <!-- Row End -->
	</div> <!-- Container End -->
</div> <!-- Section End -->
<?php get_footer(); ?>	