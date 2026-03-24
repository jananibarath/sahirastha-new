<?php
/**
 * SahiRastha theme bootstrap.
 *
 * @package SahiRastha
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function sahirastha_setup(): void {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'sahirastha_setup' );
