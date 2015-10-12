<?php
/*在了解了异常处理的基本原理之后，我们可以通过try catch来捕获异常，我们将执行的代码放在try代码块中，一旦其中的代码抛出异常，就能在catch中捕获。

这里我们只是通过案例来了解try catch的机制以及异常捕获的方法，在实际应用中，不会轻易的抛出异常，只有在极端情况或者非常重要的情况下，才会抛出异常，抛出异常，可以保障程序的正确性与安全，避免导致不可预知的bug。*/

try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    echo 'Error:'.$ex->getMessage().'<br>';
    echo $ex->getTraceAsString().'<br>';
}
echo '异常处理后，继续执行其他代码';
?>