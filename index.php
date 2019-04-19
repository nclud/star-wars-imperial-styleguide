<?php
include 'setup.php';

$color_context = array(
	'colors' => array(
		array(
			'hex'  => '#BC1E22',
			'name' => 'Imperial Red',
		),
		array(
			'hex'  => '#394A59',
			'name' => 'Imperial Blue',
		),
		array(
			'hex'  => '#64696C',
			'name' => 'Sith Gray',
		),
		array(
			'hex'  => '#556567',
			'name' => 'Dagobah Moss',
		),
		array(
			'hex'  => '#FFFFFF',
			'name' => 'Hoth White',
		),
		array(
			'hex'  => '#000000',
			'name' => 'Galaxy Black',
		),
	),
);
$color_section = $twig->render( 'color-section.twig', $color_context );

$typography_context = array();
$typography_section = $twig->render( 'typography-section.twig', $typography_context );

$context = array(
	'color_section'      => $color_section,
	'typography_section' => $typography_section,
);
echo $twig->render( 'index.twig', $context );
