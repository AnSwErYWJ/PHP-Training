<?php
$str = 'hello';
$len = strlen($str);//strlen函数计算英文字符
echo $len;//输出结果是5

$str = "我爱你";
echo mb_strlen($str,"UTF8");//结果：3，此处的UTF8表示中文编码是UTF8格式，中文一般采用UTF8编码
?>