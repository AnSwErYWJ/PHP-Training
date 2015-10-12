<?php
$filename = 'test.txt';
try {
    if (!file_exists($filename)) {
        throw new Exception('文件不存在');
    }
} catch(Exception $e) {
    echo $e->getMessage();
}
?>