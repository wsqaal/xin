    <?php
		require_once('conn.php');		//引入conn.php文件
		$mid=@$_GET["mid"];
		$exec="select * from test_message where mid='$mid'";
     	$result = mysql_query($exec) ;                                 				//执行语句，返回结果
		if($rs=mysql_fetch_object($result)){
			$subject=$rs->subject;
			$message=$rs->message;
		}
    ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/record3.css" />
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
   	<center>
    
    <form action ="" method ="post">
	<br />
    <center>
	<table style="width:480px; height:360px;color:#666" border="1">
    <tr >
    	<td width="20%" height="10%> 
        <div style="color:#666">
        <font style="font-size:24px; text-align:left; width:auto">标题:</font>
		</td>
        <td width="80%" height="10%">
		<?php echo $subject;?></div>
        </td>
    </center>
    </tr>
    <tr>
    <td width="20%" height="90%> 
    <div style="color:#666">
    <font style="font-size:24px; text-align:center; width:auto">内容:</font>
    </div>
    </td>
    <td width="80%" height="90%"><font style="font-size:20px; text-align:center"><?php echo $message;?></font>
    </td>
    </tr>
    </table>
    <br />
    </form>
    </center>
</div>
	<?php 
		mysql_close();
	?>
<div id="fonter">
</div>
</body>
</html>
