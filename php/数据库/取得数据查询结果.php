<?php
//PHP有多个函数可以获取数据集中的一行数据，最常用的是mysql_fetch_array，可以通过设定参数来更改行数据的下标，默认的会包含数字索引的下标以及字段名的关联索引下标。
$sql = "select * from user limit 1";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

//可以通过设定参数MYSQL_NUM只获取数字索引数组，等同于mysql_fetch_row函数，如果设定参数为MYSQL_ASSOC则只获取关联索引数组，等同于mysql_fetch_assoc函数。
$row = mysql_fetch_row($result);
$row = mysql_fetch_array($result, MYSQL_NUM); //这两个方法获取的数据是一样的

$row = mysql_fetch_assoc($result);
$row = mysql_fetch_array($result, MYSQL_ASSOC);

//如果要获取数据集中的所有数据，我们通过循环来遍历整个结果集。
$data = array();
while ($row = mysql_fetch_array($result)) {
    $data[] = $row;
}
?>