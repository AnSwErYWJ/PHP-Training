<?php
//采用mysql_query加sql语句的形式向数据库发送查询指令。
$res = mysql_query('select * from user limit 1');

//对于查询类的语句会返回一个资源句柄（resource），可以通过该资源获取查询结果集中的数据。
$row = mysql_fetch_array($res);
var_dump($row);

//默认的，PHP使用最近的数据库连接执行查询，但如果存在多个连接的情况，则可以通过参数指令从那个连接中进行查询。
$link1 = mysql_connect('127.0.0.1', 'code1', '');
$link2 = mysql_connect('127.0.0.1', 'code1', '', true); //开启一个新的连接
$res = mysql_query('select * from user limit 1', $link1); //从第一个连接中查询数据
?>