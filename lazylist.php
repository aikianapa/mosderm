<?php
$files = scandir(__DIR__."/uploads/pages/home/lazyslide");
$lazylist = [];
foreach($files as $file) {
	if (strtolower(substr($file,-4)) == ".jpg") {
		$lazylist[] = ["img"=>$file];
	}
}
print_r($lazylist);

?>
