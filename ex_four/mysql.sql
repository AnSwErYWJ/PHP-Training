//创建数据库
CREATE DATABASE `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci; 

//创建数据表
CREATE TABLE `one` ( 
`id` INT NOT NULL , 
`name` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
PRIMARY KEY ( `id` ) 
) ENGINE = MYISAM ; 

//读写数据库
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
