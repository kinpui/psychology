<?php
header("Content-type: text/html; charset=utf8");
	include("../include.php");
//操作动作  1为新添加文章  0为修改文章
$id = @$_GET['id'];
	$data = $_POST;
	$title = $data['title'];				//文章标题
	//print_r($data);
	$introduction = $data['introduction'];	//文章导读
	$articleType = $data['articleType'];	//文章类型
	$recommend = $data['recommend'];//文章推荐
	//获取文章中的第一张照片
	$content = htmlspecialchars($data['content']);
	$imgSrc =  @(firstImgSrc($data['content']));
	switch($articleType){		//根据分类储存数据
		case '心理专题' : $type = 'xlzt'; break;
		case '心灵短片' : $type = 'video'; break;
		case '拨亮心灯' : $type = 'blxd'; break;
		case '心理测试' : $type = 'xlcs'; break;
		case '心理问答' : $type = 'xlwd'; break;
		case '治愈系作品' : $type = 'zyx'; break;
		case '心理小游戏' : $type = 'game'; break;
	}
if($id == null){
			$result = insert("article",array(
				'type'=>$type,
				'title'=>$title,
				'introduction'=>$introduction,
				'content'=>$content,
				'articleImg'=>$imgSrc
			));

	if($recommend){
		$sqlu = "UPDATE `recommend` SET `id`={$result} WHERE `type`=\"{$type}\" ORDER BY `id` ASC LIMIT 1";
		mysql_query($sqlu);
	}
	if($result){
		//阅读记录插入
		mysql_query("INSERT hot VALUES({$result},0)");
		echo "<center><img src='../img/ok.gif' width='400' height='400'></center>";
		echo "<div style='text-align:center;color:#ccc;font-size:40px;'>发布成功</div>";
		echo "<a href=\"../readArticle.php?id=$result\" style='
						color: pink;
						text-decoration:none;
						display: block;
						font-size: 30px;
						padding-bottom: 40px;
						padding-left: 40px;
						padding-right: 40px;
						padding-top: 40px;
						text-align: center;'
					>查看文章</a>";
	}
}else{
	$result = update("article",array(
			'type'=>$type,
			'title'=>$title,
			'introduction'=>$introduction,
			'content'=>$content,
			'articleImg'=>$imgSrc
	),"`id`={$id}");
}
?>
