<?php

wbRouterAdd("/specialists/(:any)/(:any)",'/controller:form/form:specialists/mode:show/item:$1/tpl:specialist.php');
wbRouterAdd("/specialists/(:any)",'/controller:form/form:specialists/mode:show/item:404');

function specialists_list() {
	$out=wbGetForm($_ENV["route"]["form"],$_ENV["route"]["mode"]);
	$flag=""; $where=""; $Item=array();
	if (isset($_ENV["route"]["item"]) && $_ENV["route"]["item"]>"") {
        $where='branch = "'.$_ENV["route"]["item"].'"';
        $flag="category";
    }
    $Item["result"]=wbItemList($_ENV["route"]["form"],$where);
	$Item["result"]=wbArraySort($Item["result"],"id");
	$Item["_table"]=$_ENV["route"]["form"];
	$out->wbSetData($Item);
	//if ($flag=="category") {$out->replaceWith($out->find("#{$_ENV["route"]["form"]}List .list")->html());}
    return $out;
}

function specialistsAfterItemRead($Item) {
    if ($_ENV["route"]["mode"]==="show") {
        $Item["header"]=$Item["name"];
    }
    return $Item;
}
?>