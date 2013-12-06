<?
mysql_connect("localhost","root","wsq012823");		//连接数据库
mysql_select_db("test_user");						//选择数据库
mysql_query("set names 'utf8'");					//设置数据库编码类型

$sendtj=$_POST['sendtj'];
if($sendtj){
	$username = $_POST['user_name'];
	$password_min = $_POST['user_password'];
	$password = md5($password_min);
if(!empty($username) && !empty($password)) {
		$sql="SELECT * FROM [用户表] WHERE 用户名字段='".$username."' AND 密码字段='".$password."'";
		$result=mysql_query($sql);
	if(mysql_num_rows($result)){
			//自己操作,可以把用户名存入到SESSION里
			$bd = mysql_fetch_array($result);
			$_SESSION['UNAME']	=$username;
			
			//把登陆信息写进日志里
			$sql="INSERT INTO [日志表] (日志字段) VALUES ('日记记录信息')";
			mysql_query($sql);
		}else{
			echo("用户名和密码不正确!");	
		}
		
	}else{
		echo("用户名和密码不能为空!");	
	}
}
?>