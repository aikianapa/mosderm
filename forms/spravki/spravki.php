<?php


function spravkiBeforeItemSave ($item) 
{
	if (substr($item['id'],0,4) !== 'spr-') {
		$hash = [
			$item['fullname'],
			$item['birthdate'],
			$item['gender'],
			$item['diagnose'],
			$item['date'],
			$item['igm'],
			$item['igg'],
			$item['result'],
			$item['doctor'],
			$item['_created']
		];
		$hash = md5(implode('_', $hash));
        $item['id'] = $item['_id'] = 'spr-'.$hash;
	}
    
    return $item;
}

function spravki_check() {
	$out = wbGetForm();
	$out->wbSetData();
	echo $out;
	die;
}

function spravkiBeforeItemShow($item) {
	if ($_ENV['route']['form'] == 'spravki' && $_ENV['route']['mode'] == 'check') {
		$item['fullname'] = get_starred($item['fullname']);
	}
	$item['birthyear'] = date('Y',strtotime($item['birthdate']));
	return $item;
}

/*
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

function specialistsAfterItemSave($Item) {
		$_ENV["_callback_{$Item['_table']}_{$Item['_id']}"] = "
			$.get('/specialists/{$Item['id']}/".wbFurlGenerate($Item["name"])."?wbcache=update');
			$.get('/specialists?wbcache=update');
			$.get('/?wbcache=update');
		";
		return $Item;
}
*/
?>
