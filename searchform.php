<form role="search" method="get" class="form-inline" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group"><label class="sr-only" for="st-search-input">Search</label>
        <input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" class="form-control input-lg" id="search-input" placeholder="Keyword, Author, Title" />
        <input type="submit" id="search-submit" class="fa" value="&#xf002;" />
    </div>
</form>

