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

$content = DB::cleanSql($_POST['content']);
$id = $_POST['id'];

if($content != '' && strlen($content) >= 15){
	$sql_edit = 'UPDATE ' . GB_TABLE_NAME . ' SET content = "' .$content.'" WHERE id = ' . $id;
	DB::connect();
	$edit_status = mysql_query($sql_edit);
	DB::close();

	if($edit_status) {
		echo "<script>alert('编辑成功');</script>";
		header('location:admin.php');
	} else{
		echo "<script>alert('编辑失败');</script>";	
		header('location:admin.php');
	}
}else{
	header('location:admin.php');
}
?>
