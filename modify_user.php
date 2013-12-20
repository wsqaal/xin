    <?php
		require_once('conn.php');		//引入conn.php文件
		$id=@$_GET["id"];
		$exec="select * from test_user where id='$id'";
     	$result = mysql_query($exec) ;                                 				//执行语句，返回结果
		if($rs=mysql_fetch_object($result)){							//获取对象
			$name=$rs->name;											//获取对象的姓名
			$password=$rs->password;									//获取对象的密码
			$adminid =$rs->adminid;										//获取对象的权限
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
    
    <form action ="modify_user2.php?id=<?php echo $id ?>" " method ="post">
  	  用户名：<input type="text" name="user_name" value="<?php echo $name ;?>"><br />
      <br />
      <br />
	  &nbsp;密码： <input type="password" name="user_password" value="<?php ;?>"><br/>
       <br />
    <br />
      	  用户权限：<input type="text" name="adminid" value="<?php echo $adminid ;?>"><br />
       
	<br />
    <br />
    
    <center><input type="submit" id="common"  style="color:#FFF" value="修&nbsp;改"/></center>
    <br />
    <br />
  	</form>
    </center>
	<br />
    <br />
    
	<center><input type="hidden" id="common" value="注&nbsp;册">
</div></center>

</div>
	<?php 
		mysql_close();
	?>
<div id="fonter">
</div>
</body>
</html>
