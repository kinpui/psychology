<?php
//加载更多的内容
include_once("../include.php");
$startNum = $_GET["startNum"];
$pageSize = 2;
$sql = "SELECT `id`,`title`,`introduction`,`articleImg`	FROM article WHERE type='{$_GET['type']}' ORDER BY id DESC LIMIT $startNum,$pageSize";
$datas = mysql_query($sql);
while($data = mysql_fetch_assoc($datas)){
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
