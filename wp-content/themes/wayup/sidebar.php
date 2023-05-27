<?php

/*
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
*/
?>
<aside class="sidebar">
	<?php if ( ! dynamic_sidebar('sidebar-news') ) : dynamic_sidebar('sidebar-news'); endif; ?>
</aside>

<?php
/*
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
*/
?>