<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>logo</title>
<link rel="stylesheet" type="text/css" href="css/all.css">
<?php
	include_once("lib/default.php");
?>
</head>
<style>
	body{
		/*background:url(img/Image/%E6%98%9F%E7%A9%BA3.jpeg) no-repeat;
		*/
		background: #0CC url(img/%E6%9E%81%E7%AE%802.jpg) no-repeat;
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
    	<p><input name="user" required id="user" type="text" placeholder="用户名"><img class="lg_icov" src="img/logo/user.png" width="32" height="33"></p>
        <p><input name="pwd" required id="pwd" type="password" placeholder="密码"><img class="lg_icov" src="img/logo/lock.png" width="32" height="33"></p>
        <p><button name="sub" id="sub"  >登录</button></p>
    </div>
</div>
<script>
window.onload = function(){
	document.getElementsByTagName("button")[0].onclick = function(){
		var sendData = '';//传送的数据
		
		var data = document.getElementsByTagName("input");
		for(var i = 0;l = data.length,i<l;i++){
			sendData = sendData + data[i].id+'='+data[i].value+"&"
			//sendData1 = "user="+123+"&pwd="+'456';
		}
		animation(0)
		ajax(sendData);
		//alert(sendData+"  \\ "+sendData1);
	}
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
	
	xmlHttp.open("POST","ajax/verificationLogin.php",true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlHttp.send(data);
	xmlHttp.onreadystatechange = function(){//回调函数
		if(xmlHttp.status == 200&&xmlHttp.readyState == 4){
				var statur = xmlHttp.responseText;
				if(statur == 0){
					window.location.href = 'reserve.php';			
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
//用户等待时动画
function animation(){
		var statu = 0;
		var e = document.getElementById("sub");
		e.innerHTML = 'Loading……';
		var move = setInterval(function(){
			if(statu){
				e.style.width = 250+'px';
				statu = 0;
			}else{
				e.style.width = 310+'px';
				statu = 1;
			}
		},800);
	
}
</script>
</body>
</html>
