<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/choose.css" />
</head>
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
	<center><div id="common" ><a href="select.php" style="text-decoration:none; color:#FFF">
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
