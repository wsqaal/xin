<?php
	header("Content-Type:text/html;charset=utf-8"); //防mysql乱码
	require_once('conn.php');					//引入conn.php文件

	if($_GET["form"]==1){
		$uid = $_POST["uname"];					//取得用户名
		
		$exec="select * from test_message where uid='$uid'";
		
		
		
		$result=mysql_query($exec) or die("查询数据库出错");	    //执行这条插入语句
							
		if (!$result){
			echo '查询失败!';
		}
		else{
			echo '查询成功!';
		}
		header("Location:record1.php?uid=$uid");				//跳转record.php
		mysql_close();										//关闭数据库
	}
	
	if($_GET["form"]==2){
		$time1 = $_POST["time1"];					//取得时间1
		$time2 = $_POST["time2"];					//取得时间2
		
		$timea = strtotime($time1);					//转换为unix时间戳
		$timeb = strtotime($time2);					//转换为unix时间戳
		
		$exec="select * from test_message where time > '$timea' and time<'$timeb' ";
		
		$result=mysql_query($exec) or die("查询数据库出错");	    //执行这条插入语句
							
		if (!$result){
			echo '查询失败!';
		}
		else{
			echo '查询成功!';
		}
		header("Location:record2.php?timea=$timea & timeb=$timeb");				//跳转record.php
		mysql_close();										//关闭数据库
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content='3; url=record1.php'>
<title>注册</title>
</head>
<body>
<p>谢谢您的支持，三秒后自动返回……</p>
</body>
</html>


