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
	font-size:24px;
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

#common2{
	font-size:24px;
	background-color:#666;
	text-align:left;
	width:300px;
}

#common22{
	width:300px;
}
#common3{
	font-size:24px;
	background-color:#666;
	text-align:left;
	width:140px;
	float:left;
}

#common4{
	font-size:24px;
	background-color:#666;
	width:140px;
	text-align:left;
	float:right;
}
#common_td{
	float:left;
	width:120px;
}
#submit{
	background-color:#00F;
	text-align:center;
	font-size:24px;
	float:right;
}
</style>
<body>
<div id="header">
<div class="float_div1">
<a href="choose.html" class="header1">返回选项卡</a>
</div>
<div class="float_div2">
<font style="text-align:right; color:#FFF; width:25%">当前用户:XXX</font>&nbsp;
</div>
<div class="float_div3">
<a href="index.html" class="link" >注销登录</a>
</div>
</div>
<div id="center">
	<br />
    <br />
	<center>
    
    <form action="admin_check.php" mothod="post" name="form1">
    <table>
    <tr>
    	<td><div id="common_td">姓名:</div></td>
        <td><div id="common2">xxx</div></td>
        <td><div id="submit"><font color="#FFFFFF">提交</font></div></td>
    </tr>
    <br />
    <tr >
    	<td><div id="common_td">起始日期:</div></td>
        <td>
        <div id="common22">
        <div id="common3">x-x-x</div>
        <div id="common4">x-x-x</div></div></td>
        <td>&nbsp;<div id="submit"><font color="#FFFFFF">提交</font></div></td>
    </tr>
	</table>
    </form>
    </center>
</div>
<div id="fonter">
</div>
</body>
</html>
