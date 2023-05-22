<?php 


function monochrome_tech_register_styles() {
	// First, add the style to the 
	wp_enqueue_style("monochrome-tech-(Theme Name)-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
}

add_action('wp_enqueue_scripts', 'monochrome_tech_register_styles'/*Should have the same value as the name of the function above*/);

?>