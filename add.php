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
<a href="choose.php" class="header1">返回选项卡</a>
</div>
<div class="float_div2">
<font style="text-align:right; color:#FFF; width:25%">当前用户:<?php session_start(); echo $_SESSION["name"]; ?></font>&nbsp;
</div>
<div class="float_div3">
<a href="index.html" class="link" >注销登录</a>
</div>
</div>
<div id="center">
	<br />
    <br />
	<center>
    
    <form action ="add2.php?" method ="post">
    <table >
    <tr>
    <center>
    
    	<td> 
                	<div style="color:#666">
        <font style="font-size:24px; text-align:left; width:auto">标题:</font>
            <input type="text"  name="subject"  style="width:440px; color:#666"/>
        	</div>
        </td>
    </center>
    </tr>
    <tr>
    <td>
    <div style="color:#666">
    <center><textarea color:#666 name="message" rows="10" cols="60"></textarea></center>
    </div>
    </td>
    </tr>
    </table>
    <br />
  	<center><input type="submit" id="common"  style="color:#FFF" value="提&nbsp;交"   /></center>

    </form>
    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
