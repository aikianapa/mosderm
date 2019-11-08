<?php

wbRouterAdd("/specialists/(:any)/(:any)",'/controller:form/form:specialists/mode:show/item:$1/tpl:specialist.php');
wbRouterAdd("/specialists/(:any)",'/controller:form/form:specialists/mode:show/item:404');

function specialists_list() {
    $app = new wbApp();
	$out=wbGetForm($_ENV["route"]["form"],$_ENV["route"]["mode"]);
	$flag=""; $where=""; $Item=array();

    $res = $app->json($_ENV["route"]["form"]);
	if (isset($_ENV["route"]["item"]) && $_ENV["route"]["item"]>"") {
        $res->where("branch","=",$_ENV["route"]["item"])->orWhere("office","=",$_ENV["route"]["item"]);
    }
    
    
    $Item["result"]=$res->get();
	$Item["_table"]=$_ENV["route"]["form"];
	$out->wbSetData($Item);
    return $out;
}

function specialistsAfterItemRead($Item) {
    if ($_ENV["route"]["mode"]==="show") {
        $Item["header"]=$Item["name"];
    }
    return $Item;
}
?>