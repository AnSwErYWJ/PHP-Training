<?php
/*文件有很多元属性，包括：文件的所有者、创建时间、修改时间、最后的访问时间等。

fileowner：获得文件的所有者
filectime：获取文件的创建时间
filemtime：获取文件的修改时间
fileatime：获取文件的访问时间*/

/*其中最常用的是文件的修改时间，通过文件的修改时间，可以判断文件的时效性，经常用在静态文件或者缓存数据的更新。*/
$mtime = filemtime($filename);
echo '修改时间：'.date('Y-m-d H:i:s', filemtime($filename));
?>