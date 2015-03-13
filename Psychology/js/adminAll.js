// JavaScript Document
//后台页面js文件
// JavaScript Document
//用户留言页
/*
*封装ajax方法
*返回ajax对象
*/
function ajax(){
	var xml = '';
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
	}else if(window.ActiveXObject){
			try{
				xml = new ActiveXObject("MSxml2.XMLHTTP");
			}catch(e){
				xml = new ActiveXObject("Microsoft.XMLHTTP");
			}
	}else{
		alert("你的浏览器不支持ajax,请下载使用 chrome浏览器,以获得最佳体验");
	}
	return xml;
}
/*
*	主页打开菜单函数
*	将url的连接在element中打开
*
*/
function openUrl(url){
	var url = url;
	var writeBody = document.getElementById("connent");
	ajax.open("GET",url,true);
	ajax.send();
	ajax.onreadystatechange = function(){
		if(ajax.status == 200 && ajax.readyState == 4){
			writeBody.innerHTML = ajax.responseText;
		}
	}
	var ue = UE.getEditor('container');
}

function onclickBut(){
var But = document.getElementsByClassName("but");
for(var i = 0;l=But.length,i<l;i++){
	But[i].onclick = function(){
		var msg = this.parentNode.getElementsByClassName("text")[0].value;//获取输入的回复
		var Id = this.name;//留言Id
		//ajax(msg,Id);
	}
}
}/*
function ajax(msg,id){
	var arr = {"msg":msg,"id":id};//打包数组
	xmlHttp.open("POST","../ajax/replyMessageHandle.php",true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlHttp.send("arr="+arr);//传出数组
	xmlHttp.onreadystatechange = function(){//回调函数
		if(xmlHttp.status == 200&&xmlHttp.readyState == 4){
			alert(xmlHttp.responseText);
		}
	}
}*/