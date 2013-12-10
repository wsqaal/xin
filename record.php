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
	}
.header1{
	text-decoration:none; 
	color:#FFF; 
	text-align:left; 
}	

.float_div1{ 
	float:left;
	width:70%;}
.float_div2{ 
	float:left;
	width:18%;}
.float_div3{ 
	float:right;
	width:12%;}	
.link{
	color:#F00;
	text-decoration:none; 
	}
body{
	font-size:16px;
	background-color:#666;
/*	text-align:center;*/
/*	position:relative;*/
}

#center
{
	background-color:#FFF;
	position:absolute;
	width:600px;
	height:400px;
	left:50%;
	top:50%;
	margin-left:-250px;
	margin-top:-150px;
}
#common{
	background-position:center;
	background-color:#03F;
	width:520px;
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

#huiyi{
	font-size:24px;
	text-align:center;
	width:80px;
	float:left;
}
#jiluren{
	font-size:24px;
	text-align:center;
	width:80px;
	float:left;
}

#biaoti{
	font-size:24px;
	width:240px;
	text-align:center;
	float:right;
}
#shijian{
	text-align:center;
	font-size:24px;
	float:right;
	width:100px;
}
#fonter2{
	position:absolute;
	background-color:#00F;
	text-align:center;
	font-size:24px;
	float:left;
	left:50%;
	top:95%;
	margin-left:-280px;
	margin-top:-50px;
}

#fonter3{
	position:absolute;
	background-color:#00F;
	text-align:center;
	font-size:24px;
	float:right;
	left:50%;
	top:95%;
	margin-left:180px;
	margin-top:-50px;
}
</style>
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
    
    <table border="1" cellpadding="1" cellspacing="1">
    <tr style=" background-color:#666">
    	<td><div id="huiyi">会议ID</div></td>
        <td><div id="jiluren">记录人</div></td>
        <td><div id="biaoti">标题</div></td>
        <td><div id="shijian">时间</div></td>
    </tr>
    <tr >
	    <td><center>4214</center></td>
        <td><center>陈舜斌</center></td>
        <td><center>第22周技术部</center></td>
        <td><center>2013-12-13 23:23:23</center></td>
    </tr>
<?php 
  $conn=mysql_connect("localhost","root","wsq012823");     // 打开MySql服务器连接
  mysql_select_db("php_test");                        //链接数据库
  mysql_query("set names 'utf-8'");                      //解决中文乱码问题

  $pageSize=6;
  $pageNumber= $_GET["pageNumber"];						//传递页数
  if( $pageNumber==null) $pageNumber=1;					//若页数为空 ，设为1
  $rs = mysql_fetch_row(mysql_query("select count(*) from test_message"));   //取得记录数
  $totalCount = $rs[0];														//取得记录数
  $exec="select * from test_message limit ".(($pageNumber-1)*$pageSize)." ,6";   //sql语句
  $result = mysql_query($exec) ;                                             //执行语句，返回结果
  while($rs=mysql_fetch_object($result))
  {
    echo "<tr><td><center>".$rs->mid."</center></td>";					   //显示编号
    echo "<td><center>".$rs->uid."</center></td>";                        //显示记录人
	echo "<td><center>".$rs->subject."</center></td>";                    //显示标题
    echo "<td><center>".$rs->time."</center></td></tr>";				  //显示时间
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
    echo "<a href=record.php?pageNumber=".($pageNumber-1)." >上一页&nbsp&nbsp</a>";
  }
  else
  {
    echo "上一页&nbsp&nbsp";
  }

  if($pageNumber < $totalCount/$pageSize)                                         //判断页数
  {
    echo "<a href=record.php?pageNumber=".($pageNumber+1).">下一页&nbsp&nbsp</a>"; 
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
