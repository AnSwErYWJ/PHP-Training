<?php
//通过imagecreatefromjpeg可以直接从图片文件创建图像
$im = imagecreatefromjpeg($filename);

//GD函数imagecopy将logo的图像复制到源图像中。
$logo = imagecreatefrompng($filename);
imagecopy($im, $logo, 15, 15, 0, 0, $width, $height);

//当将logo图片复制到原图片上以后，将加水印后的图片输出保存就完成了加水印处理。
imagejpeg($im, $filename);

?>