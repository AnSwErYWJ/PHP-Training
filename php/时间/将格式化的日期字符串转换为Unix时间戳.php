<?php
/*strtotime函数预期接受一个包含美国英语日期格式的字符串并尝试将其解析为 Unix 时间戳。

函数说明：strtotime(要解析的时间字符串, 计算返回值的时间戳【默认是当前的时间，可选】)
返回值：成功则返回时间戳，否则返回 FALSE*/

echo strtotime("now");//相当于将英文单词now直接等于现在的日期和时间，并把这个日期时间转化为unix时间戳。这个效果跟echo time();一样。
echo strtotime("+1 seconds");//相当于将现在的日期和时间加上了1秒，并把这个日期时间转化为unix时间戳。这个效果跟echo time()+1;一样。
echo strtotime("+1 day");//相当于将现在的日期和时间加上了1天。
echo strtotime("+1 week");//相当于将现在的日期和时间加上了1周。
echo strtotime("+1 week 3 days 7 hours 5 seconds");//相当于将现在的日期和时间加上了1周3天7小时5秒。
?>