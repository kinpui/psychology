<?php
/*
 *使用ajax加载文章中更多的内容
 *传入值
 *载入内容到的start id
 *内容分类
 *
 *2015-3-15
 *11:00
 */

include_once("../include.php");
return $article = more($typeArray,$_GET['page']);
?>
