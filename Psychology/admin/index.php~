<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>心理咨询|Admin</title>
<link rel="stylesheet" href="../css/g.css" type="text/css">
<link rel="stylesheet" href="../css/adminStyle.css" type="text/css">
<style>a{color:#fff;}a:hover{color:#03C;}</style>
</head>
<?php
	include("../include.php");	
	isLogin();
?>
<body>
<header class="main">
	<p class="headerTitle">心理咨询|Admin</p>
  	 <div class="sreach">
        	<form action="#" name="search" id="search">
            	<input name="text" type="text" id="text">
                <input name="sub" type="submit" id="sub" value="搜索" class="but"> 
            </form> 
     </div>
</header>
<div class="user menuBg">
	<img class="headerImg" src="../img/admin/per.jpeg"><a class="welcome" href="#">welcome back admin</a>
    <div class="buttons">
    	<ul class="button">
        	<li>
            	消息
            	<p class="pip">0<!--利用js判断此处  为0 则不显示这个层--></p>
            </li>
            <li>
            	提醒
            	<p class="pip">6</p>
            </li>
            <a href="../index.php" target="_blank"><li>
            	心理首页
            </li></a>
        	<li>Logout</li>
        </ul>    
    </div>
</div>
<div class="menu">
	<ul class="menuLeft">
		   	<a onClick="openUrl('articleList.php')"> <li><span class="icon">👥</span>文章管理</li></a>
        <a href='publish.html' target="_self"> <li><span class="icon">📄</span>发布文章</li></a>
        <a onClick="openUrl('messageBoard.php')"> <li><span class="icon"></span>留言查看</li></a>
        <a onClick="openUrl('userInf.php?T=1')"> <li><span class="icon">👤</span>用户信息</li></a>
        <a onClick="openUrl('userInf.php?T=0')"> <li><span class="icon"></span>专家介绍</li></a>
        <a onClick="openUrl('onDuty.php')"> <li><span class="icon">📋</span>值日安排</li></a>
        <a onClick="openUrl('feedback.php')"> <li><span class="icon">✉</span>问题反馈</li></a>
    </ul>
</div>
<div id="connent" name="connent">
<!-- 显示内容 -->
</div>
<script>
</script>
<script src="../js/adminAll.js"></script>
<script>

window.onload = function(){
	ajax = new ajax();	//实例化ajax函数
}
</script>
<!--ueditor编辑器使用js文件-->
</body>
</html>
