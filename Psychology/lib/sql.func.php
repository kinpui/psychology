 <?php
/*
*处理php于数据库之间的一些函数库
*14/10/16
*22:00
*/
//使用默认参数连接数据库
function connectOk(){
	$connMsg = connectDB(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
	return $connMsg;
}


//连接数据库
//$addr{SQL服务器地址}  $user{SQL用户名}  $pwd{SQL密码}  $db{SQL 数据表}  $enc{SQL数据编码}
function connectDB($addr,$user,$pwd,$db){
	$connectMsg = array();
	$connectMsg['host'] = @mysql_connect("$addr","$user","$pwd")or die("数据库连接不成功"."错误信息：".mysql_error());
	$connectMsg['db'] = @mysql_select_db("$db")or die("连接数据表不成功");
	mysql_query("set names 'utf8'");
	return $connectMsg;
}
/*
*数据库插入记录操作
*insert 操作 传入的数组键名为插入的字段名，键值为数据。以此为规则
*返回插入记录的ID
*/

function insert($table,$array){
	$values = '';
	if($table != null || $array != null){
		$key = '`'.join("`,`",@array_keys($array)).'`';	//讲键名使用,号组合出来
		foreach($array as $value){
			//$value;
			if($values == null){
				$space = '';		
			}else{
				$space = ',';
			}
			$values.=$space."'".$value."'";
		}
		$sql = "INSERT {$table} ($key)values({$values})";
		//echo $sql = "INSERT article (type,title,introduction,content) values('xxzx','xxzxtitle','xxzxzhangjianpei','xxzxxxzxxxzxxxzxxxzxxxzx')";
		mysql_query($sql);

		return mysql_insert_id();

	}else{
		return mysql_error."请声明数据表以及插入数据";
		exit;
	}
}
	

function update($table,$array,$where = null){
	$str = '';
	foreach($array as $keys => $value){
		if($str == null){
			$space = null;
		}else{
			$space = ',';	
		}
	$str.= $space.$keys."='".$value."'";
	}
	echo $sql = "update {$table} set {$str}".($where == null?null:" where ".$where);
	mysql_query($sql);
	return mysql_affected_rows();//返回受影响记录条数
}

/*
*查询指定数据
*返回数组形式结果
*/
function selectOne($sql){
	$query = mysql_query($sql);
	return @mysql_fetch_array($query);
}

/*
 *要求返回数值索引数组
 *返回array
 * */
function selectRow($sql){
	return @mysql_fetch_row(mysql_query($sql));
}
/*要求返回关联索引数组
 *返回array
 **/
function selectAssoc($sql){
	return @mysql_fetch_assoc(mysql_query($sql));
}

/*
*查询所有数据
*返回数组形式结果
*/
function selectAll($sql){
	$query = mysql_query($sql);
	while(@$row =  mysql_fetch_array($query)){
		$rows[] = $row;
	}
	return $rows;
}
/*
*	返回执行查询后的结果，
*	方便用于while语句进行循环
*/
function query($sql){
	return @mysql_query($sql);
}
/*
*得到结果集中记录的条数
*返回的是记录条数
*/
function getResultNum($sql){
	$query = mysql_query($sql);
	return mysql_num_rows($query);
}


/*
*删除数据
*默认删除该表的所有记录
*返回受影响记录数
*/
function del($table,$where = null){
	$where = $where==null?null:"where ".$where;
	$sql = "delete from {$table} {$where}"; 
	mysql_query($sql);
	return mysql_affected_rows();	//返回受影响记录
}

/*
 *查找指定数据表某个字段最大值
 *返回数值
 *$table:数据表名
 *$field:字段名称
 * */
function maxRecord($table,$field){
	$sql = "SELECT MAX({$field}) FROM {$table}";
	return selectOne($sql)[0];
}
?>
