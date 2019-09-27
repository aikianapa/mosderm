<?php
wbRouterAdd("/activity/(:any)/(:any)",'/controller:form/form:activities/mode:show/item:$1');
wbRouterAdd("/activity/(:any)",'/controller:form/form:activities/mode:show/item:404');

function activities_show() {
    $act = wbItemRead("pages","tpl_activity");
    $item = wbItemRead();
    $act["header"]=$item["header"];
    $item=array_merge($act,$item);
    if (!isset($item["title"]) OR $item["title"]=="") {$item["title"]=$item["header"];}
	$out=wbGetTpl($act["template"]);
	$out->wbSetData($item);
	return $out;
}


?>
