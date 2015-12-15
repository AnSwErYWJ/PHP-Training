<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
$str='编码';
echo mb_convert_encoding($str, "UTF-8", "auto"); //未知原编码，通过auto自动检测后，转换编码为utf-8
?>