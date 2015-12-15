//导出
mysqldump -uroot -p --default-character-set=utf8 dbname tablename > bak.sql

//导入
mysql -uroot -p --default-character-set=utf8 dbname < bak.sql

//设置默认的字符集为utf8
set character_set_database=utf8; 