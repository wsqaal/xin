<?php
	session_start();									//启用session变量
	echo $_POST["user_name"];
	$username = $_POST["user_name"];					//取得用户名
	$password_min = $_POST["user_password"];			//取得密码
	$password = md5($password_min);						//md5加密	
	
	require_once('conn.php');		//引入conn.php文件
	
	$exec="insert into test_user (name , password) 
	values('$username','$password')";
	
	$result=mysql_query($exec) or die("查询数据库出错");	    //执行这条插入语句
						
	if (!$result){											//检测是否成功
   		echo '注册失败!';
	}
	else{
   		echo '注册成功!';
		if($_SESSION["adminid"] == 1){						//判断是否为管理员权限
				echo $_SESSION["adminid"];
				header("location:admin_index.php");				//调用admin文件
			}else{	
				header("location:index.php");				//调用choose文件
			}
	}
	mysql_close();										//关闭数据库
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=index.html'>
<title>注册</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>