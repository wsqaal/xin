<?php
	session_start();									//启用session变量
	echo $_POST["user_name"];
	$id = $_GET["id"];
	$username = $_POST["user_name"];					//取得用户名
	$password_min = $_POST["user_password"];			//取得密码
	$password = md5($password_min);						//md5加密	
	$adminid = $_POST["adminid"];
	

	require_once('conn.php');		//引入conn.php文件
	
	
	$exec="update test_user set name='$username', password='$password',adminid='$adminid' where id='$id'";
	$result = mysql_query($exec) ;                                 				//执行语句，返回结果

	
	
						
	if (!$result){					//检测是否成功
   		echo '修改失败!';		
	}
	else{
   		echo '修改成功!';
	
	}
	mysql_close();										//关闭数据库
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