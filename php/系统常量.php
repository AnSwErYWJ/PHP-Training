<?php
echo __FILE__;//php程序文件名。它可以帮助我们获取当前文件在服务器的物理位置。
echo "<br />";

echo __LINE__;//PHP程序文件行数。它可以告诉我们，当前代码在第几行。
echo "<br />";

echo PHP_VERSION;//当前解析器的版本号。它可以告诉我们当前PHP解析器的版本号，我们可以提前知道我们的PHP代码是否可被该PHP解析器解析。
echo "<br />";

echo PHP_OS;//执行当前PHP版本的操作系统名称。它可以告诉我们服务器所用的操作系统名称，我们可以根据该操作系统优化我们的代码。
echo "<br />";
?>