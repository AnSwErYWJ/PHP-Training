<?php
//默认的，当PHP执行完毕以后，会自动的关闭数据库连接。
mysql_close();

//在存在多个数据库连接的情况下，可以设定连接资源参数来关闭指定的数据库连接。
$link = mysql_connect($host, $user, $pass);
mysql_close($link);
?>