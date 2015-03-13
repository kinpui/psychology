<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf8" http-equiv="Content-Type">
	<title>文章修改</title>
	<link href="../css/adminStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/g.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" charset="gbk" src="../ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="gbk" src="../ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" charset="gbk" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<?php
include_once("../include.php");
$data = revise();
$type = editArticleType($data['type']);
$recommend = editIndexShow($data['id'])?'首页显示':'不在首页显示';
if($recommend == '首页显示'){
	$reValue = 1;
}else{
	$reValue = 0;
}
?>
<p class="publishHeaderP">文章修改</p>
<div class="publishWrap">
    <!-- 加载编辑器的容器 -->
		<form enctype="multipart/form-data" action="writeDate.php?id=<?php echo $_GET['id']?>" method="post">
		<input type="text" class="title" name="title" placeholder="文章标题" value="<?php echo $data['title']?>">
		<input type="text" class="showContents" name="introduction" placeholder="导读内容  限制80字" value="<?php echo  $data['introduction']?>">
		<select name="articleType">
				<option value="<?php echo $type;?>"><?php echo $type;?></option>
        <option value="心理专题">心理专题</option>
        <option value="治愈系作品">治愈系</option>
        <option value="心理小游戏">心理小游戏</option>
        <option value="心灵短片">心灵短片</option>
        <option value="拨亮心灯">拨亮心灯</option>
        <option value="心理测试">心理测试</option>
        <option value="心理问答">心理问答</option>
		</select>
		<select name="recommend">
		<option value='<?php echo $reValue?>'><?php echo $recommend?></option>
		<option value="0">不在首页显示</option>
		<option value="1">首页显示</option>
		</select>
<!-- 加载编辑器的容器 -->
<script id="editor" name="content" type="text/plain" style="width:100%;height:500px;"><?php echo htmlspecialchars_decode($data['content'])?></script>
	<script>
    var ue = UE.getEditor('editor');
	</script>
    <center>
   <input type="submit" id="confirm" value="✓">
   <input type="reset" id="reset" value="×">
   </center
</form>
</div>
</body>
</html>

