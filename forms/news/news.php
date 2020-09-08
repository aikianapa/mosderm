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
		$_ENV["_callback_{$Item['_table']}_{$Item['_id']}"] = "
			$.get('/news/{$Item['_id']}/".wbFurlGenerate($Item["header"])."?wbcache=update');
			$.get('/news?wbcache=update');
			$.get('/?wbcache=update');
		";
		return $Item;
}

?>
