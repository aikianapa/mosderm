<?php
wbRouterAdd("/services-find",'/controller:form/form:products/mode:find/item:find');
wbRouterAdd("/products/(:any)/(:any)",'/controller:form/form:products/mode:show/item:$1/tpl:service.php');

function products_vitrina() {
	$tree=wbTreeRead("products_category");
	$tree=wbTreeFindBranchById($tree["tree"],$_ENV["route"]["item"],"category");
	$lang=wbArrayWhere($tree["data"]["lang"],'lang = "'.$_SESSION["lang"].'"');
	$header=$lang[0]["value"];
	$where=wbTreeWhere("products_category",$_ENV["route"]["item"],"category");
	$where='active = "on" AND ('.$where.')';
	$out=wbGetTpl("shop-grid.php");
	$out->wbSetData(array("_where"=>$where,"header"=>$header));
	return $out;
}

function productsAfterItemSave($Item) {
		$tree=wbTreeRead("products_category");
		$tree=wbTreeFindBranchById($tree["tree"],$Item['category'],"category");
		$header=$tree["name"];
		$_ENV["_callback_{$Item['_table']}_{$Item['_id']}"] = "
			$.get('/products/{$Item['category']}/".wbFurlGenerate($header)."?wbcache=update');
			$.get('/services-paid?wbcache=update');
		";
		return $Item;
}

function productsAfterItemRemove($Item) {
		$_ENV["_callback_{$Item['_table']}_{$Item['_id']}"] = "
			$.get('/services-paid?wbcache=update');
		";
	return $Item;
}


function productsAfterItemRead($Item) {
	if ($_ENV["route"]["mode"] == "show") {
		$Item=wbItemToArray($Item);
		$Item["header"]=$Item["name"];
	}
	return $Item;
}

function  products_find() {
    $where='active = "on"';
    if (isset($_POST["service_name"]) AND $_POST["service_name"]>"") $where.= 'AND name LIKE "'.$_POST["service_name"].'"';
    if (isset($_POST["category_id"]) AND $_POST["category_id"]>"") $where.= 'AND category LIKE "'.$_POST["category_id"].'"';
    if (isset($_POST["branch_id"]) AND $_POST["branch_id"]>"") $where.= 'AND branches LIKE "'.$_POST["branch_id"].'"';
    $out=wbGetTpl("services-find.php");
    if (trim($_POST["service_name"]) == "") $where = 'active = "__empty"';
    $Item=[
        "header"=> $out->find("#paid-desc")->attr("data-name"),
        "where" => $where
    ];
    $out->wbSetData($Item);
    $out->find("#question")->attr("id","question-2");
    $out->find(".specialists__forms > h3")->remove();
    return $out;
}
?>
