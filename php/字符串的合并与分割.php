<?php
//字符串合并函数implode(分隔符[可选], 数组)
$arr = array('Hello', 'World!');
$result = implode('', $arr);
print_r($result);//结果显示Hello World!

//字符串分隔函数explode(分隔符[可选], 字符串)
$str = 'apple,banana';
$result = explode(',', $str);
print_r($result);//结果显示array('apple','banana')
?>