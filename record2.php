<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选项</title>
<link rel="stylesheet" type="text/css" href="css/record.css" />
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
  require_once('conn.php');		//引入conn.php文件

  $pageSize=6;
  $timea=@$_GET["timea"];
  $timeb=@$_GET["timeb"];
  $pageNumber= @$_GET["pageNumber"];						//传递页数
  if( $pageNumber==null) $pageNumber=1;					//若页数为空 ，设为1
  $rs = mysql_fetch_row(mysql_query("SELECT COUNT(*) FROM test_message WHERE 
  time > '$timea' and time < '$timeb' "));   //取得记录数
  $totalCount = $rs[0];																  //取得记录数
  $exec="select * from test_message WHERE 
  time > '$timea' and time < '$timeb' limit ".(($pageNumber-1)*$pageSize)." ,6";   //sql语句
  $result = mysql_query($exec) ;                                             				//执行语句，返回结果
  while($rs=mysql_fetch_object($result))
  {
    echo "<tr><td><center>".$rs->mid."</center></td>";					   //显示编号
    echo "<td><center>".$rs->uid."</center></td>";                        //显示记录人
	echo "<td><center><a href='record3.php?mid=$rs->mid'>".$rs->subject."</a></center></td>";   //显示标题
    echo "<td><center>".date('Y-m-d H:i:s', $rs->time)."</center></td></tr>";				  //显示时间
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
    echo "<a href=record2.php?pageNumber=".($pageNumber-1)." >上一页&nbsp&nbsp</a>";
  }
  else
  {
    echo "上一页&nbsp&nbsp";
  }

  if($pageNumber < $totalCount/$pageSize)                                         //判断页数
  {
    echo "<a href=record2.php?pageNumber=".($pageNumber+1).">下一页&nbsp&nbsp</a>"; 
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
