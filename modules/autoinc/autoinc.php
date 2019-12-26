<?php
/* модуль создаёт, сохраняет и возвращает autoincrement значения
 * может применяться для создания уникальных идетификаторов
 * значеня сохраняются в именованных полях файла autoinc.json
 * в локальной дирректории модуля (необходимо выставить права записи) */

function autoinc_init() {}

function autoinc_id($dataset="common",$min=0) {
	$file = __DIR__ . "/autoinc.json";
    $fp = fopen($file, 'c+');
    flock($fp, LOCK_SH);
    $json = json_decode(file_get_contents($file),true);
    if (!isset($json[$dataset])) {
		$json[$dataset]=$min;
	} else {
		if ($json[$dataset]<$min) {$json[$dataset]=$min;} else {$json[$dataset]++;}
	}
	file_put_contents($file,wbJsonEncode($json));
    flock($fp, LOCK_UN);
    fclose($fp);
    return $json[$dataset];
}

?>
