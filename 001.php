<?php
include_once("mylib.php");

$db = KKDB::forge();


/*
$data["hall_id"] = "33";
$data["telecom_id"] = "1";

for($i=0; $i<10; $i++){
	$data["acc"] = str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
	$data["pwd"] = str_shuffle("0123456789");
	
	$sql = sprintf("insert into tele_acc set %s", KKString::sql_set($data));
	$db->query($sql);
	
}
*/
/*
$nameArray = array("admin", "nelson", "draco", "xinchin", "freeman", "boss", "root");
$phoneArray = array("0963", "0932", "0911");
foreach($nameArray as $idx => $name){
	$data["name"] = $name;
	$data["acc"] = $name;
	$data["pwd"] = str_shuffle("0123456789");
	$data["email"] = $name . "@jinchumi.com";
	$data["phone"] = $phoneArray[$idx%3] . "-" . substr(str_shuffle("0123456789"), 0, 6);
	$sql = sprintf("insert into member set %s", KKString::sql_set($data));
	$db->query($sql);
}
*/
/*
$sql = "select * from member";
$rows = $db->fetchAll($sql);

foreach($rows as $row){
	$data["hall_id"] = $row["hall_id"];
	$data["mid"] = $row["mid"];
	$data["validateNum"] = substr(str_shuffle("0123456789"), 0, 4);
	$db->query(sprintf("insert into sms_quene set %s", KKString::sql_set($data)));
}
*/

$view = KKView::forge("view/001.html");
echo $view;