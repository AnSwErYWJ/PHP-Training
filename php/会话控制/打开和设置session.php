<?php
/*在PHP中使用session非常简单，先执行session_start方法开启session，然后通过全局变量$_SESSION进行session的读写。*/
session_start();
$_SESSION['test'] = time();
var_dump($_SESSION);

/*session会自动的对要设置的值进行encode与decode，因此session可以支持任意数据类型，包括数据与对象等。*/
session_start();
$_SESSION['ary'] = array('name' => 'jobs');
$_SESSION['obj'] = new stdClass();
var_dump($_SESSION);

/*默认情况下，session是以文件形式存储在服务器上的，因此当一个页面开启了session之后，会独占这个session文件，这样会导致当前用户的其他并发访问无法执行而等待。可以采用缓存或者数据库的形式存储来解决这个问题，这个我们会在一些高级的课程中讲到。*/
?>