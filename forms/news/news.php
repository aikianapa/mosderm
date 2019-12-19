<?php
wbRouterAdd("/news/(:any)/(:any)",'/controller:form/form:news/mode:show/item:$1');
wbRouterAdd("/news/(:any)",'/controller:form/form:news/mode:show/item:404');

function news_show() {
    $act = wbItemRead("pages","tpl_news");
    $item = wbItemRead();
    $act["header"]=$item["header"];
    $item=array_merge($act,$item);
    if (!isset($item["title"]) OR $item["title"]=="") {$item["title"]=$item["header"];}
	$out=wbGetTpl($act["template"]);
	$out->wbSetData($item);
	return $out;
}

function newsAfterItemSave($Item) {
		exec("wget -q -b {$_ENV['hostp']}/news/{$Item['id']}/".wbFurlGenerate($Item["header"])."?wbcache=update > null &");
		return $Item;
}

function newsAfterItemRead($Item) {
    if ($_ENV["route"]["item"] == "news" && isset($_POST["search_name"])) {
      //$Item["search"]=str_replace('"',"",strip_tags($Item["header"]." ".$Item["text"]));
    }
    return $Item;
}
?>
