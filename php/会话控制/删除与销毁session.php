<?php
/*删除某个session值可以使用PHP的unset函数，删除后就会从全局变量$_SESSION中去除，无法访问。*/
session_start();
$_SESSION['name'] = 'jobs';
unset($_SESSION['name']);
echo $_SESSION['name']; //提示name不存在

/*如果要删除所有的session，可以使用session_destroy函数销毁当前session，session_destroy会删除所有数据，但是session_id仍然存在。*/
session_start();
$_SESSION['name'] = 'jobs';
$_SESSION['time'] = time();
session_destroy();//不会立即的销毁全局变量$_SESSION中的值，只有当下次再访问的时候，$_SESSION才为空，因此如果需要立即销毁$_SESSION，可以使用unset函数。

/*如果需要同时销毁cookie中的session_id，通常在用户退出的时候可能会用到，则还需要显式的调用setcookie方法删除session_id的cookie值。*/
?>