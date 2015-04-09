<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>文章阅读</title>
</head>
<body>
<?php
include("include.php");
$id = $_GET['id'];
echo $id;
$sql = 'SELECT * FROM article WHERE id='.$id;
$resuer = selectOne($sql);
print_r($resuer);
?>
</body>
</html>
