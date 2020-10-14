<?php session_start(); ?>
<?php /* Template Name: Library Hold Page */ ?>
<?php get_header(); ?>
<?php get_template_part('library/library', 'top'); ?>

<?php

$errors = array();
$branches = array('Oregon', 'Washington County');
$b = array();

// Submit Cart
if( isset($_POST['submit']) ){ 
			
	if ( count($errors) == 0 ) {
		
		$status = submit_library_order();
		
		session_unset();
	
	} 

} 

// Validate Cart
if ( isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 ) { 

	foreach( $_SESSION['cart'] as $id=>$value ) {
		
		$b[] = $value['branch'];
		
		if ( isset($_POST['q'.$id]) ) {

			if ($_POST['q'.$id] == 0) {
		
				$errors[] = 'Please specify quantity of kits you’d like to request (1 per student)';
		
			}
		}
	}
	
	if ( in_array('Washington County', $b) ) {

		if ( get_user_meta(get_current_user_id(), 'county', true) != 'Washington' ) {
		
			$errors[] = 'You have items from the Washington County Resource Library, but you do not live in that county. Washington County resources can only be checked out by users in that county.';

		}
	
	}

}

?>

<div class="section section-sm section-alt">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						
						<?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
							
							<h2 class="mb-2"><?php the_title(); ?></h2>
							
							<?php if (count($errors) > 0): ?>
								<?php foreach($errors as $error): ?>
								<div class="alert alert-danger" role="alert">
									<p class="m-0 text-md"><i class="fa fa-exclamation-circle"></i> <?php echo $error; ?></p>
								</div>
								<?php endforeach; ?>
							<?php endif; ?>
							
							<form method="post" id="form" class="inb30" action="<?php echo home_url(); ?>/place-hold">
								<div class="table-responsive">
									<table class="table table-bordered text-md	">
										<tr><th>Resource Name</th><th>Branch</th><th>Qty</th><th>Type</th><th>Age Group</th><th>Arrival Date</th><th>Return Date</th><th></th></tr>
										<?php foreach($_SESSION['cart'] as $id=>$value): ?>											
											<?php $permalink = get_permalink($id); ?>
											<?php $types = get_the_terms($id, 'resource_type'); ?>
											<?php $categories = get_the_terms($id, 'resource_category'); ?>
											<tr>
												<td class="align-middle"><a href="<?php echo $permalink; ?>"><?php the_field('resource_name', $id); ?></a></td>
												<td class="align-middle"><?php echo $value['branch']; ?></td>
												<td class="align-middle">
													
													<?php foreach($types as $type): ?>
														
														<?php if($type->name == "Kits"): $kit = true; ?>
															
															<input class="kit-qty" type="text" name="q<?php echo $id ?>" id="q<?php echo $id ?>" value="1">
														
														<?php endif; ?>
													
													<?php endforeach; ?>
													
													<?php echo (!isset($kit)) ? 1 : ''; ?>
													
												</td>
												<td class="align-middle"><?php foreach($types as $type) echo rtrim($type->name, "s"); ?></td>
												<td class="align-middle"><?php the_field('minimum_age_group', $id); ?> - <?php the_field('maximum_age_group', $id); ?></td>
												<td class="align-middle"><input name="<?php echo $id; ?>" id="<?php echo $id; ?>" class="datepicker" width="150" /></td>
												<td class="align-middle">
													<div class="input-group">
														<input name="return-date-picker-<?php echo $id; ?>" id="return-date-picker-<?php echo $id; ?>" class="form-control" width="150" value="<?php echo date('n/d/Y', strtotime("+35 days"))?>" readonly="readonly" />
													</div>
												</td>
												<td class="align-middle text-center"><a href="<?php echo home_url(); ?>/place-hold?action=remove&id=<?php echo $id; ?>"><i class="fas fa-trash"></i></a></td>
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
											<button <?php echo (count($errors) > 0 ? 'disabled' : '') ?> type="submit" name="submit" class="btn btn-primary btn-lg <?php echo (count($errors) > 0 ? 'disabled' : '') ?>">Place Hold</button>	
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