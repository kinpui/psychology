<?php $msg = ''; $_GET['T']==1?$msg="用户":$msg="专家";?>
<div class="userInfwrap">
		<h3><?php echo $msg?>列表</h3><p class="add" title="添加用户"></p>
        <!--<a href="addUser.php?T=?PHP $_GET['T'] ?>" title="添加?php echo $msg?>" class="addUser"></a>-->
    <div class="userList">
        <table id="listBody" width="100" border="0">
        	<thead class="listThead"><!--表格头部-->
            	<tr class="A">
                	<th >姓名</th>
                    <th >性别</th>
                    <th >联系邮箱</th>
                    <th >联系QQ</th>
                    <th width="300">个性签名</th> 
                    <th >操作</th> 
                </tr>
            </thead>
            <tbody class="listBody"><!--表格主体-->
                <tr>
                    <td><img src="../img/teacher/3.png"><p>张剑培</p></td>
                    <td>男</td>
                    <td>879724885@qq.com</td>
                    <td>879724885</td>
                    <td><span>此人非常了得。高手一只,读心严重准确，擅长肢体语言，读懂眼神，精通打牌,</span></td>
                    <td>
                    	<ul>
                        	<li><p title="查看详细">📰</p></li>
                            <li><p title="修改信息">✎</p></li>
                            <li><p title="删除该成员"></p></li>
                        </ul>
                    </td>
                </tr>
                <tr class="A">
                    <td><img src="../img/teacher/2.png"><p>张剑培</p></td>
                    <td>男</td>
                    <td>879724885@qq.com</td>
                    <td>879724885</td>
                    <td><span>此人非常了得。高手一只,读心严重准确，擅长肢体语言，读懂眼神，精通打牌,</span></td>
                    <td>
                    	<ul>
                        	<li><p title="查看详细">📰</p></li>
                            <li><p title="修改信息">✎</p></li>
                            <li><p title="删除该成员"></p></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><img src="../img/teacher/4.png"><p>张剑培</p></td>
                    <td>男</td>
                    <td>879724885@qq.com</td>
                    <td>879724885</td>
                    <td><span>此人非常了得。高手一只,读心严重准确，擅长肢体语言，读懂眼神，精通打牌,</span></td>
                    <td>
                    	<ul>
                        	<li><p title="查看详细">📰</p></li>
                            <li><p title="修改信息">✎</p></li>
                            <li><p title="删除该成员"></p></li>
                        </ul>
                    </td>
                </tr>
                <tr class="A">
                    <td><img src="../img/teacher/1.png"><p>张剑培</p></td>
                    <td>男</td>
                    <td>879724885@qq.com</td>
                    <td>879724885</td>
                    <td><span>此人非常了得。高手一只,读心严重准确，擅长肢体语言，读懂眼神，精通打牌,</span></td>
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