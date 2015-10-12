<?php
//通过imagecreatetruecolor函数可以创建一个真彩色的空白图片
$img = imagecreatetruecolor(100, 100);

//GD库中对于画笔所用的颜色，需要通过imagecolorallocate函数进行分配，通过参数设定RGB的颜色值来确定画笔的颜色：
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);

//调用绘制线段函数imageline进行线条的绘制，通过指定起点跟终点来最终得到线条。
imageline($img, 0, 0, 100, 100, $red);

//通过header与imagepng进行图像的输出
header("content-type: image/png");
imagepng($img);

//通过imagepng函数指定文件名将绘制后的图像保存到文件中。
imagepng($img, 'img.png');

//调用imagedestroy释放该图片占用的内存
imagedestroy($img);
?>