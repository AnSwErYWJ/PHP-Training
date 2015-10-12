<?php
/*PHP使用unlink函数进行文件删除。*/
unlink($filename);

/*删除文件夹使用rmdir函数，文件夹必须为空*/
rmdir($dir);

/*如果文件夹中存在文件，可以先循环删除目录中的所有文件，然后再删除该目录，循环删除可以使用glob函数遍历所有文件。*/
foreach (glob("*") as $filename) {
    unlink($filename);
}
?>