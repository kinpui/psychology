<?php
@$act = $_REQUEST['act'];	//	接受action动作
if($act == 'loginOut'){
	loginOut();
}


//验证是否已登录
function isLogin(){
	if(!$_SESSION['user']){
		echo "<script language=\"javascript\">window.location.href='login.php'</script>";    
	}else{
		return $_SESSION['user'];
	}
}

//注销用户
function loginOut(){
	unset($_SESSION['user']);	//删除sission 中登录信息
	header("location:http://localhost/Psychology/index.php");
}
?>
