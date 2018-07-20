<?php get_header(); ?>
<div class="section section-alt section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
			<?php if(have_posts()): ?>
				<h2 class="mb-3	">Search</h2>
				<div class="card mb-3">
					<div id="search-form" class="card-body">
						<form role="search" id="sites-search" action="/" method="get"> 
							<label class="sr-only" for="search">Search</label> 
							<button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
							<input type="text" class="input-lg form-control w-100" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" name="s"> 
						</form>
					</div>
				</div>
				<?php while(have_posts()): the_post(); ?>
					<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p class="text-sm text-gray mt-1 mb-3 pb-2 	border-1 border-bottom"><?php echo get_the_permalink(); ?></p>
							<div class="text-md text-description"><?php the_excerpt(); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php show_pagination_links(); ?>
			<?php else: ?>
				<h2 class="text-center">No results found for search: <?php the_search_query(); ?></h2>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>