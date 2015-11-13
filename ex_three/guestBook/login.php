<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
 error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
 $title = '登录';
 require 'common/header.php';

  if ($_SESSION['user']) {
	header('location:index.php');
}
?>

<html>
<head>
    <meta charset="UTF-8">
	<script src='js/login.js'></script>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
<h2>登录</h2>
<form action="login_process.php" method="post" name="myform" onsubmit="return Checklogin();">
<table id="login">
 <tr><td>用户名：</td><td><input type="text" name="id" /></td></tr>
 <tr><td>密&nbsp;码：</td><td><input type="password" name="pw" /><td></tr>
 <tr><td><input type="submit" name="submit" value="登陆"/></td><td>
 <a href="reg.php">没有账号？请注册</a></td></tr>
 </table>
 </form>
 </body>
 </html>
 
<?php
require 'common/footer.php';
?>