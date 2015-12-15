<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
header("Content-Type: text/html;charset=utf-8");//解决字符乱码
$title = 'PHP中文读写显示问题';


/*截断显示文章标题*/
function get_brief_str($str, $max_length) 
{ 
echo strlen($str) ."<br>"; 
if(strlen($str) > $max_length) 
{ 
$check_num = 0; 
for($i=0; $i < $max_length; $i++) 
{ 
if (ord($str[$i]) > 128) 
$check_num++; 
} 

if($check_num % 3 == 0) 
$str = substr($str, 0, $max_length)."..."; 
else if($check_num % 3 == 1) 
$str = substr($str, 0, $max_length + 2)."..."; 
else if($check_num % 3 == 2) 
$str = substr($str, 0, $max_length + 1)."..."; 
} 
return $str; 
} 

iconv("UTF-8", "GB2312",$title); 
$str = get_brief_str($title, 8); 
echo $str;
?>