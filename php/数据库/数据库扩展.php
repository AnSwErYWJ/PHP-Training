<?php
//mysql扩展进行数据库连接的方法：
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password');

//mysqli扩展：
$link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password');

//PDO扩展
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';
$dbh = new PDO($dsn, $user, $password);

?>