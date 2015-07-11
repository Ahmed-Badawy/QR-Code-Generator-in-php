<?php 

	function qr_gene($text,$size=200,$padding=10){
		require_once("vendor/autoload.php");
		header("Content-Type: image/png");

		$qr = new Endroid\QrCode\QrCode();
		$qr->setText($text);
		$qr->setSize($size);
		$qr->setPadding($padding);
		$qr->render();
		return $qr;
	}

	$text = $_GET['text'];
	$size = isset($_GET['size']) ? $_GET['size'] : 200;
	$padding = isset($_GET['padding']) ? $_GET['padding'] : 10 ;

	qr_gene($text,$size,$padding);

?>