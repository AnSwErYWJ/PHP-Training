<?php
/*通过filesize函数可以取得文件的大小，文件大小是以字节数表示的。*/
$filename = '/data/webroot/usercode/code/resource/test.txt';
$size = filesize($filename);

/*如果要转换文件大小的单位，可以自己定义函数来实现。*/
function getsize($size, $format = 'kb') {
    $p = 0;
    if ($format == 'kb') {
        $p = 1;
    } elseif ($format == 'mb') {
        $p = 2;
    } elseif ($format == 'gb') {
        $p = 3;
    }
    $size /= pow(1024, $p);
    return number_format($size, 3);
}

$filename = '/data/webroot/usercode/code/resource/test.txt';
$size = filesize($filename);

$size = getsize($size, 'kb'); //进行单位转换
echo $size.'kb';

/*值得注意的是，没法通过简单的函数来取得目录的大小，目录的大小是该目录下所有子目录以及文件大小的总和，因此需要通过递归的方法来循环计算目录的大小。*/
?>