<?php
include_once("mylib.php");

// $sms = SMS::forge();
// echo $sms->queryBalance();

$db = KKDB::forge("localhost", "root", "", "test_host");
$db = KKDB::forge();
$sql = "select * from sms_quene order by hall_id";
$QueneRows = $db->fetchAll($sql);

$hall_id = 0;
foreach($QueneRows as $row){
	if($hall_id != $row["hall_id"]){
		$hall_id = $row["hall_id"];
		$teleacc = TeleAcc_Factory::forge($hall_id);
// 		echo "<pre>"; print_r($teleacc->test()); echo "</pre>";
	}
}






