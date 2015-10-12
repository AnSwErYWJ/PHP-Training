<?php
//跟绘制线条类似，首先需要新建一个图片与初始化颜色。
$img = imagecreatetruecolor(100, 100);
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);

//使用imagestring函数来进行文字的绘制，这个函数的参数很多：imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )，可以通过$font来设置字体的大小，x,y设置文字显示的位置，$s是要绘制的文字,$col是文字的颜色。
imagestring($img, 5, 0, 0, "Hello world", $red);
header("content-type: image/png");
imagepng($img);
imagedestroy($img);
?>