<?php


if ( ! is_active_sidebar( 'sidebar-news' ) ) {
	return;
}

?>
<aside class="sidebar">
	<?php if ( ! dynamic_sidebar('sidebar-news') ) : dynamic_sidebar('sidebar-news'); endif; ?>
</aside>