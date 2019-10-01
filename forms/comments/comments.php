<?php
function commentsBeforeItemSave($Item) {
	if (!isset($Item["id"]) OR $Item["id"]=="_new") {$Item["id"]=$Item["_id"]=wbNewId();}
	if (!isset($Item["ip"])) {$Item["ip"]=$_SERVER["REMOTE_ADDR"];}
	if (!isset($Item["active"])) {$Item["active"]="off";}
	if (!isset($Item["reply"])) {$Item["reply"]="";}
	if (!isset($Item["date"]) OR $Item["date"]=="") {$Item["date"]=date("Y-m-d H:i:s");}
	$Item["text"]=htmlentities($Item["text"]);
	return $Item;
}
?>