<?php
//其中字符串'/apple/'就是一个正则表达式，他用来匹配源字符串中是否存在apple字符串。
$p = '/apple/i';
$str = "apple banna";
if (preg_match($p, $str,$matches)) {
    echo 'matched';
    print_r($matches); //结果为：Array ( [0]  => apple )
}

/*PCRE库函数中，正则匹配模式使用分隔符与元字符组成，分隔符可以是非数字、非反斜线、非空格的任意字符。经常使用的分隔符是正斜线(/)、hash符号(#) 以及取反符号(~)*/
/*如果模式中包含分隔符，则模式中分隔符需要使用反斜杠（\）进行转义。*/
/*如果模式中包含较多的分割字符，建议更换其他的字符作为分隔符，也可以采用preg_quote进行转义。

$p = 'http://';
$p = '/'.preg_quote($p, '/').'/';
echo $p;*/

/*分隔符后面可以使用模式修饰符，模式修饰符包括：i, m, s, x等，例如使用i修饰符可以忽略大小写匹配：
'/http/i'*/


?>