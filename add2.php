<?php
		header("Content-Type:text/html;charset=utf-8"); //防mysql乱码
		require_once('conn.php');					//引入conn.php文件

		session_start();										//启用session	

		$uid = $_SESSION["uid"];							//获取记录人
		$subject = $_POST["subject"];						//取得标题
		$message = $_POST["message"];						//取得记录	
		$time = strtotime(date("m.d"));								//获取时间戳

		$exec="insert into test_message (uid,subject,message,time) values('$uid','$subject','$message','$time')";

		$result = mysql_query($exec,$conn) or die("数据库访问发生如下错误:".mysql_error());
		if (!$result){
			echo '插入失败!';
		}
		else{
			echo '插入成功!';
		}

		//header("Location:choose.php");						//跳转choose.php
		mysql_close();										//关闭数据库
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=choose.php'>
<title>注册</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>


