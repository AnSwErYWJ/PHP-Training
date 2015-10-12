<?php
/*setcookie函数:setcookie具有7个可选参数，我们常用到的为前5个：

name（ Cookie名）可以通过$_COOKIE['name'] 进行访问
value（Cookie的值）
expire（过期时间）Unix时间戳格式，默认为0，表示浏览器关闭即失效
path（有效路径）如果路径设置为'/'，则整个网站都有效
domain（有效域）默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效*/

$value = 'test';
setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  //有效期一小时
setcookie("TestCookie", $value, time()+3600, "/path/", "imooc.com"); //设置路径与域

/*PHP中还有一个设置Cookie的函数setrawcookie，setrawcookie跟setcookie基本一样，唯一的不同就是value值不会自动的进行urlencode，因此在需要的时候要手动的进行urlencode*/
setrawcookie('cookie_name', rawurlencode($value), time()+60*60*24*365);

/*因为Cookie是通过HTTP标头进行设置的，所以也可以直接使用header方法进行设置。*/
header("Set-Cookie:cookie_name=value");

/*删除*/
setcookie('test', '', time()-1);//可以看到将cookie的过期时间设置到当前时间之前，则该cookie会自动失效，也就达到了删除cookie的目的。
/*之所以这么设计是因为cookie是通过HTTP的标头来传递的，客户端根据服务端返回的Set-Cookie段来进行cookie的设置，如果删除cookie需要使用新的Del-Cookie来实现，则HTTP头就会变得复杂，实际上仅通过Set-Cookie就可以简单明了的实现Cookie的设置、更新与删除。*/

/*通过header来删除cookie*/
header("Set-Cookie:test=1393832059; expires=".gmdate('D, d M Y H:i:s \G\M\T', time()-1));//gmdate，用来生成格林威治标准时间，以便排除时差的影响。
?>