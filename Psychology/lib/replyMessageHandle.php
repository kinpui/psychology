<?PHP
header("Content-type: text/html; charset=utf-8"); 
/*处理留言回复信息*/	
$msg = json_decode($_POST['arr']);//得到数组。

//file_put_contents('test.log', $msg, true);  //写入文件做个测试
print_r($msg['msg']);
?>