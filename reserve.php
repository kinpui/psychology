<!doctype html>
<html>
<head>
<?php 
	include_once("include.php");
	$logUser = isLogin();	//登录用户
?>
<meta charset="utf-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=2)"> 
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=0)"> 
<link rel="stylesheet" type="text/css" href="css/all.css">
<title>关注心理健康 | 心理学</title>
</head>
<body>
<div style="width:100%; height:20px;"></div><!--使用一个空的div将页面最上层空出20px-->
<div class="wrap">
       <?php include_once("header.html");?>
      	<p class="reserveUser">当前用户是:&nbsp;<?php echo $logUser;?><a href="" >个人信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./lib/loginAction.php?act=loginOut" >注销</a></p>
        <p id="reserveAjaxMsg"></p>
        <div class="ms_lf">
        <!--预约填写-->
        <form action="" name="form" method="post" >
        <div class="reserveTable">
           <table id="listBody" width="100" border="0">
        	<thead class="listThead"><!--表格头部-->
            	<tr class="A">
                	<th width="120">星期/时间</th>
                    <th>星期一</th>
                    <th>星期二</th>
                    <th>星期三</th>
                    <th>星期四</th>
                    <th>星期五</th>  
                </tr>
            </thead>
            <tbody id="listBody" class="listBody"><!--表格主体-->
            	<tr height="70">
                	<td>上午（8:30-12：00）</td>
                    <td><input type="button" id="failure" class="<?php echo "0" ?>" value="预约章老师" name="1"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约陈老师" name="2" onClick="ajax()"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约陈老师" name="3"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约张老师" name="4"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约留老师" name="5"></td>
                
                <tr height="70" class="A">
                	<td>下午（14:30-17：00）</td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约陈老师" name="6"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约曾老师" name="7"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约章老师" name="8"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约章老师" name="9"></td>
                    <td><input type="button" class="<?php echo "1" ?>" value="预约章老师" name="10"></td>
                </tr>
            </tbody>
        </table>
        </div>
        </form>
        <p class="reserveOk">预约成功！请您于<span id="reserveTime"></span>分到行政楼三楼310室进行咨询</p>
        </div>
        
        <div class="ms_rt">
        <!-- 预约等候-->
       	<p class="title">心理专题<span class="more"><a href="#">more&nbsp;>></a></span></p>
 		<a href="" class="number">当前预约人数:</a>
        <ul class="wait">
        	<li>预约1</li>
        	<li>预约1</li>
        	<li>预约1</li>
        	<li>预约1</li>
        	<li>预约1</li>
        	<li>预约1</li>
        </ul>
        </div>
</div>
<script>
window.onload = function(){
	input();
}
function input(){
	var Element = document.getElementsByTagName("input");
	for(var i=0;l=Element.length,i<l;i++){
		Element[i].onclick = function(){
				var num = this.name;
				ajax(num);
		}
	}
}
function ajax(num){
	//需要POST的值，把每个变量都通过&来联接
	var postStr   = "num="+num;
	var xmlHttpReg = '';//声明异步请求对象
	if(window.ActiveXObject){//判断IE
		xmlHttpReg = new ActiveXObject("Microsoft.XMLHTTP");
	}else if(window.XMLHttpRequest){
		xmlHttpReg = new XMLHttpRequest();
	}
	if(xmlHttpReg!=null){//如果对象不为空
	xmlHttpReg.open("POST","ajax/reserveHandle.php",true);
	//定义传输的文件HTTP头信息
    xmlHttpReg.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlHttpReg.send(postStr);
	}else{
		alert('你的浏览器创建ajax对象实例失败');
		return　false;
	}
	xmlHttpReg.onreadystatechange = function(){
		if(xmlHttpReg.readyState == 4 && xmlHttpReg.status == 200){
			var arr = xmlHttpReg.responseText;
			var json = eval("("+arr+")");
			//alert(json.state);//访问json
			document.getElementsByClassName("reserveOk").item(this).style.display = "block";
			document.getElementById("reserveTime").innerHTML = json.date;
			hiddenWarn(5000)//在5秒后隐藏提醒信息
		}
	}
}
function hiddenWarn(time){
	setTimeout(function(){
			document.getElementsByClassName("reserveOk").item().style.display = "none";
		},time);
}
</script>
</body>
</html>
