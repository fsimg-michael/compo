<?php
function compo_head()
{

	// title & description
	global $title, $meta_description;

	if (empty($title)) {
		$title = get_bloginfo();
	} else if (!is_front_page()) {
		$title = $title . ' | COMPO';
	}
	if (empty($meta_description)) {
		$meta_description = get_bloginfo('description');
	}

	// origin URL
	$origin = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
	$current_url = $origin . $_SERVER['REQUEST_URI'];

	// 
	echo '<meta charset="UTF-8">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<title>' . esc_html($title) . '</title>';
	echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
	echo '<meta property="og:title" content="' . esc_attr($title) . '">';
	echo '<meta property="og:description" content="' . esc_attr($meta_description) . '">';
	echo '<meta property="og:image" content="' . esc_url($origin . '/img/ogp.png') . '">';

	// og:type
	if (is_single()) {
		echo '<meta property="og:type" content="article">';
	} else {
		echo '<meta property="og:type" content="website">';
	}

	echo '<meta property="og:url" content="' . esc_url($current_url) . '">';
	echo '<meta name="twitter:card" content="summary">';
	echo '<meta name="format-detection" content="telephone=no">';
	echo '<link rel="alternate" hreflang="ja" href="' . esc_url($current_url) . '">';
	echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($current_url) . '">';
	echo '<link rel="icon" href="/img/favicon.ico" sizes="any">';
	echo '<link rel="icon" type="image/svg+xml" href="/img/favicon.svg">';

	// Contact & Application
	if (is_page('contact') || is_page('application')) {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">';
	}

	// if google fonts
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
