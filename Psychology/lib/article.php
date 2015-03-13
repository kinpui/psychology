<?php
/*
 *获取文章内容中的第一张图片地址
 * 返回图片的地址
 * $content :: 获取内容的文章
 * */
function firstImgSrc($content){
	preg_match_all("/<img.*>/isU",$content,$results);
	if($results[0]){
		//使用正则匹配src 内容
		preg_match('<img.*?src="(.*?)">',$results[0][0],$match);
		$imgPathSrc = $match[1];
	}else{
		$imgPathSrc = 'img/default.jpg';
	}
	return $imgPathSrc;
}
?>
