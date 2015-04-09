<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<!-- 文章管理列表-->
<?php
include_once("../include.php");
$data = articleListManage();
$arrayLength =  count($data);
?>
<div class="userInfwrap">
		<div class="articleList">
        <table id="listBody" width="100" border="0">
        	<thead class="listThead"><!--表格头部-->
								<tr class="A">
                	  <th >文章名</th>
                    <th >简介</th>
                    <th >访问量</th> 
                    <th >操作</th> 
                </tr>
            </thead>
            <tbody class="listBody"><!--表格主体-->
<?php
for($i = 0;$i<$arrayLength;$i++){
?>
                <tr>
								<td><p class="userInfTd"><?php echo $data[$i]['title']?></p></td>
								<td><p class="userInfTd"><?php echo $data[$i]['introduction']?></p></td>
                <td></td>
                <td width="85">
                  	<ul>
												<li><p class="articleIcon" title="查看详细">
												<a href="../readArticle.php?id=<?php echo $data[i]['id']?>">📰</a>
												</p></li>
												<li><p class="articleIcon" title="修改信息">
													<a href="">✎</a>
												</p></li>
												<li><p class="articleIcon" title="删除该成员">
													<a href=""></a>
												</p></li>
										</ul>
                </td>
								</tr>
<?php } ?>
            </tbody>
        </table>
</div>
</div>
</body>
</html>
