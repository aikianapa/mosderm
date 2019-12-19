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
    if ($item["conf"] !== "on") {
        $out->find("#attention, #further, #unionpdfplan")->remove();
    }
	return $out;
}

function activitiesAfterItemSave($Item) {
		exec("wget -q -b {$_ENV['hostp']}/activity/{$Item['id']}/".wbFurlGenerate($Item["header"])."?wbcache=update > null &");
		return $Item;
}

?>
