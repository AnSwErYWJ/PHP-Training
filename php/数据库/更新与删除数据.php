<?php
//更新
$sql = "update user set name = '曹操' where id=2 limit 1";
if (mysql_query($sql)) {
    echo '更新成功';
}

//删除
$sql = "delete from user where id=2 limit 1";
if (mysql_query($sql)) {
    echo '删除成功';
}

//通过mysql_affected_rows函数来获取更新过的数据行数，如果数据没有变化，则结果为0。
$sql = "update user set name = '曹操' where id=2 limit 1";
if (mysql_query($sql)) {
    echo mysql_affected_rows();
}
?>