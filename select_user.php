<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/select_user.css" />
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
    
    <table border="1" cellpadding="1" cellspacing="1">
	<tr style=" background-color:#666">
    	<td><div id="huiyi">用户id</div></td>
        <td><div id="jiluren">用户名</div></td>
        <td><div id="shijian">权限</div></td>
        <td><div id="biaoti">处理</div></td>
    </tr>
    <tr >
	    <td><center>5</center></td>
        <td><center>琪琪</center></td>
        <td><center>8</center></td>
        <td><center><button>修改用户</button> &nbsp;<button>删除用户</button></center></td>
    </tr>
    
<?php 
  require_once('conn.php');		//引入conn.php文件

  $pageSize=6;
  $adminid = @$_SESSION["adminid"];							//	传递用户权限
  $pageNumber= @$_GET["pageNumber"];						//传递页数
  if( $pageNumber==null) $pageNumber=1;					//若页数为空 ，设为1
  $rs = mysql_fetch_row(mysql_query("SELECT COUNT(*) FROM test_user where adminid > '$adminid' "));   //取得记录数
  $totalCount = $rs[0];																  //取得记录数
  $exec="select * from test_user where adminid > '$adminid' limit ".(($pageNumber-1)*$pageSize)." ,6";  
   //sql语句
  $result = mysql_query($exec) ;                                             				//执行语句，返回结果
  while($rs=mysql_fetch_object($result))
  {
    echo "<tr><td><center>".$rs->id."</center></td>";					   //显示编号
    echo "<td><center>".$rs->name."</center></td>";                        //显示用户名
    echo "<td><center>".$rs->adminid."</center></td>";                        //显示用户权限
	echo "<td><center><a href='modify_user.php?id=$rs->id'><button>修改用户</button></a> 
	&nbsp;<a href='delete_user.php?id=$rs->id'><button>删除用户</button></a></center></td>";   //处理
  }
	echo "</table>";      
?>

<?php

  echo "<br />";
  echo "<br />";
  echo "<br />";
  echo "<br />";
  if($pageNumber > 1)                                                           //判断页数
  {
    echo "<a href=select_user.php?pageNumber=".($pageNumber-1)." >上一页&nbsp&nbsp</a>";
  }
  else
  {
    echo "上一页&nbsp&nbsp";
  }

  if($pageNumber < $totalCount/$pageSize)                                         //判断页数
  {
    echo "<a href=select_user.php?pageNumber=".($pageNumber+1).">下一页&nbsp&nbsp</a>"; 
  }
  else
  {
    echo "下一页";
  }

  mysql_close();
?>
	
    <div id="fonter2" hidden="true"><font color="#FFFFFF">上一页</font></div>
    <div id="fonter3" hidden="true"><font color="#FFFFFF">下一页</font></div>

    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
