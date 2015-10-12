<?php
/*最简单的读取文件的函数为file_get_contents，可以将整个文件全部读取到一个字符串中。*/
/*可以通过参数控制读取内容的开始点以及长度。*/
$content = file_get_contents('./test.txt', null, null, 100, 500);

/*PHP也提供类似于C语言操作文件的方法，使用fopen，fgets，fread等方法，fgets可以从文件指针中读取一行，freads可以读取指定长度的字符串。*/
$fp = fopen('./text.txt', 'rb');
while(!feof($fp)) {
    echo fgets($fp); //读取一行
}
fclose($fp);

$fp = fopen('./text.txt', 'rb');
$contents = '';
while(!feof($fp)) {
    $contents .= fread($fp, 4096); //一次读取4096个字符
}
fclose($fp);
?>