<?php
/*PHP写文件也具有两种方式，最简单的方式是采用file_put_contents。*/
$filename = './test.txt';
$data = 'test';
file_put_contents($filename, $data);//$data参数可以是一个一维数组，当$data是数组的时候，会自动的将数组连接起来，相当于$data=implode('', $data);

/*PHP也支持类似C语言风格的操作方式，采用fwrite进行文件写入。*/
$fp = fopen('./test.txt', 'w');
fwrite($fp, 'hello');
fwrite($fp, 'world');
fclose($fp);
?>