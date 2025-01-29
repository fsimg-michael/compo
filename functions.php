<?php

//head
include(get_theme_file_path('includes/enqueue.php'));
include(get_theme_file_path('includes/head.php'));

add_action('wp_enqueue_scripts', 'compo_enqueue');
add_action('wp_head', 'compo_head', 5);


//utils functions
function get_url()
{
	return array(
		'note' => 'https://note.com/compo/',
		'vimeo' => 'https://vimeo.com/compo/',
	);
}

function get_image($filename)
{
	return get_template_directory_uri() . '/assets/images/' . $filename;
}
function get_video($filename)
{
	return get_template_directory_uri() . '/assets/videos/' . $filename;
}
function get_icon($name)
{
	include get_template_directory() . '/parts/icons/' . $name . '.php';
}