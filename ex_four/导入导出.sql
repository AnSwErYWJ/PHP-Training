//����
mysqldump -uroot -p --default-character-set=utf8 dbname tablename > bak.sql

//����
mysql -uroot -p --default-character-set=utf8 dbname < bak.sql

//����Ĭ�ϵ��ַ���Ϊutf8
set character_set_database=utf8; 