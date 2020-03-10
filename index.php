<?php
	require_once __DIR__ . '/classes/Product.php';
	require_once __DIR__ . '/classes/Album.php';
	require_once __DIR__ . '/classes/Computer.php';
	require_once __DIR__ . '/classes/ComputerDesktop.php';
	require_once __DIR__ . '/classes/ComputerLaptop.php';
	require_once __DIR__ . '/classes/Movie.php';
	require_once __DIR__ . '/classes/Smartphone.php';

	// this is a warehouse
	$currentYear = 2020;

	// computer
	$macbookPro = new ComputerLaptop('MacBook Pro 13', '2000$', 2015, 'macOS 10.14.6');
	$macbookPro->screenSize = 13;
	var_dump($macbookPro);
	echo $macbookPro->age($currentYear);

	$thinkpad = new ComputerLaptop('ThinkPad X250', '500$', 2019, 'Manjaro 19.0');
	$thinkpad->weight = '2 KG';
	var_dump($thinkpad);
	echo $thinkpad->age($currentYear);
	
	// smartphone
	$iphoneSe = new Smartphone('iPhone SE', '300$', 2016);
	$iphoneSe->description = 'Last good small smartphone...';
	$iphoneSe->battery = '1.624 mAh';
	var_dump($iphoneSe);
	echo $iphoneSe->age($currentYear);

	// movie
	$backToTheFuture = new Movie('Back To The Future', '12$', 1985);
	$backToTheFuture->protagonist = 'Marty McFly';
	var_dump($backToTheFuture);
	echo $backToTheFuture->age($currentYear);

	// album
	$theDarkSideOfTheMoon = new Album('The Dark Side Of The Moon', '9.99$', 1973);
	$theDarkSideOfTheMoon->artist = 'Pink Floyd';
	$theDarkSideOfTheMoon->genre = 'Progressive rock';
	var_dump($theDarkSideOfTheMoon);
	echo $theDarkSideOfTheMoon->age($currentYear);
?>
