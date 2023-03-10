<?php

return [
	//	Panel
	'install' => true,
	'slug'    => env('KIRBY_PANEL_SLUG', 'panel'),

	//	Debug
	'debug'   => env('KIRBY_DEBUG', false),

	//	Blocks
	'blocks'  => require_once 'blocks.php'
];
