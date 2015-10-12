<?php
/*PHP具有很多异常处理类，其中Exception是所有异常处理的基类。

Exception具有几个基本属性与方法，其中包括了：

message 异常消息内容
code 异常代码
file 抛出异常的文件名
line 抛出异常在该文件的行数

其中常用的方法有：

getTrace 获取异常追踪信息
getTraceAsString 获取异常追踪信息的字符串
getMessage 获取出错信息

如果必要的话，可以通过继承Exception类来建立自定义的异常处理类。*/

//自定义的异常类，继承了PHP的异常基类Exception
class MyException extends Exception {
    function getInfo() {
        return '自定义错误信息';
    }
}

try {
    //使用异常的函数应该位于 "try"  代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。
    throw new MyException('error');//这里规定如何触发异常。注意：每一个 "throw" 必须对应至少一个 "catch"，当然可以对应多个"catch"
} catch(Exception $e) {//"catch" 代码块会捕获异常，并创建一个包含异常信息的对象
    echo $e->getInfo();//获取自定义的异常信息
    echo $e->getMessage();//获取继承自基类的getMessage信息
}
?>