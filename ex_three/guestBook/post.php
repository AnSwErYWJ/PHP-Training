 <?php
 /**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
require 'common/config.php';
require 'mysql/mysql.class.php';

error_reporting(E_ALL ^ E_NOTICE^ E_DEPRECATED);

header("Content-Type: text/html;charset=utf-8");


if($_POST['nickname'] == 'yes'){
	$author = '匿名';
}
if($_POST['nickname'] == 'no'){
	session_start();
	if($_SESSION['user'])
		$author = $_SESSION['user'];
	else
		$author = $_SESSION['admin'];
}
$content = DB::cleanSql($_POST['content']);
$create_time = time();

$sql_insert = 'insert into ' . GB_TABLE_NAME . '(nickname, content, createtime) values( ' . "'{$author}', '{$content}', {$create_time})";

DB::connect();
$insert_status = mysql_query($sql_insert);
DB::close();

if($insert_status) {
	//redirect to the index page
	echo "<script>alert('留言成功！');</script>";
	header('location:index.php');
} else{
	echo "<script>alert('抱歉，留言失败！'); history.go(-1);</script>";	
}
?>
