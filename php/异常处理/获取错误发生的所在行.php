<?php
/*在异常被捕获之后，我们可以通过异常处理对象获取其中的异常信息，前面我们已经了解捕获方式，以及获取基本的错误信息。

在实际应用中，我们通常会获取足够多的异常信息，然后写入到错误日志中。

通过我们需要将报错的文件名、行号、错误信息、异常追踪信息等记录到日志中，以便调试与修复问题。*/

try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    $msg = 'Error:'.$ex->getMessage()."\n";
    $msg.= $ex->getTraceAsString()."\n";
    $msg.= '异常行号：'.$ex->getLine()."\n";
    $msg.= '所在文件：'.$ex->getFile()."\n";
    //将异常信息记录到日志中
    file_put_contents('error.log', $msg);
}
?>