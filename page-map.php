<?php 
/* Template Name: Oregon Map */ 

get_header();

$region1 = get_field('legend_region_1', 'options');
$region2 = get_field('legend_region_2', 'options');
$region3 = get_field('legend_region_3', 'options');
$region4 = get_field('legend_region_4', 'options');
$region5 = get_field('legend_region_5', 'options');
$region6 = get_field('legend_region_6', 'options');
$region7 = get_field('legend_region_7', 'options');

?>
<div class="section section-sm">								
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2 class="mb-3"><?php the_field('oregon_map_title', 'option'); ?></h2>
				<p class="lead"><?php the_field('oregon_map_content', 'option'); ?></p>
				<div class="addthis_inline_share_toolbox_kaea"></div>
			</div>
		</div>
	</div>
</div>
<div class="section section-sm">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-10">
				<div class="row">
					<div class="col-12">
						<?php get_template_part('template/content', 'map'); ?>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="bg-secondary text-white">
						<div class="col-12 col-lg-10 mb-3 mb-lg-0">
							<div class="lead-text">Find more resources and materials for your classroom! Visit our Teacher's Corner!</div>
						</div>	
						<div class="col-12 col-lg-2 flex-row-reverse">
							<a href="<?php echo home_url(); ?>/teacher-corner" class="btn btn-white btn-lg">Visit Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-2">
				<div class="map-legend">
					<h3>Region Legend</h3>
					<ul class="list-group">
						<li class="list-group-item">
							<div class="media">
								<div id="marker-1" class="pull-left marker" style="background-color: <?php echo $region1['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse2">
										<h4 class="media-heading"><?php echo $region1['region_name']; ?> <i id="caret-collapse1" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
										<div class="legend-content"><?php echo $region1['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-2" class="pull-left marker" style="background-color: <?php echo $region2['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
										<h4 class="media-heading"><?php echo $region2['region_name']; ?> <i id="caret-collapse2" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
										<div class="legend-content"><?php echo $region2['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-3" class="pull-left marker" style="background-color: <?php echo $region3['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
										<h4 class="media-heading"><?php echo $region3['region_name']; ?> <i id="caret-collapse3" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
										<div class="legend-content"><?php echo $region3['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-4" class="pull-left marker" style="background-color: <?php echo $region4['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
										<h4 class="media-heading"><?php echo $region4['region_name']; ?> <i id="caret-collapse4" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
										<div class="legend-content"><?php echo $region4['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-5" class="pull-left marker" style="background-color: <?php echo $region5['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
										<h4 class="media-heading"><?php echo $region5['region_name']; ?> <i id="caret-collapse5" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
										<div class="legend-content"><?php echo $region5['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-6" class="pull-left marker" style="background-color: <?php echo $region6['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
										<h4 class="media-heading"><?php echo $region6['region_name']; ?> <i id="caret-collapse6" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
										<div class="legend-content"><?php echo $region6['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-7" class="pull-left marker" style="background-color: <?php echo $region7['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
										<h4 class="media-heading"><?php echo $region7['region_name']; ?> <i id="caret-collapse7" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
										<div class="legend-content"><?php echo $region7['region_content']; ?></div>
									</div>
								</div>
							</div>
						</li>									
					</ul>
				</div>
				<?php if( have_rows('video_legend', 'option') ): ?>
				<div class="map-legend video-legend">
					<h3 class="padding-top-one">Virtual Videos</h3>
					<ul class="list-group">
						<?php while ( have_rows('video_legend', 'option') ) : the_row(); ?>
							<li class="list-group-item">
								<div class="media">
									<div class="pull-left"><i class="fa fa-video-camera"></i></div>
									<div class="media-body legend-content"><a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo the_sub_field('video_url'); ?>'><?php the_sub_field('video_location'); ?></a></div>
								</div>
							</li>
						<?php endwhile ?>
					</ul>		
				</div>
				<?php endif; ?>
				<?php if( have_rows('educational_videos', 'option') ): ?>
				<div class="map-legend video-legend">
					<h3 class="padding-top-one">Educational Videos</h3>
					<ul class="list-group">
						<?php while ( have_rows('educational_videos', 'option') ) : the_row(); ?>
							<li class="list-group-item">
								<div class="media">
									<div class="pull-left"><i class="fa fa-video-camera"></i></div>
									<div class="media-body legend-content"><a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo the_sub_field('video_url'); ?>'><?php the_sub_field('video_title'); ?></a></div>
								</div>
							</li>
						<?php endwhile ?>
					</ul>		
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<?php get_footer(); ?>	
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <iframe width="100%" height="350" src=""></iframe>
      </div>
    </div>
  </div>
</div>	