<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<link rel="stylesheet" type="text/css" href="css/changepassword.css" />
</head>
<body>
<div id="header"><font color="#FFFFFF" >当前用户:<?php session_start(); echo $_SESSION["name"]; ?></font>&nbsp;
<a href="index.html" class="link" >注销登录</a>
</div>
<div id="center">
	<br />
    <br />
	<center>
    
    <form action ="change_pwd2.php" method ="post">
  	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;原密码：<input type="password" name="pwd"><br />
      <br />
      <br />
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新密码：<input type="password" name="pwd2"><br/>
      <br />
      <br />
 再次输入密码：<input type="password" name="pwd3"><br/>

    <br />
    <br />
	<center><input type="submit" id="common"  style="color:#FFF" value="修&nbsp;改"/></center>
    </form>
    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
