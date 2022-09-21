<?php

//www.thowzif.com

//1. This is the Code Snippet to make Revolution Slider enable WPML support when Polylang is enabled. 
//2. Polylang has the required WPML compatibility functions to make Revslider work.
//3. Add this to your functions.php or using the Code Snippets Plugin.


// only run if Polylang is loaded
if ( function_exists('pll_languages_list') ) { 
	add_action('wpml_loaded', '__return_true', 10, 0);
	do_action('wpml_loaded');
}
