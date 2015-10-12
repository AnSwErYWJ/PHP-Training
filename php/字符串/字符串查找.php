<?php
//strpos(要处理的字符串, 要定位的字符串, 定位的起始位置[可选])
$str = 'I want to study at imooc';
$pos = strpos($str, 'imooc');
echo $pos;//结果显示19，表示从位置0开始，imooc在第19个位置开始出现
?>