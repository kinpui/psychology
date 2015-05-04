<?php
/*
预约Ajax处理
*/
$data = $_POST['num'];
if($data){
$returnText = array();
$returnText['date'] = "12:30";
$returnText['state'] = 1;//为1是成功为0是失败
$returnText = json_encode($returnText);
echo $returnText;
}
?>