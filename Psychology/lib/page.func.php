<?php
function page(){
	$type = @$_GET['t'];	//文章类型
	$totalSql = "SELECT count(id) FROM article WHERE type='{$type}'";
	$totalPage = selectOne($totalSql)[0];	//记录总条数
	$pageSize = 10;
	$page = $_REQUEST['page']?(int)$_REQUEST['page']:1;	//默认值为1
	if($page<1||$page==null||!is_numeric($page)){
		$page=1;
	}
	if($page>=$totalPage)$page=$totalPage;
	//echo '总页数为'.$totalPage.'当前页为'.$page;	
	$offset = ($page-1)*$pageSize;	//下一页的偏移
	$dataSql = "SELECT * FROM article WHERE type='{$type}' limit {$offset},{$pageSize}";
	$data = selectAll($dataSql);
	return $data;//返回数据
	showPage($type,$totalPage,$pag
		
		);
}
function showPage(){
	$url = $_SERVER['PHP_SELF'];
	echo $page;
	$index = $page=1?"<p>首页</p>":"<a href='{$url}.?page=1{$where}'>首页</a>";
	$last = ($page==$totalPage)?"<p>尾页</p>":"<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	echo $index.$last;
}
?>
