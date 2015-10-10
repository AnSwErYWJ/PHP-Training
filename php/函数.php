<?php
function sum($a, $b) {//默认返回值为 NULL。
    return $a+$b;
}
//在这里调用函数计算1+2的值
$c = sum(1,2);

//可变函数
function func() {
    echo 'my function called.';
}
$name = 'func';
//调用可变函数
$name();//可变函数的调用方法为变量名加括号。

//函数检测
function func1() {
    echo 'exists';
}
$name = 'func1';
if (function_exists($name) ) { //判断函数是否存在
    $name();
}
