<?php
error_reporting(0); //禁止显示PHP警告提示
//NULL是空类型，对大小写不敏感

$var;//未被赋值
var_dump($var);

$var1=NULL;//被赋值为NULL
var_dump($var1);
$var2=null;//被赋值为NULL
var_dump( $var2);

$var3 = "节日快乐！";
unset($var3);//被unset()
var_dump($var3);
?>