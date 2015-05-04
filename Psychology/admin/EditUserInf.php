<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/g.css">
<!--
2014/10/9
编辑用户信息页
-->
<style>
.EditInfConnent{
	margin-left:20px;
	width:80%;
}
.teacherPic{
	border-radius: 10px;
    float: left;
    height: 300px;
    width: 250px;
}
.EditInfConnent p{
	display: block;
    margin-left: 270px;
    margin-top: 20px;
}
.EditInfConnent p input{
	border: 1px solid #ccc;
    border-radius: 5px;
    margin-left: 15px;
    padding: 10px;
    width: 250px;
}
#gender{
	text-align: center;
    width: 50px;
}
.EditInfConnent #recommend{
	border: 1px solid #ccc;
    border-radius: 5px;
    height: 200px;
    margin: 140px 0 0 -250px;
    padding: 20px;
    width: 560px;
}
.EditInfConnent .botton{
	margin-left:-50px;
}
.EditInfConnent span input{
	width:auto;
	cursor:pointer;
}
.EditInfConnent span{
	margin-left: 20px;
}

</style>
</head>
<header>
<?php $msg = ''; $_GET['T']==1?$msg="用户":$msg="专家";?>
<header class="header">
		<p>编辑<?php  echo $msg;?>简介</p>
        
</header>
<div class="EditInfConnent">
	<img class="teacherPic" src="../img/teacher/2.png">
    <p>姓名：<input type="text" value="Mr 张"></p>
    <p>姓别：<span>女<input name="gender" type="radio" value="0" checked></span><span>男<input name="gender" type="radio" value="1" checked></span></p>
    <p>邮箱：<input type="email" value="879724885@qq.com"></p>
    <p>Q&nbsp;Q：<input type="text" value="879724885"></p>
    
    <textarea id="recommend"  placeholder="输入关于该<? echo $msg?>的……"></textarea>
   <p class="botton"> 
   <input type="submit" id="confirm" value="✓">
   <input type="reset" id="reset" value="❌">
   </p>
</div>
<body>
</body>
</html>