<?php
//	header("Content-Type:text/html;charset=utf-8"); 
	$conn=mysql_connect("localhost","root","wsq012823")or die("error!"); //打开一个到 MySQL 服务器的连接
 	mysql_select_db("php_test",$conn); 					//选择mysql数据库
 	mysql_query("set names 'utf8'");					//mysql编码
	
?>