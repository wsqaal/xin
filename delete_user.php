    <?php
		require_once('conn.php');		//引入conn.php文件
		$id=@$_GET["id"];
		$exec="delete from test_user where id='$id'";
     	$result = mysql_query($exec) ;                                 				//执行语句，返回结果
		if($result){
			echo "删除成功！";
		}else{
			echo "删除失败！";
		}
    ?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=admin_index.php'>
<title>注册</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>