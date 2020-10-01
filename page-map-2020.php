<?php 
/* Template Name: Oregon Map 2020 */ 

get_header();

$region1 = get_field('legend_region_1', 'options');
$region2 = get_field('legend_region_2', 'options');
$region3 = get_field('legend_region_3', 'options');
$region4 = get_field('legend_region_4', 'options');
$region5 = get_field('legend_region_5', 'options');
$region6 = get_field('legend_region_6', 'options');
$region7 = get_field('legend_region_7', 'options');

$angus_baker = get_field('angus_baker', 'options');
$angus_baker_img = $angus_baker['image'];
$angus_crook = get_field('angus_crook', 'options');
$angus_crook_img = $angus_crook['image'];
$angus_deschutes = get_field('angus_deschutes', 'options');
$angus_deschutes_img = $angus_deschutes['image'];
$angus_douglas = get_field('angus_douglas', 'options');
$angus_douglas_img = $angus_douglas['image'];
$angus_gilliam = get_field('angus_gilliam', 'options');
$angus_gilliam_img = $angus_gilliam['image'];
$angus_grant = get_field('angus_grant', 'options');
$angus_grant_img = $angus_grant['image'];
$angus_harney = get_field('angus_harney', 'options');
$angus_harney_img = $angus_harney['image'];
$angus_jackson = get_field('angus_jackson', 'options');
$angus_jackson_img = $angus_jackson['image'];
$angus_jefferson = get_field('angus_jefferson', 'options');
$angus_jefferson_img = $angus_jefferson['image'];
$angus_klamath = get_field('angus_klamath', 'options');
$angus_klamath_img = $angus_klamath['image'];
$angus_lake = get_field('angus_lake', 'options');
$angus_lake_img = $angus_lake['image'];
$angus_lane = get_field('angus_lane', 'options');
$angus_lane_img = $angus_lane['image'];
$angus_malheur = get_field('angus_malheur', 'options');
$angus_malheur_img = $angus_malheur['image'];
$angus_morrow = get_field('angus_morrow', 'options');
$angus_morrow_img = $angus_morrow['image'];
$angus_umatilla = get_field('angus_umatilla', 'options');
$angus_umatilla_img = $angus_umatilla['image'];
$angus_union = get_field('angus_union', 'options');
$angus_union_img = $angus_union['image'];
$angus_wallowa = get_field('angus_wallowa', 'options');
$angus_wallowa_img = $angus_wallowa['image'];
$angus_wheeler = get_field('angus_wheeler', 'options');
$angus_wheeler_img = $angus_wheeler['image'];

$apple_hood_river = get_field('apple_hood_river', 'options');
$apple_hood_river_img = $apple_hood_river['image'];
$apple_umatilla = get_field('apple_umatilla', 'options');
$apple_umatilla_img = $apple_umatilla['image'];

$bean_benton = get_field('bean_benton', 'options');
$bean_benton_img = $bean_benton['image'];
$bean_clackamas = get_field('bean_clackamas', 'options');
$bean_clackamas_img = $bean_clackamas['image'];
$bean_lane = get_field('bean_lane', 'options');
$bean_lane_img = $bean_lane['image'];
$bean_multnomah = get_field('bean_multnomah', 'options');
$bean_multnomah_img = $bean_multnomah['image'];

$beet_benton = get_field('beet_benton', 'options');
$beet_benton_img = $beet_benton['image'];
$beet_lane = get_field('beet_lane', 'options');
$beet_lane_img = $beet_lane['image'];
$beet_malheur = get_field('beet_malheur', 'options');
$beet_malheur_img = $beet_malheur['image'];
$beet_marion = get_field('beet_marion', 'options');
$beet_marion_img = $beet_marion['image'];
$beet_union = get_field('beet_union', 'options');
$beet_union_img = $beet_union['image'];

$berries_marion = get_field('berries_marion', 'options');
$berries_marion_img = $berries_marion['image'];

$blueberries_linn = get_field('blueberries_linn', 'options');
$blueberries_linn_img = $blueberries_linn['image'];
$blueberries_marion = get_field('blueberries_marion', 'options');
$blueberries_marion_img = $blueberries_marion['image'];
$blueberries_washington = get_field('blueberries_washington', 'options');
$blueberries_washington_img = $blueberries_washington['image'];

$broccoli_marion = get_field('broccoli_marion', 'options');
$broccoli_marion_img = $broccoli_marion['image'];

$carrot_jefferson = get_field('carrot_jefferson', 'options');
$carrot_jefferson_img = $carrot_jefferson['image'];
$carrot_linn = get_field('carrot_linn', 'options');
$carrot_linn_img = $carrot_linn['image'];

$cherries_wasco = get_field('cherries_wasco', 'options');
$cherries_wasco_img = $cherries_wasco['image'];
$cherries_hood_river = get_field('cherries_hood_river', 'options');
$cherries_hood_river_img = $cherries_hood_river['image'];

$christmas_tree_benton = get_field('christmas_tree_benton', 'options');
$christmas_tree_benton_img = $christmas_tree_benton['image'];
$christmas_tree_clackamas = get_field('christmas_tree_clackamas', 'options');
$christmas_tree_clackamas_img = $christmas_tree_clackamas['image'];
$christmas_tree_marion = get_field('christmas_tree_marion', 'options');
$christmas_tree_marion_img = $christmas_tree_marion['image'];

$corn_clackamas = get_field('corn_clackamas', 'options');
$corn_clackamas_img = $corn_clackamas['image'];
$corn_malheur = get_field('corn_malheur', 'options');
$corn_malheur_img = $corn_malheur['image'];
$corn_morrow = get_field('corn_morrow', 'options');
$corn_morrow_img = $corn_morrow['image'];
$corn_umatilla = get_field('corn_umatilla', 'options');
$corn_umatilla_img = $corn_umatilla['image'];

$crab_clatsop = get_field('crab_clatsop', 'options');
$crab_clatsop_img = $crab_clatsop['image'];
$crab_lincoln = get_field('crab_lincoln', 'options');
$crab_lincoln_img = $crab_lincoln['image'];
$crab_coos = get_field('crab_coos', 'options');
$crab_coos_img = $crab_coos['image'];

$cranberries_clatsop = get_field('cranberries_clatsop', 'options');
$cranberries_clatsop_img = $cranberries_clatsop['image'];
$cranberries_coos = get_field('cranberries_coos', 'options');
$cranberries_coos_img = $cranberries_coos['image'];
$cranberries_curry = get_field('cranberries_curry', 'options');
$cranberries_curry_img = $cranberries_curry['image'];

$dairy_coos = get_field('dairy_coos', 'options');
$dairy_coos_img = $dairy_coos['image'];
$dairy_josephine = get_field('dairy_josephin', 'options');
$dairy_josephine_img = $dairy_josephine['image'];
$dairy_klamath = get_field('dairy_klamath', 'options');
$dairy_klamath_img = $dairy_klamath['image'];
$dairy_lane = get_field('dairy_lane', 'options');
$dairy_lane_img = $dairy_lane['image'];
$dairy_malheur = get_field('dairy_malheur', 'options');
$dairy_malheur_img = $dairy_malheur['image'];
$dairy_morrow = get_field('dairy_morrow', 'options');
$dairy_morrow_img = $dairy_morrow['image'];
$dairy_polk = get_field('dairy_polk', 'options');
$dairy_polk_img = $dairy_polk['image'];
$dairy_tillamook = get_field('dairy_tillamook', 'options');
$dairy_tillamook_img = $dairy_tillamook['image'];
$dairy_yamhill = get_field('dairy_yamhill', 'options');
$dairy_yamhill_img = $dairy_yamhill['image'];

$easter_lilies_curry = get_field('easter_lilies_curry', 'options');
$easter_lilies_curry_img = $easter_lilies_curry['image'];

$eggs_clackamas = get_field('eggs_clackamas', 'options');
$eggs_clackamas_img = $eggs_clackamas['image'];
$eggs_polk = get_field('eggs_polk', 'options');
$eggs_polk_img = $eggs_polk['image'];
$eggs_yamhill = get_field('eggs_yamhill', 'options');
$eggs_yamhill_img = $eggs_yamhill['image'];

$filberts_marion = get_field('filberts_marion', 'options');
$filberts_marion_img = $filberts_marion['image'];
$filberts_clackamas = get_field('filberts_clackamas', 'options');
$filberts_clackamas_img = $filberts_clackamas['image'];
$filberts_linn = get_field('filberts_linn', 'options');
$filberts_linn_img = $filberts_linn['image'];
$filberts_polk = get_field('filberts_polk', 'options');
$filberts_polk_img = $filberts_polk['image'];
$filberts_yamhill = get_field('filberts_yamhill', 'options');
$filberts_yamhill_img = $filberts_yamhill['image'];

$fish_clatsop = get_field('fish_clatsop', 'options');
$fish_clatsop_img = $fish_clatsop['image'];
$fish_coos = get_field('fish_coos', 'options');
$fish_coos_img = $fish_coos['image'];
$fish_lincoln = get_field('fish_lincoln', 'options');
$fish_lincoln_img = $fish_lincoln['image'];

$grapes_douglas = get_field('grapes_douglas', 'options');
$grapes_douglas_img = $grapes_douglas['image'];
$grapes_jackson = get_field('grapes_jackson', 'options');
$grapes_jackson_img = $grapes_jackson['image'];
$grapes_umatilla = get_field('grapes_umatilla', 'options');
$grapes_umatilla_img = $grapes_umatilla['image'];
$grapes_yamhill = get_field('grapes_yamhill', 'options');
$grapes_yamhill_img = $grapes_yamhill['image'];

$grass_seed_benton = get_field('grass_seed_benton', 'options');
$grass_seed_benton_img = $grass_seed_benton['image'];
$grass_seed_lane = get_field('grass_seed_lane', 'options');
$grass_seed_lane_img = $grass_seed_lane['image'];
$grass_seed_linn = get_field('grass_seed_linn', 'options');
$grass_seed_linn_img = $grass_seed_linn['image'];
$grass_seed_marion = get_field('grass_seed_marion', 'options');
$grass_seed_marion_img = $grass_seed_marion['image'];
$grass_seed_polk = get_field('grass_seed_polk', 'options');
$grass_seed_polk_img = $grass_seed_polk['image'];
$grass_seed_yamhill = get_field('grass_seed_yamhill', 'options');
$grass_seed_yamhill_img = $grass_seed_yamhill['image'];

$hay_baker = get_field('hay_baker', 'options');
$hay_baker_img = $hay_baker['image'];
$hay_crook = get_field('hay_crook', 'options');
$hay_crook_img = $hay_crook['image'];
$hay_deschutes = get_field('hay_deschutes', 'options');
$hay_deschutes_img = $hay_deschutes['image'];
$hay_douglas = get_field('hay_douglas', 'options');
$hay_douglas_img = $hay_douglas['image'];
$hay_harney = get_field('hay_harney', 'options');
$hay_harney_img = $hay_harney['image'];
$hay_jefferson = get_field('hay_jefferson', 'options');
$hay_jefferson_img = $hay_jefferson['image'];
$hay_klamath = get_field('hay_klamath', 'options');
$hay_klamath_img = $hay_klamath['image'];
$hay_lake = get_field('hay_lake', 'options');
$hay_lake_img = $hay_lake['image'];
$hay_malheur = get_field('hay_malheur', 'options');
$hay_malheur_img = $hay_malheur['image'];
$hay_morrow = get_field('hay_morrow', 'options');
$hay_morrow_img = $hay_morrow['image'];
$hay_umatilla = get_field('hay_umatilla', 'options');
$hay_umatilla_img = $hay_umatilla['image'];
$hay_wallowa = get_field('hay_wallowa', 'options');
$hay_wallowa_img = $hay_wallowa['image'];

$hops_marion = get_field('hops_marion', 'options');
$hops_marion_img = $hops_marion['image'];

$mint_union = get_field('mint_union', 'options');
$mint_union_img = $mint_union['image'];

$nursery_clackamas = get_field('nursery_clackamas', 'options');
$nursery_clackamas_img = $nursery_clackamas['image'];
$nursery_columbia = get_field('nursery_columbia', 'options');
$nursery_columbia_img = $nursery_columbia['image'];
$nursery_lane = get_field('nursery_lane', 'options');
$nursery_lane_img = $nursery_lane['image'];
$nursery_marion = get_field('nursery_marion', 'options');
$nursery_marion_img = $nursery_marion['image'];
$nursery_washington = get_field('nursery_washington', 'options');
$nursery_washington_img = $nursery_washington['image'];
$nursery_yamhill = get_field('nursery_yamhill', 'options');
$nursery_yamhill_img = $nursery_yamhill['image'];

$onions_malheur = get_field('onions_malheur', 'options');
$onions_malheur_img = $onions_malheur['image'];
$onions_morrow = get_field('onions_morrow', 'options');
$onions_morrow_img = $onions_morrow['image'];
$onions_umatilla = get_field('onions_umatilla', 'options');
$onions_umatilla_img = $onions_umatilla['image'];

$pears_hood_river = get_field('pears_hood_river', 'options');
$pears_jackson = get_field('pears_jackson', 'options');
$pears_jackson_img = $pears_jackson['image'];
$pears_hood_river_img = $pears_jackson['image'];

$potatoes_baker = get_field('potatoes_baker', 'options');
$potatoes_baker_img = $potatoes_baker['image'];
$potatoes_klamath = get_field('potatoes_klamath', 'options');
$potatoes_klamath_img = $potatoes_klamath['image'];
$potatoes_malheur = get_field('potatoes_malheur', 'options');
$potatoes_malheur_img = $potatoes_malheur['image'];
$potatoes_morrow = get_field('potatoes_morrow', 'options');
$potatoes_morrow_img = $potatoes_morrow['image'];
$potatoes_umatilla = get_field('potatoes_umatilla', 'options');
$potatoes_umatilla_img = $potatoes_umatilla['image'];
$potatoes_union = get_field('potatoes_union', 'options');
$potatoes_union_img = $potatoes_union['image'];

$pumpkin_benton = get_field('pumpkin_benton', 'options');
$pumpkin_benton_img = $pumpkin_benton['image'];
$pumpkin_lane = get_field('pumpkin_lane', 'options');
$pumpkin_lane_img = $pumpkin_lane['image'];

$sheep_douglas = get_field('sheep_douglas', 'options');
$sheep_douglas_img = $sheep_douglas['image'];
$sheep_linn = get_field('sheep_linn', 'options');
$sheep_linn_img = $sheep_linn['image'];

$shrimp_clatsop = get_field('shrimp_clatsop', 'options');
$shrimp_clatsop_img = $shrimp_clatsop['image'];
$shrimp_coos = get_field('shrimp_coos', 'options');
$shrimp_coos_img = $shrimp_coos['image'];
$shrimp_lincoln = get_field('shrimp_lincoln', 'options');
$shrimp_lincoln_img = $shrimp_lincoln['image'];

$tree_clackamas = get_field('tree_clackamas', 'options');
$tree_clackamas_img = $tree_clackamas['image'];
$tree_coos = get_field('tree_coos', 'options');
$tree_coos_img = $tree_coos['image'];
$tree_crook = get_field('tree_crook', 'options');
$tree_crook_img = $tree_crook['image'];
$tree_douglas = get_field('tree_douglas', 'options');
$tree_douglas_img = $tree_douglas['image'];
$tree_grant = get_field('tree_grant', 'options');
$tree_grant_img = $tree_grant['image'];
$tree_josephine = get_field('tree_josephine', 'options');
$tree_josephine_img = $tree_josephine['image'];
$tree_klamath = get_field('tree_klamath', 'options');
$tree_klamath_img = $tree_klamath['image'];
$tree_lake = get_field('tree_lake', 'options');
$tree_lake_img = $tree_lake['image'];
$tree_lane = get_field('tree_lane', 'options');
$tree_lane_img = $tree_lane['image'];
$tree_lincoln = get_field('tree_lincoln', 'options');
$tree_lincoln_img = $tree_lincoln['image'];
$tree_linn = get_field('tree_linn', 'options');
$tree_linn_img = $tree_linn['image'];
$tree_tillamook = get_field('tree_tillamook', 'options');
$tree_tillamook_img = $tree_tillamook['image'];
$tree_union = get_field('tree_union', 'options');
$tree_union_img = $tree_union['image'];
$tree_wheeler = get_field('tree_wheeler', 'options');
$tree_wheeler_img = $tree_wheeler['image'];

$watermelon_umatilla = get_field('watermelon_umatilla', 'options');
$watermelon_umatilla_img = $watermelon_umatilla['image'];

