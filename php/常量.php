<?php
/*
 * define()函数的语法格式为：
 * bool define(string $constant_name, mixed $value[, $case_sensitive = true])
 * 第一个参数“constant_name”为必选参数，常量名称,即标志符，常量的命名规则与变量的一致，但是要注意哦，它可不带美元符号哦。第二个参数“value”为必选参数，它是常量的值。第三个参数“case_sensitive”为可选参数，指定是否大小写敏感，设定为true表示不敏感，一般不指定第三个参数的情况下，默认第三个参数的值为false。
 *（注： string表示参数类型为字符串类型，mixed表示参数类型可以接受为多种不同的类型，case_sensitive = true表示默认为布尔类型TRUE）
 */

$p = "PII";

define("PI",3.14);
define($p,3.14);

echo PI;//3.14
echo "<br />";
echo PII;//3.14

$p="";
$r=1;
//定义圆周率的两种取值
define("PI1",3.14);
define("PI2",3.142);
/*使用constant()函数。它和直接使用常量名输出的效果是一样的，但函数可以动态的输出不同的常量，在使用上要灵活、方便，其语法格式如下：

mixed constant(string constant_name)
第一个参数constant_name为要获取常量的名称，也可为存储常量名的变量。如果成功则返回常量的值，失败则提示错误信息常量没有被定义。（注：mixed表示函数返回值类型为多种不同的类型，string表示参数类型为字符串类型）
*/

$p = "PI1";
$area=constant($p)*$r*$r;
echo $area;

$p = "PI2";
$area=constant($p)*$r*$r;
echo $area;

/*defined()函数可以帮助我们判断一个常量是否已经定义，其语法格式为：

bool defined(string constants_name)
它只有参数constant_name，指的是要获取常量的名称，若存在则返回布尔类型true，否则返回布尔类型false; （注：bool表示函数返回值类型为布尔类型）*/
define("PI1",3.14);
$p = "PI1";
$is1=defined($p);
$is2=defined("PI2");

var_dump($is1);
var_dump($is2);
?>