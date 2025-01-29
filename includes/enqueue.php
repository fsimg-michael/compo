<?php
function compo_enqueue()
{
	// CSS
	wp_register_style("compo_font_noto", "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Sans+JP:wght@100..900&display=swap", [], null);
	wp_register_style("compo_style", get_theme_file_uri("/assets/css/common.css"));
	wp_register_style("compo_home", get_theme_file_uri("/assets/css/home.css"));
	wp_register_style("compo_about", get_theme_file_uri("/assets/css/about.css"));
	wp_register_style("compo_single", get_theme_file_uri("/assets/css/single.css"));

	// JS
	wp_register_script("compo_gsap", "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js", [], null, true);
	wp_register_script("compo_common", get_theme_file_uri("/assets/js/common.js"), [], null, true);
	wp_register_script("compo_home", get_theme_file_uri("/assets/js/home.js"), [], null, true);

	// Enqueue common styles and scripts
	wp_enqueue_style("compo_font_noto");
	wp_enqueue_style("compo_style");
	wp_enqueue_script("compo_gsap");
	wp_enqueue_script("compo_common");

	// Conditionally enqueue styles
	if (is_front_page() || is_home()) {
		wp_enqueue_style("compo_home");
		wp_enqueue_script("compo_home");
	}

	if (is_page('about')) {
		wp_enqueue_style("compo_about");
	}

	if (is_single()) {
		wp_enqueue_style("compo_single");
	}
}
add_action('wp_enqueue_scripts', 'compo_enqueue');
