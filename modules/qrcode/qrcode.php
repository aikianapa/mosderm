<?php
require __DIR__ . '/vendor/autoload.php';
use Endroid\QrCode\QrCode;

function qrcode_init() {
	if (isset($_ENV["route"]["params"][0])) {
		$mode=$_ENV["route"]["params"][0];
		$call="qrcode_{$mode}";
		if (is_callable($call)) {$out=@$call();} else {
			qrcode_404();
		}
		die;
	} else {
		qrcode_404();
	}
}

function qrcode_get() {
	$hash = $_ENV["route"]["params"][1];
	$qrCode = new QrCode($_ENV["route"]["hostp"].'/spravki/check/'.$hash);
	header('Content-Type: '.$qrCode->getContentType());
	echo $qrCode->writeString();
}

function qrcode_404() {
	header("HTTP/1.0 404 Not Found");
			$tpl = wbGetTpl("404.php");
			$item = wbItemRead('pages','404');
			$item['_form'] = 'pages';
			$item['_item'] = '404';
			echo $tpl->wbSetData($item);
			die;
}

?>
