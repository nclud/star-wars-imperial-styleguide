<?php
// Load composer's autoload file
if ( file_exists( $composer_autoload = __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( $composer_autoload );
}

// Setup and confgiure Twig
$twig_path = __DIR__ . '/twig';
$twig_loader = new \Twig_Loader_Filesystem( $twig_path, '/' );
$twig = new \Twig_Environment( $twig_loader, array(
	'debug'      => false,
	'autoescape' => false,
) );

/**
 * Get an SVG file for injecting into HTML
 *
 * @param  string  $filename Filename of the SVG to get
 * @return string SVG markup
 */
function get_svg( $filename = '' ) {
	$role_attr = 'image';
	$css_class = 'svg svg-' . $filename;
	$path = 'img/' . $filename . '.svg';
	if ( file_exists( $path ) ) {
		// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$svg = file_get_contents( $path );
		// Strip the width and height attributes so size can be scaled via CSS font-size
		$svg = preg_replace( '/(width|height)="[\d\.]+"/i', '', $svg );
		$svg = str_replace( '<svg ', '<svg class="' . $css_class . '" role="image" ', $svg );
		return $svg;
	}
}
