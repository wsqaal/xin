<?php
	session_start();
	require_once('conn.php');		//引入conn.php文件

	$pwd = $_POST["pwd"];
	$pwd2 = $_POST["pwd2"];
	$pwd3 = $_POST["pwd3"];
	
	$sql = "select * from test_user  where password='".md5($pwd)."' and name='".$_SESSION["name"]."'";
	 
	if( $pwd2!=$pwd3 ){
	   echo ("两次输入的新密码不正确,请重新输入!");
	  }else{   
	   if(mysql_num_rows( mysql_query($sql) ) ){
			$sql="Update test_user set password='".md5($pwd2)."' where name='".$_SESSION["name"]."'";
			mysql_query($sql) or die(mysql_error());
			echo ("密码修改成功!");
			if($_SESSION["adminid"] == 1){						//判断是否为管理员
				header("location:admin_index.php");				//调用admin文件
			}else{
				header("location:choose.php");				//调用choose文件
			}
			
	   }else{
			echo ("旧密码不正确,请重新输入!");
	   	}
	}
	mysql_close();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=choose.php'>
<title>修改密码</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>