<?php
$subject = "abcdef";
$pattern = '/a(.*?)d/';
preg_match($pattern, $subject, $matches);
print_r($matches); //结果为：Array ( [0] => abcd [1] => bc )

//邮箱
$subject = "my email is spark@imooc.com";
//在这里补充代码，实现正则匹配，并输出邮箱地址
$p = "/[\w\-]+@\w+\.\w+/";
preg_match($p, $subject, $matches);
echo $matches[0];
?>