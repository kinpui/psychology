<?php
/*
 *在首页中推荐的心理短片，心理游戏，治愈系作品等信息要显示的数据在这里操作
 *返回的是首页要显示的数据
 *data is arrau
 * **/

function data(){
	$data = array();
	$query = query("SELECT * FROM `recommend` WHERE `type`!='xlwd'&&`type`!='xlcs'");
	while($datas = @mysql_fetch_assoc($query)){
		$data[$datas['type']] = selectAssoc("SELECT `title`,`articleImg`,`id` FROM article WHERE id = {$datas['id']}");
	}
	return $data;
}
/*
 * 在首页中推荐的心理测试信息要显示的数据在这里操作
 *返回的是首页要显示的数据
 *data is arrau
 * */
function psyText(){
	$sql = "SELECT a.id,a.title,a.articleImg FROM recommend r,article a WHERE r.type='xlcs'&&a.id=r.id LIMIT 3"; 
	return mysql_query($sql);
}

/*
 *在more页中的信息显示
 *返回数组信息。索引0是数据库查询的返回集。索引1是文章类型
 */
function more($array,$num){
 $type = @$_GET['t'];	//	该字段作为查找数据表名称
 if(!in_array($type,$array)){
	$type = 'xlbk';
 }
 switch($type){
 case 'xlzt':$types = '心理专题';break;
 case 'xlbk':$types = '心理百科';break;
 case 'video':$types = '心灵短片';break;
 case 'blxd':$types = ' 拨亮心灯';break;
 case 'xlcs':$types = '心理测试';break;
 case 'xlwd':$types = '心理问答';break;
 case 'zyx' :$types = '治愈系作品';break;
 case 'game':$types = '心理小游戏';break;
 }
 $start = $num*10;	//使用传递进来到num*一页显示到条数
 $end = $start+10;
 $articleType = (in_array($type,$array))?$type:'xlzt';
echo  $sql = "SELECT `id`,`title`,`introduction`,`articleImg` FROM article WHERE type='{$articleType}' ORDER BY id DESC LIMIT $start,$end";
 $queryData = mysql_query($sql);
	return $data = array($queryData,$types);
}
/*
 *主页心理专题文章的显示
 *返回数组信息，
 */
function psySp(){
	return mysql_query("SELECT a.id,a.title,a.introduction FROM recommend r,article a WHERE r.type='xlcs'&&a.id LIMIT 4");
}
/*
 *在更多页中，该分类最多人阅读的文章
 *返回数据数组
 **/
function moreRm(){
	$type = @$_GET['t'];
	return mysql_query("SELECT a.id,a.title FROM article a,hot h WHERE a.id = h.id&&a.type=\"{$type}\" ORDER BY h.value DESC LIMIT 8");
}
/*
 *在更多页面中，心理推荐模块的三个在hot表中最为热的文章
 *返回数组信息
 **/
function morePsyRm(){
	return mysql_query("SELECT a.id,a.title,a.articleImg FROM article a,hot h WHERE a.id=h.id ORDER BY h.value DESC LIMIT 3 ");
}

/*
 *后台文章管理列表
 *返回的是所有列表
 */
function articleListManage(){
	return selectAssoc("SELECT `id`,`title`,`introduction` FROM article LIMIT 10");
}

?>

