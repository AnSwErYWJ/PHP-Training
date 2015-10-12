<?php
$str_string1 = '甲问："你在哪里学的PHP？"';//在单引号中嵌入双引号

$str_string2 = "乙毫不犹豫地回答：'当然是慕课网咯！'";//在双引号中嵌入单引号

$str_string3 = '甲问:\'能告诉我网址吗？\'';//使用转义符“\”

$str_string4 = "乙答道:\"www.imooc.com\"";//使用转义符“\”

echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";

$love = "I love you!";

$string1 = "慕课网,$love";//当双引号中包含变量时，变量会与双引号中的内容连接在一起
$string2 = '慕课网,$love';//当单引号中包含变量时，变量会被当做字符串输出
echo $string1;

echo "<br />";
echo $string2;
?>