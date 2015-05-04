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
	line-height:4px;
	height:15px;
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
                	<li>
                    	<img class="img_an" src="img/xlcs.jpg" >
                        <a href="#" title="九型人格测试" class="xl_tt xlcs_t">九型人格测试</a>
                    </li>
                	<li>
                    	<img class="img_an" src="img/xlcs1.jpg" >
                        <a href="#" title="儿童注意力缺陷多动障碍（多动症）他评量表" class="xl_tt xlcs_t">儿童注意力缺陷多动障碍（多动症）他评量表</a>
                    </li>
                	<li>
                    	<img class="img_an" src="img/xlcs2.jpg" >
                        <a href="#" title="测你有双重人格吗？" class="xl_tt xlcs_t">测你有双重人格吗？</a>
                    </li>
                </ul>
            </div>
            
          <div class="xlyy">
            <!--心理应用-->
            	<ul>
                	<li>
                		<!--治愈系作品-->
                        <p class="title">治愈系作品<span class="more"><a href="more.php?t=zyx">more&nbsp;>></a></span></p>
                        <img class="xlyy_img img_an" src="img/xlyy3.jpg" width="210" height="130">
                        <a class="xl_tt"  title="小心拦的士的时候,有人对你这样做!" href="#">小心拦的士的时候,有人对你这样做!</a>
                    </li>
                    
                    <li>
                		<!--心理短片-->
                        <p class="title">心理短片<span class="more"><a href="more.php?t=video">more&nbsp;>></a></span></p>
                        <img class="xlyy_img img_an" src="img/xlyy1.jpg" width="210" height="130">
                   		<a class="xl_tt"  title="悲伤故事:独自为伴" href="#">悲伤故事:独自为伴</a>
                    </li>
                    
                    <li>
                		<!--心理小游戏-->
                        <p  class="title">心理小游戏<span class="more"><a href="more.php?t=game">more&nbsp;>></a></span></p>
                        <img class="xlyy_img img_an" src="img/xlyy2.jpg" width="210" height="130">
                    	<a class="xl_tt p_an"  title="为金鱼做手术：再渺小的动物也有生存权" href="#">为金鱼做手术：再渺小的动物也有生存权</a>
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
                	<li>
                    	<p class="xlztText" style="background:rgb(254,67,101)"><font>心</font></p>
                        <a class="xlzt_title">为什么我控制不住自己的眼泪，为什么我控制不住自己</a>
                        <p class="xlzt_ct">我在面对上司和工作上的一些难题和做的不够好的得时候</p>
                    </li>
                	<li>
	                    <p class="xlztText" style="background:rgb(254,205,173)"><font>理</font></p>
                        <a class="xlzt_title">活着好累</a>
                        <p class="xlzt_ct">最近诸事不顺，好累好累。我现在大三，跟舍友关系不好，我上铺也不喜欢我。平时我是个活泼的人，现在好累，晚上睡不着，平时又对什么都提不起兴趣。</p>
                    </li>
                	<li>
    					<p class="xlztText" style="background:rgb(252,157,154)"><font>专</font></p>
                        <a class="xlzt_title">抑郁症患者</a>
                        <p class="xlzt_ct">极度自卑，没有自信。研究生读了一半就自己撤了回来，拿着毕业两年的本科文凭，找不到工作。走在大街上，我都觉得捡破烂的都比我有出息</p>
                    </li>
                	<li>
                    	<p class="xlztText" style="background:rgb(200,200,167)"><font>题</font></p>
                        <a class="xlzt_title">大三了，却很迷茫。</a>
                        <p class="xlzt_ct">今年大三了，可是我却迷茫不已。每天都不知道该做什么，提不起劲儿学习。</p>
                    </li>
                </ul>
						</div>
						<div class="read">
							<p id="blxdicon">♥<span>拨亮心灯</span></p>
							<p id="xlsicon">⌂<span>心理室</span></p>					
						</div>
			</div>
    </div>
  <div class="footer" >版权归属</div>
</div>
<script>
window.onload = function(){
 document.getElementsByClassName('headerWarp')[0].style.position = 'fixed';	
 var element = document.getElementsByClassName("indexRun")[0];
 var ctrl = document.getElementsByClassName('ctrlBut')[0].getElementsByTagName('li');
 var player = new Player(ctrl,element, 600, 7500,"pHover");
//p::获取控制按钮 element::为运动的元素 400::运动的高度（图片的高）  3500::间隔时间 undefined::
 player.start();
 daText();
 changeColor();
}
</script>
</body>
</html>
