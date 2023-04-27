<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

    <input class="text-search" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Поиск">
    <input type="submit" class="submit-search" value="" />

</form>