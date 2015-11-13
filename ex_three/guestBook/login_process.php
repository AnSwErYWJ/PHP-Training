<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
 error_reporting(E_ALL^E_NOTICE^E_WARNING);
 
 require 'common/config.php';
 require 'mysql/mysql.class.php';
 header("Content-Type: text/html;charset=utf-8");

if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
{
	$user = $_POST["id"];
	$psw = $_POST["pw"];
	$psw = md5($psw);
		
	DB::connect();

	$sql = "select nickname,password from user where nickname = '$_POST[id]' and password = '$psw'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	if($num)
	{
		if($user == 'admin'){
			session_start();
			$_SESSION['admin'] = $user;
			header('location:admin.php');
		}
		else{
			session_start();
			$_SESSION['user'] = $user;			
			header('location:index.php');
		}
	}
	else
	{
		echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
	}
	DB::close();
}
else
{
	echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>