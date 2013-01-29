<?php
/*
Plugin Name: Extended sanitize filename
Plugin URI: 
Description: Replace and/or remove accents and other special characters in filenames on upload
Version: 1
Author: Anna Johansson
Author URI: http://annathewebdesigner.com
*/
add_filter( 'sanitize_file_name', 'extended_sanitize_file_name', 10, 2 );
function extended_sanitize_file_name( $filename ) {
	$sanitized_filename = remove_accents( $filename );
	return $sanitized_filename;
}