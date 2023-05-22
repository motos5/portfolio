<form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

    <input class="text-search" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__('Search', 'wayup'); ?>">
    <input type="submit" class="submit-search" value="" />

</form>