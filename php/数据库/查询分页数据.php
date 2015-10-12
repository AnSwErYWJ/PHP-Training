<?php
//通过mysql的limit可以很容易的实现分页，limit m,n表示从m行后取n行数据
//假定当前页为$page，每页显示$n条数据，那么m为当前页前面所有的数据，既$m = ($page-1) * $n，在知道了翻页原理以后，那么我们很容易通过构造SQL语句在PHP中实现数据翻页。
//连接数据库
mysql_connect('127.0.0.1', 'code1', '');
mysql_select_db('code1');
mysql_query("set names 'utf8'");
//预设翻页参数
$page = 2;
$pagesize = 2;
//在这里构建分页查询
$offset = ($page-1)*$pagesize;
$sql = "select * from user limit $offset,$pagesize";
//获取翻页数据
$result = mysql_query($sql);
$data = array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $data[] = $row;
}
echo '<pre>';
print_r($data);
echo '</pre>';
?>