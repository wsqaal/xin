<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=index.html'>
<title>注册</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
<?
	$username = $_POST['user_name'];
	$password_min = $_POST['user_password'];
	$password = md5($password_min);
	
	mysql_connect("localhost","root","wsq012823");		//连接数据库
	mysql_select_db("php_test");						//选择数据库
	mysql_query("set names 'utf-8'");					//设置数据库编码类型,解决中文乱码问题
	
	echo("INSERT INTO test_user VALUES(NULL,'$user_name','$password')");

	if (!empty($username) && !empty($password)) {
		$sql="INSERT INTO test_user VALUES(NULL,'$user_name','$password')";
		$result=mysql_query($sql);
		if($result){
			echo("注册成功！");
		}	
	}else{
		echo("用户名和密码不能为空!");
		exit;	
	}
	mysql_close();
?>
</body>
</html>