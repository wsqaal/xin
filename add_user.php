<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/add.css" />
</head>
<body>
<div id="header">
<div class="float_div1">
<a href="admin_index.php" class="header1">返回选项卡</a>
</div>
<div class="float_div2">
<font style="text-align:right; color:#FFF; width:25%">当前管理员:<?php session_start(); echo $_SESSION["name"]; ?></font>&nbsp;
</div>
<div class="float_div3">
<a href="index.html" class="link" >注销登录</a>
</div>
</div>
<div id="center">
	<br />
    <br />
    
    <center>
    <br />
    <br />
    <br />
    <br />
    <form action ="php_register.php" method ="post">
  	  用户名：<input type="text" name="user_name"><br />
      <br />
      <br />
	  &nbsp;密码： <input type="password" name="user_password"><br/>
      
    <br />
    <br />
      <center><input type="submit" id="common" value="添&nbsp;加"  />	</center>
    
    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
