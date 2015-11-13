<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
error_reporting(E_ALL ^ E_NOTICE);

class DB {
	static $_connect = null;

	/*连接数据库*/
	static function connect() {
		if (!self::$_connect) {
			$conn = @mysql_connect(DB_HOST, DB_USER, DB_PWD);
			if ($conn) {
				mysql_select_db(DB_NAME, $conn);
				mysql_query("set names 'utf8'");	
				self::$_connect = $conn;
			} else {
				exit('database error');
			}
		}
		return self::$_connect;
	}

	/*转义 SQL 语句中使用的字符串中的特殊字符*/
	static function cleanSql($sql) {
		return mysql_real_escape_string($sql);
	}

	/*关闭数据库*/
	static function close() {
		if (self::$_connect) {
			mysql_close(self::$_connect);
		}
	}
}
?>