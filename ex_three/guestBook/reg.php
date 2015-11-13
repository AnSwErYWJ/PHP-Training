<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
 $title = '注册';
 require 'common/header.php';
 
?>

<html>
<head>
    <meta charset="UTF-8">
	<script src='js/reg.js'></script>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
<h2>注册</h2>
<form action="reg_process.php" method="post" name="myform1" onsubmit="return Checkreg();">
<table id="reg">
<tr><td>用户名：</td><td><input type="text" name="id" /></td></tr>
 <tr><td>密&nbsp码：</td><td><input type="password" name="pw" /> </td></tr>
 <tr><td>确认密码：</td><td><input type="password" name="pw_confirm" /></td></tr>
 <tr><td><input type="submit" name="submit" value="注册"/></td><td>
 <input type="reset" value="重置" id="reset"></td></tr>
 </table>
 </form>
 </body>
 </html>
 
<?php
 require 'common/footer.php';
?>