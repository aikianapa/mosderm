<?php
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'eng';
}

function wbAfterInit() {
	$demo = false;
	if ($demo == true) {
		$dismod=array("filemanager","backup","update");
		$disform=array();
		if (
			$_ENV["route"]["controller"] == "module" AND in_array($_ENV["route"]["name"],$dismod)
			OR
			$_ENV["route"]["controller"] == "form" AND in_array($_ENV["route"]["form"],$disform)
		) {
			$out=wbGetTpl("disabled.php");
			$out->wbSetData();
			echo $out;
			die;
		}
		$dismod=array("save","rmitem");
		$disform=array("users","admin");
		if ($_ENV["route"]["controller"] == "ajax" AND in_array($_ENV["route"]["mode"],$dismod)
			AND in_array($_ENV["route"]["form"],$disform))  {
			echo json_encode(array(
				"error"=>1,
				"text"=>"Not available"
			));
			die;
		}
	}
}

function getChunkComments($list=[]) {
    return array_chunk($list,2);
}

function stdDate($date) {
    return date("d.m.Y",strtotime($date));
}

function stdDateTime($date) {
    return date("d.m.Y H:i",strtotime($date));
}


function sectionName($section) {
    $name = "";
    $tpl = wbGetTpl($section);
    $desc = $tpl->find("section,meta[data-name]");
    if (is_object($desc)) $name = $desc->attr("data-name");
    $section = str_replace(["section.",".inc.php"],"",$section);
    if ($name > "") {return "{$section}: {$name}";} else {return $section;}
}

function sectionData($section,$selector) {
    $text = "";
    $tpl = wbGetTpl($section);
    $desc = $tpl->find($selector);
    if (is_object($desc)) $text = $desc->text();
    return $text;
}
?>
