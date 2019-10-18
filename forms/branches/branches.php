<?php
wbRouterAdd("/branches/(:any)/order",'/controller:form/form:branches/mode:order/item:$1');
wbRouterAdd("/branches/(:any)/(:any)",'/controller:form/form:branches/mode:show/item:$1');

function branches_list() {
	$out=wbGetForm($_ENV["route"]["form"],$_ENV["route"]["mode"]);
	$flag=""; $where=""; $Item=array();
	if (isset($_ENV["route"]["item"]) && $_ENV["route"]["item"]>"") {
        $where='id = "'.$_ENV["route"]["item"].'" OR main = "'.$_ENV["route"]["item"].'"';
    }
    $Item["result"]=wbItemList($_ENV["route"]["form"],$where);
	$Item["result"]=wbArraySort($Item["result"],"id");
	$Item["_table"]=$_ENV["route"]["form"];
	$out->wbSetData($Item);
    return $out;
}

function branchesAfterItemRead($Item) {
    $Item["header"]=$Item["name"];
    return $Item;
}

function ajax_branches() {
    if (!count($_ENV["route"]["params"])) return json_encode(["error"=>true]);
    header('Content-Type: application/json; charset=utf-8');
    $out = "";
    if ($_ENV["route"]["params"][0] == "offices") {
        $tpl = $_POST["tpl"];
        $val = $_POST["value"];
        $app = new wbApp();
        $list = $app->json("branches")->where("type","=","office")->where("main","=",$val)->get();
        foreach($list as $item) {
            $str = $app->fromString($tpl);
            $str->fetch($item);
            $out.=$str."\n\r";
        }
        
    }
    return wbJsonEncode([
        "content"=>$out,
        "error"=>false
    ]);
}
?>