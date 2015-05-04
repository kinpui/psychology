<?php
/*
 *文章修改的数据处理
 *2015/1/16
 **/
function revise(){
	$id = @$_GET['id']?(int)$_GET['id']:1;
	$maxId = selectOne("SELECT max(id) FROM `article`")[0];
	if($id > $maxId || $id < 1){
		$id = 1;
	}
	$sql = "SELECT * FROM article WHERE `id`={$id}"; 
	return selectAssoc($sql);
//	return $data = mysql_fetch_assoc("SELECT * FROM article WHERE	`id`={$id}");
}

/*
 *改文章的分类。
 *返回文章类型
 */
function editArticleType($type){
	switch($type){
	case 'xlzt':$data = '心理专题';break;
	case 'xlcs':$data = '心理测试';break;
	case 'xlbk':$data = '心理百科';break;
	case 'video':$data = '心灵短片';break;
	case 'blxd':$data = '拨亮心灯';break;
	case 'xlwd':$data = '心理问答';break;
	case 'zyx' :$data = '治愈系作品';break;
	case 'game':$data = 'game';break;
	}
	return $data;
}

/*
 *显示文章是否首页显示
 **/
function editIndexShow($id){
	return @selectOne("SELECT `id` from recommend WHERE `id`={$id}")[0];
}
?>
