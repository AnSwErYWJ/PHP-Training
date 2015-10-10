<?php
$a = TRUE; //A同意
$b = TRUE; //B同意
$c = FALSE; //C反对
$d = FALSE; //D反对
//咱顺便复习下三元运算符
    echo ($a and $b)?"通过":"不通过";//与
	echo "<br />";
	echo ($a or $c)?"通过":"不通过";//或
	echo "<br />";
	echo ($a xor $c xor $d)?"通过":"不通过";//异或
	echo "<br />";
	echo !$c?"通过":"不通过";//非
	echo "<br />";
	echo ($a && $d)?"通过":"不通过";//与，优先级高于=
	echo "<br />";
	echo ($b||$c||$d)?"通过":"不通过";//或，优先级高于=
?>