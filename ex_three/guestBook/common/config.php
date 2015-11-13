<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
define('DEBUG', FALSE);
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_NAME', 'guestBook');
define('GB_TABLE_NAME', 'guestbook');
define('ADMIN_TABLE_NAME', 'user');
define('PER_PAGE_GB', 8);

/*error messages*/
if (DEBUG) { 
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
}