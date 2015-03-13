<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<!-- 文章管理列表-->
<?php
include_once("../include.php");
print_r($data = articleListManage());
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    	<ul>
                        	<li><p title="查看详细">📰</p></li>
                            <li><p title="修改信息">✎</p></li>
                            <li><p title="删除该成员"></p></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
</div>
</body>
</html>
