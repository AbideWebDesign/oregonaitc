<?php
/**
 * Template Name: Get Oregonized Digital
 */

get_header();
?>
<div class="bg-primary text-white py-3">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col">
	
				<h4 class="mb-0">Get Oregonized Online Access</h4>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php if ( isset( $_GET['access'] ) && go_access_check( $_GET['access'] ) ): ?>

	<?php while ( have_posts() ): the_post(); ?>
	
		<div class="section-sm">
			
			<div class="container">
				
				<div class="row justify-content-center">
					
					<div class="col-lg-10">
						
						<div id="embed-wrap">
							
							<div id="adobe-dc-view" style="height: 700px;"></div>
							
							<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
							
							<script type="text/javascript">
								document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
									var adobeDCView = new AdobeDC.View({clientId: "36cb24da2b494a26b65aa039c56c119e", divId: "adobe-dc-view"});
									adobeDCView.previewFile({
										content:{location: {url: "<?php the_field('get_oregonized_media'); ?>"}},
										metaData:{fileName: "Get Oregonized"}
									}, {embedMode: "SIZED_CONTAINER", defaultViewMode: "FIT_PAGE", showDownloadPDF: false, showPrintPDF: false});
								});
							</script>
							
						</div>
												
					</div>
					
				</div>
				
			</div>
			
		</div>
	
	<?php endwhile; ?>

<?php else: ?>

	<div class="section section-alt">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-6">
					
					<h2 class="mb-4 text-secondary text-center">Get Oregonized Digital Access</h2>
					
					<?php if ( isset( $_GET['access'] ) ): ?>
	
						<div class="alert alert-danger">Access Code: <strong><?php echo $_GET['access']; ?></strong> is not valid.</div>
						
					<?php endif; ?>

					<div class="bg-white p-3 p-lg-3 border d-flex justify-content-center">
						
						<?php echo do_shortcode( '[gravityform id="' . get_field('get_oregonized_access_form') . '" title="false" description="false" ajax="true"]' ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

<?php endif; ?>
	
<?php
get_footer();
