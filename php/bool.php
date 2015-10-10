<?php
$man = "男";
$flag = ($man == "男");
echo "true ".$flag ;//正确输出1
echo "<br />" ;

$flag = ($man == "");
echo "false ".$flag ;//错误不输出
echo "<br />" ;

var_dump($flag);
?>