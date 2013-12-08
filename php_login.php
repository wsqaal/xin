<?php
	session_start();									//启用session
	$username = $_POST["user_name"];					//取得用户名
	$password_min = $_POST["user_password"];			//取得密码
	$password = md5($password_min);						//md5加密	
	
	$conn=mysql_connect("localhost","root","wsq012823")or die("error!"); //连接mysql              
 	mysql_select_db("php_test",$conn); 					//选择mysql数据库
 	mysql_query("set names 'utf8'");					//mysql编码
	
	$exec="select * from test_user where name='".$username."'";	//select语句

	$result=mysql_query($exec) or die("查询数据库出错");	    //执行这条插入语句
							
	if (!$result){
		echo 'MySQL查询命令失败!';
	}
	else{
		echo '查询成功!';
	}
	
	if ($rs=mysql_fetch_object($result)){
		if($rs->password == $password){
			$_SESSION["name"]=$username;				//session变量
			echo "登录成功！";
			header("location:choose.php");				//调用choose文件
		}
		else echo "密码不正确";
	}
	else echo "用户名不正确";
	

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