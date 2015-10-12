<?php
/*PHP中常用来判断文件存在的函数有两个is_file与file_exists.*/
$filename = './test.txt';
if (file_exists($filename)) {//文件和目录
    echo file_get_contents($filename);
}

$filename = './test.txt';
if (is_file($filename)) {//文件
    echo file_get_contents($filename);
}

/*可以使用is_readable与is_writeable在文件是否存在的基础上，判断文件是否可读与可写。*/
$filename = './test.txt';
if (is_writeable($filename)) {
    file_put_contents($filename, 'test');
}

if (is_readable($filename)) {
    echo file_get_contents($filename);
}
?>