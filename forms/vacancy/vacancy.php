<?php
    wbRouterAdd("/vacancy/(:any)/(:any)",'/controller:form/form:vacancy/mode:show/item:$1/tpl:vacancy.php');

function vacancyAfterItemRead($Item) {
    $Item["header"] = $Item["name"];
    return $Item;
}

function vacancyAfterItemSave($Item) {
		$_ENV["_callback_{$Item['_table']}_{$Item['_id']}"] = "
			$.get('/vacancy/{$Item['id']}/".wbFurlGenerate($Item["name"])."?wbcache=update');
			$.get('/vacancy?wbcache=update');
		";
		return $Item;
}

?>
