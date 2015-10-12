
/*通过imagepng可以直接输出图像到浏览器,指定路径参数将图像保存到文件中*/

//imagepng($img, $filename);

/*使用imagejpeg将图片保存成jpeg格式，imagegif将图片保存成gif格式，需要说明的是，imagejpeg会对图片进行压缩，因此还可以设置一个质量参数。*/
​imagejpeg($img, $filename, 80);
