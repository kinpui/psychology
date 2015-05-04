<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更多文章</title>
</head>
<body>
<?php
 include_once("header.html");
 include_once("include.php");
 $datas = more($typeArray,0);
?>
<div class="wrap">
<div class="ms_lf">
    <div class="Recommend">
        <p class="RecommendP">心理推荐</p>
				<ul>
<?php
 $reContent = morePsyRm();
 while($ctData = mysql_fetch_assoc($reContent)){
?>
            <li class="ReContent">
								<a href="readArticle.php?id=<?php echo $ctData['id'] ?>">
										<img src=<?php echo $ctData['articleImg']?> title="图片1">
										<p title="<?php echo $ctData['title']?>"><?php echo $ctData['title']?></p>
                </a>
						</li>
<?php }?>
				</ul>
    </div>
	<p style="font-weight:bold; font-size:16px;"><!--获取分类信息--><?php echo $datas[1];?></p>
	<div class="moreList"><!--更多文章  列表-->
    	<ul class="moreUl">
<?php
	while($data = mysql_fetch_assoc($datas[0])){
		//	print_r($data);
		//	$browseSql = "SELECT `value`FROM `hot` WHERE `id`={$data[0]}";
//	$browse =  selectOne($browseSql)[0];	
		//	print_r($data);
?>
        	<li>
            	<a href="readArticle.php?id=<?php echo $data['id'] ?>&t=<?php echo $_GET['t']?>">
							<img src=<?php echo $data['articleImg']?> alt="<?php echo $data['title'];?>"><?php echo $data['title']?></a>
								<p>文章编辑于&nbsp;<?php echo 131415;?><a href="#" style="margin:0 20px; font-size:11px">有 1024 人进行评论</a><?php echo 100;?>人浏览</p>
                <p id="RecommendL" title="<?php echo $data['introduction']?>"><?php echo $data['introduction']?> 
                </p>
				
						</li>
<?php
	}
?>
				</ul>
		</div>   
		<div class="loadingMore">
		</div> 
</div>
<div class="ms_rt">
	<p class="RecommendP topHeight">最热</p>
		<ul class="hotArticle">
<?php
$rmDatas = moreRm();
while($rmData = @mysql_fetch_assoc($rmDatas)){
?>
				<li>
				<a href="readArticle.php?id=<?php echo $rmData['id']?>"><?php echo $rmData['title']?></a>
        	<p>
            	<span title="浏览"> <font>2345</font></span>
            </p>
				</li>
<?php } ?>
</div>	
</div>
<script src="js/adminAll.js"></script>
<script>
window.onload = function(){
	window.onscroll = isBottom;
	var search  = document.getElementsByClassName("search")[0];
	var searchP = search.getElementsByTagName("p")[0];
	search.onmousemove = function(){
		searchP.className = "searchRotateIn";
	}
	search.onmouseout = function(){
		searchP.className = "searchRotateOut";
	}
	//加载数据
	//显示加载图标
	function showLoading(show){
		var loadElement = document.getElementsByClassName("loadingMore")[0];
		if(!show){
			loadElement.style.height = "130px";
			loadElement.style.opacity = "1";
		}else{
			loadElement.style.height = "10px";
			loadElement.style.opacity = "0";
		}
	}

//获取滚动条位置
	function getScrollTop(){
		var scrollTop,bodyScrollTop,documentScrollTop;
		if(document.body){
			bodyScrollTop =  document.body.scrollTop;
		}
		if(document.documentElement){
			documentScrollTop = document.documentElement.scrollTop;
		}
		return scrollTop = bodyScrollTop > documentScrollTop  ?bodyScrollTop:documentScrollTop;
	}

	//获取文档总高度
	function getScrollHeight(){
		var scrollHeight = 0,bodyScrollHeight = 0,documentScrollHeight = 0;
		if(document.body){
			bodyScrollHeight = document.body.scrollHeight;
		}
		if(document.documentScrollHeight){
			documentScrollHeight = document.documentElement.clientHeight;
		}
		return scrollHeight = bodyScrollHeight > documentScrollHeight?bodyScrollHeight:documentScrollHeight;
	}

	//获取浏览器可视区域的大小
	function getWindowHeight(){
		var windowHeight;
		windowHeight = document.documentElement.clientHeight;
		return windowHeight;
	}

	function isBottom(){
		if(getWindowHeight()+getScrollTop() == getScrollHeight()){
			showLoading();		//显示加载图标
		}
	}
}
</script>
<?php
	include('footer.html');
?>
</body>
</html>
