<?php
// Limit Title for Slider
function elvinci_slider_title($limit) {
	$title = explode(' ', get_sub_field('title', 'option'), $limit);

	if (count($title) >= $limit) {
		array_pop($title);
		$title = implode(" ", $title) . '...';
	} else {
		$title = implode(" ", $title);
	}

	$title = preg_replace('`\[[^\]]*\]`', '', $title);

	return $title;
}

// Limit Excerpt for Posts
function elvinci__excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}