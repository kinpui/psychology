<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=2)"> 
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=0)"> 
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/g.css" type="text/css">
<script src="js/index.js"></script>
<title>关注心理健康 | 心理学</title>
</head>
<body>
<div class="headerWarp">
<div class="header">
        <ul class="menu">
        	<li id="logoText"><p>技师学院心理中心</p></li>
        	<li><a href="index.php">首页</a></li>
            <li><a href="reserve.php">咨询预约</a></li>
        </ul>
        
        <div class="sreach">
        	<form id="search" name="search" action="#">
            	<input type="text" id="text" name="text">
                <input type="submit" class="but" id="sub" name="sub" value="搜索"> 
            </form> 
        </div>
			<ul id="headerMenu">
				  <a href="more.php?t=xlzt"><li style="background:#66CCCC">心理专题</li></a>
					<a href="more.php?t=xlcs"><li style="background:#CCFF66">心理测试</li></a>
					<a href="more.php?t=game"><li style="background:#FF99CC">心理游戏</li></a>
					<a href="more.php?t=video"><li style="background:#666699">心灵短片</li></a>
					<a href="more.php?t=zyx"><li style="background:#FF9900">治愈系</li></a>
			</ul>
</div>
</div>
</div>
<style>
.showImg{
	overflow:hidden;
}
.indexRun{
	position:relative;
}
.showImg .indexRun li img{
	width:100%;
	height:600px;
	position:relative;
}
.ctrlBut{
	width:100%;
	display:block;
	position:absolute;
	text-align:center;
	color:#fff;	
}
.ctrlBut li{
	float:left;
	width:33.33%;
	cursor:pointer;
	font-size:90px;
	line-height:14px;
	height:20px;
	transition:color 1.5s;
	-webkit-transition:color 1.5s;
	-o-transition:color 1.5s;
	-moz-transition:color 1.5s;
	-ms-transition:color 1.5s;
}
.showImg .indexRun li p{
	position:absolute;
	z-index:1;
	color:#FFF;
	font-size:60px;
	margin-left:300px;
	margin-top:300px;
	transition:all 0.5s ease-in-out;
	display:none;
}
</style>
<?PHP
	include_once('include.php');
	$data = data();
?>
<div class="showImg">
	<ul class="indexRun">
	   	<li><p class="runText">九型人格测试</p><img src="img/indexRun/1.jpg"></li>
			<li><p class="runText">九型人格测试八成狗</p><img src="img/indexRun/2.jpg"></li>	
    	<li><p class="runText">九型人格测试六</p><img src="img/indexRun/3.jpg"></li>
</div>
<ul class="ctrlBut">
	<li style="background:rgb(254,67,101)">·</li>
	<li style="background:rgb(252,157,154)">··</li>
	<li style="background:rgb(249,205,173)">···</li>
</ul>
<div class="wrap">             
	<div class="indexMessage">
    	<!--右边部分-->
       	<div class="ms_lf">
          <div class="xlcs">
            <!--心理测试-->
            	<p class="title">心理测试<span class="more"><a href="more.php?t=xlcs">more&nbsp;>></a></span></p>
                <ul>
<?php 
	$text = psyText();
while($textData = mysql_fetch_assoc($text)){
?>
										<li>
									<img class="img_an" src=<?php echo $textData['articleImg']?> >
									<a href="readArticle.php?id=<?php echo $textData['id']?>" title="<?php echo $textData['title']?>" class="xl_tt xlcs_t"><?php echo $textData['title']?></a>
										</li>
<?php } ?>
                </ul>
            </div>
            
          <div class="xlyy">
            <!--心理应用-->
            	<ul>
                	<li>
                		<!--治愈系作品-->
                        <p class="title">治愈系作品<span class="more"><a href="more.php?t=zyx">more&nbsp;>></a></span></p>
												<img class="xlyy_img img_an" src=<?php echo $data['zyx']['articleImg']?> width="210" height="130">
												<a class="xl_tt"  title="<?php echo $data['zyx']['title']?>" href="readArticle.php?id=<?php echo $data['zyx']['id']?>"><?php echo $data['zyx']['title']?></a>
                    </li>
                    
                    <li>
                		<!--心理短片-->
                        <p class="title">心理短片<span class="more"><a href="more.php?t=video">more&nbsp;>></a></span></p>
                        <img class="xlyy_img img_an" src=<?php echo $data['video']['articleImg']?> width="210" height="130">
											<a class="xl_tt"  title="<?php echo $data['video']['title']?>" href="readArticle.php?id=<?php echo $data['video']['id']?>"><?php echo $data['video']['title']?></a>
                    </li>
                    
                    <li>
                		<!--心理小游戏-->
                        <p  class="title">心理小游戏<span class="more"><a href="more.php?t=game">more&nbsp;>></a></span></p>
                        <img class="xlyy_img img_an" src=<?php echo $data['game']['articleImg']?> width="210" height="130">
											<a class="xl_tt p_an"  title="<?php echo $data['game']['title']?>" href="readArticle.php?id=<?php echo $data['game']['id']?>"><?php echo $data['game']['title']?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--左边部分-->
        <div class="ms_rt">
            
          <div class="xlzt">
            <!--心理问答-->
           	 	<p class="title">心理专题<span class="more"><a href="more.php?t=xlzt">more&nbsp;>></a></span></p>
								<ul>
<?php
	$psySp = psySp();
	while($spData = mysql_fetch_assoc($psySp)){
?>
                	<li>
                    	<p class="xlztText"><font></font></p>
											<a href="readArticle.php?id=<?php echo $spData['id']?>" class="xlzt_title" title="<?php echo $spData['title'] ?>"><?php echo $spData['title']?></a>
											<p class="xlzt_ct" title="<?php echo $spData['introduction']?>"><?php echo $spData['introduction']?></p>
                    </li>
<?php } ?>
                </ul>
						</div>
						<div class="read">
							<p id="blxdicon">♥<span>拨亮心灯</span></p>
							<p id="xlsicon">⌂<span>心理室</span></p>					
						</div>
			</div>
		</div>
</div>
<?php include('footer.html')?>		
<script>
window.onload = function(){
 document.getElementsByClassName('headerWarp')[0].style.position = 'fixed';	
 var element = document.getElementsByClassName("indexRun")[0];
 var ctrl = document.getElementsByClassName('ctrlBut')[0].getElementsByTagName('li');
 var player = new Player(ctrl,element, 600, 7500,"pHover");
//p::获取控制按钮 element::为运动的元素 400::运动的高度（图片的高）  3500::间隔时间 undefined::
 player.start();
 font();
 changeColor();
}
</script>
</body>
</html>
