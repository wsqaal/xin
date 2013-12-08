<?php
	echo $_POST["user_name"];
	$username = $_POST["user_name"];					//取得用户名
	$password_min = $_POST["user_password"];			//取得密码
	$password = md5($password_min);						//md5加密	
	
	$conn=mysql_connect("localhost","root","wsq012823")or die("error!"); //连接mysql              
 	mysql_select_db("php_test",$conn); 					//选择mysql数据库
 	mysql_query("set names 'utf8'");					//mysql编码
	$exec="insert into test_user (name , password) 
	values('$username','$password')";
	
	$result=mysql_query($exec) or die("查询数据库出错");	    //执行这条插入语句
						
	if (!$result){
   		echo '注册失败!';
	}
	else{
   		echo '注册成功!';
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