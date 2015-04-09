<?php
//验证登录页
	include_once("../include.php");
	$user = $_POST['user'];
	$pwd  = $_POST['pwd'];
	$result = selectOne("select * from admin where userName = '$user'&&userPwd = '$pwd'");
	
	if($result){
		$_SESSION['user'] = $result['userName'];	//开启session会话
		$statur = 0;
	}else{
		$name = selectOne("select userName from admin where userName = '$user'");	
		if(!$name){
			$statur = 1;
		}else{
			$statur = 2;
		}
	}
	echo  $statur;
//statur 三种状态   0 登录成功  1 用户名未注册  2 密码错误
?>
