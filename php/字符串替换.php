<?php
//str_replace(要查找的字符串, 要替换的字符串, 被搜索的字符串, 替换进行计数[可选])
$str = 'I want to learn js';
$replace = str_replace('js', 'php', $str);
echo $replace;//结果显示I want to learn php
?>