<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
</head>
<style type="text/css">
#header{
	background-color:#000;
	height:40px;
    position:relative;
    bottom:0;
	margin-top:0px;
	margin-left:0px;
	font-size:36px;
    left:0;
    width:100%;
	text-align:right;
	}
	
.link{
	color:#F00;
	text-decoration:none; 
	}
body{
	background-color:#666;
/*	text-align:center;*/
/*	position:relative;*/
}

#center
{
	background-color:#FFF;
	position:absolute;
	width:500px;
	height:300px;
	left:50%;
	top:50%;
	margin-left:-250px;
	margin-top:-150px;
}
#common{
	background-position:center;
	background-color:#03F;
	width:400px;
	height:35px;
	text-align:center;
	font-size:24px;
}

#fonter{
	background-color:#000;
	height: 40px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
}
</style>
<body>
<div id="header"><font color="#FFFFFF" >当前用户:<?php session_start(); echo $_SESSION["name"]; ?></font>&nbsp;
<a href="index.html" class="link" >注销登录</a>
</div>
<div id="center">
	<br />
    <br />
	<center><div id="common" ><a href="add.php" style="text-decoration:none; color:#FFF" >
    添加会议记录</a></div></center>
    <br />
    <br />
	<center><div id="common" ><a href="chakan.php" style="text-decoration:none; color:#FFF">
    查看会议记录</a></div></center>
    <br />
    <br />
	<center><div id="common" ><a href="changepassword.php" style="text-decoration:none; color:#FFF">
    修改密码</a></div></center>
</div>
<div id="fonter">
</div>
</body>
</html>
