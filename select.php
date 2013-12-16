<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/select.css" />
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
    
    <form action ="select2.php?form=1" method ="post">
    <table>
    <tr>
   <td><div id="common_td">用户ID:</div></td>
   <td>
   <input id="common2" type="text" name="uname" value="<?php if(!session_id()) session_start();
    echo $_SESSION["uid"];?>"/></td>
   <td><input type="submit" id="common"  style="color:#FFF" value="提&nbsp;交"/></td>
    </tr></table>
    <br />
    </form>
    <form action ="select2.php?form=2" method ="post">
    <table>
    
    <tr >
    	<td><div id="common_td">起始日期:</div></td>
        <td>
        <div id="common22">
        <input id="common3" type="time" name="time1" value="<?php date_default_timezone_set('PRC');
		echo date("Y-m-d H:i:s"); ?>" />
		<input id="common4" type="time" name="time2" value="<?php date_default_timezone_set('PRC');
		echo date("Y-m-d H:i:s");?>" /></div></td>	
        <td><input type="submit" id="common" style="color:#FFF" value="提&nbsp;交"/></td>
    </tr>
	</table>
    </form>
    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
