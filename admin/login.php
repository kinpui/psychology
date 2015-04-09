<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆后台</title>
<link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<style>
	body{
		background: #0CC url(../img/%E6%9E%81%E7%AE%802.jpg) no-repeat;
		background-attachment:fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;	
	}
	body:hover{
		cursor:pointer;
		margin-top:5px;
	}
</style>
<body>
<div class="logo">
	<div id="form">
    	  <p><input name="user" required id="user" type="text" placeholder="用户名"><img class="lg_icov" src="../img/logo/user.png" width="32" height="33"></p>
        <p><input name="pwd" required id="pwd" type="password" placeholder="密码"><img class="lg_icov" src="../img/logo/lock.png" width="32" height="33"></p>
        <p><button name="sub" id="sub" onclick="sub()">✓</button></p>
    </div>
</div>
<script>
function sub(){
	//var data =new Array();
	var data = "user="+document.getElementById("user").value+'&pwd='+document.getElementById("pwd").value;
	ajax(data);
}

function ajax(data){
	var xmlHttp = '';
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("MSxml2.XMLHTTP");
		}catch(e){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
		if(xmlHttp.overrideMimeType){
			xmlHttp.overrideMimeType("text/xml");	//设置MIME类型
		}
	}else{
		alert("你的浏览器不支持ajax,请下载使用 chrome浏览器,以获得最佳体验");
	}
	xmlHttp.open("POST","../lib/verificationLogin.php",true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlHttp.send(data);
	xmlHttp.onreadystatechange = function(){//回调函数
		if(xmlHttp.status == 200&&xmlHttp.readyState == 4){
				var statur = xmlHttp.responseText;
				if(statur == 0){
					window.location.href = 'index.php';			
				}else if(statur == 1){
					alert("用户名未注册");
					clearInterval("move");
				}else{
					alert("密码错误");
					clearInterval("move");
				}
		}
	}
}
</script>
</body>
</html>
