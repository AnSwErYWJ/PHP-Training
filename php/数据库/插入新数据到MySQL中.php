<?php
//插入数据其实也是通过执行一个sql语句来实现
$sql = "insert into user(name, age, class) values('李四', 18, '高三一班')";
mysql_query($sql); //执行插入语句

//通常数据都是存储在变量或者数组中，因此sql语句需要先进行字符串拼接得到。
$name = '李四';
$age = 18;
$class = '高三一班';
$sql = "insert into user(name, age, class) values('$name', '$age', '$class')";
mysql_query($sql); //执行插入语句

//在mysql中，执行插入语句以后，可以得到自增的主键id,通过PHP的mysql_insert_id函数可以获取该id。
$uid = mysql_insert_id();//这个id的作用非常大，通常可以用来判断是否插入成功，或者作为关联ID进行其他的数据操作。


?>