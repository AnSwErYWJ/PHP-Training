<?php
/*内置函数strtotime实现功能：获取某个日期的时间戳，或获取某个时间的时间戳。*/
echo strtotime('2014-04-29');//1398700800，这个数字表示从1970年1月1日 00:00:00 到2014年4月29号经历了1398700800秒

echo strtotime('2014-04-29 00:00:01');//1398700801，这个数字表示从1970年1月1日 00:00:00 到2014-04-29 00:00:01时经历了1398700801秒

//大家发现上面的规律了吗，其实strtotime('2014-04-29')相当于strtotime('2014-04-29 00:00:00')
?>