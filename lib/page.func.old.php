<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
require_once("../include.php");
$sql = "select * from admin";
$totalRows = getResultNum($sql);	//获取记录数
$pageSize = 3;	//	每页显示15条
$totalPage = ceil($totalRows/$pageSize);	//ceil 为向上取整
//echo $totalPage;	//总页数
$page = $_REQUEST['page']?(int)$_REQUEST['page']:1; //默认值1；传值了转换成int值
if($page<1||$page==null||!is_numeric($page)){
	$page = 1;
}	//如果传过来的页码值小于1，或者等于空，或者不是数字类型，则将$page 转换为1		
if($page>=$totalPage)$page=$totalPage;
$offset = ($page-1)*$pageSize;	//偏移量
$sql = "select * from admin limit {$offset},{$pageSize}";
$rows = selectAll($sql);
foreach($rows as $row){
	print_r($row);
	echo "<br>";
	echo "<br><hr>";
}
echo showPage($page,$totalPage);
function showPage($page,$totalPage,$where = null){
	$where = $where==null?null:'&'.$where;
	$sep = " || ";
	$url = $_SERVER['PHP_SELF'];
	//echo "<br>".$page."<br>".$totalPage;
	$index = ($page==1)?"首页":"<a href='{$url}?page=1{$where}'>首页</a>";	//首页按钮
	$last = ($page==$totalPage)?"末页":"<a href='{$url}?page={$totalPage}{$where}'>末页</a>";
	$prevPage = ($page>=1)?$page-1:1;	//如果$page <= 1，说明已经是首页了。否则$page-1;
	$nextPage = ($page>=$totalPage)?$totalPage:$page+1;	//如果$page >= 总页数，说明已经是末页了。否则$page+1，向后翻页;
	
	$prevText = ($page==1)?"上一页":"<a href='{$url}?page={$prevPage}{$where}'>上一页<a>";	//上一页文字处
	$nextText = ($page==$totalPage)?"下一页":"<a href='{$url}?page={$nextPage}{$where}'>下一页</a>";//下一页文字处
	$str = "总 {$totalPage} 页||当前 {$page} 页";
	if($page == $totalPage){
		echo 'moye';
	}else{
		echo $page."<br>".$totalPage;
	}
	for($i = 1;$i<=$totalPage;$i++){
		if($page == $i){
			//当前页
			$p .= "[{$i}]";
		}else{
			$p .= "<a href='{$url}?page=$i'>[{$i}]</a>";
		}
	}
	$pageMsg = $str.$sep.$index.$sep.$prevText.$sep.$p.$nextText.$sep.$last;
	return $pageMsg;
}
?>
