<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/g.css">
<?php include("include.php");include_once("header.html");
$maxId = maxRecord('article','id');
$urlId = @$_GET['id'];
if($urlId>$maxId){
	$id = $maxId;
}else if($urlId<1){
	$id = 1;
}else{
	$id = $urlId;
	if(selectOne("SELECT `id` FROM `hot` WHERE id='{$id}'")[0]){
		//update('hot',array('value'=>(alue+1)),"id={$id}");
		mysql_query(" update hot set value=value+1 where id={$id}");
	}else{
		insert('hot',array('id'=>$id,'value'=>1));
	}
}
$sql = "SELECT * FROM article WHERE id={$id}";
$articleData = selectOne($sql);
//print_r($articleData);
$recommendArticle =query("SELECT `article`.`articleImg`, `article`.`id`,`article`.`title` FROM hot, article WHERE `article`.`type` = '".$articleData['type']."'	ORDER BY `hot`.`value` ASC LIMIT 5");
?>
<meta charset="utf-8">
<title><?php echo $articleData['title'] ?></title>
</head>
<body>
<div class="wrap">
    <div class="ms_lf article_ms_lf">
        <div class="articleBody">
				<h1 class="articleTitle"><?php echo $articleData['title']; ?></h1>
					<div class="articleIntroduction">
						<?php echo $articleData['introduction']?>
					</div> 
					<div><div><?php echo htmlspecialchars_decode($articleData['content'])?></div>
        </div>
		<div class="ArticleCom">
		<!--评论与赞-->
			<span class="com">评论</span>
			<span class="like">赞</span>
		</div>
		<div class="RecommendArticle">
				<p class="RecommendArticleP">推荐给您</p>
				<ul>
<?php while($recommendData = mysql_fetch_assoc($recommendArticle)){ ?>
						<li>
						<a href="readArticle.php?id=<?php echo $recommendData['id']?>">
						<img title="<?php echo $recommendData['title']?>" src="<?php echo $recommendData['articleImg']?>">
						<p title="<?php echo $recommendData['title']?>"><?php echo $recommendData['title']?></p>
                </a>
						</li>
<?php } ?>
				</ul>
    </div>
	</div>
</div>
</div>
</body>
</html>
