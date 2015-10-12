<?php
//通常我们使用mysql_connect函数进行数据库连接，该函数需要指定数据库的地址，用户名及密码。
$host = 'localhost';
$user = 'code1';
$pass = '';
$link = mysql_connect($host, $user, $pass);

//命令行：mysql -hlocalhost -ucode1 -p

//连接成功以后，我们需要选择一个操作的数据库
mysql_select_db('code1');

//通常我们会先设置一下当前连接使用的字符编码，一般的我们会使用utf8编码。
mysql_query("set names 'utf8'");

?>