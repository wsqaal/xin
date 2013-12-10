<?php
	session_start();									//启用session
	$subject = $_POST["subject"];						//取得标题
	$message = $_POST["message"];						//取得记录	
	$name = $_SESSION["name"];							//获取记录人
	$time = date("Y-m-d");								//获取时间戳
	
	$conn=mysql_connect("localhost","root","wsq012823")or die("error!"); //连接mysql              
 	mysql_select_db("php_test",$conn); 					//选择mysql数据库
 	mysql_query("set names 'utf8'");					//mysql编码
	
	$exec="insert into test_message (uid,subject,message,time) 
	values('$name','$subject','$message','$time')";
	
	$result = mysql_query($exec) or die ("查询数据库出错！");	
	
	if(!$result){
		echo ("添加记录失败！");
	}else{
		echo ("添加成功!");
	}

	mysql_close();										//关闭数据库
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=choose.php'>
<title>添加会议记录</title>
</head>
<body>
<br />
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>