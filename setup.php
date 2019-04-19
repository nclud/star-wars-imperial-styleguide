<?php
if ( file_exists( $composer_autoload = __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( $composer_autoload );
}
$twig_path = __DIR__ . '/twig';
$twig_loader = new \Twig_Loader_Filesystem( $twig_path, '/' );
$twig = new \Twig_Environment( $twig_loader, array(
	'debug'      => false,
	'autoescape' => false,
) );
