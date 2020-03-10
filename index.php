<?php
	require_once __DIR__ . '/classes/Product.php';
	require_once __DIR__ . '/classes/Computer.php';
	require_once __DIR__ . '/classes/ComputerDesktop.php';
	require_once __DIR__ . '/classes/ComputerLaptop.php';

	// this is a warehouse
	// computer
	$macbookPro = new ComputerLaptop('MacBook Pro 13', '2000$', '2015', 'macOS 10.14.6');
	$macbookPro->screenSize = 13;
	var_dump($macbookPro);
	var_dump($macbookPro->age(2020));

	$thinkpad = new ComputerLaptop('ThinkPad X250', '500$', '2019', 'Manjaro 19.0');
	$thinkpad->weight = '2 KG';
	var_dump($thinkpad);
	var_dump($thinkpad->age(2020));
	
	// smartphone

	// movie

	// music

?>