$wheat_gilliam = get_field('wheat_gilliam', 'options');
$wheat_gilliam_img = $wheat_gilliam['image'];
$wheat_jefferson = get_field('wheat_jefferson', 'options');
$wheat_jefferson_img = $wheat_jefferson;
$wheat_klamath = get_field('wheat_klamath', 'options');
$wheat_klamath_img = $wheat_klamath['image'];
$wheat_linn = get_field('wheat_linn', 'options');
$wheat_linn_img = $wheat_linn['image'];
$wheat_malheur = get_field('wheat_malheur', 'options');
$wheat_malheur_img = $wheat_malheur['image'];
$wheat_morrow = get_field('wheat_morrow', 'options');
$wheat_morrow_img = $wheat_morrow['image'];
$wheat_sherman = get_field('wheat_sherman', 'options');
$wheat_sherman_img = $wheat_sherman['image'];
$wheat_umatilla = get_field('wheat_umatilla', 'options');
$wheat_umatilla_img = $wheat_umatilla['image'];
$wheat_union = get_field('wheat_union', 'options');
$wheat_union_img = $wheat_union['image'];
$wheat_wasco = get_field('wheat_wasco', 'options');
$wheat_wasco_img = $wheat_wasco['image'];
$wheat_washington = get_field('wheat_washington', 'options');
$wheat_washington_img = $wheat_washington['image']; 
?>
<div class="section section-alt section-sm">								
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 text-center">
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
						<div class="svg-wrap">
							<canvas width="2107" height="1423" style="width: 100%; display: block; visibility: hidden;"></canvas>
							<svg class="svg-content" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2107.71 1623.4" style="left: 0px; top: 0px; width: 100%; position: absolute;" preserveAspectRatio="none meet">
								<title>Oregon Commodities Map</title>
								<pattern  x="-487.2" y="2014.8" width="69" height="69" patternUnits="userSpaceOnUse" id="Unnamed_Pattern" viewBox="2.1 -70.9 69 69" style="overflow:visible;">
									<g>
										<rect x="2.1" y="-70.9" class="st0" width="69" height="69"/>
										<rect x="2.1" y="-70.9" class="st1" width="69" height="69"/>
										<g>
											<path class="st2" d="M61.8-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-71.7,61.8-71.7,61.8-71.7
												C61.8-71.6,61.8-71.6,61.8-71.7"/>
											<path class="st2" d="M54.1-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-71.7,54.1-71.7,54.1-71.7
												C54.1-71.6,54.1-71.6,54.1-71.7"/>
											<path class="st2" d="M46.4-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.4-71.7,46.4-71.7,46.4-71.7
												C46.4-71.6,46.4-71.6,46.4-71.7"/>
											<path class="st2" d="M38.8-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-71.7,38.8-71.7,38.8-71.7
												C38.8-71.6,38.8-71.6,38.8-71.7"/>
											<path class="st2" d="M31.1-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-71.7,31.1-71.7,31.1-71.7
												C31.1-71.6,31.1-71.6,31.1-71.7"/>
											<path class="st2" d="M23.4-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.4-71.7,23.4-71.7,23.4-71.7
												C23.4-71.6,23.4-71.6,23.4-71.7"/>
											<path class="st2" d="M15.8-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-71.7,15.8-71.7,15.8-71.7
												C15.8-71.6,15.8-71.6,15.8-71.7"/>
											<path class="st2" d="M8.1-71.7c0,0.1,0,0.1,0,0.2C8-71.4,8-71.4,7.9-71.3c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.1-71.7,8.1-71.7,8.1-71.7
												C8.1-71.6,8.1-71.6,8.1-71.7"/>
											<path class="st2" d="M0.4-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C0.8-69.4,1-69,1.2-68.9c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.4-71.7,0.4-71.7,0.4-71.7
												C0.4-71.6,0.4-71.6,0.4-71.7"/>
										</g>
										<g>
											<path class="st2" d="M69.4-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-71.7,69.4-71.7,69.4-71.7
												C69.4-71.6,69.4-71.6,69.4-71.7"/>
										</g>
										<path class="st2" d="M0.5-71.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
											c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C0.9-69.4,1-69,1.3-68.9c0.2,0,0.4-0.1,0.5-0.1c0.2,0,0.4,0,0.6-0.1
											c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.2,0.1-0.3
											c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8c-0.2,0-0.3,0.1-0.4,0.2
											c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-71.7,0.5-71.7,0.5-71.7C0.5-71.6,0.5-71.6,0.5-71.7"/>
										<g>
											<g>
												<path class="st2" d="M69.4-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-64,69.4-64.1,69.4-64C69.4-64,69.4-64,69.4-64"
													/>
												<path class="st2" d="M61.8-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-64,61.8-64.1,61.8-64C61.8-64,61.8-64,61.8-64"
													/>
												<path class="st2" d="M54.1-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-64,54.1-64.1,54.1-64C54.1-64,54.1-64,54.1-64"
													/>
												<path class="st2" d="M46.5-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-64,46.5-64.1,46.5-64C46.5-64,46.5-64,46.5-64"
													/>
												<path class="st2" d="M38.8-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-64,38.8-64.1,38.8-64C38.8-64,38.8-64,38.8-64"
													/>
												<path class="st2" d="M31.1-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-64,31.1-64.1,31.1-64C31.1-64,31.1-64,31.1-64"
													/>
												<path class="st2" d="M23.5-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-64,23.5-64.1,23.5-64C23.5-64,23.5-64,23.5-64"
													/>
												<path class="st2" d="M15.8-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-64,15.8-64.1,15.8-64C15.8-64,15.8-64,15.8-64"
													/>
												<path class="st2" d="M8.2-64c0,0.1,0,0.1,0,0.2C8.1-63.7,8-63.7,8-63.7c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C8-62.2,8.2-62,8.3-61.9c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-64,8.2-64.1,8.2-64C8.1-64,8.1-64,8.2-64"/>
												<path class="st2" d="M0.5-64c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5C2.8-62,3-61.9,3.1-62c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-64,0.5-64.1,0.5-64C0.5-64,0.5-64,0.5-64"/>
											</g>
											<g>
												<path class="st2" d="M69.4-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-56.4,69.4-56.4,69.4-56.3
													C69.4-56.3,69.4-56.3,69.4-56.3"/>
												<path class="st2" d="M61.8-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-56.4,61.8-56.4,61.8-56.3
													C61.8-56.3,61.8-56.3,61.8-56.3"/>
												<path class="st2" d="M54.1-56.3c0,0.1,0,0.1,0,0.2C54-56.1,54-56.1,53.9-56c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-56.4,54.1-56.4,54.1-56.3
													C54.1-56.3,54.1-56.3,54.1-56.3"/>
												<path class="st2" d="M46.5-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-56.4,46.5-56.4,46.5-56.3
													C46.5-56.3,46.5-56.3,46.5-56.3"/>
												<path class="st2" d="M38.8-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-56.4,38.8-56.4,38.8-56.3
													C38.8-56.3,38.8-56.3,38.8-56.3"/>
												<path class="st2" d="M31.1-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-56.4,31.1-56.4,31.1-56.3
													C31.1-56.3,31.1-56.3,31.1-56.3"/>
												<path class="st2" d="M23.5-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-56.4,23.5-56.4,23.5-56.3
													C23.5-56.3,23.5-56.3,23.5-56.3"/>
												<path class="st2" d="M15.8-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-56.4,15.8-56.4,15.8-56.3
													C15.8-56.3,15.8-56.3,15.8-56.3"/>
												<path class="st2" d="M8.2-56.3c0,0.1,0,0.1,0,0.2C8.1-56.1,8-56.1,8-56c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-56.4,8.2-56.4,8.2-56.3
													C8.1-56.3,8.1-56.3,8.2-56.3"/>
												<path class="st2" d="M0.5-56.3c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-56.4,0.5-56.4,0.5-56.3
													C0.5-56.3,0.5-56.3,0.5-56.3"/>
											</g>
											<g>
												<path class="st2" d="M69.4-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-48.7,69.4-48.8,69.4-48.7
													C69.4-48.7,69.4-48.7,69.4-48.7"/>
												<path class="st2" d="M61.8-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-48.7,61.8-48.8,61.8-48.7
													C61.8-48.7,61.8-48.7,61.8-48.7"/>
												<path class="st2" d="M54.1-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-48.7,54.1-48.8,54.1-48.7
													C54.1-48.7,54.1-48.7,54.1-48.7"/>
												<path class="st2" d="M46.5-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-48.7,46.5-48.8,46.5-48.7
													C46.5-48.7,46.5-48.7,46.5-48.7"/>
												<path class="st2" d="M38.8-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-48.7,38.8-48.8,38.8-48.7
													C38.8-48.7,38.8-48.7,38.8-48.7"/>
												<path class="st2" d="M31.1-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-48.7,31.1-48.8,31.1-48.7
													C31.1-48.7,31.1-48.7,31.1-48.7"/>
												<path class="st2" d="M23.5-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-48.7,23.5-48.8,23.5-48.7
													C23.5-48.7,23.5-48.7,23.5-48.7"/>
												<path class="st2" d="M15.8-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-48.7,15.8-48.8,15.8-48.7
													C15.8-48.7,15.8-48.7,15.8-48.7"/>
												<path class="st2" d="M8.2-48.7c0,0.1,0,0.1,0,0.2C8.1-48.4,8-48.4,8-48.4c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C8.5-46.4,8.7-46,8.9-46c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-48.7,8.2-48.8,8.2-48.7
													C8.1-48.7,8.1-48.7,8.2-48.7"/>
												<path class="st2" d="M0.5-48.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C0.9-46.4,1-46,1.3-46c0.2,0,0.4-0.1,0.5-0.1c0.2,0,0.4,0,0.6-0.1
													c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.2,0.1-0.3
													c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8c-0.2,0-0.3,0.1-0.4,0.2
													c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-48.7,0.5-48.8,0.5-48.7C0.5-48.7,0.5-48.7,0.5-48.7"/>
											</g>
											<g>
												<path class="st2" d="M69.4-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-41.1,69.4-41.1,69.4-41C69.4-41,69.4-41,69.4-41
													"/>
												<path class="st2" d="M61.8-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-41.1,61.8-41.1,61.8-41C61.8-41,61.8-41,61.8-41
													"/>
												<path class="st2" d="M54.1-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-41.1,54.1-41.1,54.1-41C54.1-41,54.1-41,54.1-41
													"/>
												<path class="st2" d="M46.5-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-41.1,46.5-41.1,46.5-41C46.5-41,46.5-41,46.5-41
													"/>
												<path class="st2" d="M38.8-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-41.1,38.8-41.1,38.8-41C38.8-41,38.8-41,38.8-41
													"/>
												<path class="st2" d="M31.1-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-41.1,31.1-41.1,31.1-41C31.1-41,31.1-41,31.1-41
													"/>
												<path class="st2" d="M23.5-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-41.1,23.5-41.1,23.5-41C23.5-41,23.5-41,23.5-41
													"/>
												<path class="st2" d="M15.8-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-41.1,15.8-41.1,15.8-41C15.8-41,15.8-41,15.8-41
													"/>
												<path class="st2" d="M8.2-41c0,0.1,0,0.1,0,0.2C8.1-40.8,8-40.8,8-40.7c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-41.1,8.2-41.1,8.2-41C8.1-41,8.1-41,8.2-41"/>
												<path class="st2" d="M0.5-41c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5C2.8-39,3-39,3.1-39c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-41.1,0.5-41.1,0.5-41C0.5-41,0.5-41,0.5-41"/>
											</g>
											<g>
												<path class="st2" d="M69.4-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-33.4,69.4-33.5,69.4-33.4
													C69.4-33.4,69.4-33.4,69.4-33.4"/>
												<path class="st2" d="M61.8-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-33.4,61.8-33.5,61.8-33.4
													C61.8-33.4,61.8-33.4,61.8-33.4"/>
												<path class="st2" d="M54.1-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-33.4,54.1-33.5,54.1-33.4
													C54.1-33.4,54.1-33.4,54.1-33.4"/>
												<path class="st2" d="M46.5-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-33.4,46.5-33.5,46.5-33.4
													C46.5-33.4,46.5-33.4,46.5-33.4"/>
												<path class="st2" d="M38.8-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-33.4,38.8-33.5,38.8-33.4
													C38.8-33.4,38.8-33.4,38.8-33.4"/>
												<path class="st2" d="M31.1-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-33.4,31.1-33.5,31.1-33.4
													C31.1-33.4,31.1-33.4,31.1-33.4"/>
												<path class="st2" d="M23.5-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-33.4,23.5-33.5,23.5-33.4
													C23.5-33.4,23.5-33.4,23.5-33.4"/>
												<path class="st2" d="M15.8-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-33.4,15.8-33.5,15.8-33.4
													C15.8-33.4,15.8-33.4,15.8-33.4"/>
												<path class="st2" d="M8.2-33.4c0,0.1,0,0.1,0,0.2C8.1-33.1,8-33.1,8-33.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-33.4,8.2-33.5,8.2-33.4
													C8.1-33.4,8.1-33.4,8.2-33.4"/>
												<path class="st2" d="M0.5-33.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-33.4,0.5-33.5,0.5-33.4
													C0.5-33.4,0.5-33.4,0.5-33.4"/>
											</g>
											<g>
												<path class="st2" d="M69.4-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-25.8,69.4-25.8,69.4-25.7
													C69.4-25.7,69.4-25.7,69.4-25.7"/>
												<path class="st2" d="M61.8-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-25.8,61.8-25.8,61.8-25.7
													C61.8-25.7,61.8-25.7,61.8-25.7"/>
												<path class="st2" d="M54.1-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-25.8,54.1-25.8,54.1-25.7
													C54.1-25.7,54.1-25.7,54.1-25.7"/>
												<path class="st2" d="M46.5-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-25.8,46.5-25.8,46.5-25.7
													C46.5-25.7,46.5-25.7,46.5-25.7"/>
												<path class="st2" d="M38.8-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-25.8,38.8-25.8,38.8-25.7
													C38.8-25.7,38.8-25.7,38.8-25.7"/>
												<path class="st2" d="M31.1-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-25.8,31.1-25.8,31.1-25.7
													C31.1-25.7,31.1-25.7,31.1-25.7"/>
												<path class="st2" d="M23.5-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-25.8,23.5-25.8,23.5-25.7
													C23.5-25.7,23.5-25.7,23.5-25.7"/>
												<path class="st2" d="M15.8-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-25.8,15.8-25.8,15.8-25.7
													C15.8-25.7,15.8-25.7,15.8-25.7"/>
												<path class="st2" d="M8.2-25.7c0,0.1,0,0.1,0,0.2C8.1-25.4,8-25.5,8-25.4c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C8-24,8.2-23.8,8.3-23.6c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-25.8,8.2-25.8,8.2-25.7
													C8.1-25.7,8.1-25.7,8.2-25.7"/>
												<path class="st2" d="M0.5-25.7c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C0.9-23.5,1-23.1,1.3-23c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-25.8,0.5-25.8,0.5-25.7
													C0.5-25.7,0.5-25.7,0.5-25.7"/>
											</g>
											<g>
												<path class="st2" d="M69.4-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-18.1,69.4-18.2,69.4-18.1
													C69.4-18,69.4-18.1,69.4-18.1"/>
												<path class="st2" d="M61.8-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-18.1,61.8-18.2,61.8-18.1
													C61.8-18,61.8-18.1,61.8-18.1"/>
												<path class="st2" d="M54.1-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-18.1,54.1-18.2,54.1-18.1
													C54.1-18,54.1-18.1,54.1-18.1"/>
												<path class="st2" d="M46.5-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-18.1,46.5-18.2,46.5-18.1
													C46.5-18,46.5-18.1,46.5-18.1"/>
												<path class="st2" d="M38.8-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-18.1,38.8-18.2,38.8-18.1
													C38.8-18,38.8-18.1,38.8-18.1"/>
												<path class="st2" d="M31.1-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-18.1,31.1-18.2,31.1-18.1
													C31.1-18,31.1-18.1,31.1-18.1"/>
												<path class="st2" d="M23.5-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-18.1,23.5-18.2,23.5-18.1
													C23.5-18,23.5-18.1,23.5-18.1"/>
												<path class="st2" d="M15.8-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-18.1,15.8-18.2,15.8-18.1
													C15.8-18,15.8-18.1,15.8-18.1"/>
												<path class="st2" d="M8.2-18.1c0,0.1,0,0.1,0,0.2C8.1-17.8,8-17.8,8-17.8c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C8-16.3,8.2-16.1,8.3-16c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-18.1,8.2-18.2,8.2-18.1C8.1-18,8.1-18.1,8.2-18.1
													"/>
												<path class="st2" d="M0.5-18.1c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5C2.8-16.1,3-16,3.1-16c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-18.1,0.5-18.2,0.5-18.1C0.5-18,0.5-18.1,0.5-18.1
													"/>
											</g>
											<g>
												<path class="st2" d="M69.4-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-10.5,69.4-10.5,69.4-10.4
													C69.4-10.4,69.4-10.4,69.4-10.4"/>
												<path class="st2" d="M61.8-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1C63.9-8,63.8-8.2,64-8.3c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-10.5,61.8-10.5,61.8-10.4
													C61.8-10.4,61.8-10.4,61.8-10.4"/>
												<path class="st2" d="M54.1-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-10.5,54.1-10.5,54.1-10.4
													C54.1-10.4,54.1-10.4,54.1-10.4"/>
												<path class="st2" d="M46.5-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-10.5,46.5-10.5,46.5-10.4
													C46.5-10.4,46.5-10.4,46.5-10.4"/>
												<path class="st2" d="M38.8-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1C40.9-8,40.8-8.2,41-8.3c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-10.5,38.8-10.5,38.8-10.4
													C38.8-10.4,38.8-10.4,38.8-10.4"/>
												<path class="st2" d="M31.1-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-10.5,31.1-10.5,31.1-10.4
													C31.1-10.4,31.1-10.4,31.1-10.4"/>
												<path class="st2" d="M23.5-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-10.5,23.5-10.5,23.5-10.4
													C23.5-10.4,23.5-10.4,23.5-10.4"/>
												<path class="st2" d="M15.8-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1C17.9-8,17.8-8.2,18-8.3c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-10.5,15.8-10.5,15.8-10.4
													C15.8-10.4,15.8-10.4,15.8-10.4"/>
												<path class="st2" d="M8.2-10.4c0,0.1,0,0.1,0,0.2C8.1-10.1,8-10.2,8-10.1C7.9-10,7.9-9.8,7.9-9.8c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C8-8.7,8.2-8.5,8.3-8.3c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C8.2-10.5,8.2-10.5,8.2-10.4
													C8.1-10.4,8.1-10.4,8.2-10.4"/>
												<path class="st2" d="M0.5-10.4c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1C0.3-10,0.2-9.8,0.2-9.8c-0.2,0.1,0,0.2,0,0.3
													c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C0.9-8.2,1-7.8,1.3-7.7c0.2,0,0.4-0.1,0.5-0.1
													c0.2,0,0.4,0,0.6-0.1C2.6-8,2.5-8.2,2.7-8.3c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
													c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
													c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C0.5-10.5,0.5-10.5,0.5-10.4
													C0.5-10.4,0.5-10.4,0.5-10.4"/>
											</g>
										</g>
										<g>
											<path class="st2" d="M69.4-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C69.8-0.5,70-0.1,70.2,0c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C69.4-2.8,69.4-2.9,69.4-2.8
												C69.4-2.7,69.4-2.8,69.4-2.8"/>
											<path class="st2" d="M61.8-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C61.6-1,61.8-0.8,62-0.7c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C61.8-2.8,61.8-2.9,61.8-2.8
												C61.8-2.7,61.8-2.8,61.8-2.8"/>
											<path class="st2" d="M54.1-2.8c0,0.1,0,0.1,0,0.2C54-2.5,54-2.5,53.9-2.5c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C54-1,54.1-0.8,54.3-0.7c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1C56.9-0.8,57-1,57.1-1.2c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C54.1-2.8,54.1-2.9,54.1-2.8
												C54.1-2.7,54.1-2.8,54.1-2.8"/>
											<path class="st2" d="M46.5-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C46.8-0.5,47-0.1,47.2,0c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C46.5-2.8,46.5-2.9,46.5-2.8
												C46.5-2.7,46.5-2.8,46.5-2.8"/>
											<path class="st2" d="M38.8-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C38.6-1,38.8-0.8,39-0.7c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C38.8-2.8,38.8-2.9,38.8-2.8
												C38.8-2.7,38.8-2.8,38.8-2.8"/>
											<path class="st2" d="M31.1-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C31-1,31.1-0.8,31.3-0.7c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C31.1-2.8,31.1-2.9,31.1-2.8
												C31.1-2.7,31.1-2.8,31.1-2.8"/>
											<path class="st2" d="M23.5-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.4,0.5C23.8-0.5,24-0.1,24.3,0c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C23.5-2.8,23.5-2.9,23.5-2.8
												C23.5-2.7,23.5-2.8,23.5-2.8"/>
											<path class="st2" d="M15.8-2.8c0,0.1,0,0.1,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.3-0.1,0.4c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C15.7-1,15.8-0.8,16-0.7c0.2,0.1,0.4,0.6,0.6,0.6c0.2,0,0.4-0.1,0.5-0.1
												c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2
												c0-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8
												c-0.2,0-0.3,0.1-0.4,0.2c-0.2,0.1-0.1,0.2-0.3,0.2c-0.1,0-0.2,0.1-0.2,0.2C15.8-2.8,15.8-2.9,15.8-2.8
												C15.8-2.7,15.8-2.8,15.8-2.8"/>
											<path class="st2" d="M8.2-2.8c0,0.1,0,0.1,0,0.2C8.1-2.5,8-2.5,8-2.5C7.9-2.4,7.9-2.2,7.9-2.1c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C8-1,8.2-0.8,8.3-0.7C8.5-0.5,8.7-0.1,8.9,0c0.2,0,0.4-0.1,0.5-0.1c0.2,0,0.4,0,0.6-0.1
												c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1c0.2-0.1,0.3-0.3,0.4-0.5c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.2,0.1-0.3
												c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8C9-3.5,8.8-3.4,8.7-3.4
												C8.5-3.3,8.6-3.2,8.4-3.1C8.3-3.1,8.2-3,8.2-2.9C8.2-2.8,8.2-2.9,8.2-2.8C8.1-2.7,8.1-2.8,8.2-2.8"/>
											<path class="st2" d="M0.5-2.8c0,0.1,0,0.1,0,0.2C0.4-2.5,0.4-2.5,0.3-2.5C0.3-2.4,0.2-2.2,0.2-2.1c-0.2,0.1,0,0.2,0,0.3
												c0,0,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4C0.3-1,0.5-0.8,0.7-0.7C0.9-0.5,1-0.1,1.3,0c0.2,0,0.4-0.1,0.5-0.1c0.2,0,0.4,0,0.6-0.1
												c0.2-0.1,0.1-0.3,0.3-0.5c0.1-0.1,0.3,0,0.4-0.1C3.3-0.8,3.4-1,3.5-1.2c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.2,0.1-0.3
												c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4-0.1-0.5c-0.4-0.7-1.2-0.9-2-0.8C1.3-3.5,1.2-3.4,1-3.4
												C0.9-3.3,0.9-3.2,0.7-3.1C0.6-3.1,0.5-3,0.5-2.9C0.5-2.8,0.5-2.9,0.5-2.8C0.5-2.7,0.5-2.8,0.5-2.8"/>
										</g>
									</g>
								</pattern>
								<g id="Counties">
									<polygon id="Grant_1_" class="st3" points="1653.1,665.8 1652.9,667.4 1653.3,688.8 1652.8,690.1 1654.1,702.9 1654.6,705.3 
										1654.4,708.4 1653.9,709.8 1653.9,711.3 1654.1,738.3 1622.7,739.1 1622.7,737 1621,736.9 1560.8,737 1560.6,735.3 1557.3,735.1 
										1501.3,734.4 1500.6,734.5 1500.4,737.5 1500.4,762.7 1414.8,762.6 1307.8,763.1 1283.2,763.5 1283.2,750.6 1283.5,733.8 
										1283.4,729.3 1283.6,726.2 1283.5,724.7 1283.9,700.3 1283.8,698.8 1284,695.7 1283.9,686.7 1284.3,669.9 1284.1,665.3 
										1284.5,648.5 1284.6,639.4 1284.2,583.5 1284.4,580.4 1284.3,560.6 1284.6,557.6 1283.9,492.7 1284,478.9 1283.8,475.9 
										1280.3,475.1 1280.4,467.5 1280,456.7 1280.2,455.2 1279.5,417.8 1412.1,417.2 1578.1,418.1 1587.1,418.7 1592.7,423.8 1595,424.7 
										1596.6,424.7 1598.2,425.3 1601.1,427.2 1604.3,426.2 1607.3,424.8 1611.2,423.6 1617.5,421.8 1621.4,422.7 1624.8,424.5 
										1630.5,425.7 1632,427.3 1633.6,428.4 1636,429.3 1639.3,429.7 1645.6,431.2 1648,430.9 1649.2,435 1650.1,435.8 1651.9,436.7 
										1652.8,437.8 1653.3,439.3 1653.3,440.5 1651.8,444 1650.5,448.5 1650.3,450.2 1651.9,451.8 1653.1,454.1 1653.8,456.1 
										1653.9,457.6 1652.9,459.5 1650.8,461.3 1649.1,461.4 1646.5,460.8 1643.2,460.9 1640.8,461.9 1635.3,463.5 1634.1,464.6 
										1633.2,467.4 1631,468.2 1629.2,469.8 1629.7,472.3 1631.7,475 1633.7,477 1634.5,478.5 1635.2,480.9 1634.9,484 1636.6,488.4 
										1639.3,492.9 1639.5,497.9 1638.6,499.8 1637.4,501.1 1636.6,502.6 1635.3,503.9 1630,504.1 1628,503.2 1626.1,501.7 1621.7,500.5 
										1619.3,500.5 1616.6,500.9 1614.1,501.8 1609,506.4 1605.5,508.3 1603.8,508.9 1600,509.4 1595.3,509.4 1591.9,513.9 1591.4,514.2 
										1587.9,515.2 1584.5,514.5 1578.5,514.8 1578.9,517.1 1578.7,521 1579.3,523.3 1582,526.1 1585.8,529 1588.3,529.6 1593.2,531.3 
										1595.6,533.2 1599.2,534.5 1603,533.6 1605.7,534.1 1608.5,535.5 1611.9,534 1615.5,534.5 1617.8,535.4 1620.7,536.1 1621.9,538.4 
										1622.3,540.6 1623.4,543 1627.2,546.5 1628.4,548.1 1628.8,550.3 1631.5,555.1 1631,557 1629.5,559.5 1629.1,562 1622.1,566.8 
										1620.4,567.5 1617.8,570.5 1616,574 1615.2,576.2 1614.7,582.3 1616,586.7 1616.2,591.3 1616.1,592.8 1617,594.7 1616.8,596.6 
										1612,598 1609,599.6 1605.7,600.5 1602.2,605.7 1600.8,610.6 1600.6,612.2 1600.7,615.2 1601.1,618.1 1601.6,618.8 1604.1,624.5 
										1604.2,626.8 1603.9,628.1 1601.4,630.7 1600.3,632.1 1597.9,633.5 1594.2,634.6 1592.4,636.9 1589.7,638.9 1587.7,642.7 
										1586.1,644.2 1586.5,646.4 1585.8,647.8 1583.9,649.9 1584.1,652.2 1584.8,654.1 1584.3,656.1 1584.3,657.7 1582.8,660.5 
										1581.9,663.5 1582.3,665.7 1626.6,665.6 	"/>
									<polygon id="Coos" class="st4" points="33.5,1096.8 93.2,1097.3 93.2,1101.1 98.8,1101.7 99,1104.9 103.9,1105.2 104,1108.9 
										107,1109.3 107,1111.4 104.4,1111.8 104.2,1114.5 108.9,1115 109.8,1118.6 113,1118.6 113.3,1118.8 113.4,1120.5 117.8,1121 
										118.3,1124 121.4,1124.2 122.2,1127.6 124.2,1128.2 124.2,1138.8 124,1139.3 120.5,1139.7 120,1143.4 117.7,1143.5 117.8,1149.6 
										118.4,1152.2 119.3,1154.3 119.6,1169.5 126.7,1170 127,1180.6 127.4,1191.2 127.7,1191.4 131.1,1191.9 131.2,1190.3 136.4,1190.2 
										136.5,1187.6 162.3,1187.3 162.3,1184.5 163.1,1184.5 163,1183.5 168.1,1182.6 168.3,1179.5 173,1178.9 173,1174.5 176.6,1174.2 
										176.4,1169.5 179.4,1169.2 179.3,1158.9 193.4,1158.5 193.6,1156.8 200.5,1156.8 200.8,1153.6 208.3,1153.6 210.4,1152.7 
										210.1,1144.9 207,1144.8 206.8,1143.2 206.1,1085.4 219.8,1084.8 219.6,1084.4 219.6,1079.8 219.4,1078.4 219.5,1073.8 
										219.1,1067.7 219,1057.1 233.4,1056.5 233.7,1055.4 234,999.1 218.7,998.6 218.5,997.7 218.6,991.6 218.4,990.1 218.4,982.5 
										217.7,941.5 205.8,941 205.2,912.8 189.8,912.5 189.1,880.1 121,879.4 100.1,879.5 99.8,882.4 99.8,883.9 98.3,888.8 97.5,892.6 
										97.4,895.3 96.3,898.6 95.5,900.1 94.4,904.8 91.6,913.1 91.5,914.5 90.5,918.5 89.7,920.6 87.8,928.3 85.5,933.4 84,935.5 
										82.6,939 81.5,943.1 81.5,944.7 76.6,953.2 72.9,958.6 72.4,959.8 72.4,961.4 73,961.7 73.7,961.4 75.8,958.3 77.6,956.7 
										79.4,955.7 80.2,953.8 82.2,952.3 83.3,950.6 84.1,948.8 84.7,945.4 95.8,937.9 96.5,936.2 96.3,934.8 97.1,930.7 97.3,927.6 
										97.8,926.3 98.8,924.8 99.9,925.8 99.6,928.5 99.7,929.8 101.1,930.8 102.2,930.8 104.3,929.8 105.1,927.9 107.2,926.3 109.2,926 
										109.5,926.3 109.3,927.5 106.8,930.8 105.9,932.5 102.8,934.8 101.9,936.1 102.6,937.9 104.2,938.6 105.4,940.2 106.4,939.9 
										108.4,940.2 108.6,941.5 107.1,943 107.1,944.3 107.4,945.3 111,951.3 113.4,953.2 115.5,956.1 116.4,961.5 117,962.7 116.9,963 
										115.5,963.5 114.3,963.3 110.2,961 105.4,959.7 104.4,958.3 102.9,955.9 102.7,951.8 102.5,951.3 102.5,946.8 101.9,943.7 
										101.4,942.4 99.9,943.4 98.8,944.6 98.3,945.6 97.5,945.8 96,943.4 95.5,943.1 94.1,943.1 92.7,943.8 92.2,944.3 91.9,945.3 
										90.3,947.2 88.8,948.3 87.2,949.1 86.1,952.1 85.4,955.2 83.7,957.4 80.4,959.6 79.2,961.4 78.8,963.9 76.3,967.2 76.3,967.9 
										77.4,968.4 82.7,968.3 84.5,970.3 84.2,971 83.4,971.4 80.1,970.8 78.6,970.9 77.5,971.4 76.8,972.1 77,973 77.6,974.5 77.2,975.9 
										77.5,978.6 78.2,980 78.2,980.9 77.7,981.9 78,982.7 79.7,984.7 79.1,985.3 79,986 79.5,987.2 79.1,987.9 78.5,987.9 76.9,986.4 
										76.5,985.8 76,985.8 75.3,987.1 74.6,987.1 74.9,984.4 74.5,983.5 73.6,983.1 73.5,981.7 73.9,980.9 74.2,979.6 73.6,977.2 
										73.1,971.9 73.4,967.6 72.6,966.6 70.3,965.5 66.9,967.6 65.1,966.6 63.6,967.7 62,967.8 60.9,968.2 60.4,968.8 60.7,971.1 
										60.1,972 58.4,973 57.6,974.9 56.8,975.5 56.3,977.6 55.5,979.4 54.6,979.9 53.6,981.4 53.7,981.8 56.2,982.9 56.7,983.5 
										58.3,987.5 59,988.6 58.3,991 58.5,994.4 57.4,996.4 55.3,1002.3 55,1005.2 55.1,1010.8 53.7,1020.4 53,1023.1 50.9,1028 
										49.6,1032.1 48.5,1037.4 48.5,1039.5 48,1041.9 46.7,1044.5 45.8,1047.2 45.1,1053.5 44.2,1057.2 44.4,1063.5 44.9,1066.8 
										44.9,1068.3 44.4,1071 40.6,1079.6 38.4,1081 37.2,1084 37.2,1085.5 37,1086.2 34.3,1091.8 33,1096.6 	"/>
									<polygon id="Washington" class="st5" points="324.9,156.3 324.9,179.2 293.6,180.5 293.8,181.6 293.8,189.3 298.7,189.7 
										298.8,194.5 303.9,194.6 303.9,199.1 308.7,199.4 308.9,203.9 319.8,204.1 320.2,207.2 320.1,208.7 331.1,208.6 331.4,213.9 
										340.7,214.3 341.1,217.8 337.1,217.9 336.8,222.8 324.1,223.7 324,232.7 314.9,233.1 314.7,233.5 314.2,238.2 308.7,238.3 
										308.5,242.8 303.4,243.3 303.7,250.6 298.8,251.2 298.7,265.6 293,265.9 292.8,267.3 292.8,272 298.3,272.3 381.9,270.5 382,275.9 
										387.3,276.1 387.5,276.6 388,281.2 409.6,281.2 410,283.8 409.9,285.3 414.2,285.6 414.6,290.3 420.3,290.3 420.1,294.7 425,295.2 
										425.2,300.7 441.8,300.8 442,309.9 452.1,309.9 457.6,309.3 457.6,299.6 468.9,299.8 468.8,304.9 484.8,304.9 484.5,293.3 
										484.7,271.9 484.6,253.1 484.8,242.3 480.1,242.1 480,237.9 473.9,237.5 473.7,233 468.9,232.7 468.9,228.5 462.1,228.3 
										462.3,223.6 458.2,223.3 458.2,218.8 452.6,218.7 452.5,213.5 446.6,213.5 446.5,209.1 441,209.4 440.7,204.5 436.7,204.3 
										436.4,184.4 436.5,175.2 436.4,170.3 419.3,170.5 419.5,169.3 419.5,166.2 409.4,165.8 409.3,156.2 	"/>
									<polygon id="Marion" class="st5" points="399.9,390.2 399.8,388.4 400.3,387.8 401.3,387.3 403.1,388.2 403.4,388.9 405.9,388.3 
										407,386 406.5,384.5 406,382.6 404.2,380.8 404.4,380 405,379.3 407.7,379.1 409.2,380 409.9,380.5 412.7,380 414.1,378.9 
										414.2,377.8 415.1,376.8 416.9,376.6 418.5,376.1 418.6,375.2 418,374.2 416.8,374.1 415.4,373.1 414.5,370 413.5,367.9 
										411.7,365.8 410.9,364.3 411.1,361.6 414.6,361 415.6,360.3 416,359.7 416,358.4 414.6,356.3 413.4,355.5 412.3,352.7 412.2,349.9 
										412.4,349 410.9,348 409.4,348.3 406.8,347.6 405.6,346.2 405.4,344.1 406.1,341.7 407.5,341 409.1,341 415.4,339.9 417.2,340.1 
										418.4,339.6 419.4,337.5 419.4,336.2 418.6,334.5 416.3,331.4 416.7,329.7 418.4,325.9 419,325.2 420.6,324.4 423.6,324.1 
										424.3,323.1 424.4,320.8 425,320.1 426.8,320.3 429,321.3 432.3,324.7 433.8,325.2 435.8,326.3 442.9,326.7 448.7,329.7 
										450.5,329.7 453.2,330.3 456.1,329.6 458.1,328.5 462.6,324.6 463.6,323.5 474.7,324 475.3,328.5 484.5,329.4 485,331.7 
										484.8,333.3 484.3,334.5 484.4,336.4 485.3,337.5 485.1,339.2 485.3,339.5 485.2,341.1 485.9,341.8 486.5,343.8 486.3,344.7 
										483.5,345.7 483.1,346.6 483.3,348 484.2,349.1 484,350.1 483.1,351.6 483.6,352.6 483.3,354.4 483.5,356 482.5,358.9 477.8,360.8 
										476.2,361.1 475,366.2 473.9,369.1 473.8,370 474.1,371 479.2,375.5 483.1,376.9 485.1,379.7 489.4,383.9 491.2,388.3 495.1,393.8 
										497.5,394.6 500.6,397.7 503.4,399.9 505,401.2 507.9,402.5 509.3,404.1 511,405 513.9,405.2 517.7,405 522.4,406.5 523.7,408.3 
										525.1,412.4 524.4,413.3 524,414.7 525.3,417.3 526.5,417.8 528.7,418.1 530.4,419.9 531.3,422.2 531.6,423.6 533.2,426.1 
										535.5,428.5 536.5,430.2 538,431.8 540.6,433.8 542.1,434.6 543.1,436 543.9,438.3 545.2,440 546.5,440.8 552.1,441.2 555.8,442.1 
										557.6,442.9 560.5,446 563.1,447.3 564.9,448 567.2,448.4 572.9,450.2 574.1,451.6 574.8,454.2 654.8,454.3 718.2,454.8 
										719.8,454.7 729.8,454.9 731.5,454.7 741.5,455 742.5,462.8 741.4,464.3 741.9,465.5 741.7,466.2 741.2,473.9 737.4,474.7 
										735.8,474.7 728.7,477.6 726.6,480 725.9,482.2 725.2,485.3 725.3,487.4 726.1,489.1 727.1,490.4 728.9,491.8 733.5,491.9 
										735.2,492.4 736,493.2 736.4,494.7 736.3,495.8 735.6,497.1 729,505.8 730,508.9 730.5,513.3 731.1,515.4 730,521.2 682.7,521 
										681.8,519.6 680.5,519.5 676.5,520.3 673.8,519.4 672.2,519.4 671,520 668.3,519.8 666.7,519.4 666.2,517.9 659.8,515.8 
										656.5,515.4 652.4,514.4 649.9,513.2 644.6,510.2 642,509.3 640.3,509.1 637.3,509.7 635.4,510.7 631.5,513.5 630.4,515.1 
										627.5,517.4 624.8,518.4 621.6,518.5 618.2,517.4 615.1,513.4 614.3,511.8 613.6,510 613.7,508.8 611.9,506.5 609.7,505.3 
										608.8,504.2 607.6,502.2 606.6,499.7 603.9,498.1 602.3,497.8 599.6,496.1 598,495.8 594.8,495.9 592,496.5 589.8,495.6 
										588.2,495.4 586.7,496.1 583.1,496.9 575.8,496.8 571.3,496.2 568.7,497.1 566.8,497.1 565.1,496.7 560.3,497.6 556.8,496.6 
										554.7,496.5 550.9,496.7 547.7,496.5 543.4,498.1 542.1,498.2 541.4,497.5 541.2,494.8 540.8,493.9 538.2,493.2 536.6,492.3 
										534.5,492.2 531.5,490.1 529.2,489.6 525.8,489.7 523.2,488.6 521.1,486 520.9,485.3 520.4,484.6 518.4,484.5 514,485.2 
										511.4,485.3 503.4,486.9 501.4,487.8 499,488.1 495.3,487.9 492.9,487.1 491.4,485.9 489.7,483.3 486,483 481.7,483.1 477.8,482.1 
										475.3,483.4 470.3,482.8 469.5,483.6 468.2,484 466.3,484.7 464.8,486.1 463.6,486.6 458.8,487.1 457.8,488 457.3,489.7 
										456.6,491.3 456.5,492.3 455.1,493.2 452.2,494.2 448.8,497.6 447.3,498.1 444.5,500 442.6,500.3 442.9,499.9 442,498.8 
										440.7,498.8 436.8,502 435.7,502.1 434.3,503.7 430,504.8 429,506.8 429.1,508 428.9,508.8 428.2,509.2 426.2,512.6 425,514.8 
										423,517.9 419.1,520.1 417.4,520.6 416,520.4 414.5,519.2 413.9,517.8 414,515 413.6,513.8 413.6,510.2 412.6,508 410.1,508.6 
										409.3,508.1 408.1,507 406.7,503.9 405,502.8 404,502.4 401.5,502.4 399.9,501.7 394.7,501.3 389.4,498.7 387.9,499.5 385.6,501.1 
										384.9,500.4 380.2,497.8 379.1,495 379.1,493.5 379.3,490.5 379.7,487.9 380.6,486.8 382.2,486 385.1,484.1 388.9,482.6 
										393.1,481.6 393.8,481.1 394,479.9 391.7,477.3 387.5,475.2 385.5,473.8 381.7,473.2 379.7,472.5 377.3,473 375.7,473 373.4,471.6 
										372.1,469.7 371.7,466.9 371.8,463.7 374.2,462.1 376.5,461.6 380.4,457.8 382.1,451.8 383.1,449.3 384.3,447.8 386,447.2 
										388.9,445.3 389.2,440.1 390.6,439.4 395.5,438.3 399,436.8 405.4,431.1 408.5,429.4 409.1,427 408.9,422.7 407.4,420.7 
										407.6,421.1 406.8,420.2 405.2,419.7 402.2,418.1 399.3,414 399.2,412.2 399.2,408.2 399.9,404.4 400.8,403.5 403.1,402.4 
										403.4,401.3 403.6,397 401.9,392.9 399.9,390.5 	"/>
									<polygon id="Clatsop" class="st4" points="165.5,154.2 166.7,153 166.8,150.2 166.5,149 166.5,147.5 167.5,146.6 169.5,143.2 
										168.7,141 169.7,139.6 169.7,138.3 169.2,136 168.1,134.9 167.7,133.3 167.7,129.4 166.5,129 169.2,125.3 169.7,124 169.7,122.5 
										168.7,119 169,115.4 168.7,114 168.1,113.1 168.1,111.5 167.7,110.2 167.2,109.5 164.9,108.2 164.8,106 164.9,104.6 165.2,104.3 
										164.6,103 163.5,102.7 162.4,101.6 160.3,100.6 159.4,99.8 159.4,98.9 159.6,98.2 160.4,97.3 163.7,96.6 165.8,95.4 167.7,90.1 
										168.5,89.2 171.3,88.9 172.9,87.8 174.3,86.4 175.8,83.6 175.7,82.6 176.2,81.6 176,80.7 176.7,78.5 177.2,77.9 177.5,76.7 
										178.2,76.4 179.1,75.4 177.5,72.9 176.9,70.2 176.7,66.1 175.9,60.1 175.9,55.5 175,48.6 174.1,46.3 172.7,43.6 171.1,34 
										167.2,24.7 164.6,19.9 161.3,15.5 160,13.4 159.8,12 158.5,9.4 155.8,7.6 155.3,6.8 155.4,4.7 158.5,3.7 160.8,3.9 162.1,4.5 
										162.4,5.2 162.3,5.9 161.4,6.1 159.2,5.8 159.2,6.5 160.5,7.6 162.9,10.5 164.5,11.7 168.6,10.6 170.1,10.5 173,11.6 174.7,12.9 
										175.7,14.1 178.6,15.3 179.3,15.9 179.8,17.2 180.1,19.1 180.6,20.2 182,20.3 183.2,21.1 184.4,22.8 185.6,24 188.6,24.3 
										189.6,24.7 191.3,24.7 193.6,25.6 194.2,26.6 194.2,28.3 193.7,29.5 195,28.9 195.4,28 200.2,24.3 201.2,24 203.4,24.7 204.3,25.2 
										205.1,25.9 205.8,29.1 207.6,34.4 206.9,36.5 206.1,37.5 206.3,37.9 207.9,39.1 208.5,40.1 209.4,40.9 210.6,41.4 211.3,42.1 
										212.7,42.1 212.7,40.9 211,38.3 209.8,37.2 209.3,32.5 210,31.3 215.3,31.7 216.5,31.3 213.1,30 209,27.7 207.8,23.7 207.1,23.3 
										203.9,22.1 200.5,21.9 197,20.7 197.2,20 197.5,20 196.3,17.6 196.4,17.2 195.3,17.2 194.4,16.4 194.6,15.7 201,15.5 206.8,14.3 
										213.1,12.6 215.4,11.4 218.6,9 220.2,9 221.5,9.8 221.5,13.3 222.1,14.1 223.7,15 225.2,16.6 225.3,18.7 225.7,19.2 229.6,20.9 
										231.9,22.7 235.7,22.7 239.8,21.2 244.2,21 245.8,19.8 247.6,18.9 250,18.9 251.9,18.1 253.8,17.7 255.1,18.4 259.5,17.2 
										261.1,16.2 261.1,15.7 259.9,15.2 256.3,12.5 255.6,11 256.3,10.4 262.1,10.3 263.8,10.5 264.8,10.9 265.2,11.5 265.2,12.9 
										265.5,13.1 266.7,13.1 267.2,12 267.9,11.2 269.4,10.6 270.6,9.7 270.8,7.1 272.3,6 275,5 278.3,2.2 281.3,1.5 282.7,0.7 
										283.7,0.5 287.3,0.6 288.9,1.3 289.6,2.1 291.7,3.3 294.6,6.4 300.1,9.4 303.1,11.4 304.2,12.6 305.7,14.8 305.6,18.2 307.8,22.5 
										314,28.3 316.4,29.8 318.3,30.7 320.3,31.3 323.4,31.3 323.3,65.5 323.1,67.4 324.6,67.5 324.1,147.1 324.3,156.3 292.1,156.1 
										291.2,156.3 290.8,157.5 240.2,157.3 230.8,157.1 230.9,155.5 230.7,155 165,154.3 	"/>
									<polygon id="Lincoln" class="st4" points="128.3,657.8 129.3,655.6 128.3,653.2 128.3,652 128.6,650.6 130.6,646.8 130.2,645.8 
										128.8,644.4 128.8,643 129.3,641.3 130.4,640.3 132,635.9 133.9,631.4 134.5,628.1 134.5,620.8 135,619 135.5,614.4 136,612.4 
										137.2,610.4 140.6,606.8 141.5,605.4 142.1,605 143.2,605.7 143.7,606.8 145.3,606.3 145.8,606.9 147.1,607.6 148,607.6 
										149.3,608.1 149.9,608.7 150.2,610.6 151.1,611.4 152.5,611.6 154.9,610.9 156.5,610.9 157.4,610.4 157.3,609.7 155.7,608.3 
										154.6,608.7 153.2,608.5 152.7,607.8 153.1,606.3 153.2,604.2 152.9,602.6 152.5,602 151.9,602 150.2,601.1 148.9,599.9 
										148.1,599.8 143.5,600.9 140.9,603.1 140.1,603.4 139.8,604.6 138.7,605.4 137.8,605.4 137.3,603.8 136.6,603.1 136.3,601.9 
										137.1,600.4 137.3,598.7 136.7,594.9 137,592.4 136.7,591 135.7,588.6 135.8,587.7 136.3,586.8 137.5,585.7 137.5,584.5 
										136.2,583.8 135.2,583.7 134.8,583.3 135.8,582.4 137.3,579.5 138,575.9 139.3,559.6 140.4,552.7 140.6,549.7 141.6,545.8 
										142.3,544.2 143.5,542.9 146.1,541.5 147.9,541.6 148.4,543 148.9,543.4 150.7,543.2 151.2,543.4 148.9,548.6 149,550.1 
										150.6,549.4 150.7,548.8 151.9,547.5 151.7,547 153.1,546.3 154.2,547.5 153.7,548.5 153.7,550.1 153.2,551.1 153.2,552.2 
										153.7,553.9 154.6,555.3 160,557.4 162,557.6 166,559.1 167.7,558.7 169.8,557.5 172,554.6 173,553.9 174.3,554 176.5,553.4 
										175.7,552 174.8,551.5 174.1,550.8 171.6,551.9 169.5,552.3 169.2,553.9 168.5,555.4 167.8,555.5 163.7,555.7 160,553.9 
										156.8,553.2 156.5,552.7 158.2,550.3 158.2,549.4 157.3,546.2 156.8,545.6 156.8,539.5 154.2,538.6 152.1,539.5 148.5,538 
										145.8,538.4 145.1,538.9 143.7,539.2 142.4,538.9 142.1,538.2 141.9,537.1 143.6,533.9 143.7,533 143.5,530.8 144.4,529.2 
										144.9,527.7 144.9,527 143.6,525.3 139.3,523 138.9,522.5 141.4,521.2 141.8,520.4 142.4,518.2 143.2,510.9 144.1,507.9 
										144.2,504.2 144.1,502.1 140.7,500.6 141.2,499 142.4,497.9 142.7,494.2 142.6,493.5 141.7,491.9 140.7,491.2 139.2,488.9 
										139.2,483.8 139.9,482.6 142.1,480.2 142.2,478.5 142.1,477.4 139.4,476 139.7,475.1 141.6,473.3 141.2,472.5 141.6,470.7 
										143.4,470.1 145.9,466.5 147.2,461.8 148.5,453.5 149.2,452.7 149,451.1 150.2,447.2 150.8,442.3 151.3,441.8 151.9,443 
										152.1,445.4 151.7,447.5 152.1,449 152.4,449.5 154.5,448.4 154.4,446.9 155.9,445.2 156.4,445.1 156.5,444.3 155.9,443.4 
										154.9,443 154.7,442.3 155.7,439.9 155.5,438.9 152.4,437.8 151.7,436.8 151.6,435.3 151.9,432.7 153.2,428 153.9,423.4 
										154.7,420.7 154.9,417.2 155.5,415.7 156,411.5 156.5,409.8 156.7,408.4 156.4,407.2 156.4,405.7 156.2,405.3 157,402.2 
										156.7,401.9 230.2,401.6 230.1,505.5 230.2,505.9 236.3,505.9 236.7,510.5 261.3,510.9 261.7,533.9 263.7,534.4 263.2,561.9 
										263,563.5 263,577.3 262.8,578.8 262.5,606.1 232,605.7 232.2,606.4 232.2,612.4 232.4,614 232.3,621.7 227.1,621.7 227.3,636 
										206.4,636.4 205.8,645.2 216.9,646.3 216.9,656.7 173.6,657.2 172.8,659.4 166,659 128,658.3 	"/>
									<polygon id="Columbia" class="st5" points="324.9,156.3 324.8,147.1 325.2,67.5 323.7,67.4 323.9,65.5 324,31.3 325,31.4 
										329.1,32.4 332.2,32.2 334.3,31.7 338.2,32.3 338.6,30.4 340.4,30.7 342.2,31.4 344.1,31.5 346.6,32.2 350.5,32.3 353.9,31.3 
										358.5,28.6 360.9,25.3 363.3,22.6 364.7,22.4 369.6,19 372.7,18.1 377.6,17.7 387,19.3 393.7,22.1 396.1,23.4 399.5,24.6 
										405.2,27.3 412.1,32.2 417.5,36.6 420.4,38.2 423.2,41.2 425,42.6 430.1,45.6 438.8,49.2 444.3,53.2 446,54.9 446.8,56.1 
										447.7,58.6 448.6,62.4 449.3,63.9 449.6,67 449.8,67.2 450.4,70.2 451.3,72.1 455.2,76.3 456.5,79.2 457.5,80.6 457.6,82.2 
										458.5,84.6 459.7,87 462.2,90.9 465,93.4 468.2,98.4 468.6,100.9 468.5,104.7 468,107.1 468.3,111.5 469.6,116.8 470.4,118.8 
										471.2,120.2 473.5,122.6 474.2,123.8 474.5,127.7 474.1,129.6 473,132.5 473.4,134 473,136.8 472.5,142.7 472.8,144.3 473.5,147.9 
										474.6,150.7 476.8,154.9 478.4,157.2 479.2,159.8 478.5,164.6 477.6,166 477.6,166.8 476.8,168.6 476.9,170.3 477.2,170.7 
										470.7,171.4 470.6,174.9 470.2,175.1 436.5,175.2 436.4,170.3 419.3,170.5 419.5,169.3 419.5,166.2 409.4,165.8 409.3,156.2 	"/>
									<polygon id="Benton" class="st5" points="216.9,656.7 216.9,646.3 205.8,645.2 206.4,636.4 227.3,636 227.1,621.7 232.3,621.7 
										232.4,614 232.2,612.4 232.2,606.4 232,605.7 262.5,606.1 262.8,578.8 263,577.3 263,563.5 263.2,561.9 263.7,534.4 261.7,533.9 
										261.3,510.9 379.4,510.4 380,510.5 380.5,511.9 386.9,521.7 388.7,523.6 390.7,524 393.4,523.6 394.7,524.5 394.7,525.5 
										396.7,526.1 398.8,527.9 399.8,529.4 399.4,531.9 398,533 396.9,533 395.6,533.7 389.3,535.5 385.8,536 383.6,535.8 380.6,536.1 
										375.6,537.3 373.8,538.2 373.2,539.3 372.9,541.4 373.2,542.5 370.6,543.5 370.4,543.8 370.4,545.4 369.4,546.7 367.4,548.6 
										367.2,549.7 369.5,551.8 370.2,553.1 370,553.5 363.6,553.4 359.4,554.9 354,558.2 352.7,559.7 351.7,562.9 351.9,564.3 352,564.6 
										353.1,565.2 354.2,564 354.5,563.1 355.6,562.8 356.3,562.9 356.9,564.2 358.3,564.6 359,566.3 358.4,568.4 359.4,570.5 
										361.2,571.5 361.8,572.8 361.7,573.3 360.3,574.6 360.2,575.3 359.5,576.7 359.4,577.7 360.8,579 363.4,582.6 363.4,585.2 
										362.5,587.4 362.4,588.9 362.3,590.6 362.8,592.1 362.3,594.5 363.9,601.1 363.6,602.6 362.8,603.5 362.2,605.2 358.8,608.6 
										357.9,609.6 357.4,612.1 358,612.2 358,613.1 358.5,613.8 359.2,616.5 359.8,617.4 360.9,621.6 359,622.6 356.2,622.6 355.8,624 
										355.9,624.8 354.9,626 358.8,626.2 360.2,627.1 360.2,629.2 359,629.9 358,630.9 358.5,633.1 357,636.9 356.3,639.7 356.9,640.7 
										358.1,641.1 360.8,641.1 362.5,645.9 364.5,646.8 366.6,646.5 367.8,647.4 367.8,648.4 367.3,650.1 366.1,651.7 365.8,653.4 
										365.3,654.3 365.6,654.8 238.5,658 231.9,658 232,656.4 	"/>
									<polygon id="Tillamook" class="st4" points="324.9,156.3 324.9,179.2 293.6,180.5 293.8,181.6 293.8,189.3 298.7,189.7 
										298.8,194.5 303.9,194.6 303.9,199.1 308.7,199.4 308.9,203.9 319.8,204.1 320.2,207.2 320.1,208.7 331.1,208.6 331.4,213.9 
										340.7,214.3 341.1,217.8 337.1,217.9 336.8,222.8 324.1,223.7 324,232.7 314.9,233.1 314.7,233.5 314.2,238.2 308.7,238.3 
										308.5,242.8 303.4,243.3 303.7,250.6 298.8,251.2 298.7,265.6 293,265.9 292.8,267.3 292.8,272 298.3,272.3 298.4,283.6 298,344.7 
										215.6,344.4 215.2,354 215.2,361.6 215,363.2 214.7,390.7 231.1,391.2 230.8,401.6 157.3,401.9 157.7,402.2 157.8,399.6 
										156.6,398.9 156.6,397.6 157.1,396.4 157.1,394.9 157,393.8 156.6,393.2 156.6,390.8 157.1,388.9 159.3,384.6 160.2,382.3 
										162.6,379.4 163.3,378.1 164.4,374 164.7,371.8 164.7,370.2 165,368.6 165.4,368 165.5,366.4 169,359.4 171.8,355.5 172.9,355.3 
										173.4,355.7 174.8,357.9 175.7,358.3 177.1,358.1 177.7,356.4 177.7,355.7 177.1,354.8 171.3,351.4 170.2,351.5 170,353.1 
										169.4,355 168.5,356.2 167.9,358.7 167.5,359.1 167,358.5 167,356.7 166.5,354.6 167.5,350.3 167.7,347.9 167.5,341.9 165.6,342.3 
										164.6,341.9 166.7,339.3 168.6,330.1 169.3,325.7 170.2,326.8 170.2,327.5 170.6,328.2 171.6,327 174.9,320.8 176.6,318.2 
										177.1,316.2 175.9,315.2 174.8,315.4 171.9,320.4 170.6,321.3 169.4,321.3 169.4,319.7 170.4,317.3 170.6,316.1 170.1,312.8 
										169.3,309.7 169.1,308.1 167.6,302.9 166.9,302 166.2,301.7 159,301.2 162.2,299.3 164.6,298.4 166.7,296.8 167.9,293.6 
										167.9,285.8 169.3,279.4 169.5,273.7 169.6,272.7 170,272.1 171.1,271.9 171.6,272.5 171.3,274.7 171,279.2 170.1,284 170.4,286.5 
										171.5,286.3 173,284.9 174.8,282.2 175.6,280.4 176.8,279.2 177.1,277.3 176.2,274.2 175.5,271.1 171.5,266.2 171,265 168.7,261.9 
										166.1,260 165.7,257.6 166.1,256.2 166.1,255 164.6,252.7 164.4,251.7 165.2,251.5 166.1,249.9 166.4,246.5 167.1,245.2 
										168.1,244.9 169.7,245.6 171.6,246 174.1,244.6 175.9,244.1 178.2,245.3 185.3,252.7 186,254.2 187.4,255.4 189.9,252.1 
										191.3,249.6 192.2,249 192.8,247.9 195.9,247 194.5,246.3 193.2,246.4 190.4,246 189.2,245 188.3,243.8 188.3,240.9 185.9,236.3 
										184.3,231.1 186.4,228.7 186.9,227.3 186.4,227.1 182.9,229 181.7,228.8 180.4,228.2 179.9,227.6 179,227.1 177.7,227 176.9,226.6 
										175.5,224.9 174.5,224.4 172,224.3 171.5,224 172,223 172.3,221.4 172.1,218.8 171.6,217.1 172,215.5 172.3,215 172.5,210.8 
										173.3,207 173.7,204.1 174.7,201.9 175.2,199.2 176.7,194.1 179.1,192 179.4,190.8 179.4,188.8 180,186.9 180.1,184.7 180.8,184.3 
										183.6,185.2 185.8,185.4 187.5,185.2 190.4,183.5 190.9,182.6 190.7,180.2 190.1,178.4 188.5,174.7 187.9,174.4 187.2,175 
										189.2,181.1 188.2,182.1 186.1,182.8 185.3,182.6 185.6,181.9 185.6,180.7 185.1,178.6 184.9,178.4 184,177.8 183,177.6 
										180.5,178.1 179.2,181 178.2,182.4 177.6,184.8 176.9,185.9 177.6,187.3 177.7,188.6 178.1,189 177.1,190.6 176.4,191.1 
										175.6,191.1 175.3,190.9 174.6,186.4 174.6,184.2 175.2,180.8 175.9,179 174.2,174.4 173.2,169.8 170.8,167 168.3,166.5 167.9,166 
										168.3,165.1 167.6,163.9 167.4,163.1 168.1,161.6 167.9,160.8 167.4,160.1 167,160.1 165.1,161.3 164.4,161.1 163.1,155.9 
										166.1,154.2 165.6,154.3 231.3,155 231.5,155.5 231.4,157.1 240.8,157.3 291.4,157.5 291.8,156.3 292.8,156.1 	"/>
									<polygon id="Clackamas" class="st5" points="741.5,455 731.5,454.7 729.8,454.9 719.8,454.7 718.2,454.8 654.8,454.3 574.8,454.2 
										574.1,451.6 572.9,450.2 567.2,448.4 564.9,448 563.1,447.3 560.5,446 557.6,442.9 555.8,442.1 552.1,441.2 546.5,440.8 545.2,440 
										543.9,438.3 543.1,436 542.1,434.6 540.6,433.8 538,431.8 536.5,430.2 535.5,428.5 533.2,426.1 531.6,423.6 531.3,422.2 
										530.4,419.9 528.7,418.1 526.5,417.8 525.3,417.3 524,414.7 524.4,413.3 525.1,412.4 523.7,408.3 522.4,406.5 517.7,405 
										513.9,405.2 511,405 509.3,404.1 507.9,402.5 505,401.2 503.4,399.9 500.6,397.7 497.5,394.6 495.1,393.8 491.2,388.3 489.4,383.9 
										485.1,379.7 483.1,376.9 479.2,375.5 474.1,371 473.8,370 473.9,369.1 475,366.2 476.2,361.1 477.8,360.8 482.5,358.9 483.5,356 
										483.3,354.4 483.6,352.6 483.1,351.6 484,350.1 484.2,349.1 483.3,348 483.1,346.6 483.5,345.7 486.3,344.7 486.5,343.8 
										485.9,341.8 485.2,341.1 485.3,339.5 485.1,339.2 485.3,337.5 484.4,336.4 484.3,334.5 484.8,333.3 485,331.7 484.5,329.4 
										475.3,328.5 474.7,324 463.6,323.5 462.6,324.6 458.1,328.5 456.1,329.6 453.2,330.3 452.8,329.6 452.9,326.5 452.1,309.2 
										457.6,308.7 457.6,298.9 468.9,299.2 468.8,304.2 484.8,304.2 484.5,292.6 484.7,271.2 504.9,271.5 507.8,271.3 508.3,268.4 
										508.2,265.4 506.5,262.5 605.8,261.7 725.5,261.5 725.9,261.5 726.7,265 726.7,266.5 727.3,270.2 728.5,272.3 728.7,274.9 
										729.8,277 732,278.1 737.7,280.2 743,281.3 748.3,283 749.4,283.5 752.6,286 753.8,288.7 755.1,292.5 755.1,294 755.6,297.9 
										755.7,302.1 756.8,304.6 758.8,310.9 761.9,315.7 762.7,317.8 762.5,319.9 761.8,320.4 760.6,320.7 759.4,321.7 758.7,322.9 
										759.5,329.3 759.9,334.3 759.5,338.3 754.4,343.2 751,345 747,346.7 745.3,348 744.2,349.9 744.5,352.5 747.2,357.5 747.3,360.6 
										749.6,362.8 750.7,364.3 751.3,365.8 752.4,370.6 752.5,372.2 758.7,374.1 763,377.6 765.1,380.5 765.5,381.3 765.9,384.1 
										765.9,385.6 765.3,388.2 765.4,389.8 764.7,391 762.7,392.9 759,395.2 755.2,397 752.7,397.7 751.2,399.7 750.7,402.4 748.8,403.4 
										747.5,403.5 745.7,404.2 742.1,403.6 739.3,403.8 735.6,406.9 734.4,408.4 734,409.8 732.6,411.5 732.1,411.1 729.4,411.1 
										727.4,412.9 726.8,414.4 726.8,415.7 726.4,418.1 726.6,418.5 726.6,420 727.3,421.8 729.1,424.4 731.3,428.5 731.5,430.1 
										731.2,433.8 731,434.5 731,436 730.6,437.2 733.9,436.8 736.2,435.8 739.1,436.4 742,439.9 743.1,442.2 745.4,444.4 747.8,449.2 
										748.1,451.5 747.7,452.8 746.5,453.4 743.7,454 	"/>
									<polygon id="Yamhill" class="st5" points="231.1,391.2 214.7,390.7 215,363.2 215.2,361.6 215.2,354 215.6,344.4 298,344.7 
										298.4,283.6 298.3,272.3 381.9,270.5 382,275.9 387.3,276.1 387.5,276.6 388,281.2 409.6,281.2 410,283.8 409.9,285.3 414.2,285.6 
										414.6,290.3 420.3,290.3 420.1,294.7 425,295.2 425.2,300.7 441.8,300.8 442,309.9 452.1,309.9 452.9,327.1 452.8,330.2 453.2,331 
										450.5,330.3 448.7,330.3 442.9,327.4 435.8,327 433.8,325.8 432.3,325.4 429,322 426.8,320.9 425,320.7 424.4,321.5 424.3,323.8 
										423.6,324.8 420.6,325.1 419,325.8 418.4,326.6 416.7,330.3 416.3,332.1 418.6,335.2 419.4,336.9 419.4,338.2 418.4,340.2 
										417.2,340.7 415.4,340.6 409.1,341.6 407.5,341.6 406.1,342.4 405.4,344.8 405.6,346.8 406.8,348.3 409.4,349 410.9,348.7 
										412.4,349.6 412.2,350.5 412.3,353.3 413.4,356.2 414.6,357 416,359.1 416,360.4 415.6,360.9 414.6,361.6 411.1,362.3 410.9,365 
										411.7,366.5 413.5,368.6 414.5,370.7 415.4,373.8 416.8,374.7 418,374.9 418.6,375.8 418.5,376.7 416.9,377.3 415.1,377.5 
										414.2,378.5 414.1,379.5 412.7,380.7 409.9,381.2 409.2,380.7 407.7,379.8 405,380 404.4,380.7 404.2,381.5 406,383.3 406.5,385.2 
										407,386.7 405.9,389 403.4,389.6 403.1,388.9 401.3,388 400.3,388.5 399.8,389.1 399.9,390.8 399.9,391.2 	"/>
									<polygon id="Multnomah" class="st5" points="725.5,262.1 605.8,262.4 506.5,263.1 508.2,266.1 508.3,269 507.8,272 504.9,272.2 
										484.7,271.9 484.6,253.1 484.8,242.3 480.1,242.1 480,237.9 473.9,237.5 473.7,233 468.9,232.7 468.9,228.5 462.1,228.3 
										462.3,223.6 458.2,223.3 458.2,218.8 452.6,218.7 452.5,213.5 446.6,213.5 446.5,209.1 441,209.4 440.7,204.5 436.7,204.3 
										436.4,184.4 436.5,175.2 470.2,175.1 470.6,174.9 470.7,171.4 477.2,170.7 477.7,171 477.8,173.2 478.7,176.2 478.8,178.4 
										478.3,180.1 478.1,182.6 478.9,187.5 478.5,189.2 479,191.5 479,192.6 479.2,194.9 480.2,196.9 484.8,199.7 490.8,201 496.2,202.6 
										504,208.6 508.5,211.1 514.8,212.5 519.2,213 528.7,214.7 539.4,217.9 551.2,220.2 564.1,225.1 569.2,225.5 571.3,224.9 
										577.8,223.8 583.8,224.3 586.7,225 588.8,226.1 592.4,230.2 594.9,231.6 598.1,232.4 601.5,232.6 605,231.8 608.1,232.1 614,230.8 
										617.1,230.3 622.1,227.4 628.4,225.3 631.8,223.8 646.3,220.2 652.2,218.3 658.8,215.4 663.2,212.4 664.9,211.7 669.4,209.9 
										673.2,209.1 677.3,207.4 678.7,206.4 682,202.7 684.4,201.5 686.6,201.2 688.4,201.8 692.5,201.2 694.2,200.8 696.3,199.3 
										697.5,202.3 698.3,205.1 698,208.2 698.2,210.8 699.5,212.9 699.7,213.9 699.9,215.4 699.1,216.5 699.1,219.7 700.6,221.7 
										701.9,222.7 703.4,226.2 703.4,227.7 702.8,229.6 699.8,231.5 699.5,232.8 699.4,235.3 699.9,237 700,238.5 703.3,243.3 
										705.7,244.4 707.5,244.5 710.3,243.7 711.6,244.9 712.8,246.5 713.9,250 715.3,253.1 718.1,255.3 720.8,256.4 722.9,258.4 	"/>
									<polygon id="Linn" class="st5" points="727.6,663.3 720.1,654.3 719.2,648.4 719.8,643.8 720,643.5 719.4,640.6 716.9,634.9 
										716.9,633.5 717.5,632.3 717.8,625.1 718.5,621.8 718.5,620.5 718.1,618.2 718.6,617.3 719.1,614.6 718.9,613 718.6,611.5 
										716.3,605 718.8,596.3 719.9,589.2 720.9,586.4 722.2,581.5 723.1,579.3 724.3,577.8 724.3,575.5 724,571.7 724.7,568.8 
										726.3,564.2 728,560.7 727.5,558.9 727.6,557.1 729.1,552.5 729.3,550.2 728.7,547.6 727.4,544.9 727.3,542.6 727.7,536.4 
										728,536.2 729,529.8 728.7,527.8 728.9,523.8 728.8,522.8 729.3,521.2 682.1,521 681.2,519.6 679.9,519.5 675.8,520.3 673.2,519.4 
										671.5,519.4 670.4,520 667.7,519.8 666.1,519.4 665.6,517.9 659.2,515.8 655.8,515.4 651.8,514.4 649.2,513.2 644,510.2 
										641.3,509.3 639.7,509.1 636.7,509.7 634.8,510.7 630.9,513.5 629.8,515.1 626.9,517.4 624.1,518.4 621,518.5 617.5,517.4 
										614.5,513.4 613.6,511.8 613,510 613.1,508.8 611.3,506.5 609.1,505.3 608.2,504.2 607,502.2 606,499.7 603.3,498.1 601.6,497.8 
										599,496.1 597.3,495.8 594.2,495.9 591.3,496.5 589.2,495.6 587.6,495.4 586,496.1 582.5,496.9 575.2,496.8 570.7,496.2 
										568.1,497.1 566.2,497.1 564.5,496.7 559.7,497.6 556.2,496.6 554,496.5 550.2,496.7 547.1,496.5 542.8,498.1 541.5,498.2 
										540.7,497.5 540.6,494.8 540.2,493.9 537.6,493.2 536,492.3 533.8,492.2 530.9,490.1 528.6,489.6 525.2,489.7 522.6,488.6 
										520.5,486 520.3,485.3 519.8,484.6 517.8,484.5 513.4,485.2 510.8,485.3 502.8,486.9 500.7,487.8 498.3,488.1 494.6,487.9 
										492.2,487.1 490.8,485.9 489,483.3 485.3,483 481,483.1 477.2,482.1 474.7,483.4 469.7,482.8 468.9,483.6 467.5,484 465.7,484.7 
										464.2,486.1 463,486.6 458.2,487.1 457.2,488 456.7,489.7 455.9,491.3 455.8,492.3 454.4,493.2 451.6,494.2 448.2,497.6 
										446.7,498.1 443.9,500 442,500.3 442.2,499.9 441.4,498.8 440.1,498.8 436.2,502 435,502.1 433.7,503.7 429.3,504.8 428.4,506.8 
										428.5,508 428.3,508.8 427.6,509.2 425.6,512.6 424.4,514.8 422.4,517.9 418.5,520.1 416.8,520.6 415.3,520.4 413.9,519.2 
										413.2,517.8 413.4,515 413,513.8 413,510.2 412,508 409.5,508.6 408.6,508.1 407.5,507 406.1,503.9 404.4,502.8 403.4,502.4 
										400.9,502.4 399.3,501.7 394.1,501.3 388.8,498.7 387.3,499.5 385,501.1 384,501.8 383.5,502.8 382.6,503.3 380.2,506.6 379.7,508 
										379.7,509.1 380,509.8 380.5,511.2 386.9,521.1 388.7,522.9 390.7,523.3 393.4,522.9 394.7,523.8 394.7,524.8 396.7,525.4 
										398.8,527.3 399.8,528.8 399.4,531.3 398,532.3 396.9,532.4 395.6,533.1 389.3,534.8 385.8,535.3 383.6,535.2 380.6,535.4 
										375.6,536.7 373.8,537.6 373.2,538.6 372.9,540.7 373.2,541.9 370.6,542.9 370.4,543.1 370.4,544.7 369.4,546 367.4,547.9 
										367.2,549.1 369.5,551.1 370.2,552.4 370,552.8 363.6,552.7 359.4,554.2 354,557.6 352.7,559 351.7,562.3 351.9,563.6 352,564 
										353.1,564.5 354.2,563.3 354.5,562.4 355.6,562.1 356.3,562.3 356.9,563.5 358.3,564 359,565.6 358.4,567.7 359.4,569.8 
										361.2,570.8 361.8,572.1 361.7,572.7 360.3,573.9 360.2,574.6 359.5,576 359.4,577.1 360.8,578.3 363.4,581.9 363.4,584.6 
										362.5,586.7 362.4,588.3 362.3,590 362.8,591.4 362.3,593.8 363.9,600.5 363.6,601.9 362.8,602.8 362.2,604.5 358.8,607.9 
										357.9,608.9 357.4,611.4 358,611.5 358,612.4 358.5,613.1 359.2,615.8 359.8,616.7 360.9,620.9 359,621.9 356.2,621.9 355.8,623.3 
										355.9,624.1 354.9,625.3 358.8,625.6 360.2,626.5 360.2,628.6 359,629.3 358,630.3 358.5,632.4 357,636.2 356.3,639.1 356.9,640 
										358.1,640.4 360.8,640.4 362.5,645.2 364.5,646.1 366.6,645.9 367.8,646.7 367.8,647.7 367.3,649.4 366.1,651.1 365.8,652.8 
										365.3,653.7 365.6,654.1 368.9,655.8 370.8,656.2 370.9,656 372.1,656 372.3,657.4 372,659.5 373,661.7 373.1,662.7 372.6,664.5 
										372.9,665.6 373.4,666.4 375.3,667.8 375.8,668.7 375.8,670 376.7,672.1 378.8,674.2 379,675.9 378.6,678 377.7,679 377.4,681.3 
										377.7,682.8 378.9,684.2 380.5,684.4 381.8,685.3 391.5,684.3 441.1,683 442.3,663.5 453.7,663.2 453.8,655.5 454,654.3 
										455.5,653.8 461.3,655.4 463.5,657.2 466.7,656.9 471.2,654.4 473.2,654.4 477.5,655.2 478.7,654.6 481,654.2 484.1,654.7 
										489.3,654.9 491.8,656 493.4,657.4 499,658.4 502,659.8 502.6,660.9 506.9,661.7 509.7,663.4 511.6,666.5 514.9,667 516.9,667.6 
										519.9,667.7 521.2,668.1 522.3,668.9 523.7,670.5 526.6,671.4 528.2,671.6 529.9,673.1 532.2,673.3 535.6,671.5 538.4,672.3 
										540.9,673.7 542.7,675.4 545.8,673.8 548.1,674.9 549.6,676.6 555.9,677 559,677.6 560.5,678.6 562.1,678.6 564.6,677.7 
										565.8,678.4 568.1,678.6 569.9,677.5 571.2,677.5 573.4,678 578.1,680.4 578.9,681.4 580.1,681.9 587.4,677.8 589.4,677.3 
										591.1,675.9 592.3,673.4 593.3,669.6 594.9,666.5 608.1,666.6 608.3,665.2 664.4,665 665.3,664.8 665.6,663.5 	"/>
									<polygon id="Lane" class="st5" points="676.4,878.8 677.8,875.6 678.9,874.7 681.1,873.9 683.1,872.5 683.1,871.5 682.3,870.8 
										680.4,866.8 680.4,865.3 680.7,860.1 681.5,857.1 682,854.8 683.8,851.7 685,848.6 685.2,845.2 684.1,842.1 683.9,839 683.5,837.6 
										684.8,832.9 684.8,827.9 682.9,823 682.8,821.5 682.5,819.9 682.3,819.8 682.4,818.2 682.1,816.3 682.1,808.2 682.7,805.1 
										683.9,801.3 686.4,796 691.3,787.2 692.7,785.6 694.4,780.3 695.3,779 697.4,778.2 702.9,779.7 706.7,781.6 709.2,780.9 
										709.9,778.6 710.7,771.8 712.4,768.7 718.1,764 720.7,760.8 721.2,759.6 721.5,755.4 721.4,752.9 721.6,751.3 722.7,747.2 
										722.9,740.3 724.5,734.5 726.3,732.3 729.3,727.4 730.5,725.7 731.6,724.7 733.2,722.1 734.2,721.4 735.3,719.9 737.1,717.9 
										738.1,713.6 737.6,710.5 734.3,705.7 732.1,703.7 731.7,701.5 733.2,698 734,695 734.2,694.9 734.2,693.3 734.7,690.5 735.9,688.2 
										735.8,685.2 734.7,682.6 732.7,675.5 731.6,672.4 727.6,663.3 665.6,663.5 665.3,664.8 664.4,665 608.3,665.2 608.1,666.6 
										594.9,666.5 593.3,669.6 592.3,673.4 591.1,675.9 589.4,677.3 587.4,677.8 580.1,681.9 578.9,681.4 578.1,680.4 573.4,678 
										571.2,677.5 569.9,677.5 568.1,678.6 565.8,678.4 564.6,677.7 562.1,678.6 560.5,678.6 559,677.6 555.9,677 549.6,676.6 
										548.1,674.9 545.8,673.8 542.7,675.4 540.9,673.7 538.4,672.3 535.6,671.5 532.2,673.3 529.9,673.1 528.2,671.6 526.6,671.4 
										523.7,670.5 522.3,668.9 521.2,668.1 519.9,667.7 516.9,667.6 514.9,667 511.6,666.5 509.7,663.4 506.9,661.7 502.6,660.9 
										502,659.8 499,658.4 493.4,657.4 491.8,656 489.3,654.9 484.1,654.7 481,654.2 478.7,654.6 477.5,655.2 473.2,654.4 471.2,654.4 
										466.7,656.9 463.5,657.2 461.3,655.4 455.5,653.8 454,654.3 453.8,655.5 453.7,663.2 442.3,663.5 441.1,683 391.5,684.3 
										381.8,685.3 380.5,684.4 378.9,684.2 377.7,682.8 377.4,681.3 377.7,679 378.6,678 379,675.9 378.8,674.2 376.7,672.1 375.8,670 
										375.8,668.7 375.3,667.8 373.4,666.4 372.9,665.6 372.6,664.5 373.1,662.7 373,661.7 372,659.5 372.3,657.4 372.1,656 370.9,656 
										370.8,656.2 368.9,655.8 365.6,654.1 365.3,653.7 365.6,654.1 238.5,657.4 231.9,657.4 232,655.7 216.9,656 173.6,656.6 
										172.8,658.7 166,658.3 128,657.6 128.3,657.1 128.1,658.5 129.3,660.9 129.5,662.2 129.1,667 129.5,670.1 129.5,672.7 129,675.8 
										127.9,678.6 128,679.6 128.7,680.6 129,683.2 128.2,687.7 128.2,689.1 128.7,690.6 128.7,693.6 127.4,698.9 125.4,701.5 
										124.2,702.1 124.4,703 125.1,703.5 126.4,705.5 125.4,707 126.3,708.2 126.5,709.7 125.9,711 126.7,714 125.4,717.3 125.6,719.9 
										125.4,720.7 125.3,724.8 124,729.1 124,730.6 124.6,732.5 123.7,736.8 123.8,741.9 126.7,742.4 127.4,746.9 127,751.6 128.1,755.4 
										129.3,757 130.4,757.9 132.4,757.9 136.5,754.3 137.5,751.5 138.5,751 139.6,751.3 141.6,750.3 143.2,751.3 142.9,752.4 
										140.4,754.2 139.8,755.4 140.3,755.7 141.9,755.4 144.9,753.7 147.6,753.7 149.3,754.4 150.8,754.6 150.5,756 150,756.5 
										149.2,756.9 147.6,756.8 145.4,758 145.4,759.4 146.5,761.8 146.4,762.4 143.1,760.1 140.1,759.2 139.1,759.1 135.5,760.3 
										132.1,760.5 130.3,761.1 129.4,760.7 127.8,758.4 127.3,756.9 126.3,755.7 126.6,754.3 126,752.8 125.6,749.8 125.6,746.9 
										125.1,745.4 123.7,745.5 124,753.7 123.2,756.2 123.2,757.7 122,762.6 121.6,765.8 121.6,771.7 121.1,774.1 121,777.4 120.4,780.5 
										119.6,784.3 117.8,787.9 118.1,790.5 118,795.5 117.6,795.6 142.3,795.7 143.1,799.1 164.4,798.8 172.4,798.4 172.7,793.5 
										177.3,793.5 177.3,788.9 177.6,784.1 181.4,784.3 182.6,783.1 185.5,783.4 192.6,780.4 196.4,776.9 196.7,776.3 196.7,772.7 
										200,772.9 201.3,771.5 202,769 201.6,767.9 235,767.8 235.1,770.7 246.9,771.3 246.8,775.6 257.1,776.2 257.3,780.7 257.8,786 
										268.4,786.7 268.7,793.8 280.2,794.5 280.8,806.6 295.6,806.9 296.5,813.1 327.7,814.5 328.1,824.2 377.3,824.5 381.9,824.4 
										382.7,882.2 382.8,883.4 390,883.8 390,897.6 390.3,904.8 485.6,903.9 485.8,920.6 486.4,937.5 541.1,937.2 541.1,938.4 546,938.5 
										621.1,938.3 631.8,938.2 636.6,936.9 637.7,937.1 638.7,936.8 638.9,935.2 641,930.6 641.7,927.5 645.7,920.3 645.9,919 
										646.2,917.4 644.8,915.1 643.1,913.9 641.6,913.4 640.5,912.5 641.1,909.6 643.9,901.5 645,900.5 648.3,899.1 650.3,897.7 
										651.3,896.2 651.7,894.9 653.2,892.6 660.6,889.6 662.3,887.8 665.1,884.2 668.2,881.5 671.8,880 673.7,879.8 	"/>
									<polygon id="Coast_Unnamed_2" class="st4" points="216.9,656 173.6,656.6 172.8,658.7 166,658.3 128,657.6 128.3,657.1 
										128.1,658.5 129.3,660.9 129.5,662.2 129.1,667 129.5,670.1 129.5,672.7 129,675.8 127.9,678.6 128,679.6 128.7,680.6 129,683.2 
										128.2,687.7 128.2,689.1 128.7,690.6 128.7,693.6 127.4,698.9 125.4,701.5 124.2,702.1 124.4,703 125.1,703.5 126.4,705.5 
										125.4,707 126.3,708.2 126.5,709.7 125.9,711 126.7,714 125.4,717.3 125.6,719.9 125.4,720.7 125.3,724.8 124,729.1 124,730.6 
										124.6,732.5 123.7,736.8 123.8,741.9 126.7,742.4 127.4,746.9 127,751.6 128.1,755.4 129.3,757 130.4,757.9 132.4,757.9 
										136.5,754.3 137.5,751.5 138.5,751 139.6,751.3 141.6,750.3 143.2,751.3 142.9,752.4 140.4,754.2 139.8,755.4 140.3,755.7 
										141.9,755.4 144.9,753.7 147.6,753.7 149.3,754.4 150.8,754.6 150.5,756 150,756.5 149.2,756.9 147.6,756.8 145.4,758 145.4,759.4 
										146.5,761.8 146.4,762.4 143.1,760.1 140.1,759.2 139.1,759.1 135.5,760.3 132.1,760.5 130.3,761.1 129.4,760.7 127.8,758.4 
										127.3,756.9 126.3,755.7 126.6,754.3 126,752.8 125.6,749.8 125.6,746.9 125.1,745.4 123.7,745.5 124,753.7 123.2,756.2 
										123.2,757.7 122,762.6 121.6,765.8 121.6,771.7 121.1,774.1 121,777.4 120.4,780.5 119.6,784.3 117.8,787.9 118.1,790.5 118,795.5 
										117.6,795.6 142.3,795.7 143.1,799.1 164.4,798.8 172.4,798.4 172.7,793.5 177.3,793.5 177.3,788.9 177.6,784.1 181.4,784.3 
										182.6,783.1 185.5,783.4 192.6,780.4 196.4,776.9 196.7,776.3 196.7,772.7 200,772.9 201.3,771.5 202,769 201.6,767.9 	"/>
									<polygon id="Polk" class="st5" points="230.8,401.6 230.7,505.5 230.8,505.9 237,505.9 237.3,510.5 261.9,510.9 380,510.4 
										380.6,510.5 380.4,509.8 380.4,508.7 380.9,507.3 383.2,504 384.1,503.4 384.6,502.5 385.6,501.7 384.9,501.1 380.2,498.5 
										379.1,495.7 379.1,494.2 379.3,491.2 379.7,488.5 380.6,487.4 382.2,486.7 385.1,484.8 388.9,483.3 393.1,482.2 393.8,481.8 
										394,480.6 391.7,478 387.5,475.9 385.5,474.4 381.7,473.9 379.7,473.2 377.3,473.7 375.7,473.7 373.4,472.3 372.1,470.3 
										371.7,467.6 371.8,464.4 374.2,462.8 376.5,462.3 380.4,458.5 382.1,452.4 383.1,449.9 384.3,448.4 386,447.9 388.9,446 
										389.2,440.8 390.6,440.1 395.5,438.9 399,437.5 405.4,431.7 408.5,430 409.1,427.7 408.9,423.4 407.4,421.3 407.6,421.8 
										406.8,420.9 405.2,420.4 402.2,418.8 399.3,414.7 399.2,412.9 399.2,408.9 399.9,405.1 400.8,404.2 403.1,403.1 403.4,401.9 
										403.6,397.6 401.9,393.6 399.9,391.2 231.1,391.2 	"/>
									<polygon id="Coast_Unnamed" class="st4" points="189.1,880.7 121,880.1 100.1,880.2 100.8,874.4 101.2,872.8 102.4,870.4 
										103.1,868 103.3,863.8 104,861.4 104.9,859.9 105.9,859.7 106.8,858.3 107.5,857.9 110,858.2 111.6,857.3 111.9,856.1 113.3,854.5 
										116.9,853.4 117.6,852.8 118,851.2 118,848.5 118.3,847.6 119,846.7 120.3,841.9 121.6,839.9 123.6,838.8 123.9,838.8 123.9,840.4 
										124.7,846.8 126.5,845.9 128.2,846 130.3,846.7 132.4,846.7 136,848.2 138.5,850.1 141.8,850.8 145.4,850.9 147.5,850.5 
										152.9,850.4 154.7,850.1 162.4,850.5 167.5,851.8 169.1,852.4 177.1,856.2 177.8,856.2 179.7,857.7 177.3,855.3 176.4,853.9 
										174.7,853.2 172,851.2 167.2,848.9 154.8,848 144.9,848.8 142.6,848.8 139.5,848.2 138.8,847.8 138.5,846.7 138.8,843.8 
										138.3,841.9 137,842.7 135.7,842.9 130.1,840.7 126.3,836.6 125.5,835.1 124.2,833.6 123.3,833.1 119.8,833.8 118.5,834.6 
										115,835.7 113.9,838.3 113.7,839.7 113.7,841 114.1,842.6 114.1,846.4 114.7,849.8 114.2,850.4 110.6,852.6 106.8,855.5 106,854.7 
										106.9,852.6 107.5,850 107.5,844.1 108,841.1 110,835.2 110.4,832.4 112.4,826.2 112.9,824.7 114,822.6 114.5,821 115,817.3 
										116,814 116,813.5 115.7,813.5 114.8,812.1 115.8,807.4 115.8,804.7 116.7,802.7 116.7,801.2 117.8,795.7 117.4,795.8 142.1,795.9 
										142.9,799.3 164.2,799 172.1,798.6 172.4,793.6 177,793.6 177,789.1 177.3,784.3 181.2,784.5 182.3,783.3 185.3,783.6 192.3,780.5 
										196.2,777.1 196.4,776.5 196.4,772.9 199.7,773.1 201,771.7 201.7,769.2 	"/>
									<polygon id="Josephine" class="st6" points="228.5,1158.1 231.2,1158 231,1170 237,1169.7 237.3,1166.9 241.9,1166.7 241.9,1169.7 
										266.1,1169.9 266.2,1173 270.6,1172.6 270.6,1177.4 277,1177.6 277.5,1177.8 277.5,1179.8 289,1179.2 289.1,1181.9 294.9,1182 
										295.1,1183.7 298.4,1184 298.4,1182.5 302,1182 302.1,1180.2 306.4,1180.3 306.4,1178.9 306.6,1178.3 314.5,1177.8 314.6,1174.9 
										322.7,1175 322.7,1173.5 334,1173 334,1175.4 338.1,1174.8 338.1,1173 346.5,1172.9 347,1174.8 352.6,1174.8 353.2,1180.8 
										353.5,1182.2 356.3,1181.9 358.8,1184.7 358.6,1202.9 358.8,1248.5 358.6,1266.7 358.7,1313.8 358.5,1332.1 358.6,1377.6 
										358.4,1417 334.6,1418.3 285.1,1417.5 257.3,1417.2 246.8,1420.4 205.3,1420.3 203.3,1415.6 202.2,1414.1 201.9,1411.3 
										201.9,1408.1 200.5,1405.5 199.9,1405 199.2,1403.4 199.7,1399.3 200.9,1396.7 203.9,1393.4 204,1392.7 203.7,1389.2 202.5,1383.9 
										201,1382 200.5,1379.2 198,1376.8 197.7,1376.1 197.9,1373 198.4,1369.9 199.8,1367.3 204.9,1364.1 206.5,1362.7 208,1360 
										207.6,1355.8 206.8,1353.4 207.4,1351.9 208.3,1350.3 209.5,1348.8 210.7,1348.1 210.9,1347.2 211.5,1345.7 212.5,1344.8 
										212.9,1344 212.4,1341.6 209,1338.3 205.1,1333.3 204.2,1330.4 203.3,1328.5 202.2,1324.4 201.4,1322.8 199.7,1317.5 198.6,1315.5 
										198.3,1313.3 197.6,1312 196.8,1311.3 193.5,1310.6 192.5,1309.7 191.4,1308.5 189.8,1305 188.8,1303.7 186.7,1303 180.7,1302.4 
										177.4,1300.4 173.4,1299.2 169.7,1299.4 166.7,1298.7 164.1,1298.7 158.6,1300.3 155.4,1299.5 150.2,1298.9 149.3,1296.1 
										148.7,1294.8 148.5,1293.7 147.9,1293.5 147.4,1293.6 145,1292.3 143.5,1291.8 143.1,1288.2 143.2,1287.4 144.2,1286 147.9,1282.7 
										150.9,1280.5 152.8,1279.8 155.3,1279.3 157,1279.5 158.3,1278.4 158.3,1277.4 157.7,1276.5 157.4,1275.3 157.8,1274.3 159.2,1273 
										159.6,1271.9 159.4,1269.8 160.3,1266.6 159.4,1264.6 159.6,1262.9 160.1,1261.2 160.1,1258.3 158.2,1254.4 160.5,1251.8 
										162.8,1250.9 165.8,1250.6 169.3,1250.9 173,1249.2 174.3,1249.2 179.2,1252.3 180,1252.5 181,1252.3 182.8,1251.2 185.1,1251.6 
										186.3,1251.4 191.5,1246.7 192.3,1244.2 192.6,1242.6 192.5,1240.9 192.7,1239.9 197.3,1235.4 197.4,1234.6 196.8,1232.1 
										195.3,1230 195.3,1228.7 195.9,1227 196.5,1225.9 197.8,1224.6 201.9,1222.1 203.3,1220.9 204.5,1217.6 205.3,1214.3 206,1209.3 
										206.3,1205 206.5,1204.7 206.8,1202.5 208,1200.5 209.8,1198.7 210.6,1197.2 217.5,1187 220.3,1182.3 221,1179.3 222.1,1176 
										222.3,1173.2 223,1171.4 223.2,1169.7 227,1163.6 228.4,1160.2 	"/>
									<polygon id="Jackson" class="st6" points="356.8,1182.4 359.2,1181.2 363.7,1181.2 363.7,1178.8 366.3,1178.6 366,1176.1 
										368.9,1176.3 368.8,1173.7 371.9,1173.9 372,1171.7 378.2,1171.6 378.3,1165.7 426.1,1165.5 426.1,1162.4 431.5,1161.3 
										431.5,1160.4 455.7,1159.5 456.4,1159.4 456.2,1157.8 470.6,1157.1 470.7,1153.2 474.9,1152.5 474.8,1149.4 476.2,1149.1 
										476.3,1147.6 475.9,1143.6 480.7,1142.7 480.9,1144.4 486.4,1143.6 486.4,1140.6 486.6,1139.5 491.1,1139.3 491.2,1135.2 
										496.2,1134.6 496.3,1129.9 501.8,1129.2 501.8,1125.3 511.9,1124.3 512.2,1119.7 521.8,1119.2 522.3,1114.7 527.8,1114.3 
										527.8,1109.7 533.5,1109.2 533.9,1104.7 558.8,1103.4 559,1100.3 563.3,1100 563.7,1095.6 568.5,1094.5 568.8,1089.9 573.7,1089.2 
										573.7,1087.7 574.1,1085.9 604.8,1084.9 605.5,1156.3 605.4,1160.9 605.7,1186.7 605.6,1191.3 605.9,1209.6 605.8,1214.2 
										606.1,1239.9 606,1244.5 606.2,1252.4 606.1,1258.5 603.1,1258.6 603.2,1292.8 603.6,1308 603.4,1312.6 604.3,1367.3 604.2,1371.8 
										602.5,1372.4 602.9,1410.9 602.7,1417.1 501.2,1417 358.9,1417.6 359.1,1378.1 359,1332.6 359.2,1314.3 359.1,1267.2 359.3,1249.1 
										359.1,1203.4 359.4,1185.2 	"/>
									<polygon id="Curry" class="st4" points="205.3,1420.3 203.3,1415.6 202.2,1414.1 201.9,1411.3 201.9,1408.1 200.5,1405.5 
										199.9,1405 199.2,1403.4 199.7,1399.3 200.9,1396.7 203.9,1393.4 204,1392.7 203.7,1389.2 202.5,1383.9 201,1382 200.5,1379.2 
										198,1376.8 197.7,1376.1 197.9,1373 198.4,1369.9 199.8,1367.3 204.9,1364.1 206.5,1362.7 208,1360 207.6,1355.8 206.8,1353.4 
										207.4,1351.9 208.3,1350.3 209.5,1348.8 210.7,1348.1 210.9,1347.2 211.5,1345.7 212.5,1344.8 212.9,1344 212.4,1341.6 209,1338.3 
										205.1,1333.3 204.2,1330.4 203.3,1328.5 202.2,1324.4 201.4,1322.8 199.7,1317.5 198.6,1315.5 198.3,1313.3 197.6,1312 
										196.8,1311.3 193.5,1310.6 192.5,1309.7 191.4,1308.5 189.8,1305 188.8,1303.7 186.7,1303 180.7,1302.4 177.4,1300.4 173.4,1299.2 
										169.7,1299.4 166.7,1298.7 164.1,1298.7 158.6,1300.3 155.4,1299.5 150.2,1298.9 149.3,1296.1 148.7,1294.8 148.5,1293.7 
										147.9,1293.5 147.4,1293.6 145,1292.3 143.5,1291.8 143.1,1288.2 143.2,1287.4 144.2,1286 147.9,1282.7 150.9,1280.5 152.8,1279.8 
										155.3,1279.3 157,1279.5 158.3,1278.4 158.3,1277.4 157.7,1276.5 157.4,1275.3 157.8,1274.3 159.2,1273 159.6,1271.9 159.4,1269.8 
										160.3,1266.6 159.4,1264.6 159.6,1262.9 160.1,1261.2 160.1,1258.3 158.2,1254.4 160.5,1251.8 162.8,1250.9 165.8,1250.6 
										169.3,1250.9 173,1249.2 174.3,1249.2 179.2,1252.3 180,1252.5 181,1252.3 182.8,1251.2 185.1,1251.6 186.3,1251.4 191.5,1246.7 
										192.3,1244.2 192.6,1242.6 192.5,1240.9 192.7,1239.9 197.3,1235.4 197.4,1234.6 196.8,1232.1 195.3,1230 195.3,1228.7 195.9,1227 
										196.5,1225.9 197.8,1224.6 201.9,1222.1 203.3,1220.9 204.5,1217.6 205.3,1214.3 206,1209.3 206.3,1205 206.5,1204.7 206.8,1202.5 
										208,1200.5 209.8,1198.7 210.6,1197.2 217.5,1187 220.3,1182.3 221,1179.3 222.1,1176 222.3,1173.2 223,1171.4 223.2,1169.7 
										227,1163.6 228.4,1160.2 228.5,1158.1 226.7,1157.2 224.8,1156.6 223,1154.8 217.1,1150.5 215.5,1150.5 210.4,1152.7 208.3,1153.6 
										200.8,1153.6 200.5,1156.8 193.6,1156.8 193.4,1158.5 179.3,1158.9 179.4,1169.2 176.4,1169.5 176.6,1174.2 173,1174.5 173,1178.9 
										168.3,1179.5 168.1,1182.6 163,1183.5 163.1,1184.5 162.3,1184.5 162.3,1187.3 136.5,1187.6 136.4,1190.2 131.2,1190.3 
										131.1,1191.9 127.7,1191.4 127.4,1191.2 127,1180.6 126.7,1170 119.6,1169.5 119.3,1154.3 118.4,1152.2 117.8,1149.6 117.7,1143.5 
										120,1143.4 120.5,1139.7 124,1139.3 124.2,1138.8 124.2,1128.2 122.2,1127.6 121.4,1124.2 118.3,1124 117.8,1121 113.4,1120.5 
										113.3,1118.8 113,1118.6 109.8,1118.6 108.9,1115 104.2,1114.5 104.4,1111.8 107,1111.4 107,1109.3 104,1108.9 103.9,1105.2 
										99,1104.9 98.8,1101.7 93.2,1101.1 93.2,1097.3 33.5,1096.8 33,1096.6 31.4,1102.3 29.5,1105.5 28.4,1106.8 27.3,1111.2 
										25.9,1114.2 22,1119 20,1122.4 19.5,1126.6 19.8,1130 19.2,1131.6 18.7,1131.9 17.9,1132.5 17.1,1133.8 14.9,1135.5 13.8,1137.1 
										14,1139.2 15.1,1139.5 16.5,1140.7 18.1,1141.7 19.9,1143.8 21.1,1146.1 23,1151.7 24,1152.4 23.5,1152.8 23.4,1155.1 24.3,1156.5 
										26.1,1164.4 26.1,1168.2 27.3,1170.1 28.3,1170.7 31,1169.6 33.3,1170.5 34.7,1172.1 37.5,1176.4 39.2,1182.1 39,1183.4 
										39.9,1184.3 42.5,1185.7 42.1,1190.1 43.3,1191 44.5,1191.6 47.9,1192.5 51.3,1195.2 52.8,1198.9 53.3,1203.7 54.1,1205.5 
										54.8,1208.1 55,1212.4 55.4,1215 54.9,1217.7 53.7,1219.1 53.8,1219.7 56.4,1222.7 56.4,1225 57.3,1226.2 57.4,1227.2 57.3,1231.3 
										56.2,1235.5 54.3,1239.9 53.3,1242.9 51.9,1246.1 48.4,1251.6 48.4,1253.4 47.4,1255.8 47.4,1257.7 48.2,1260.6 47.1,1262.7 
										47,1267.1 45.7,1272.3 45.3,1272.6 45.7,1273.7 46.6,1274.6 50.9,1272.4 57.4,1269.9 58.9,1268.1 59.9,1269.2 60.1,1270.1 
										59.2,1273 55.4,1274.8 49.7,1276.6 48.7,1277.6 48.2,1279.7 48.4,1286.7 49.7,1290 50,1291.6 47.4,1297.1 47.8,1299.6 45.9,1309.2 
										46.1,1310 48.7,1309.8 48.9,1310.1 49.9,1311.9 52.6,1318.5 53.5,1321.5 53,1324 52.1,1325.1 50.8,1329.6 50.7,1331.5 51,1334.2 
										51.8,1335.7 53.1,1337.1 55.2,1338.1 56.6,1341.8 58.6,1342.4 59.4,1343.8 62.6,1353.4 62.9,1356.3 63.8,1359.1 63.6,1363.6 
										62.8,1364.6 63.2,1366.1 63.3,1366.6 64.5,1367.7 66.8,1369.4 67.6,1373.2 67.6,1379.9 67.2,1381.1 67.4,1383.4 68.5,1383.7 
										69,1385.3 69.9,1386.7 73,1388.6 75.1,1391.1 76.8,1392 78,1393.7 80.4,1399.1 81.1,1400.1 83.6,1402 85.2,1402.3 87.2,1402.1 
										89.5,1403.5 95,1409.1 101.9,1413.6 105.7,1417.7 163.3,1419 	"/>
									<polygon id="Crook" class="st7" points="907.3,619.7 907.6,639.1 907.4,677.2 909.4,677.3 909.6,677.8 909.5,705.3 938.8,706.2 
										939.2,762.7 940,762.5 976.1,763.4 977.8,763.2 1000.8,763.8 1000.9,787.2 1000.7,791.8 1095.4,792 1095.4,823.1 1096.9,822.9 
										1128.1,823.4 1128.2,844.3 1128,852 1169.7,851.8 1222.1,852 1252.9,851.5 1252.6,841.3 1252.3,763.6 1276.6,763.3 1283.2,763.5 
										1283.2,750.6 1283.5,733.8 1283.4,729.3 1283.6,726.2 1283.5,724.7 1283.9,700.3 1283.8,698.8 1284,695.7 1283.9,686.7 
										1284.3,669.9 1284.1,665.3 1284.5,648.5 1221.1,647.7 1220.7,628.6 1220.8,621 1220.3,621.2 1188.8,620.1 1188.5,616.2 1188.1,604 
										1107.4,604.3 1095.7,604.1 1095.4,564.4 1095.5,561.3 979.8,562.2 980.4,587.1 980.2,590 938.5,590.3 938.6,596.2 938.3,619 	"/>
									<polygon id="Malheur" class="st3" points="1653.5,738.3 1653.3,711.3 1653.3,709.8 1653.7,708.4 1653.9,705.3 1653.5,702.9 
										1652.1,690.1 1652.7,688.8 1652.3,667.4 1652.4,665.8 1661.1,665.8 1661.4,661.5 1672.7,660.9 1672.2,651.8 1677.1,651.1 
										1677.1,646.4 1682.8,645.6 1683,641.6 1688.7,640.8 1688.2,632.5 1693.3,632 1693,630.9 1692.9,627.9 1698.3,626.9 1698.5,621.3 
										1703.5,620.8 1703.5,613.4 1708.8,613 1708.6,607 1721.1,605.8 1721,601.7 1721.4,601.6 1817.7,601.1 1818.3,605.8 1824.6,606.3 
										1824.7,607.2 1824.5,610.2 1833.9,610.7 1834.2,615.1 1839.7,615.6 1840.3,621.2 1845.1,621.3 1845.4,630 1845.7,648.4 
										1889.7,647.8 1914.5,647.8 1915,650.6 1914.8,652.1 1926.7,663.6 1927.6,664 1930.7,664.7 1933.8,664.6 1936.5,662.9 1940.7,658.4 
										1941.7,658.1 1943,658.2 1944.8,659 1945.8,660.1 1946.6,663 1947.5,664.8 1949.8,666.8 1954,668.4 1956,670.1 1957.4,670.9 
										1958.9,670.5 1962.2,666.3 1963,664.9 1969.6,666 1971.2,666.1 1972.7,665.8 1975.1,667.3 1976,668.9 1976.9,671.5 1977.1,673.1 
										1975.2,679.5 1975.5,680.6 1975.5,682.2 1977.5,683.9 1980.6,685.6 1985.4,685.7 1990.3,687.3 1993.4,689.1 1995.3,691.9 1996,695 
										1996.2,699.5 1992.1,703.2 1991.2,705.7 1991,707.2 1990.5,708.6 1989.9,709.1 1986.3,715.1 1984.7,717.1 1980.3,718.1 
										1979.5,718.6 1978,720.1 1976.9,723.6 1976.9,725.5 1978,728.2 1982.7,731.8 1984.7,734.8 1987.1,739.6 1988,743.5 1987.5,746.8 
										1985.8,749.8 1982.7,751.6 1981.5,754.6 1981.3,756.9 1980.1,759.3 1979.2,760.6 1979.1,763.1 1981.3,766.7 1981.3,770.7 
										1980.5,775.3 1979.2,776.9 1977.1,778.3 1976.5,780.3 1976.9,781.4 1977.5,786 1976.5,790.7 1976.5,793 1976.1,794.1 1974.7,795.4 
										1971.9,796.3 1970.1,796.1 1967.8,796.6 1966.5,797.6 1966.4,798.6 1967.9,800.6 1968,802 1967.1,803 1964.2,803.6 1963.4,804.7 
										1963,808.7 1961.7,812.2 1961.1,815.3 1961.2,818.4 1963.9,826.4 1964.8,831.4 1964.3,852.7 1964,855.7 1964.3,871.2 1964.3,895.6 
										1964.5,901.7 1964.5,918.4 1964.8,932.2 1964.7,949 1964.9,955.1 1964.9,979.6 1965.2,1000.9 1965,1002.4 1965.4,1027.6 
										1965.4,1064.2 1965.6,1070.3 1965.5,1077.9 1965.7,1084.1 1965.6,1106.9 1965.8,1113.3 1965.8,1421.1 1874.8,1421.7 1837.8,1421.1 
										1807.5,1419.4 1685.2,1420.4 1662.9,1419.6 1662.9,1329.7 1658.3,1328.9 1658.1,1326.6 1658.3,1322 1658.1,1309.7 1658.2,1300.6 
										1657.9,1238.2 1658,1229.1 1657.8,1217 1657.9,1207.7 1657.7,1195.6 1657.9,1186.5 1657.5,1124 1657.6,1114.9 1654.9,1114.6 
										1654.8,1110 1655,1100.9 1654.8,1088.7 1654.8,1065.9 1654.6,1058.2 1654.7,1027.8 1654.2,1016.5 1654.7,982 1655,975.9 
										1654.8,971.1 1654.8,931.5 1654.4,925.3 1654.5,917.7 1654.2,911.6 1653.9,891.7 1654,890.2 1653.7,884.1 1653.7,870.3 
										1653.4,864.2 1653.5,862.7 1652.7,824.6 1652.8,823.1 1654.7,822.9 1654.4,820.7 1654.4,808.5 1654,791.7 1654.2,790.2 
										1653.5,750.5 	"/>
									<polygon id="Jefferson" class="st7" points="729.2,521.1 730.4,515.3 729.7,513.2 729.2,508.8 728.3,505.7 734.8,497 735.5,495.7 
										735.7,494.6 735.3,493.1 734.5,492.3 732.8,491.8 728.2,491.7 726.3,490.3 725.3,489 724.5,487.4 724.5,485.2 725.2,482.2 
										725.9,479.9 728,477.5 735,474.6 736.7,474.6 740.4,473.8 840.4,474.5 842,474.4 865.3,474.7 867,474.5 917,475.2 975.5,474.7 
										983.9,474.9 1002.2,474.6 1010.5,474.8 1097.1,474.6 1095.9,480.4 1096,481.6 1094.1,482.9 1091.9,483.2 1090.4,484.2 
										1090.5,485.5 1091.4,486.5 1091.6,491.3 1092.5,492.2 1093.3,495.1 1094.4,496.9 1094.9,498.8 1095,517.2 1095.7,558.4 
										1095.5,561.3 979.8,562.2 980.4,587.1 980.2,590 938.5,590.3 938.6,596.2 938.3,619 907.3,619.7 881.8,619.8 852,619.2 
										850.4,619.4 842.1,619.2 718,618.1 718.5,617.2 719,614.5 718.8,612.9 718.5,611.4 716.2,604.9 718.7,596.2 719.7,589.1 
										720.8,586.3 722,581.4 723,579.2 724.1,577.7 724.2,575.4 723.8,571.6 724.5,568.7 726.1,564.2 727.9,560.6 727.4,558.9 727.5,557 
										728.9,552.4 729.1,550.1 728.6,547.5 727.3,544.9 727.2,542.5 727.6,536.4 727.9,536.1 728.8,529.7 728.6,527.7 728.8,523.7 
										728.6,522.7 	"/>
									<path id="Klamath" class="st8" d="M966.1,1384.9v-25.8l-0.2-4.6l0.1-3.1l-0.3-27.4l0.1-3l-0.2-4.6l0.1-3l-0.3-27.4l0.1-3.1
										l-0.3-12.1V1245l-0.2-4.6l0.1-3l-0.2-4.6l0.2-3.1l-0.3-19.8l0.1-3l-0.2-4.6l0.1-3.1l-0.2-4.5l0.2-3.1l-0.3-19.6l-28.8-0.3l-0.1-2.1
										l-4.9-0.2l-83.4,0.1l0.1-12.1l-0.6-0.6c0.7-0.1,1.2-0.1,1.2-0.1l-0.1-7.5l-0.4-30.5l0.1-3l-0.4-16.8l0.1-12.1l-0.2-4.6v-15.2
										l-0.3-13.6l0.1-3.1l-0.6-42.6l0.2-3.1l-0.6-37.1l4.8-0.7l0.2-28.9l-0.1-24.4l0.2-10.6l-0.1-7.6l0.2-10.7l-0.2-6.2l-80.9-0.1
										l-93.3,0.4l-2.7,1l-1.9,0.2l-3.7,1.5l-3,2.7l-2.8,3.6l-1.7,1.7l-7.4,3.1l-1.5,2.2l-0.4,1.4l-1,1.5l-2,1.3l-3.3,1.5l-1.2,1l-2.8,8.1
										l-0.5,2.9l1.1,0.9l1.5,0.5l1.7,1.2l1.3,2.2l-0.2,1.6l-0.2,1.3l-4,7.2l-0.7,3.1l-2.1,4.6l-0.2,1.6l6.2,1.8l3.7,2l1.4-0.3l2.5,1.6
										l0.8,1.9l1.2,1.6l1.6,1.4l6.3,3.1l0.4,1.4l-0.4,2l1.3,1.2l0.3,2.6l1.3,1.4l3.2,5.4l2.3,1.1l2,1.6l1.6,3.3l0.4,1.5l-0.2,0.3l0,3
										l0.9,1.7l0.5,1.6l-0.1,2.3l0.6,2.7l-1.4,2.8l0.6,2.1l1.4,2.9l1,1.6l3.5,8l-1.8-1.7l-1.5,4.1l-1.2,2.4l-2.8,3l-1.6,1.1l-3.5,3.1
										l-0.4,1.3l-0.4,3.2l-0.7,2.7l-3.4,4.9l-1.4,3.6l-0.2,2.5l-1.1,1.7l-1.6,0.9l-0.8,0.1l-0.1,2.4l0.6,2.3l-0.7,4l-1,2.7l-2.4,2.8
										l-3.7,6.2l0.3,3.1l2.8,5.9l-51.9-0.5l0.9,23l0.7,71.5l-0.1,4.6l0.4,25.8l-0.2,4.6l0.4,18.3l-0.2,4.6l0.4,25.8l-0.1,4.6l0.2,7.9
										l-0.1,6.2l-3,0.1l0.1,34.2l0.4,15.2l-0.1,4.6l0.9,54.7l-0.1,4.6l-1.7,0.5l0.4,38.6l-0.2,6.2l86.4,0.6l25.5,0.5l1.6-0.2l39.9,0.7
										l0.9-0.2l14.3,1.6l49.7,0.7l145.7,1.6v-25.8L966.1,1384.9z"/>
									<polygon id="Deschutes" class="st7" points="1221.8,881.7 1222.6,854.3 1222.5,853 1170,852.8 1128.3,853 1128.5,845.4 
										1128.4,824.5 1097.2,823.9 1095.7,824.1 1095.7,793.1 1001,792.8 1001.2,788.2 1001.1,764.8 978.1,764.2 976.4,764.4 940.3,763.5 
										939.5,763.7 939.1,707.2 909.8,706.3 909.9,678.8 909.7,678.3 907.7,678.2 907.9,640.1 907.6,620.7 882.1,620.8 852.4,620.2 
										850.7,620.4 842.4,620.2 718.3,619.1 718.7,621.4 718.7,622.8 717.9,626 717.7,633.2 717.1,634.4 717.1,635.8 719.6,641.5 
										720.2,644.5 720,644.8 719.4,649.3 720.2,655.3 727.8,664.2 731.8,673.4 732.9,676.4 734.9,683.5 736,686.1 736.1,689.2 
										734.9,691.4 734.4,694.3 734.4,695.8 734.2,695.9 733.3,699 731.9,702.4 732.3,704.6 734.5,706.6 737.8,711.4 738.2,714.5 
										737.3,718.9 735.4,720.8 734.4,722.3 733.4,723 731.8,725.7 730.7,726.7 729.4,728.4 726.5,733.2 724.6,735.5 723,741.2 
										722.8,748.1 721.8,752.2 721.6,753.9 721.7,756.4 721.4,760.5 720.9,761.8 718.3,764.9 712.6,769.7 710.9,772.7 710.1,779.5 
										709.4,781.8 706.9,782.6 703.1,780.7 697.6,779.2 695.4,780 694.6,781.2 692.9,786.5 691.5,788.1 686.5,796.9 684.1,802.2 
										682.8,806.1 682.3,809.1 682.3,817.2 682.6,819.2 682.5,820.7 682.7,820.9 683,822.4 683.1,823.9 684.9,828.8 685,833.8 
										683.7,838.6 684.1,839.9 684.3,843 685.4,846.1 685.1,849.5 683.9,852.6 682.2,855.7 681.6,858 680.9,861.1 680.6,866.3 
										680.6,867.7 682.5,871.7 683.3,872.5 683.3,873.4 681.3,874.8 679.1,875.6 678,876.5 676.6,879.7 769.9,879.3 850.7,879.5 
										910,878.9 927.8,891.3 948.3,909.4 970.8,926.6 990.4,940.7 1018.4,879.8 1066.4,879.8 1077.4,919.5 1108.3,888.3 1127,881.9 	"/>
									<polygon id="Harney" class="st9" points="1360.9,1422.8 1361.4,1378.8 1360.1,1378.4 1361.1,1171.5 1270.4,1170.5 1270.2,1172.6 
										1269.2,1172.7 1211,1172.4 1211,1160.8 1211.8,1115.1 1215.5,1114.9 1214.6,1053.7 1214.5,1026.3 1222.4,1026 1222.2,1022.3 
										1222,991.8 1222.1,982.7 1221.4,889.7 1221.5,880.7 1222.3,853.3 1222.1,852 1252.9,851.5 1252.6,841.3 1252.3,763.6 1276.6,763.3 
										1283.2,763.5 1307.8,763.1 1414.8,762.6 1500.4,762.7 1500.4,737.5 1500.6,734.5 1501.3,734.4 1557.3,735.1 1560.6,735.3 
										1560.8,737 1621,736.9 1622.7,737 1622.7,739.1 1654.1,738.3 1654.1,750.5 1654.8,790.2 1654.7,791.7 1655.1,808.5 1655.1,820.7 
										1655.3,822.9 1653.4,823.1 1653.3,824.6 1654.2,862.7 1654,864.2 1654.3,870.3 1654.4,884.1 1654.7,890.2 1654.5,891.7 
										1654.9,911.6 1655.1,917.7 1655.1,925.3 1655.4,931.5 1655.4,971.1 1655.6,975.9 1655.3,982 1654.9,1016.5 1655.3,1027.8 
										1655.2,1058.2 1655.4,1065.9 1655.4,1088.7 1655.6,1100.9 1655.4,1110 1655.5,1114.6 1658.3,1114.9 1658.1,1124 1658.5,1186.5 
										1658.3,1195.6 1658.6,1207.7 1658.4,1217 1658.6,1229.1 1658.5,1238.2 1658.8,1300.6 1658.7,1309.7 1658.9,1322 1658.8,1326.6 
										1658.9,1328.9 1663.5,1329.7 1663.5,1419.6 1561.1,1421.3 1512.9,1422.4 1466.5,1421.9 1372.1,1421.6 	"/>
									<polyline id="Wheeler" class="st3" points="1095.5,561.3 1095.4,564.4 1095.7,604.1 1107.4,604.3 1188.1,604 1188.5,616.2 
										1188.8,620.1 1220.3,621.2 1220.8,621 1220.7,628.6 1221.1,647.7 1284.5,648.5 1284.6,639.4 1284.2,583.5 1284.4,580.4 
										1284.3,560.6 1284.6,557.6 1283.9,492.7 1284,478.9 1283.8,475.9 1280.3,475.1 1280.4,467.5 1280,456.7 1280.2,455.2 1279.5,417.8 
										1248.5,418 1248.4,414.2 1248.6,392.8 1174.3,394.7 1067.9,394.4 1069,395.5 1068.8,401.7 1069.5,402 1069.5,403.4 1068.6,406.7 
										1069.1,408.6 1069.5,408.9 1070.2,410.5 1068.9,414 1069.4,418.4 1070.5,420.6 1070,422.3 1070,423.9 1071.1,424.8 1071.4,427 
										1070.9,428.9 1069.9,430 1069.4,431.6 1069.5,432.7 1072.7,436.3 1073.3,437.9 1073.1,438.5 1073.2,440.4 1073,444.9 1072.8,445.6 
										1073.5,446.3 1075.8,447.3 1078.9,446.9 1079.7,448.1 1080.8,449 1082.1,451 1081.9,452.2 1079.3,454 1077.6,454.6 1076.2,455.7 
										1075.9,457.2 1076.4,458.7 1080.6,459.8 1081.5,460.5 1082.5,461.6 1083.5,461.8 1085.9,463.7 1088.9,464.6 1089.3,466 
										1089.3,467.2 1090.2,467.9 1091.4,469.8 1093.7,471.1 1096.5,473.3 1097.1,474.6 1095.9,480.4 1096,481.6 1094.1,482.9 
										1091.9,483.2 1090.4,484.2 1090.5,485.5 1091.4,486.5 1091.6,491.3 1092.5,492.2 1093.3,495.1 1094.4,496.9 1094.9,498.8 
										1095,517.2 1095.7,558.4 1095.5,561.3 	"/>
									<polygon id="Hood_River" class="st5" points="725.5,261.5 722.9,257.8 720.8,255.8 718.1,254.7 715.3,252.4 713.9,249.4 
										712.8,245.9 711.7,244.3 710.4,243.1 707.5,243.9 705.8,243.8 703.3,242.7 700,237.9 700,236.4 699.5,234.7 699.5,232.2 
										699.9,230.9 702.8,228.9 703.5,227.1 703.4,225.6 702,222.1 700.6,221.1 699.2,219.1 699.1,215.8 700,214.8 699.8,213.3 
										699.5,212.3 698.2,210.2 698.1,207.6 698.3,204.5 697.6,201.7 696.3,198.7 697.4,198.3 699,197.2 700.9,195.4 703.2,190.7 
										706.4,187.2 709.2,186.1 711.6,184.7 715.1,183.3 718.4,182.3 721.5,180.6 726.3,179 729.6,178.9 731.7,179.3 739.9,182.8 
										742.2,183 745.6,182.4 751.2,183.1 755,183.1 759.8,181.9 763.1,180 765.6,179.6 768.9,179.7 773.2,179.3 780,177.7 786.6,176.7 
										789.7,175.7 792.1,174.6 796,173.6 797.7,173.5 799.2,172.7 801.5,173.7 803.9,173.7 809.1,175.2 815.7,178 819.4,180.4 821,180.8 
										821.6,181.3 821.9,182.7 822,194.8 822.3,242.3 811.3,243 811.6,248 812.1,329 783,329.4 759.6,329.4 758.7,322.9 759.4,321.7 
										760.6,320.8 761.8,320.5 762.5,320 762.7,317.9 761.9,315.8 758.8,310.9 756.8,304.6 755.8,302.2 755.7,298 755.1,294 755.2,292.5 
										753.9,288.7 752.7,286.1 749.5,283.5 748.3,283 743,281.4 737.7,280.3 732,278.2 729.8,277.1 728.7,275 728.5,272.4 727.3,270.3 
										726.8,266.5 726.8,265.1 725.9,261.5 	"/>
									<polygon id="Morrow" class="st10" points="1248.8,392.9 1248.8,389 1257.8,389.1 1257.7,372.3 1257.3,359.9 1225.8,359.3 
										1226,351.7 1225.8,347.1 1226.1,344.1 1226,331.4 1195.3,330.9 1195.4,324.8 1195.2,317.1 1195.3,308 1195,280.4 1195.2,271.3 
										1194.9,244.3 1196.6,243.8 1196.8,240.7 1196.5,223.9 1196.6,194.8 1196.4,187.2 1196.4,152 1196.2,142 1199.6,140.1 1202.5,139.7 
										1204.2,139.7 1208.4,139.3 1212.8,140 1215.2,139.7 1220.9,138.1 1222.5,138 1225,137.4 1228.4,135.5 1231.1,134.9 1236,132.5 
										1237.7,132.2 1240.1,132.3 1248.8,130.9 1258.6,131.2 1262,130.8 1264.7,130 1268.5,130.2 1274.1,129.7 1277.8,128.6 1279.3,127.7 
										1282.4,124.6 1285.2,122.6 1286.7,121.2 1287.8,119.7 1291.3,114 1292.6,112.6 1295.9,110.3 1300.9,108.1 1305,107.5 1307.1,108.2 
										1313.1,111.5 1319.3,112.9 1323.3,112.9 1328.5,112.2 1334.4,108.9 1336.9,108 1338.2,107.7 1340.1,107.9 1340.2,121.8 
										1340.5,126.7 1338.7,126.4 1338.6,128 1338.8,201.4 1339,214.4 1386.8,215.6 1386.8,244.2 1415.1,244.1 1416.1,360.3 1416.3,363.4 
										1416.2,368 1416.4,371 1416.2,375.6 1416.5,388.4 1412.1,388.3 1412,406.6 1412.3,417.4 1279.7,417.9 1248.7,418.1 1248.5,414.3 	
										"/>
									<polygon id="Sherman" class="st10" points="1063.3,387.4 1055.6,387 1006.8,386.7 1008.5,382.9 1007.8,380.1 1008.3,377.9 
										1007.8,375.6 1006.3,374 1003.4,371.3 994.8,367 992.6,365.1 990.3,363.9 987.6,363.5 983.8,361.1 982.7,358.6 980.9,358.1 
										979.3,357.3 978.1,356.4 973.7,352.1 966.4,351.5 964.4,349.9 961.1,349.6 959,348.5 951.9,348.1 950.1,348.8 946.5,349.4 
										944.5,349 940.9,349.6 937.5,349.1 933.8,346.3 930.5,343 930.9,340.9 930.6,339.4 929.7,337.9 929.4,336.7 929.9,335.4 
										930.1,333.7 929.9,332.3 930.6,330.9 930.6,326.4 930.9,324.5 930.9,323 929.9,322.3 927.1,321.6 925.8,320.7 927,319.4 
										931.4,318.1 934.7,313.9 936.7,315 938.4,314.8 939.3,313.3 941.4,311.2 944.6,314.2 946.6,314.8 948.8,314 950.3,312.2 
										951.9,309.6 951.1,307.2 950.1,306.1 950.3,304.9 953,304.5 954.9,303 953.6,301.7 954.8,300.6 955.9,298.3 957.3,296.1 
										960.4,295.4 962.4,294.4 964.7,289.8 967.6,286.4 971.3,285.2 972.9,283.3 972.5,276.7 973,275.2 974.8,273 974.4,266.9 
										974.2,266.4 974.2,262.6 977.5,258.2 977.9,256.3 978.1,250.2 978.5,246.9 979.3,245.7 980,245.8 981.1,245.1 980.3,243.1 
										977.7,240.9 976.5,241 974.4,238.7 972.7,238.3 969.1,238.7 967.8,237.9 965.5,234.2 963,232.6 962.1,231 961.7,224.4 962.9,220.8 
										963.2,220.5 963.3,218.4 961.9,214.9 960.4,213.1 960.5,211.7 961.3,209.7 960.7,206.9 959.9,204.9 959.8,201.3 959.5,201.1 
										960.6,200.8 963,199.2 969.5,192.4 973.3,190.3 976,189.3 985.9,186.6 992.3,183.3 993.9,182.8 1004.2,180.3 1009,177.8 
										1014.4,176 1017.9,174.1 1021.6,170.2 1024.2,168.6 1024.9,168.3 1025.3,168.3 1026.6,169.5 1028.5,171.5 1030.7,172.8 
										1036.2,174.1 1038.1,176 1038.7,177.8 1039.9,179.5 1041.8,180.4 1044.4,180 1046,181.4 1047,182.8 1048.4,185.5 1051.2,188.3 
										1054.8,191 1060.6,190.9 1061.8,191.9 1063.1,193.5 1065.9,195 1066.7,196.8 1068.9,199.8 1069.5,202.1 1070.5,204.1 1073.2,206 
										1073.7,206.8 1075.5,207.2 1076.9,206.5 1079.1,206.2 1080.1,206.8 1081.4,213 1082.6,215.1 1086.4,217.3 1087.5,218.6 1089.6,220 
										1089.9,222.2 1089.6,225.1 1089.8,227.4 1091,228.9 1094.7,231.5 1095.5,233.2 1096.3,234 1099.5,234.6 1100.8,235.4 1101.6,236.4 
										1100.6,236.9 1099,237 1096.5,237.8 1097,239.2 1097.2,240.8 1098,241.9 1099.5,242.6 1101.1,244.9 1101.2,245.7 1100.8,247.3 
										1100.1,248.7 1099.6,249.2 1097.9,250 1096.2,250.1 1093.9,248.8 1092,248.4 1089,248.9 1087.3,248 1085.6,248 1084.4,248.8 
										1084.8,251.4 1085.2,252.3 1086.3,253 1087.8,253 1089.3,253.6 1090.1,254.7 1090.1,256.2 1089.3,257.3 1085.7,257.3 1077.8,254.8 
										1073.7,255.4 1068.1,257.3 1067.2,258.4 1067.6,259.4 1068.3,260.1 1070.2,260.7 1070.8,261.1 1071.2,262.7 1071.2,263.7 
										1068,264.3 1067.9,265.5 1068.7,268.8 1068.4,269.6 1066.7,270.2 1064.9,270 1063.7,270.7 1064,271.9 1065,272.3 1066.3,272.6 
										1068.1,271.8 1069.5,272.8 1069.8,273.5 1069.6,274.5 1068,275.7 1064.1,276.1 1062.5,277.2 1059.5,278.7 1058.7,280.3 
										1059.2,282.6 1058.9,284.2 1058.1,284.7 1058.8,287.6 1058.7,289 1057,290.8 1056,292.3 1055.8,293.9 1056.4,296.6 1055.3,298.1 
										1055.9,300.9 1055.9,305.3 1056.6,307 1054.6,310.1 1054.3,311.2 1057.2,312.3 1057.9,313.2 1059.5,316.2 1054.9,315.5 1054,315.8 
										1053.4,317.1 1053.5,321.2 1054,324.7 1052.8,326.7 1053.1,328 1055.9,330.1 1056,331 1053,332.7 1052.6,334.2 1053.7,335.4 
										1054.8,337.4 1054.9,338.9 1054.6,341.2 1057.6,343.5 1056.7,344.2 1055.8,344.2 1054.8,345.3 1054.9,346.2 1056.7,347.1 
										1058.1,348.7 1058.6,348.8 1060.4,348.8 1065.8,350.6 1067.5,350.3 1069.9,350.6 1070.6,352.5 1070.4,354 1069.6,355.7 
										1070.7,356.6 1071.7,359 1073,359.8 1073.1,361.1 1072.8,361.9 1072.2,362.4 1072.5,363.3 1072.6,364.8 1073.7,365.5 1076.9,366.1 
										1078,367.8 1077.3,369.7 1076.2,370.7 1075.8,371.9 1077,375.6 1076.1,376.6 1076.4,378.2 1075.5,380.7 1074.2,380.2 1073.3,379.2 
										1071.5,378.7 1069.9,379.1 1066.9,380.6 1064.4,380.6 1062,381.2 1061.5,383.4 1063.1,387 	"/>
									<polygon id="Wasco" class="st7" points="759,329.3 782.5,329.3 811.5,328.9 811,247.8 810.8,242.8 821.8,242.1 821.5,194.6 
										821.4,182.4 821.1,181 826.4,182.3 828.1,182.4 830,182.3 832.7,181.4 834.4,181.2 835.9,180.2 838.5,180 840.8,179.1 848.6,180.2 
										852.8,180.3 857.8,181.9 860.6,183.8 862.1,185.5 864.8,186.9 872.5,189.2 875.6,189.5 880.2,190.8 881.3,192 881.8,192.8 
										883.1,193.6 883.3,193.9 884.6,198.8 884.3,201.5 884.6,203.7 886,208.2 887.1,210.4 887.9,211.5 890.6,212.6 892.3,213 
										899.2,211.2 903.3,210.4 905,209.5 906.8,208 908.2,205 912.2,201.4 914.5,198.4 916.7,197 921.1,196 927.1,194.9 930.3,195.2 
										932.3,194.9 935.3,196.2 938.1,197 943.9,197.4 946.1,197 949,195.7 951.8,197.2 952.8,197.2 955.5,199.4 958.8,201.4 959.6,200.8 
										959.9,201.1 960,204.6 960.8,206.7 961.3,209.5 960.6,211.4 960.5,212.9 962,214.7 963.4,218.2 963.3,220.2 962.9,220.6 
										961.8,224.2 962.2,230.8 963,232.3 965.5,234 967.9,237.7 969.2,238.5 972.8,238.1 974.4,238.5 976.5,240.8 977.8,240.7 
										980.4,242.9 981.1,244.9 980.1,245.6 979.4,245.5 978.5,246.7 978.2,250 978,256.1 977.6,258 974.2,262.5 974.2,266.3 974.4,266.8 
										974.9,272.9 973.1,275.1 972.6,276.5 973,283.1 971.4,285.1 967.6,286.3 964.8,289.7 962.5,294.3 960.4,295.3 957.4,296 956,298.2 
										954.9,300.5 953.7,301.6 955,302.9 953.1,304.4 950.3,304.8 950.1,306 951.2,307.1 952,309.5 950.4,312.1 948.9,313.9 946.7,314.7 
										944.7,314.1 941.4,311.1 939.3,313.2 938.4,314.7 936.7,314.9 934.7,313.8 931.4,318 927.1,319.3 925.8,320.6 927.1,321.5 
										929.9,322.3 931,322.9 931,324.4 930.7,326.3 930.7,330.8 929.9,332.3 930.2,333.6 930,335.4 929.4,336.6 929.7,337.9 930.7,339.3 
										931,340.8 930.6,342.9 933.8,346.3 937.6,349.1 940.9,349.5 944.6,349 946.6,349.4 950.1,348.7 952,348 959,348.5 961.2,349.5 
										964.5,349.9 966.5,351.5 973.8,352.1 978.2,356.4 979.3,357.3 981,358.1 982.8,358.6 983.8,361 987.7,363.5 990.3,363.9 
										992.6,365.1 994.9,366.9 1003.4,371.3 1006.4,374 1007.8,375.6 1008.4,377.9 1007.8,380.1 1008.5,382.9 1006.9,386.8 1055.7,387 
										1063.4,387.4 1063.2,387 1064.2,389.1 1066.7,392.1 1068.1,393.2 1068.1,394.6 1069.2,395.7 1069,401.9 1069.8,402.2 1069.8,403.6 
										1068.8,406.9 1069.4,408.8 1069.7,409.1 1070.4,410.7 1069.1,414.2 1069.7,418.6 1070.7,420.8 1070.3,422.6 1070.3,424.2 
										1071.4,425.1 1071.7,427.2 1071.1,429.1 1070.2,430.3 1069.7,431.9 1069.7,433 1072.9,436.6 1073.5,438.2 1073.3,438.8 
										1073.4,440.6 1073.2,445.1 1073,445.9 1073.7,446.6 1076,447.6 1079.2,447.2 1079.9,448.3 1081.1,449.2 1082.4,451.3 1082.2,452.5 
										1079.6,454.3 1077.8,454.9 1076.5,456 1076.1,457.5 1076.7,458.9 1080.8,460.1 1081.8,460.8 1082.7,461.9 1083.8,462.1 
										1086.2,463.9 1089.1,464.9 1089.6,466.3 1089.5,467.5 1090.5,468.2 1091.6,470.1 1093.9,471.4 1096.8,473.6 1097.4,474.9 
										1010.7,475.1 1002.4,474.9 984.1,475.2 975.8,475 917.2,475.5 867.2,474.8 865.6,475 842.3,474.7 840.6,474.8 740.7,474.1 
										741.2,466.4 741.4,465.7 740.9,464.5 742,463 741,455.2 743.2,454.2 746,453.6 747.2,453 747.6,451.7 747.3,449.3 744.9,444.6 
										742.6,442.4 741.5,440 738.6,436.5 735.7,435.9 733.4,437 730.1,437.3 730.4,436.2 730.4,434.7 730.7,434 731,430.2 730.8,428.7 
										728.6,424.6 726.8,422 726.1,420.1 726.1,418.6 725.8,418.3 726.3,415.9 726.3,414.5 726.9,413 728.9,411.2 731.6,411.2 732,411.7 
										733.5,409.9 733.9,408.5 735,407 738.8,403.9 741.6,403.8 745.1,404.3 747,403.6 748.3,403.5 750.2,402.5 750.7,399.8 752.2,397.8 
										754.7,397.1 758.5,395.3 762.2,393 764.2,391.1 764.9,389.9 764.8,388.2 765.3,385.7 765.4,384.2 765,381.3 764.6,380.6 
										762.5,377.6 758.2,374.2 752,372.3 751.9,370.7 750.8,365.9 750.2,364.4 749.1,362.9 746.8,360.6 746.7,357.5 744,352.5 
										743.7,349.9 744.8,348 746.5,346.8 750.5,345.1 753.9,343.2 758.9,338.3 759.4,334.3 	"/>
									<polygon id="Gilliam" class="st10" points="1063.1,387 1061.5,383.4 1062,381.2 1064.4,380.6 1066.9,380.6 1069.9,379.1 
										1071.5,378.7 1073.3,379.2 1074.2,380.2 1075.5,380.7 1076.4,378.2 1076.1,376.6 1077,375.6 1075.8,371.9 1076.2,370.7 
										1077.3,369.7 1078,367.8 1076.9,366.1 1073.7,365.5 1072.6,364.8 1072.5,363.3 1072.2,362.4 1072.8,361.9 1073.1,361.1 1073,359.8 
										1071.7,359 1070.7,356.6 1069.6,355.7 1070.4,354 1070.6,352.5 1069.9,350.6 1067.5,350.3 1065.8,350.6 1060.4,348.8 1058.6,348.8 
										1058.1,348.7 1056.7,347.1 1054.9,346.2 1054.8,345.3 1055.8,344.2 1056.7,344.2 1057.6,343.5 1054.6,341.2 1054.9,338.9 
										1054.8,337.4 1053.7,335.4 1052.6,334.2 1053,332.7 1056,331 1055.9,330.1 1053.1,328 1052.8,326.7 1054,324.7 1053.5,321.2 
										1053.4,317.1 1054,315.8 1054.9,315.5 1059.5,316.2 1057.9,313.2 1057.2,312.3 1054.3,311.2 1054.6,310.1 1056.6,307 1055.9,305.3 
										1055.9,300.9 1055.3,298.1 1056.4,296.6 1055.8,293.9 1056,292.3 1057,290.8 1058.7,289 1058.8,287.6 1058.1,284.7 1058.9,284.2 
										1059.2,282.6 1058.7,280.3 1059.5,278.7 1062.5,277.2 1064.1,276.1 1068,275.7 1069.6,274.5 1069.8,273.5 1069.5,272.8 
										1068.1,271.8 1066.3,272.6 1065,272.3 1064,271.9 1063.7,270.7 1064.9,270 1066.7,270.2 1068.4,269.6 1068.7,268.8 1067.9,265.5 
										1068,264.3 1071.2,263.7 1071.2,262.7 1070.8,261.1 1070.2,260.7 1068.3,260.1 1067.6,259.4 1067.2,258.4 1068.1,257.3 
										1073.7,255.4 1077.8,254.8 1085.7,257.3 1089.3,257.3 1090.1,256.2 1090.1,254.7 1089.3,253.6 1087.8,253 1086.3,253 1085.2,252.3 
										1084.8,251.4 1084.4,248.8 1085.6,248 1087.3,248 1089,248.9 1092,248.4 1093.9,248.8 1096.2,250.1 1097.9,250 1099.6,249.2 
										1100.1,248.7 1100.8,247.3 1101.2,245.7 1101.1,244.9 1099.5,242.6 1098,241.9 1097.2,240.8 1097,239.2 1096.5,237.8 1099,237 
										1100.6,236.9 1101.6,236.4 1100.8,235.4 1099.5,234.6 1096.3,234 1095.5,233.2 1094.7,231.5 1091,228.9 1089.8,227.4 1089.6,225.1 
										1089.9,222.2 1089.6,220 1087.5,218.6 1086.4,217.3 1082.6,215.1 1081.4,213 1080.1,206.8 1079.1,206.2 1076.9,206.5 1075.5,207.2 
										1073.7,206.8 1073.2,206 1070.5,204.1 1069.5,202.1 1068.9,199.8 1066.7,196.8 1065.9,195 1063.1,193.5 1061.8,191.9 1060.6,190.9 
										1054.8,191 1051.2,188.3 1048.4,185.5 1047,182.8 1046,181.4 1044.4,180 1041.8,180.4 1039.9,179.5 1038.7,177.8 1038.1,176 
										1036.2,174.1 1030.7,172.8 1028.5,171.5 1026.6,169.5 1025.3,168.3 1024.9,168.3 1030.5,165.6 1034,164.8 1038.9,164.9 1044.1,166 
										1047.1,165.9 1051.1,168.3 1053.7,170.6 1056.4,174.2 1057.7,175.3 1063.6,180 1066,181.3 1067.6,182 1074.2,183.1 1076.8,182.9 
										1080.6,183.1 1084.7,182.2 1086.1,181.6 1091.2,180.8 1096.7,179.3 1106.6,177.7 1115.7,175.1 1121.6,173.8 1128.1,173.7 
										1130.9,174.1 1135.9,173.3 1139.2,173.5 1141,172.9 1142.2,172 1143.5,170.4 1144.9,168.8 1145.6,167.1 1149.3,163.3 1150.4,161.8 
										1154.3,159 1160,156.8 1166.4,154.8 1171.6,154.3 1176.9,152.8 1179.6,151.5 1180.7,150.5 1184.1,149.5 1191.9,146.2 1193.3,145.3 
										1194.7,142.9 1195.9,142.4 1196.2,142 1196.4,152 1196.4,187.2 1196.6,194.8 1196.5,223.9 1196.8,240.7 1196.6,243.8 1194.9,244.3 
										1195.2,271.3 1195,280.4 1195.3,308 1195.2,317.1 1195.4,324.8 1195.3,330.9 1226,331.4 1226.1,344.1 1225.8,347.1 1226,351.7 
										1225.8,359.3 1257.3,359.9 1257.7,372.3 1257.8,389.1 1248.8,389 1248.8,392.9 1174.4,394.8 1068.1,394.5 1068.1,393.2 
										1066.6,392.1 1064.1,389.1 	"/>
									<polygon id="Baker" class="st11" points="1913.6,648.9 1916.1,644.1 1917.3,641.3 1917.8,636.9 1917.2,634.3 1916.2,632.2 
										1915,630.6 1911,626.7 1910.1,625.1 1908.9,621.8 1908.4,619.1 1909.5,615.2 1911.7,610.2 1913.1,607.8 1913.6,606.3 1913.7,602.5 
										1913.5,601 1912.5,598.1 1910.8,594.4 1911,593.2 1911.5,591.8 1913.8,588.8 1915.3,587.7 1917,586.9 1918.9,583.7 1919.9,580.6 
										1920.5,579.1 1921.2,578.3 1922.1,577.5 1926,575.8 1929.8,573.1 1932.2,570.5 1932.7,569.3 1932.5,567.4 1932.6,565.9 1932,563.7 
										1932.4,562.4 1933.2,561.4 1935.5,559.2 1937.8,548.6 1939.5,545.1 1940.4,542.1 1943.5,538.5 1943.9,536.7 1944.6,532.4 
										1945.5,529.4 1947.7,525.4 1949.4,518.7 1952.8,516.1 1953.2,514.5 1953.7,510.8 1958.5,500.4 1959.6,498.7 1968,496.1 
										1971.4,495.8 1976.5,492.8 1978.6,491.3 1982.6,489.8 1985.5,487.3 1986.8,484.7 1987.6,481.7 1987.7,480.1 1988,479.2 
										1990.1,475.8 1990.7,474.1 1993.3,472.1 1994.7,471.6 1995.2,470.1 1995.4,467 1996.6,465.4 1998.8,464.2 2004.3,458.7 
										2006.9,452.8 2011.8,444.9 2012.6,441.6 2012.6,437.6 2009.4,429.9 2009.9,427.8 2011.6,426.8 2013.5,424.5 2013.5,424 
										2013.3,422.8 2012.5,422.7 2010.1,423.2 2009.3,424.4 2008,423.5 2007.2,421.5 2008.7,418.1 2009.2,414.9 2007.9,411.3 
										2007.5,409.3 2012.1,405.4 2013.8,402.9 2014.6,401.1 2016.5,400.5 2019.9,398.2 2021,396.7 2021.5,396.3 2022.2,394.7 
										2024.3,392.3 2025.1,389.5 1903.7,390.4 1868.5,391.1 1866.7,390.9 1824.1,391.9 1823.8,402.6 1823.8,418.8 1767.9,419.5 
										1764.9,414 1763.5,412.4 1761.9,411.1 1760.3,410.4 1758.2,408.9 1754.3,405.4 1750.6,398.9 1750.1,398.5 1745.6,398.2 
										1742.9,398.3 1740.8,399.9 1740.4,401.4 1740.4,403.5 1738.1,404.9 1737.7,407.9 1739.4,412.6 1738.8,413.8 1728.6,414.2 
										1726.4,415.7 1723.2,416.4 1720.4,416.7 1716.3,417.4 1710.4,417.7 1705.1,417.3 1703.1,415.7 1700,414.2 1694.2,413 1692.1,408.7 
										1690.8,407 1687.3,404.1 1684,403 1680.7,404.2 1676.3,407.2 1672.9,408.5 1669.3,410.5 1665.2,411.1 1658.3,416.8 1655.5,418.5 
										1653.8,421 1653,423.7 1651.4,425.2 1650.6,426.5 1649.6,429.9 1648.3,431 1646.4,431.9 1647.6,436 1648.6,436.8 1650.3,437.7 
										1651.3,438.8 1651.7,440.3 1651.8,441.6 1650.2,445 1648.9,449.6 1648.8,451.2 1650.3,452.8 1651.6,455.1 1652.2,457.1 
										1652.3,458.6 1651.4,460.5 1649.2,462.3 1647.5,462.5 1645,461.8 1641.6,461.9 1639.2,462.9 1633.7,464.6 1632.5,465.6 
										1631.7,468.4 1629.4,469.2 1627.6,470.8 1628.1,473.3 1630.1,476 1632.1,478 1632.9,479.5 1633.6,482 1633.4,485 1635,489.4 
										1637.8,494 1638,498.9 1637.1,500.8 1635.9,502.1 1635,503.6 1633.7,504.9 1628.4,505.1 1626.5,504.2 1624.5,502.8 1620.2,501.5 
										1617.8,501.5 1615,501.9 1612.5,502.9 1607.4,507.4 1604,509.3 1602.3,509.9 1598.4,510.5 1593.8,510.4 1590.3,515 1589.8,515.2 
										1586.4,516.2 1582.9,515.5 1577,515.9 1577.3,518.1 1577.2,522 1577.7,524.3 1580.4,527.1 1584.2,530.1 1586.8,530.6 1591.7,532.3 
										1594,534.3 1597.7,535.5 1601.4,534.6 1604.2,535.1 1606.9,536.5 1610.3,535 1614,535.5 1616.2,536.4 1619.1,537.1 1620.4,539.5 
										1620.7,541.6 1621.9,544.1 1625.6,547.5 1626.8,549.1 1627.2,551.3 1629.9,556.2 1629.4,558 1627.9,560.5 1627.5,563.1 
										1620.5,567.8 1618.8,568.5 1616.3,571.5 1614.4,575 1613.6,577.3 1613.2,583.4 1614.4,587.7 1614.6,592.3 1614.5,593.9 
										1615.4,595.7 1615.3,597.6 1610.4,599.1 1607.4,600.7 1604.2,601.5 1600.6,606.7 1599.2,611.6 1599,613.2 1599.2,616.3 
										1599.6,619.1 1600.1,619.8 1602.5,625.5 1602.7,627.9 1602.3,629.1 1599.8,631.7 1598.7,633.2 1596.3,634.6 1592.6,635.7 
										1590.8,637.9 1588.2,640 1586.2,643.7 1584.6,645.2 1584.9,647.4 1584.3,648.9 1582.3,650.9 1582.5,653.2 1583.3,655.1 
										1582.7,657.1 1582.7,658.7 1581.2,661.5 1580.3,664.6 1580.7,666.7 1625,666.6 1651.5,666.9 1660.2,666.8 1660.4,662.5 1671.7,662 
										1671.3,652.9 1676.2,652.1 1676.2,647.4 1681.8,646.6 1682.1,642.6 1687.7,641.9 1687.3,633.5 1692.3,633.1 1692.1,632 1692,628.9 
										1697.3,628 1697.5,622.3 1702.6,621.8 1702.6,614.4 1707.9,614 1707.7,608 1720.2,606.9 1720.1,602.7 1720.5,602.6 1816.8,602.2 
										1817.4,606.9 1823.7,607.3 1823.8,608.2 1823.6,611.2 1833,611.7 1833.3,616.2 1838.7,616.6 1839.3,622.2 1844.2,622.3 1844.5,631 
										1844.8,649.4 1888.7,648.9 	"/>
									<polygon id="Union" class="st11" points="1576.3,418.9 1576.5,390.4 1569.2,390 1569.2,364 1568.9,351.7 1540.5,351.4 
										1540.6,346.9 1540.4,343.8 1540.6,339.2 1540.3,331.5 1530.6,331.2 1530.8,317.4 1530.7,302.6 1541,302.5 1541.2,304.6 
										1542.9,304.6 1551.9,304 1551.9,299.7 1601,299.2 1601.3,274.7 1604.5,274.4 1604.3,269.7 1612.6,269.7 1612.8,272.3 1617.3,272.4 
										1617.6,274.5 1661.3,274.1 1661.5,263.4 1661.3,260.6 1682.8,259.8 1683,256.7 1683.1,246.1 1680.8,245.9 1681,212.2 1680.8,188 
										1685.9,187.9 1693.9,187.2 1693.7,175 1693.8,173.4 1693.4,161.1 1693.6,159.7 1693.4,159.3 1699.7,158.7 1700.1,145 1718,143.6 
										1717.5,129.8 1719.2,130 1775.2,128.5 1776.3,157.4 1765.4,158 1765.4,161 1765.6,166.5 1765.4,168.1 1766.5,170.4 1766.3,174.7 
										1766.1,186.5 1770.1,187.1 1770.1,196 1775.5,196.7 1776.1,210.6 1781,210.7 1781.4,226.1 1781.3,227.5 1781.9,241.4 1781.7,242.9 
										1785.3,243.2 1791,243.3 1790.9,244.8 1791.3,255.6 1791.3,261.7 1791.8,273.8 1796.6,274 1797.2,293.9 1803.3,294.3 1803.3,304.3 
										1805.4,303.6 1806,303.1 1807.3,302.7 1817.4,303.4 1818,313.1 1824.4,313.2 1824.4,317.8 1829.3,317.9 1829,325.5 1829.1,328.3 
										1834.2,328.7 1834.3,328.5 1834.4,345.8 1843.9,346.2 1843.8,347.7 1844.4,360.6 1903.5,360.9 1903.3,380.8 1903.5,390.1 
										1868.3,390.8 1866.5,390.6 1823.9,391.6 1823.6,402.3 1823.6,418.6 1767.7,419.3 1764.7,413.8 1763.3,412.2 1761.7,410.9 
										1760.1,410.1 1758,408.7 1754.1,405.2 1750.4,398.7 1749.9,398.3 1745.4,397.9 1742.7,398.1 1740.6,399.6 1740.2,401.1 
										1740.2,403.2 1737.9,404.6 1737.5,407.7 1739.2,412.4 1738.6,413.6 1728.4,414 1726.2,415.4 1723,416.2 1720.2,416.5 1716.1,417.2 
										1710.2,417.5 1704.9,417.1 1702.9,415.5 1699.8,414 1694,412.7 1691.9,408.4 1690.6,406.8 1687,403.9 1683.8,402.8 1680.5,404 
										1676.1,407 1672.7,408.3 1669.1,410.3 1664.9,410.9 1658.1,416.6 1655.3,418.3 1653.6,420.8 1652.8,423.5 1651.2,425 1650.4,426.3 
										1649.3,429.7 1648.1,430.8 1646.2,431.7 1643.8,432 1637.6,430.5 1634.2,430.1 1631.8,429.2 1630.2,428.1 1628.8,426.5 1623,425.3 
										1619.7,423.5 1615.7,422.6 1609.4,424.4 1605.5,425.6 1602.5,427 1599.3,428 1596.4,426.1 1594.8,425.5 1593.3,425.5 1591,424.6 
										1585.3,419.5 	"/>
									<polyline id="Wallowa" class="st11" points="1903.5,390.1 1903.3,380.8 1903.5,360.9 1844.4,360.6 1843.8,347.7 1843.9,346.2 
										1834.4,345.8 1834.3,328.5 1834.2,328.7 1829.1,328.3 1829,325.5 1829.3,317.9 1824.4,317.8 1824.4,313.2 1818,313.1 1817.4,303.4 
										1807.3,302.7 1806,303.1 1805.4,303.6 1803.3,304.3 1803.3,294.3 1797.2,293.9 1796.6,274 1791.8,273.8 1791.3,261.7 1791.3,255.6 
										1790.9,244.8 1791,243.3 1785.3,243.2 1781.7,242.9 1781.9,241.4 1781.3,227.5 1781.4,226.1 1781,210.7 1776.1,210.6 1775.5,196.7 
										1770.1,196 1770.1,187.1 1766.1,186.5 1766.3,174.7 1766.5,170.4 1765.4,168.1 1765.6,166.5 1765.4,161 1765.4,158 1776.3,157.4 
										1775.2,128.5 1719.2,130 1717.5,129.8 1716.9,129.7 1717.1,128.2 1715.2,79.9 1813.6,79.9 1845,79.9 1956.7,81 1990.7,81.6 
										1992.5,84.1 1994.3,84.9 1995.6,86.1 1996.4,86.5 1996.7,87.1 1996.9,90.3 1998,93.1 1998.8,93.7 2000.4,95.6 2003.2,100.3 
										2004.3,103.4 2005.7,106 2006.1,109.1 2007,112.3 2008.5,113.9 2010.5,117.6 2015.7,121.7 2017.5,122.7 2018.4,124 2020,125 
										2020.8,127.4 2021.5,128.5 2023.1,130.1 2023.8,131.7 2024.7,135.5 2026,138 2028.4,140.4 2030.7,140.8 2033.9,140.9 2041.5,139.7 
										2043.2,139.9 2047.5,141.1 2052.4,146.9 2056.5,150.5 2059.3,153.5 2060.4,154.4 2066.6,157.7 2071.4,159.1 2074.6,160.5 
										2076.9,162.5 2078.9,162.3 2083.6,164.6 2085.3,166.4 2092,177 2093.1,180.2 2094.2,182.2 2094.6,184.5 2094.4,188.3 2095.4,192.3 
										2098.7,198.8 2102.2,204.4 2103.5,206.2 2104.5,208.6 2106.9,211.8 2107,212.4 2107.2,220.1 2104.9,225.3 2098.8,234.9 
										2094.8,238.4 2089,244.1 2086,248.2 2083.4,252.6 2083.6,256.3 2082.2,261 2077.4,265.5 2075.5,268.4 2074,271.1 2073.6,274.2 
										2072.5,276.5 2068.6,280.8 2065.4,285.3 2062.5,290.1 2060.8,293.9 2059.9,296.9 2057.8,299 2055.7,300.5 2054.6,302.5 
										2052.4,311.9 2051.8,318.4 2051.9,319.7 2051.3,324.3 2050.7,325.3 2050.3,326.9 2049.9,327.3 2047.7,331 2047.1,332.8 
										2046.3,336.2 2045.3,338.6 2044.4,342.7 2043.4,352.9 2041.2,359.1 2040.9,360.6 2039.6,362.3 2039.2,365 2038,368.7 2036.8,369.6 
										2032.7,374.4 2032.1,378.1 2031.6,379 2027.2,381.3 2026.2,383.7 2024.9,385.7 2024.9,389.2 1903.5,390.1 	"/>
									<polygon id="Umatilla" class="st10" points="1576.3,418.9 1576.5,390.4 1569.2,390 1569.2,364 1568.9,351.7 1540.5,351.4 
										1540.6,346.9 1540.4,343.8 1540.6,339.2 1540.3,331.5 1530.6,331.2 1530.8,317.4 1530.7,302.6 1541,302.5 1541.2,304.6 
										1542.9,304.6 1551.9,304 1551.9,299.7 1601,299.2 1601.3,274.7 1604.5,274.4 1604.3,269.7 1612.6,269.7 1612.8,272.3 1617.3,272.4 
										1617.6,274.5 1661.3,274.1 1661.5,263.4 1661.3,260.6 1682.8,259.8 1683,256.7 1683.1,246.1 1680.8,245.9 1681,212.2 1680.8,188 
										1685.9,187.9 1693.9,187.2 1693.7,175 1693.8,173.4 1693.4,161.1 1693.6,159.7 1693.4,159.3 1699.7,158.7 1700.1,145 1718,143.6 
										1717.5,129.8 1716.9,129.7 1717.1,128.2 1715.2,79.9 1712.7,79.3 1590.4,79.3 1500.4,79.8 1456.4,80.4 1454.8,80.8 1454.3,81.7 
										1450.3,85.4 1449.2,86.7 1446.5,88.9 1444.8,89.8 1443.4,91.2 1425.8,101.3 1421.5,103 1415.5,104.8 1412,105.5 1410.3,105.4 
										1405.4,106 1396.2,104.8 1390.6,103.1 1387.9,103.3 1385.6,102.4 1379,102.2 1375.7,102.6 1371.6,102.5 1368.9,103.5 1353.6,107.5 
										1344.9,108.3 1338.1,108.6 1338.2,122.4 1338.5,127.4 1336.8,127 1336.7,128.6 1336.9,202.1 1337.1,215.1 1384.9,216.3 
										1384.8,244.8 1413.2,244.7 1414.1,361 1414.3,364.1 1414.2,368.6 1414.4,371.7 1414.3,376.3 1414.6,389 1410.1,388.9 1410,407.2 
										1410.3,418 	"/>
									<path id="Grant_2" class="st12" d="M1577.5,419c0,0-11.9,0.3-155.6-0.1c33.2,205.8,152.2,242.5,159.7,247.6
										c0.5,0.4-0.4-2.1-0.4-2.1l0.9-3.1l1.5-2.8l0-1.6l0.5-2l-0.7-1.9l-0.2-2.3l1.9-2l0.7-1.5l-0.4-2.2l1.6-1.5l2-3.8l2.6-2.1l1.8-2.2
										l3.7-1.1l2.4-1.4l1.1-1.5l2.5-2.6l0.3-1.2l-0.1-2.3l-2.5-5.7l-0.5-0.7l-0.4-2.9l-0.2-3.1l0.2-1.6l1.4-4.9l3.6-5.2l3.2-0.9l3-1.6
										l4.9-1.5l0.1-1.9l-0.9-1.9l0.1-1.6l-0.2-4.6l-1.2-4.4l0.4-6.1l0.8-2.2l1.9-3.6l2.5-3l1.7-0.7l7-4.7l0.4-2.5l1.5-2.5l0.5-1.9
										l-2.7-4.8l-0.4-2.2l-1.2-1.6l-3.7-3.4l-1.2-2.5l-0.4-2.1l-1.2-2.3l-2.9-0.7l-2.3-0.9l-3.7-0.5l-3.4,1.5l-2.7-1.4l-2.8-0.5l-3.7,0.9
										l-3.6-1.2l-2.4-2l-4.9-1.7l-2.6-0.5l-3.8-3l-2.7-2.8l-0.6-2.3l0.1-3.9l-0.3-2.2l6-0.4c0,0,4.6,1.6,6.9-0.3c2.3-1.9,0.5-0.3,0.5-0.3
										l3.4-4.6l4.7,0l3.8-0.5l1.7-0.6l3.5-1.9l5.1-4.6l2.5-1l2.8-0.4h2.4l4.4,1.3l1.9,1.5l1.9,0.8l5.3-0.2l1.3-1.3l0.9-1.5l1.2-1.3
										l0.9-1.9l-0.2-4.9l-2.8-4.6l-1.6-4.3l0.2-3.1l-0.7-2.4l-0.7-1.5l-2-2l-2-2.7l-0.5-2.5l1.8-1.6l2.2-0.8l0.9-2.8l1.2-1.1l5.5-1.6
										l2.4-1l3.4-0.1l2.6,0.6l1.6-0.1l2.2-1.9l1-1.9l-0.1-1.5l-0.7-2l-1.2-2.3l-1.6-1.6l0.1-1.6l1.3-4.6l1.6-3.4l0-1.2l-0.4-1.5l-0.9-1.1
										l-1.8-0.8l-0.9-0.6l-1.2-4.1l-0.1-0.2l-2.4,0.4l-6.2-1.6l-3.3-0.4l-2.4-0.8l-1.6-1.2l-1.4-1.6l-5.7-1.2l-3.4-1.7l-3.9-1l-6.3,1.8
										l-3.9,1.3l-3,1.4l-3.2,1l-2.9-1.9l-1.6-0.6l-1.5-0.1l-2.3-0.8l-5.7-5.1L1577.5,419"/>
									<polyline id="Mid-Columbia" class="st13" points="812.1,328.9 811.6,247.8 811.4,242.8 822.4,242.1 822.1,194.6 822,182.4 
										821.7,181 827,182.3 828.7,182.4 830.6,182.3 833.4,181.4 835,181.2 836.6,180.2 839.1,180 841.5,179.1 849.3,180.2 853.4,180.3 
										858.5,181.9 861.2,183.8 862.8,185.5 865.4,186.9 873.1,189.2 876.3,189.5 880.8,190.8 881.9,192 882.4,192.8 883.7,193.6 
										883.9,193.9 885.3,198.8 885,201.5 885.3,203.7 886.6,208.2 887.7,210.4 888.6,211.5 891.2,212.6 892.9,213 899.8,211.2 904,210.4 
										905.6,209.5 907.4,208 908.8,205 912.8,201.4 915.1,198.4 917.3,197 921.8,196 927.7,194.9 930.9,195.2 932.9,194.9 935.9,196.2 
										938.8,197 944.5,197.4 946.7,197 949.6,195.7 952.4,197.2 953.4,197.2 956.1,199.4 959.4,201.4 960.3,200.8 960.5,201.1 
										960.6,204.6 961.4,206.7 962,209.5 961.2,211.4 961.1,212.9 962.6,214.7 964,218.2 963.9,220.2 963.6,220.6 962.4,224.2 
										962.8,230.8 963.7,232.3 966.2,234 968.5,237.7 969.8,238.5 973.4,238.1 975.1,238.5 977.2,240.8 978.4,240.7 981,242.9 
										981.8,244.9 980.7,245.6 980,245.5 979.2,246.7 978.8,250 978.6,256.1 978.2,258 974.9,262.5 974.9,266.3 975.1,266.8 975.5,272.9 
										973.7,275.1 973.2,276.5 973.6,283.1 972,285.1 968.3,286.3 965.4,289.7 963.1,294.3 961.1,295.3 958,296 956.6,298.2 955.5,300.5 
										954.3,301.6 955.6,302.9 953.7,304.4 951,304.8 950.8,306 951.8,307.1 952.7,309.5 951,312.1 949.5,313.9 947.3,314.7 945.3,314.1 
										942.1,311.1 940,313.2 939.1,314.7 937.4,314.9 935.4,313.8 932.1,318 927.7,319.3 926.5,320.6 927.8,321.5 930.6,322.3 
										931.6,322.9 931.6,324.4 931.3,326.3 931.3,330.8 930.6,332.3 930.8,333.6 930.6,335.4 930.1,336.6 930.4,337.9 931.3,339.3 
										931.6,340.8 931.2,342.9 934.5,346.3 938.2,349.1 941.6,349.5 945.2,349 947.2,349.4 950.8,348.7 952.7,348 959.7,348.5 
										961.9,349.5 965.1,349.9 967.1,351.5 974.4,352.1 978.8,356.4 980,357.3 981.6,358.1 983.4,358.6 984.5,361.1 988.3,363.5 
										991,363.9 993.3,365.1 995.5,366.9 1004.1,371.3 1007,374 1008.5,375.6 1009,377.9 1008.5,380.1 1009.2,382.9 1007.5,386.8 	"/>
									<polygon id="Mid-Columbia_1_" class="st13" points="725.5,261.5 722.9,257.8 720.8,255.8 718.1,254.7 715.3,252.4 713.9,249.4 
										712.8,245.9 711.7,244.3 710.4,243.1 707.5,243.9 705.8,243.8 703.3,242.7 700,237.9 700,236.4 699.5,234.7 699.5,232.2 
										699.9,230.9 702.8,228.9 703.5,227.1 703.4,225.6 702,222.1 700.6,221.1 699.2,219.1 699.1,215.8 700,214.8 699.8,213.3 
										699.5,212.3 698.2,210.2 698.1,207.6 698.3,204.5 697.6,201.7 696.3,198.7 697.4,198.3 699,197.2 700.9,195.4 703.2,190.7 
										706.4,187.2 709.2,186.1 711.6,184.7 715.1,183.3 718.4,182.3 721.5,180.6 726.3,179 729.6,178.9 731.7,179.3 739.9,182.8 
										742.2,183 745.6,182.4 751.2,183.1 755,183.1 759.8,181.9 763.1,180.1 765.6,179.6 768.9,179.7 773.2,179.3 780,177.7 786.6,176.7 
										789.7,175.7 792.1,174.6 796,173.6 797.7,173.5 799.2,172.7 801.5,173.7 803.9,173.7 809.1,175.2 815.7,178 819.4,180.4 821,180.8 
										821.6,181.3 821.9,182.7 822,194.8 822.3,242.3 811.3,243 811.6,248 812.1,329 783,329.4 759.6,329.4 758.7,322.9 759.4,321.7 
										760.6,320.8 761.8,320.5 762.5,320 762.7,317.9 761.9,315.8 758.8,310.9 756.8,304.6 755.8,302.2 755.7,298 755.1,294 755.2,292.5 
										753.9,288.7 752.7,286.1 749.5,283.5 748.3,283 743,281.4 737.7,280.3 732,278.2 729.8,277.1 728.7,275 728.5,272.4 727.3,270.3 
										726.8,266.5 726.8,265.1 725.9,261.5 	"/>
									<polygon id="Lake" class="st3" points="966.4,1422.2 1132,1422.3 1196.2,1421.5 1360.9,1422.8 1361.4,1378.8 1360.1,1378.4 
										1361.1,1171.5 1270.4,1170.5 1270.2,1172.6 1269.2,1172.7 1211,1172.4 1211,1160.8 1211.8,1115.1 1215.5,1114.9 1214.6,1053.7 
										1214.5,1026.3 1222.4,1026 1222.2,1022.3 1222,991.8 1222.1,982.7 1221.4,889.7 1221.5,880.7 1101.8,880.8 1098.5,880.7 
										1098.1,878.6 1007.6,879 943.7,879.6 940.4,879.6 940.1,878 850.4,878.4 850.6,884.7 850.4,895.3 850.5,902.9 850.3,913.6 
										850.4,938 850.2,966.9 845.4,967.6 846,1004.7 845.8,1007.8 846.4,1050.4 846.3,1053.5 846.6,1067.2 846.6,1082.4 846.8,1086.9 
										846.7,1099.1 847.1,1115.8 846.9,1118.9 847.4,1149.4 847.2,1152.3 847.4,1156.9 847.4,1169 930.8,1168.9 935.6,1169.1 
										935.7,1171.3 964.5,1171.5 964.8,1191.2 964.6,1194.2 964.8,1198.7 964.7,1201.8 964.9,1206.4 964.8,1209.3 965.1,1229.1 
										964.9,1232.2 965.1,1236.8 965,1239.8 965.2,1244.3 965.2,1270.2 965.5,1282.3 965.4,1285.4 965.7,1312.8 965.6,1315.8 
										965.8,1320.4 965.7,1323.4 966,1350.8 965.9,1353.9 966.1,1358.4 966.1,1384.2 966.4,1396.4 	"/>
									<polygon id="Grant" class="st14" points="1653.1,665.8 1652.9,667.4 1653.3,688.8 1652.8,690.1 1654.1,702.9 1654.6,705.3 
										1654.4,708.4 1653.9,709.8 1653.9,711.3 1654.1,738.3 1622.7,739.1 1622.7,737 1621,736.9 1560.8,737 1560.6,735.3 1557.3,735.1 
										1501.3,734.4 1500.6,734.5 1500.4,737.5 1500.4,762.7 1414.8,762.6 1307.8,763.1 1283.2,763.5 1283.2,750.6 1283.5,733.8 
										1283.4,729.3 1283.6,726.2 1283.5,724.7 1283.9,700.3 1283.8,698.8 1284,695.7 1283.9,686.7 1284.3,669.9 1284.1,665.3 
										1284.5,648.5 1284.6,639.4 1284.2,583.5 1284.4,580.4 1284.3,560.6 1284.6,557.6 1283.9,492.7 1284,478.9 1283.8,475.9 
										1280.3,475.1 1280.4,467.5 1280,456.7 1280.2,455.2 1279.5,417.8 1412.1,417.2 1578.1,418.1 1587.1,418.7 1592.7,423.8 1595,424.7 
										1596.6,424.7 1598.2,425.3 1601.1,427.2 1604.3,426.2 1607.3,424.8 1611.2,423.6 1617.5,421.8 1621.4,422.7 1624.8,424.5 
										1630.5,425.7 1632,427.3 1633.6,428.4 1636,429.3 1639.3,429.7 1645.6,431.2 1648,430.9 1649.2,435 1650.1,435.8 1651.9,436.7 
										1652.8,437.8 1653.3,439.3 1653.3,440.5 1651.8,444 1650.5,448.5 1650.3,450.2 1651.9,451.8 1653.1,454.1 1653.8,456.1 
										1653.9,457.6 1652.9,459.5 1650.8,461.3 1649.1,461.4 1646.5,460.8 1643.2,460.9 1640.8,461.9 1635.3,463.5 1634.1,464.6 
										1633.2,467.4 1631,468.2 1629.2,469.8 1629.7,472.3 1631.7,475 1633.7,477 1634.5,478.5 1635.2,480.9 1634.9,484 1636.6,488.4 
										1639.3,492.9 1639.5,497.9 1638.6,499.8 1637.4,501.1 1636.6,502.6 1635.3,503.9 1630,504.1 1628,503.2 1626.1,501.7 1621.7,500.5 
										1619.3,500.5 1616.6,500.9 1614.1,501.8 1609,506.4 1605.5,508.3 1603.8,508.9 1600,509.4 1595.3,509.4 1591.9,513.9 1591.4,514.2 
										1587.9,515.2 1584.5,514.5 1578.5,514.8 1578.9,517.1 1578.7,521 1579.3,523.3 1582,526.1 1585.8,529 1588.3,529.6 1593.2,531.3 
										1595.6,533.2 1599.2,534.5 1603,533.6 1605.7,534.1 1608.5,535.5 1611.9,534 1615.5,534.5 1617.8,535.4 1620.7,536.1 1621.9,538.4 
										1622.3,540.6 1623.4,543 1627.2,546.5 1628.4,548.1 1628.8,550.3 1631.5,555.1 1631,557 1629.5,559.5 1629.1,562 1622.1,566.8 
										1620.4,567.5 1617.8,570.5 1616,574 1615.2,576.2 1614.7,582.3 1616,586.7 1616.2,591.3 1616.1,592.8 1617,594.7 1616.8,596.6 
										1612,598 1609,599.6 1605.7,600.5 1602.2,605.7 1600.8,610.6 1600.6,612.2 1600.7,615.2 1601.1,618.1 1601.6,618.8 1604.1,624.5 
										1604.2,626.8 1603.9,628.1 1601.4,630.7 1600.3,632.1 1597.9,633.5 1594.2,634.6 1592.4,636.9 1589.7,638.9 1587.7,642.7 
										1586.1,644.2 1586.5,646.4 1585.8,647.8 1583.9,649.9 1584.1,652.2 1584.8,654.1 1584.3,656.1 1584.3,657.7 1582.8,660.5 
										1581.9,663.5 1582.3,665.7 1626.6,665.6 	"/>
									<polyline id="Douglas" class="st6" points="201.8,769.2 201.4,768.1 234.8,768 234.9,770.9 246.7,771.5 246.6,775.8 256.9,776.4 
										257.1,780.9 257.6,786.2 268.2,786.9 268.5,794 280,794.7 280.6,806.7 295.4,807.1 296.3,813.3 327.5,814.7 327.9,824.4 
										377.1,824.7 381.7,824.6 382.5,882.4 382.6,883.5 389.8,884 389.8,897.8 390.1,905 485.4,904.1 485.6,920.8 486.2,937.7 
										540.9,937.4 540.9,938.6 545.8,938.7 620.9,938.5 631.6,938.4 636.4,937.1 637.5,937.3 638.5,937 644.6,938.8 648.4,940.8 
										649.8,940.6 652.3,942.1 653.1,944 654.3,945.6 655.9,947.1 662.2,950.2 662.6,951.6 662.3,953.6 663.6,954.8 663.9,957.4 
										665.1,958.7 668.4,964.2 670.7,965.3 672.6,966.9 674.3,970.2 674.7,971.7 674.4,972.1 674.4,975.1 675.3,976.8 675.8,978.4 
										675.7,980.8 676.3,983.5 674.9,986.3 675.5,988.4 677,991.3 677.4,992.8 679.2,994.3 680.2,996.5 680.3,998.5 678.8,1002.6 
										677.6,1005 674.8,1008 673.1,1009 669.6,1012.2 669.2,1013.5 668.9,1016.7 668.2,1019.4 664.8,1024.3 663.4,1027.9 663.2,1030.3 
										662,1032 660.4,1032.9 659.6,1033 659.5,1035.5 660.1,1037.8 659.4,1041.8 658.4,1044.5 656,1047.3 652.3,1053.5 652.6,1056.5 
										655.4,1062.5 603.5,1062 604.3,1085 573.6,1086 573.2,1087.8 573.2,1089.3 568.3,1090.1 568.1,1094.6 563.2,1095.7 562.8,1100.1 
										558.6,1100.4 558.4,1103.5 533.4,1104.9 533,1109.3 527.4,1109.8 527.3,1114.4 521.8,1114.8 521.3,1119.3 511.8,1119.8 
										511.4,1124.4 501.3,1125.4 501.3,1129.4 495.8,1130 495.7,1134.7 490.7,1135.3 490.6,1139.4 486.1,1139.7 485.9,1140.7 
										485.9,1143.7 480.5,1144.5 480.2,1142.8 475.4,1143.7 475.8,1147.8 475.7,1149.2 474.3,1149.5 474.4,1152.6 470.2,1153.3 
										470.1,1157.2 455.7,1158 455.9,1159.5 455.3,1159.6 431,1160.5 431,1161.4 425.6,1162.5 425.6,1165.6 377.8,1165.9 377.7,1171.7 
										371.6,1171.8 371.4,1174 368.3,1173.9 368.4,1176.5 365.6,1176.2 365.9,1178.7 363.3,1179 363.3,1181.3 358.8,1181.3 356.3,1182.6 
										353.6,1182.9 353.2,1181.4 352.6,1175.5 347,1175.5 346.5,1173.6 338.1,1173.7 338.1,1175.5 334.1,1176.1 334.1,1173.7 
										322.8,1174.1 322.8,1175.7 314.7,1175.6 314.5,1178.5 306.6,1179 306.4,1179.5 306.4,1181 302.1,1180.9 302,1182.7 298.5,1183.1 
										298.5,1184.6 295.1,1184.4 295,1182.7 289.1,1182.6 289,1179.9 277.5,1180.4 277.5,1178.5 277.1,1178.3 270.6,1178.1 270.6,1173.3 
										266.3,1173.7 266.1,1170.5 241.9,1170.4 241.9,1167.3 237.4,1167.5 237,1170.4 231,1170.7 231.3,1158.7 228.5,1158.8 226.7,1157.9 
										224.8,1157.3 223,1155.5 217.2,1151.2 215.6,1151.2 210.4,1153.3 210.1,1145.5 207,1145.4 206.9,1143.8 206.2,1086.1 219.8,1085.4 
										219.6,1085.1 219.7,1080.5 219.5,1079 219.6,1074.5 219.2,1068.4 219,1057.8 233.5,1057.1 233.7,1056.1 234,999.8 218.7,999.3 
										218.5,998.4 218.6,992.3 218.4,990.8 218.4,983.2 217.7,942.1 205.8,941.7 205.2,913.5 189.8,913.1 189.1,880.7 	"/>
								</g>
								<g id="County_Names">
									<text transform="matrix(0.7896 0 0 1 1785.8936 536.4127)" class="st15 st16">Baker</text>
									<text transform="matrix(0.7896 0 0 1 289.9395 598.317)" class="st15 st16">Benton</text>
									<text transform="matrix(0.7896 0 0 1 556.2418 381.2843)" class="st15 st16">Clackamas</text>
									<text transform="matrix(0.7896 0 0 1 221.8996 73.7786)" class="st15 st16">Clatsop</text>
									<text transform="matrix(0.7896 0 0 1 351.4805 80.2462)" class="st15 st16">Columbia</text>
									<text transform="matrix(0.7896 0 0 1 126.5787 990.1764)" class="st15 st16">Coos</text>
									<text transform="matrix(0.7896 0 0 1 1082.2388 687.774)" class="st15 st16">Crook</text>
									<text transform="matrix(0.7896 0 0 1 79.6719 1259.2545)" class="st15 st16">Curry</text>
									<text transform="matrix(0.7896 0 0 1 823.5455 797.9928)" class="st15 st16">Deschutes</text>
									<text transform="matrix(0.7896 0 0 1 377.1177 1004.1393)" class="st15 st16">Douglas</text>
									<text transform="matrix(0.7896 0 0 1 1111.3105 283.0411)" class="st15 st16">Gilliam</text>
									<text transform="matrix(0.7896 0 0 1 1454.6328 570.0905)" class="st15 st16">Grant</text>
									<text transform="matrix(0.7896 0 0 1 1435.5205 1019.4547)" class="st15 st16">Harney</text>
									<text transform="matrix(0.7896 0 0 1 724.775 255.0675)" class="st15 st16">Hood River</text>
									<text transform="matrix(0.7896 0 0 1 460.4283 1262.7418)" class="st15 st16">Jackson</text>
									<text transform="matrix(0.7896 0 0 1 767.0552 515.1119)" class="st15 st16">Jefferson</text>
									<text transform="matrix(0.7896 0 0 1 243.2149 1280.5953)" class="st15 st16">Josephine</text>
									<text transform="matrix(0.7896 0 0 1 733.8433 1120.9493)" class="st15 st16">Klamath</text>
									<text transform="matrix(0.7896 0 0 1 445.065 806.8854)" class="st15 st16">Lane</text>
									<text transform="matrix(0.7896 0 0 1 168.3638 584.0719)" class="st15 st16">Lincoln</text>
									<text transform="matrix(0.7896 0 0 1 545.8272 571.6891)" class="st15 st16">Linn</text>
									<text transform="matrix(0.7896 0 0 1 1782.3555 916.8199)" class="st15 st16">Malheur</text>
									<text transform="matrix(0.7896 0 0 1 437.4175 431.5407)" class="st15 st16">Marion</text>
									<text transform="matrix(0.7896 0 0 1 1266.0996 273.901)" class="st15 st16">Morrow</text>
									<text transform="matrix(0.7896 0 0 1 503.8355 258.7789)" class="st15 st16">Multnomah</text>
									<text transform="matrix(0.7896 0 0 1 285.1021 487.0524)" class="st15 st16">Polk</text>
									<text transform="matrix(0.7896 0 0 1 993.5782 241.1432)" class="st15 st16">Sherman</text>
									<text transform="matrix(0.7896 0 0 1 204.8008 259.4742)" class="st15 st16">Tillamook</text>
									<text transform="matrix(0.7896 0 0 1 1509.207 181.2755)" class="st15 st16">Umatilla</text>
									<text transform="matrix(0.7896 0 0 1 1707.4932 270.0104)" class="st15 st16">Union</text>
									<text transform="matrix(0.7896 0 0 1 1910.7764 236.1344)" class="st15 st16">Wallowa</text>
									<text transform="matrix(0.7896 0 0 1 337.7589 260.9264)" class="st15 st16">Washington</text>
									<text transform="matrix(0.7896 0 0 1 1130.0986 533.4313)" class="st15 st16">Wheeler</text>
									<text transform="matrix(0.7896 0 0 1 303.4312 336.1295)" class="st15 st16">Yamhill</text>
									<text transform="matrix(0.7896 0 0 1 855.9356 357.7828)" class="st15 st16">Wasco</text>
									<text transform="matrix(0.7896 0 0 1 1011.2007 1027.5826)" class="st15 st16">Lake</text>
								</g>
									<g id="Illustrations">
									
									<g id="Watermelon">
										<a <?php echo get_map_icon_html($watermelon_umatilla, $watermelon_umatilla_img); ?>>
											<image style="overflow:visible;" width="831" height="618" id="watermelon-umatilla-img" data-name="watermelon-umatilla-img" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/watermelon.png"  transform="matrix(0.1072 0 0 0.1072 1405.8497 58.7643)"></image>
										</a>
									</g>
									
									<g id="Wheat">
										<a <?php echo get_map_icon_html($wheat_wasco, $wheat_wasco_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_11_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 802.0679 352.0309)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_jefferson, $wheat_jefferson_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 870.3677 476.0201)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_klamath, $wheat_klamath_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_9_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 682.8382 995.3309)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_linn, $wheat_linn_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 475.1685 481.0402)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_sherman, $wheat_sherman_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_7_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 999.564 260.6324)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_gilliam, $wheat_gilliam_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 1147.564 174.6324)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_malheur, $wheat_malheur_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 1728.6329 958.2145)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_washington, $wheat_washington_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 426.5547 203.44)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_union, $wheat_union_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 1659.3135 273.9015)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_umatilla, $wheat_umatilla_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 1442.2012 206.4474)"></image>
										</a>
										<a <?php echo get_map_icon_html($wheat_morrow, $wheat_morrow_img); ?>>
											<image style="overflow:visible;" width="634" height="1640" id="Wheat_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/wheat.png"  transform="matrix(6.389200e-02 0 0 6.389200e-02 1221.0909 238.6589)"></image>
										</a>
									</g>
									
									<g id="Tree_1_">
										<a <?php echo get_map_icon_html($tree_lake, $tree_lake_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 1093.2076 1016.275)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_josephine, $tree_josephine_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_12_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 161.4517 1142.234)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_linn, $tree_linn_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_18_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 686.4356 457.4821)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_wheeler, $tree_wheeler_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 1205.4357 477.4821)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_lincoln, $tree_lincoln_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_22_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 186.4356 398.4821)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_coos, $tree_coos_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 171.0171 893.6393)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_union, $tree_union_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_14_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 1739.4327 104.4821)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_tillamook, $tree_tillamook_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 160.9566 258.1678)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_lane, $tree_lane_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_20_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 163.897 648.9186)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_douglas, $tree_douglas_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_16_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 280.8045 842.1058)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_clackamas, $tree_clackamas_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_24_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 496.6025 264.9288)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_lane, $tree_lane_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 639.4356 727.4821)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_klamath, $tree_klamath_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_26_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 750.0552 898.1383)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_grant, $tree_grant_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_28_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 1503.48 436.9234)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_crook, $tree_crook_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_30_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 1027.3829 652.8421)"></image>
										</a>
										<a <?php echo get_map_icon_html($tree_tillamook, $tree_tillamook_img); ?>>
											<image style="overflow:visible;" width="425" height="833" id="Tree_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/tree.png"  transform="matrix(0.1608 0 0 0.1608 285.4356 42.4821)"></image>
										</a>
									</g>
									<g id="Shrimp_2_">
										<a <?php echo get_map_icon_html($shrimp_coos, $shrimp_coos_img); ?>>
											<image style="overflow:visible;" width="870" height="1161" id="Shrimp" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/shrimp.png"  transform="matrix(5.969200e-02 0 0 5.969200e-02 0 992.4108)"></image>
										</a>
										<a <?php echo get_map_icon_html($shrimp_lincoln, $shrimp_lincoln_img); ?>>
											<image style="overflow:visible;" width="870" height="1161" id="Shrimp_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/shrimp.png"  transform="matrix(5.969200e-02 0 0 5.969200e-02 78.3687 571.4034)"></image>
										</a>
										<a <?php echo get_map_icon_html($shrimp_clatsop, $shrimp_clatsop_img); ?>>
											<image style="overflow:visible;" width="870" height="1161" id="Shrimp_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/shrimp.png"  transform="matrix(6.225600e-02 0 0 6.570200e-02 115.2676 95.9771)"></image>
										</a>
									</g>
									<g id="Sheep_2_">
										<a <?php echo get_map_icon_html($sheep_douglas, $sheep_douglas_img); ?>>
											<image style="overflow:visible;" width="241" height="206" id="Sheep" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/sheep.png"  transform="matrix(0.2393 0 0 0.2389 389.3605 1079.348)"></image>
										</a>
										<a <?php echo get_map_icon_html($sheep_linn, $sheep_linn_img); ?>>
											<image style="overflow:visible;" width="867" height="740" id="Sheep_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/sheep.png"  transform="matrix(6.651300e-02 0 0 6.651300e-02 578.2012 602.4587)"></image>
										</a>
									</g>
									<g id="Pumpkin_1_">
										<a <?php echo get_map_icon_html($pumpkin_benton, $pumpkin_benton_img); ?>>
											<image style="overflow:visible;" width="624" height="588" id="Pumpkin_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/pumpkin.png"  transform="matrix(7.506700e-02 0 0 7.506700e-02 300.1109 603.4849)"></image>
										</a>
										<a <?php echo get_map_icon_html($pumpkin_lane, $pumpkin_lane_img); ?>>
											<image style="overflow:visible;" width="196" height="184" id="Pumpkin" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/pumpkin.png"  transform="matrix(0.239 0 0 0.2399 414.6211 825.6059)"></image>
										</a>
									</g>
									<g id="Potatoe">
										<a <?php echo get_map_icon_html($potatoes_klamath, $potatoes_klamath_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(7.264300e-02 0 0 6.436300e-02 812.7266 1338.7946)"></image>
										</a>
										<a <?php echo get_map_icon_html($potatoes_morrow, $potatoes_morrow_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(5.004200e-02 0 0 6.494700e-02 1286.9122 131.7433)"></image>
										</a>
										<a <?php echo get_map_icon_html($potatoes_umatilla, $potatoes_umatilla_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(7.264300e-02 0 0 6.436300e-02 1520.9932 99.3044)"></image>
										</a>
										<a <?php echo get_map_icon_html($potatoes_baker, $potatoes_baker_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(8.154500e-02 0 0 8.154500e-02 1859.1495 466.6247)"></image>
										</a>
										<a <?php echo get_map_icon_html($potatoes_union, $potatoes_union_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(7.264300e-02 0 0 6.436300e-02 1593.4268 372.5319)"></image>
										</a>
										<a <?php echo get_map_icon_html($potatoes_malheur, $potatoes_malheur_img); ?>>
											<image style="overflow:visible;" width="907" height="504" id="Potatoe_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/potatoes.png"  transform="matrix(7.264300e-02 0 0 6.436300e-02 1854.8799 674.3762)"></image>
										</a>
									</g>
									<g id="Pears">
										<a <?php echo get_map_icon_html($pears_jackson, $pears_jackson_img); ?>>
											<image style="overflow:visible;" width="635" height="574" id="Pears_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/pears.png"  transform="matrix(6.303200e-02 0 0 6.303200e-02 396.2583 1204.3414)"></image>
										</a>
										<a <?php echo get_map_icon_html($pears_hood_river, $pears_hood_river_img); ?>>
											<image style="overflow:visible;" width="635" height="574" id="Pears_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/pears.png"  transform="matrix(5.703800e-02 0 0 5.703800e-02 765.9429 265.6852)"></image>
										</a>
									</g>
									<g id="Onion">
										<a <?php echo get_map_icon_html($onions_umatilla, $onions_umatilla_img); ?>>
											<image style="overflow:visible;" width="832" height="729" id="Onions_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/onions.png"  transform="matrix(6.629900e-02 0 0 6.629900e-02 1620.6613 107.5773)"></image>
										</a>
										<a <?php echo get_map_icon_html($onions_malheur, $onions_malheur_img); ?>>
											<image style="overflow:visible;" width="832" height="729" id="Onions_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/onions.png"  transform="matrix(6.629900e-02 0 0 6.629900e-02 1883.6281 739.2985)"></image>
										</a>
										<a <?php echo get_map_icon_html($onions_morrow, $onions_morrow_img); ?>>
											<image style="overflow:visible;" width="832" height="729" id="Onions" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/onions.png"  transform="matrix(6.629900e-02 0 0 6.629900e-02 1326.251 226.5573)"></image>
										</a>
									</g>
									<g id="Nursery">
										<a <?php echo get_map_icon_html($nursery_lane, $nursery_lane_img); ?>>
											<image style="overflow:visible;" width="511" height="386" id="Nursery_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 509.462 838.5222)"></image>
										</a>
										<a <?php echo get_map_icon_html($nursery_washington, $nursery_washington_img); ?>>
											<image style="overflow:visible;" width="511" height="386" id="Nursery_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 325.9629 153.1423)"></image>
										</a>
										<a <?php echo get_map_icon_html($nursery_marion, $nursery_marion_img); ?>>
											<image style="overflow:visible;" width="511" height="386" id="Nursery_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 538.7696 432.9244)"></image>
										</a>
										<a <?php echo get_map_icon_html($nursery_clackamas, $nursery_clackamas_img); ?>>										
											<image style="overflow:visible;" width="511" height="386" id="Nursery_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 626.7696 244.7247)"></image>
										</a>
										<a <?php echo get_map_icon_html($nursery_columbia, $nursery_columbia_img); ?>>										
											<image style="overflow:visible;" width="511" height="386" id="Nursery_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 362.7696 91.9245)"></image>
										</a>
										<a <?php echo get_map_icon_html($nursery_yamhill, $nursery_yamhill_img); ?>>
											<image style="overflow:visible;" width="511" height="386" id="Nursery_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/nursery.png"  transform="matrix(0.1458 0 0 0.1458 332.4419 265.9694)"></image>
										</a>
									</g>
										<a <?php echo get_map_icon_html($mint_union, $mint_union_img); ?>>
										<image style="overflow:visible;" width="634" height="685" id="Mint" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/mint.png"  transform="matrix(8.931700e-02 0 0 8.773500e-02 1591.5098 297.6843)"></image>
									</a>
									<a <?php echo get_map_icon_html($hops_marion, $hops_marion_img); ?>>
										<image style="overflow:visible;" width="212" height="211" id="Hops" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hops.png"  transform="matrix(0.2398 0 0 0.2397 465.343 323.749)"></image>
									</a>
									
									<g id="Hazelnut_4_">
										<a <?php echo get_map_icon_html($filberts_marion, $filberts_marion_img); ?>>
											<image style="overflow:visible;" width="108" height="122" id="Hazelnut_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/filberts.png"  transform="matrix(0.2379 0 0 0.2385 490.7585 379.4178)"></image>
										</a>
										<a <?php echo get_map_icon_html($filberts_linn, $filberts_linn_img); ?>>
											<image style="overflow:visible;" width="108" height="122" id="Hazelnut_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/filberts.png"  transform="matrix(0.2379 0 0 0.2385 406.0417 611.8533)"></image>
										</a>
										<a <?php echo get_map_icon_html($filberts_polk, $filberts_polk_img); ?>>
											<image style="overflow:visible;" width="108" height="122" id="Hazelnut_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/filberts.png"  transform="matrix(0.2379 0 0 0.2385 256.8391 475.3409)"></image>
										</a>
										<a <?php echo get_map_icon_html($filberts_yamhill, $filberts_yamhill_img); ?>>
											<image style="overflow:visible;" width="108" height="122" id="Hazelnut" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/filberts.png"  transform="matrix(0.2379 0 0 0.2385 226.507 351.5929)"></image>
										</a>
									</g>
									
									<g id="Hay_11_">
										<a <?php echo get_map_icon_html($hay_baker, $hay_baker_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1639.1826 545.1026)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_malheur, $hay_malheur_img_mal); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1830.5782 1078.327)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_harney, $hay_harney_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1486.9666 1129.838)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_lake, $hay_lake_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 885.4465 1057.6696)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_douglas, $hay_douglas_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 498.385 992.0499)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_deschutes, $hay_deschutes_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_7_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 725.5583 795.15)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_crook, $hay_crook_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 951.2122 637.7203)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_jefferson, $hay_jefferson_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_9_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1005.8909 478.1353)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_klamath, $hay_klamath_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 663.2678 1308.1656)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_umatilla, $hay_umatilla_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1580.2911 198.8558)"></image>
										</a>
										<a <?php echo get_map_icon_html($hay_wallowa, $hay_wallowa_img); ?>>
											<image style="overflow:visible;" width="337" height="215" id="Hay_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/hay.png"  transform="matrix(0.2397 0 0 0.2396 1938.7888 285.4747)"></image>
										</a>
									</g>
									<g id="GrassSeed">
										<a <?php echo get_map_icon_html($grass_seed_linn, $grass_seed_linn_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 511.1514 585.3785)"></image>
										</a>
										<a <?php echo get_map_icon_html($grass_seed_polk, $grass_seed_polk_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 241.7838 396.8261)"></image>
										</a>
										<a <?php echo get_map_icon_html($grass_seed_lane, $grass_seed_lane_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 367.2779 733.2936)"></image>
										</a>
										<a <?php echo get_map_icon_html($grass_seed_marion, $grass_seed_marion_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_14_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 494.6958 412.8004)"></image>
										</a>
										<a <?php echo get_map_icon_html($grass_seed_benton, $grass_seed_benton_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 300.815 514.7082)"></image>
										</a>
										<a <?php echo get_map_icon_html($grass_seed_yamhill, $grass_seed_yamhill_img); ?>>
											<image style="overflow:visible;" width="693" height="1302" id="GrassSeed_16_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grassSeed.png"  transform="matrix(5.661800e-02 0 0 5.332500e-02 303.5845 235.7267)"></image>
										</a>
									</g>
									<g id="Grapes_1_">
										<a <?php echo get_map_icon_html($grapes_jackson, $grapes_jackson_img); ?>>
											<image style="overflow:visible;" width="727" height="897" id="Grapes_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grapes.png"  transform="matrix(5.600700e-02 0 0 5.600700e-02 495.5479 1160.1334)"></image>
										</a>
										<a <?php echo get_map_icon_html($grapes_umatilla, $grapes_umatilla_img); ?>>
											<image style="overflow:visible;" width="727" height="897" id="Grapes_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grapes.png"  transform="matrix(5.600700e-02 0 0 5.600700e-02 1524.127 219.7722)"></image>
										</a>
										<a <?php echo get_map_icon_html($grapes_douglas, $grapes_douglas_img); ?>>
											<image style="overflow:visible;" width="170" height="210" id="Grapes" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grapes.png"  transform="matrix(0.2395 0 0 0.2392 437.6164 918.9449)"></image>
										</a>
										<a <?php echo get_map_icon_html($grapes_yamhill, $grapes_yamhill_img); ?>>
											<image style="overflow:visible;" width="727" height="897" id="Grapes_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/grapes.png"  transform="matrix(5.600700e-02 0 0 5.600700e-02 328.336 337.5753)"></image>
										</a>
									</g>
									<g id="Fish">
										<a <?php echo get_map_icon_html($fish_coos, $fish_coos_img); ?>>
											<image style="overflow:visible;" width="421" height="391" id="Fish_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/fish.png"  transform="matrix(0.1611 0 0 0.1611 6.1207 928.277)"></image>
										</a>
										<a <?php echo get_map_icon_html($fish_lincoln, $fish_lincoln_img); ?>>
											<image style="overflow:visible;" width="421" height="391" id="Fish_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/fish.png"  transform="matrix(0.1611 0 0 0.1611 63.8208 522.5056)"></image>
										</a>
										<a <?php echo get_map_icon_html($fish_clatsop, $fish_clatsop_img); ?>>
											<image style="overflow:visible;" width="421" height="391" id="Fish_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/fish.png"  transform="matrix(0.1611 0 0 0.1611 92.1661 68.4352)"></image>
										</a>
									</g>
									<g id="Eggs_6_">
										<a <?php echo get_map_icon_html($eggs_clackamas, $eggs_clackamas_img); ?>>	
											<g id="Eggs_2_">
												<image style="overflow:visible;" width="318" height="369" id="Chicken" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/egg.png"  transform="translate(576.86 313.91) scale(0.08)"></image>
												<image style="overflow:visible;" width="628" height="436" id="Egg" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/chicken.png"  transform="translate(574.31 284.84) scale(0.14)"></image>
											</g>
										</a>
										<a <?php echo get_map_icon_html($eggs_polk, $eggs_polk_img); ?>>
											<g id="Eggs_1_">
												<image style="overflow:visible;" width="318" height="369" id="chicken_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/egg.png"  transform="translate(276.53 432.28) scale(0.08)"></image>
												<image style="overflow:visible;" width="628" height="436" id="Eggs_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/chicken.png"  transform="translate(274.07 402.35) scale(0.14)"></image>
											</g>
										</a>
										<a <?php echo get_map_icon_html($eggs_yamhill, $eggs_yamhill_img); ?>>
											<g id="Eggs">
												<image style="overflow:visible;" width="318" height="369" id="chicken_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/egg.png"  transform="translate(250.56 366.14) scale(0.08)"></image>
												<image style="overflow:visible;" width="628" height="436" id="Eggs_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/chicken.png"  transform="translate(248.02 337.07) scale(0.14)"></image>
											</g>
										</a>
									</g>
									<a <?php echo get_map_icon_html($easter_lilies_curry, $easter_lilies_curry_img); ?>>
										<image style="overflow:visible;" width="242" height="196" id="EasterLilies" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/easterLilies.png"  transform="matrix(0.2393 0 0 0.2391 82.2302 1315.3611)"></image>
									</a>
									<g id="Dairy">
										<a <?php echo get_map_icon_html($dairy_klamath, $dairy_klamath_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_9_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 651.3116 1166.2858)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_morrow, $dairy_morrow_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 1206.0479 170.1163)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_josephine, $dairy_josephine_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_7_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 234.8414 1307.2701)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_malheur, $dairy_malheur_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 1682.4727 797.7535)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_coos, $dairy_coos_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 75.8404 1008.7847)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_lane, $dairy_lane_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 521.0937 657.1907)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_tillamook, $dairy_tillamook_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 192.9651 158.9181)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_yamhill, $dairy_yamhill_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 372.9313 312.4321)"></image>
										</a>
										<a <?php echo get_map_icon_html($dairy_polk, $dairy_polk_img); ?>>
											<image style="overflow:visible;" width="446" height="310" id="Dairy_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/dairy.png"  transform="matrix(0.2322 0 0 0.2442 333.3095 461.2111)"></image>
										</a>
									</g>
									<g id="Crab">
										<a <?php echo get_map_icon_html($crab_clatsop, $crab_clatsop_img); ?>>
											<image style="overflow:visible;" width="491" height="349" id="Crab_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/crab.png"  transform="matrix(0.151 0 0 0.151 91.545 21.2404)"></image>
										</a>
										<a <?php echo get_map_icon_html($crab_lincoln, $crab_lincoln_img); ?>>
											<image style="overflow:visible;" width="491" height="349" id="Crab_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/crab.png"  transform="matrix(0.151 0 0 0.151 61.669 472.5373)"></image>
										</a>
										<a <?php echo get_map_icon_html($crab_coos, $crab_coos_img); ?>>
											<image style="overflow:visible;" width="491" height="349" id="Crab_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/crab.png"  transform="matrix(0.151 0 0 0.151 18.2598 876.064)"></image>
										</a>
									</g>
									<g id="Corn_4_">
										<a <?php echo get_map_icon_html($corn_umatilla, $corn_umatilla_img); ?>>
											<image style="overflow:visible;" width="621" height="1268" id="Corn_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/corn.png"  transform="matrix(5.301100e-02 0 0 5.419100e-02 1445.9952 130.1192)"></image>
										</a>
										<a <?php echo get_map_icon_html($corn_malheur, $corn_malheur_img); ?>>
											<image style="overflow:visible;" width="621" height="1268" id="Corn_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/corn.png"  transform="matrix(5.557800e-02 0 0 5.557800e-02 1735.3047 683.5798)"></image>
										</a>
										<a <?php echo get_map_icon_html($corn_clackamas, $corn_clackamas_img); ?>>
											<image style="overflow:visible;" width="138" height="280" id="Corn" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/corn.png"  transform="matrix(0.2384 0 0 0.2399 532.9863 382.0058)"></image>
										</a>
										<a <?php echo get_map_icon_html($corn_morrow, $corn_morrow_img); ?>>
											<image style="overflow:visible;" width="138" height="280" id="Corn_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/corn.png"  transform="matrix(0.2384 0 0 0.2399 1289.1587 351.1679)"></image>
										</a>
									</g>
									<g id="ChristmasTree_1_">
										<a <?php echo get_map_icon_html($christmas_tree_benton, $christmas_tree_benton_img); ?>>
											<image style="overflow:visible;" width="292" height="437" id="ChristmasTree_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/christmasTree.png"  transform="matrix(0.2271 0 0 0.2271 232.9273 560.176)"></image>
										</a>
										<a <?php echo get_map_icon_html($christmas_tree_clackamas, $christmas_tree_clackamas_img); ?>>
											<image style="overflow:visible;" width="292" height="437" id="ChristmasTree_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/christmasTree.png"  transform="matrix(0.2271 0 0 0.2271 643.4423 347.205)"></image>
										</a>
										<a <?php echo get_map_icon_html($christmas_tree_marion, $christmas_tree_marion_img); ?>>
											<image style="overflow:visible;" width="292" height="437" id="ChristmasTree" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/christmasTree.png"  transform="matrix(0.2271 0 0 0.2271 368.3061 366.627)"></image>
										</a>
									</g>
									<g id="Cranberry_3_">
										<a <?php echo get_map_icon_html($cranberries_coos, $cranberries_coos_img); ?>>
											<image style="overflow:visible;" width="299" height="406" id="Cranberry_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/cranberries.png"  transform="matrix(8.760000e-04 -8.969400e-02 8.969400e-02 8.760000e-04 115.3521 919.0015)"></image>
										</a>
										<a <?php echo get_map_icon_html($cranberries_curry, $cranberries_curry_img); ?>>
											<image style="overflow:visible;" width="299" height="406" id="Cranberry_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/cranberries.png"  transform="matrix(8.760000e-04 -8.969400e-02 8.969400e-02 8.760000e-04 57.5015 1163.5963)"></image>
										</a>
										<a <?php echo get_map_icon_html($cranberries_clatsop, $cranberries_clatsop_img); ?>>
											<image style="overflow:visible;" width="112" height="152" id="Cranberry" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/cranberries.png"  transform="matrix(2.338607e-03 -0.2395 0.2396 2.339842e-03 215.9611 122.681)"></image>
										</a>
									</g>
									<g id="Cherry">
										<a <?php echo get_map_icon_html($cherries_wasco, $cherries_wasco_img); ?>>
											<image style="overflow:visible;" width="904" height="872" id="Cherry_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/cherries.png"  transform="translate(920.12, 236.3) scale(.05 .06)"></image>
										</a>
										<a <?php echo get_map_icon_html($cherries_hood_river, $cherries_hood_river_img); ?>>
											<image style="overflow:visible;" width="904" height="872" id="Cherry_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/cherries.png"  transform="translate(700.78, 190.63) scale(.05 .06)"></image>
										</a>
									</g>
									<g id="Carrots">
										<a <?php echo get_map_icon_html($carrot_linn, $carrot_linn_img); ?>>
											<image style="overflow:visible;" width="845" height="775" id="Carrott_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/carrot.png"  transform="matrix(9.831000e-02 0 0 9.831000e-02 596.3218 520.756)"></image>
										</a>
										<a <?php echo get_map_icon_html($carrot_jefferson, $carrot_jefferson_img); ?>>
											<image style="overflow:visible;" width="845" height="775" id="Carrott" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/carrot.png"  transform="matrix(9.831000e-02 0 0 9.831000e-02 918.8145 481.1544)"></image>
										</a>
									</g>
									<g id="Brocolli">
										<a <?php echo get_map_icon_html($broccoli_marion, $broccoli_marion_img); ?>>
											<image style="overflow:visible;" width="892" height="993" id="Brocolli_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/brocolli.png"  transform="matrix(4.100100e-02 0 0 4.100100e-02 448.4874 370.8371)"></image>
										</a>
									</g>
									<g id="Blueberry">
										<a <?php echo get_map_icon_html($blueberries_washington, $blueberries_washington_img); ?>>
											<image style="overflow:visible;" width="736" height="616" id="Blueberry_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/blueberry.png"  transform="matrix(6.317700e-02 0 0 6.230800e-02 378.2134 205.8087)"></image>
										</a>
										<a <?php echo get_map_icon_html($blueberries_linn, $blueberries_linn_img); ?>>
											<image style="overflow:visible;" width="194" height="160" id="Blueberry_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/blueberry.png"  transform="matrix(0.2397 0 0 0.2399 406.7568 548.1581)"></image>
										</a>
										<a <?php echo get_map_icon_html($blueberries_marion, $blueberries_marion_img); ?>>
											<image style="overflow:visible;" width="736" height="616" id="Blueberry_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/blueberry.png"  transform="matrix(6.317700e-02 0 0 6.230800e-02 439.5689 440.0988)"></image>
										</a>
									</g>
									<a <?php echo get_map_icon_html($berries_marion, $berries_marion_img); ?>>	
										<image style="overflow:visible;" width="964" height="829" id="Berries" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/berries.png"  transform="matrix(7.599500e-02 0 0 7.599500e-02 624.4361 438.4825)"></image>
									</a>
									<g id="Beat_5_">
										<a <?php echo get_map_icon_html($beet_marion, $beet_marion_img); ?>>	
											<image style="overflow:visible;" width="293" height="306" id="Beat_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beet.png"  transform="matrix(0.24 0 0 0.2394 645.8906 447.8916)"></image>
										</a>
										<a <?php echo get_map_icon_html($beet_lane, $beet_lane_img); ?>>	
											<image style="overflow:visible;" width="293" height="306" id="Beat_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beet.png"  transform="matrix(0.24 0 0 0.2394 536.7806 740.4534)"></image>
										</a>
										<a <?php echo get_map_icon_html($beet_linn, $beet_linn_img); ?>>	
											<image style="overflow:visible;" width="293" height="306" id="Beat_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beet.png"  transform="matrix(0.24 0 0 0.2394 339.5437 530.7181)"></image>
										</a>
										<a <?php echo get_map_icon_html($beet_malheur, $beet_malheur_img); ?>>	
											<image style="overflow:visible;" width="293" height="306" id="Beat_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beet.png"  transform="matrix(0.24 0 0 0.2394 1704.8892 1124.6395)"></image>
										</a>
										<a <?php echo get_map_icon_html($beet_union, $beet_union_img); ?>>	
											<image style="overflow:visible;" width="293" height="306" id="Beat" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beet.png"  transform="matrix(0.24 0 0 0.2394 1693.2961 156.988)"></image>
										</a>
									</g>
									<g id="Beans_2_">
										<a <?php echo get_map_icon_html($bean_benton, $bean_benton_img); ?>>	
											<image style="overflow:visible;" width="218" height="298" id="Beans" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beans.png"  transform="matrix(0.2399 0 0 0.2398 262.8837 508.7242)"></image>
										</a>
										<a <?php echo get_map_icon_html($bean_clackamas, $bean_clackamas_img); ?>>
											<image style="overflow:visible;" width="218" height="298" id="Beans_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beans.png"  transform="matrix(0.2399 0 0 0.2398 679.8968 302.8711)"></image>
										</a>
										<a <?php echo get_map_icon_html($bean_lane, $bean_lane_img); ?>>
											<image style="overflow:visible;" width="597" height="872" id="Beans_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beans.png"  transform="matrix(8.761100e-02 0 0 8.193900e-02 443.1182 697.5685)"></image>
										</a>
										<a <?php echo get_map_icon_html($bean_multnomah, $bean_multnomah_img); ?>>
											<image style="overflow:visible;" width="597" height="872" id="Beans_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/beans.png"  transform="matrix(8.761100e-02 0 0 8.193900e-02 454.4249 176.4621)"></image>
										</a>
									</g>
									<g id="Apple_2_">
										<a <?php echo get_map_icon_html($apple_umatilla, $apple_umatilla_img); ?>>
											<image style="overflow:visible;" width="500" height="507" id="TransApple_x5F_roated_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/apple.png"  transform="matrix(6.217000e-02 0 0 6.217000e-02 1370.6299 144.8127)"></image>
										</a>
										<a <?php echo get_map_icon_html($apple_hood_river, $apple_hood_river_img); ?>>
											<image style="overflow:visible;" width="130" height="132" id="Apple" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/apple.png"  transform="matrix(0.2391 0 0 0.2388 771.0323 198.4298)"></image>
										</a>
									</g>
									<g id="Angus">
										<a <?php echo get_map_icon_html($angus_jackson, $angus_jackson_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_17_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(416.27 1282.4)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_crook, $angus_crook_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_16_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1134.8 672.7)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_deschutes, $angus_deschutes_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_15_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(763.82 636.16)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_lake, $angus_lake_img); ?>>	
											<image style="overflow:visible;" width="795" height="1151" id="Angus_14_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1172.97 1245.85)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_klamath, $angus_klamath_img); ?>>	
											<image style="overflow:visible;" width="795" height="1151" id="Angus_13_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(797.95 1199.28)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_morrow, $angus_morrow_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_12_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1267.13 261.68)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_gilliam, $angus_gilliam_img); ?>>	
											<image style="overflow:visible;" width="795" height="1151" id="Angus_11_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1082.65 270.88)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_umatilla, $angus_umatilla_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_10_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1425.64 309.27)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_baker, $angus_baker_img); ?>>	
											<image style="overflow:visible;" width="795" height="1151" id="Angus_9_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1667 423.72)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_harney, $angus_harney_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_8_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1316.96 836.37)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_grant, $angus_grant_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_7_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1369.45 599.36)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_wallowa, $angus_wallowa_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_6_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1817.93 95.39)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_malheur, $angus_malheur_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_5_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1768.96 1199.87)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_union, $angus_union_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_4_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1711.58 290.15)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_wheeler, $angus_wheeler_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_3_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(1116.39 381.51)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_jefferson, $angus_jefferson_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="angus_38_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(758.12 510.15)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_douglas, $angus_douglas_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_1_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(257.03 1008.73)  scale(0.09 0.09)"></image>
										</a>
										<a <?php echo get_map_icon_html($angus_lane, $angus_lane_img); ?>>
											<image style="overflow:visible;" width="795" height="1151" id="Angus_2_" xlink:href="<?php echo home_url(); ?>/wp-content/themes/oregonaitc/map/angus.png"  transform="translate(254.99 660.86) scale(0.09 0.09)"></image>
										</a>
									</g>
								</g>
							</svg>
						</div> <!-- svg-wrap end -->
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="bg-gray-light mt-5 text-center p-4">
						<div class="col-12 mb-3">
							<div class="lead-text">Find more resources and materials for your classroom! Visit our Teacher's Corner!</div>
						</div>	
						<div class="col-12 flex-row-reverse">
							<a href="<?php echo home_url(); ?>/teacher-corner" class="btn btn-primary btn-lg">Visit Now</a>
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
										<h4 class="media-heading mb-0 mt-1"><?php echo $region1['region_name']; ?> <i id="caret-collapse1" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
										<div class="legend-content pt-2">
											<?php echo $region1['region_content']; ?>
											
											<?php if ( isset($region1['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region1['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-2" class="pull-left marker" style="background-color: <?php echo $region2['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region2['region_name']; ?> <i id="caret-collapse2" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
										<div class="legend-content pt-2">
											<?php echo $region2['region_content']; ?>
											
											<?php if ( isset($region2['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region2['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>									
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-3" class="pull-left marker" style="background-color: <?php echo $region3['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region3['region_name']; ?> <i id="caret-collapse3" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
										<div class="legend-content pt-2">
											<?php echo $region3['region_content']; ?>
											
											<?php if ( isset($region3['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region3['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>										
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-4" class="pull-left marker" style="background-color: <?php echo $region4['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region4['region_name']; ?> <i id="caret-collapse4" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
										<div class="legend-content pt-2">
											<?php echo $region4['region_content']; ?>
											
											<?php if ( isset($region4['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region4['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>										
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-5" class="pull-left marker" style="background-color: <?php echo $region5['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region5['region_name']; ?> <i id="caret-collapse5" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
										<div class="legend-content pt-2">
											<?php echo $region5['region_content']; ?>
											
											<?php if ( isset($region5['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region5['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>										
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-6" class="pull-left marker" style="background-color: <?php echo $region6['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region6['region_name']; ?> <i id="caret-collapse6" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
										<div class="legend-content pt-2">
											<?php echo $region6['region_content']; ?>
											
											<?php if ( isset($region6['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region6['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>										
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="media">
								<div id="marker-7" class="pull-left marker" style="background-color: <?php echo $region7['color']; ?>"></div>
								<div class="media-body">
									<a class="btn-legend" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
										<h4 class="media-heading mb-0 mt-1"><?php echo $region7['region_name']; ?> <i id="caret-collapse7" class="fa fa-caret-right"></i></h4>
									</a>
									<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
										<div class="legend-content pt-2">
											<?php echo $region7['region_content']; ?>
											
											<?php if ( isset($region7['region_video']) ): ?>
											
												<div class="pt-3">
													<a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo $region7['region_video']; ?>'><i class="fa fa-sm fa-video float-left pr-2 pt-1"></i> Watch Video</a>
												</div>
											
											<?php endif; ?>
										</div>										
									</div>
								</div>
							</div>
						</li>									
					</ul>
				</div>
				<?php if ( have_rows('video_legend', 'option') ): ?>
				<div class="map-legend video-legend">
					<h3 class="mt-3">Virtual Videos</h3>
					<ul class="list-group">
						<?php while ( have_rows('video_legend', 'options') ) : the_row(); ?>
							<li class="list-group-item">
								<div class="media">
									<div class="pull-left mr-1"><i class="fa fa-sm fa-video"></i> </div>
									<div class="media-body legend-content"><a class="pop-legend" data-toggle='modal' data-target='#videoModal' data-video='<?php echo the_sub_field('video_url'); ?>'><?php the_sub_field('video_location'); ?></a></div>
								</div>
							</li>
						<?php endwhile ?>
					</ul>		
				</div>
				<?php endif; ?>
				<?php if ( have_rows('educational_videos', 'options') ): ?>
				<div class="map-legend video-legend">
					<h3 class="mt-3">Educational Videos</h3>
					<ul class="list-group">
						<?php while ( have_rows('educational_videos', 'option') ) : the_row(); ?>
							<li class="list-group-item">
								<div class="media">
									<div class="pull-left mr-1"><i class="fa fa-sm fa-video"></i></div>
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
	      <div class="embed-responsive embed-responsive-16by9">
		  	<iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
	      </div>
      </div>
    </div>
  </div>
</div>	