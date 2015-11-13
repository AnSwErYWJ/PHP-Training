<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */ 

 session_start();
?>
 
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<div id="a">
		<?php 
			error_reporting(E_ALL^E_NOTICE^E_WARNING);
			if($_SESSION['user']){
				echo '<b>欢迎您，'.$_SESSION['user'].' ! | <a href="logout.php" />登出</a></b>';
			}
			else if($_SESSION['admin']){
				echo '<b>欢迎您，管理员! | <a href="index.php">进入留言板</a> | <a href="admin.php">后台管理</a> | <a href="logout.php" />登出</a></b>';
			}
			else{
				echo '<b><a href="login.php">登陆</a> | <a href="reg.php">注册</a></b>';
			}
		?>
	</div>
</body>
