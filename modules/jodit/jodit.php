<?php
use Adbar\Dot;

function jodit__init(&$dom) {
	if (isset($_ENV["route"]["params"][0])) {
		$mode=$_ENV["route"]["params"][0];
		$call="jodit__{$mode}";
		if (is_callable($call)) {$out=@$call();}
		die;
	} else {
		$out = wbFromFile(__DIR__ ."/jodit_ui.php");
        $ats = $dom->attributes();
        foreach( $ats as $atn => $atv ) {
            if (!strpos(" ".$atn,"data-wb")) {
                $out->find(".jodit")->attr($atn,$atv);
            }
        }
        $out->wbSetData();
        return $out;
	}
}


function ____jodit__init(&$dom) {
	if (isset($_ENV["route"]["params"][0]) AND $_ENV["route"]["mode"] !== "tree_getform") {
		$mode=$_ENV["route"]["params"][0];
		$call="jodit__{$mode}";
		if (is_callable($call)) {$out=@$call();}
		die;
	} else {
		$out = $dom->app->fromFile(__DIR__ ."/jodit_ui.php",true);
    $id = "jd-".$dom->app->newId();
		$textarea = $out->find(".jodit");
		$textarea->attr("id",$id);
    $ats = $dom->attributes();
    foreach( $ats as $at => $val) {
        if (!strpos(" ".$at,"data-wb")) {
            $textarea->attr($at,$val);
        }
    }

        $out->setValues($dom->data);
        $out->fetch();
				if ($dom->params->value) {
						$item = new Dot();
						$item->setReference($dom->data);
						$out->find(".jodit")->html($item->get($dom->params->value));
				}
        $out->find(".jodit")->append($dom->html());

        return $out->outerHtml();
	}
}
?>
