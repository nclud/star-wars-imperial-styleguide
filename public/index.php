<?php
require 'setup.php';

$intro_context = array();
$intro_section = $twig->render( 'intro-section.twig', $intro_context );

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

$voice_and_tone_context = array();
$voice_and_tone_section = $twig->render( 'voice-and-tone-section.twig', $voice_and_tone_context );

$logo_context = array();
$logo_section = $twig->render( 'logo-section.twig', $logo_context );

$context = array(
	'logo'                   => get_svg( 'imperial-logo' ),
	'intro_section'          => $intro_section,
	'voice_and_tone_section' => $voice_and_tone_section,
	'color_section'          => $color_section,
	'typography_section'     => $typography_section,
	'logo_section'           => $logo_section,
);
echo $twig->render( 'index.twig', $context );
