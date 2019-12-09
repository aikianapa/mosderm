<?php
wbRouterAdd("/search",'/controller:form/form:pages/mode:search/item:search');

function pages_edit() {
	$out=wbGetForm("pages","edit");
	$id=$_ENV["route"]["item"];
	$Item=wbItemRead("pages",$id);
	if ($id=="_new") {
		$Item["id"]=wbNewId();
		$Item["template"]=$_ENV["settings"]["template"];
	}
	$Item["tpllist"]=wbListTpl();
	$Item=wbCallFormFunc("BeforeItemEdit",$Item);
	$out->wbSetData($Item);
	$options=$out->find("select[name=template] option");
	foreach($options as $opt) {
		if (strpos($opt->attr("value"),".inc.")) $opt->remove();
	}
	return $out;
}

function pagesAfterItemRead($Item=null) {
    if ($Item!==null) {
        if ($_ENV["route"]["mode"]=="show") {
            if (!isset($Item["title"]) OR $Item["title"]=="") {$Item["title"]=$Item["header"];}
            if ($Item["title"]=="") {$Item["title"]=$_ENV["settings"]["header"];}
        }
    }
	return $Item;
}

function pages_search() {
    $out=wbGetTpl("site-find.php");
    $result = [];
    $pages = searchTable("pages",["header","text"],["header","text"]);
    $result = array_merge($result, $pages);

    $news = searchTable("news",["header","text"],["header","text"]);
    $result = array_merge($result, $news);

    $acts = searchTable("activities",["header","text"],["header","text"]);
    $result = array_merge($result, $acts);

    $spec = searchTable("specialists",["name","descr","text","spec","phone"],["name","descr","text"]);
    $result = array_merge($result, $spec);

    $vacancy = searchTable("vacancy",["name","descr","text"],["name","descr","text"]);
    $result = array_merge($result, $vacancy);
    $out->wbSetData(["result"=>$result,"header"=>"Результаты поиска"]) ;
    return $out;
}

function searchTable($table="pages",$flds=["text"],$ret=["text"]) {
    $result = [];
    if (!isset($_POST["search"]) OR trim($_POST["search"]) == "") return $result;
    $app = new wbApp();
    $find = explode(" ",mb_strtolower($_POST["search"]));
    $items = $app->json($table)->where("active","=","on")->get();
    $_ENV["sitesearchkeys"]=["header","text","descr"];
    $_ENV["sitesearchkeys"]=$flds;
    $_ENV["sitesearchretn"]=$ret;
    foreach($items as $item) {
        $_ENV["sitesearchtext"]="";
        $_ENV["sitesearchcont"]="";
        $_ENV["sitesearchhead"]=$ret[0];
        array_walk_recursive($item,function($item,$key){
            if (in_array($key,$_ENV["sitesearchkeys"])) $_ENV["sitesearchtext"].= " ".strip_tags($item);
            if (in_array($key,$_ENV["sitesearchretn"]) AND $_ENV["sitesearchhead"] !== $key) $_ENV["sitesearchcont"].= " ".strip_tags($item);
            if ($_ENV["sitesearchhead"] == $key) $_ENV["sitesearchhead"]=strip_tags($item);
        });
        $_ENV["sitesearchtext"]=implode(" ",array_unique(explode(" ",mb_strtolower($_ENV["sitesearchtext"]))));

        $res = 0;
        foreach($find as $word) {
            if ($word > "" AND strpos(" ".$_ENV["sitesearchtext"],$word)) $res++;
        }
				if ($res == count($find)) $res = true;
        if ($res === true) {
            $result[] = [
                 "id" =>  $item["id"]
                ,"_table" => $table
                ,"header" => $_ENV["sitesearchhead"]
                ,"text" => trim($_ENV["sitesearchcont"])
            ];
        }
    }
    return $result;
}


?>
