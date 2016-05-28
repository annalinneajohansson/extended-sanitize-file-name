<?php
/*
Plugin Name: Extended sanitize filename
Plugin URI: https://github.com/annalinneajohansson/extended-sanitize-file-name/
Description: Replace and/or remove accents and other special characters in filenames on upload
Version: 1
Author: Anna Johansson
Author URI: http://annalinneajohansson.com
*/
add_filter( 'sanitize_file_name', 'extended_sanitize_file_name', 10, 2 );
function extended_sanitize_file_name( $filename ) {
	return remove_accents( $filename );
}
