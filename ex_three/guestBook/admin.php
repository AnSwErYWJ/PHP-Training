<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
header("Content-Type: text/html;charset=utf-8");
$title = '后台管理';
require 'common/header.php';

//is admin login?
if (!$_SESSION['admin']) {
	if(!$_SESSION['user']){
		header('location:login.php');
		}
	else{
		header('location:index.php');
	}
}

require 'common/config.php';
require 'mysql/mysql.class.php';

$gb_count_sql = 'SELECT count(*) FROM ' . GB_TABLE_NAME;
//connect db
DB::connect();
$gb_count_res = mysql_query($gb_count_sql);
$gb_count = mysql_fetch_array($gb_count_res)[0];

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
//计算留言数，得出分页数
$pagenum = ceil($gb_count / PER_PAGE_GB);
if ($page > $pagenum || $page < 0) {
	$page = 1;
}
// 限制搜索结果
$offset = ($page - 1) * PER_PAGE_GB;

$pagedata_sql = 'SELECT id,nickname,content,email,createtime,reply,replytime FROM ' . GB_TABLE_NAME . ' ORDER BY createtime DESC LIMIT ' . $offset . ',' . PER_PAGE_GB;
$sql_page_result = mysql_query($pagedata_sql);
while($temp = mysql_fetch_array($sql_page_result)) {
	$sql_page_array[] = $temp;
}
DB::close();
?>

<html>
<head>
    <meta charset="UTF-8">
	<script src="js/select.js"></script>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
<form action="admin_process.php" method="post" name="myform2" >
<h2>后台管理</h2>
<?php
//循环输出数据库中满足条件id留言内容
if(is_array($sql_page_array)){
foreach($sql_page_array as $key => $value) {
	echo '<input type="hidden" name = "id" value="' . $value['id'] . '" />';
	echo '<table>';
	echo '<tr><td>留言者:</td><td>'. $value['nickname']. '</td><tr>';
	echo '<tr><td>内容:</td><td>';
	echo $value['content'] . '</td><tr>';
	//将时间转换成指定格式时间
	date_default_timezone_set('PRC');
	echo '<tr><td>时间:</td><td>' . date('Y-m-d H:i:s', $value['createtime']) .'</td><tr>';
	echo '<tr><td><input type="checkbox" name="checkboxes[]" value="' .$value['id'] . '"/>删除';	
	echo '</td><td><input type="submit" name="edit" value="编辑" /></td><tr>';
	echo '</table>';
	echo '<hr />';	
}
}
?>
<input type="button" value="全选" onClick="selectBox('all')" /> 
<input type="button" value="反选" onClick="selectBox('reverse')" />
<input type="submit" name="delete" value="删除" />
</form>
<br />
</body>
</html>
<?php
echo '共 '.$gb_count.'&nbsp;&nbsp;条留言  ';
if ($pagenum > 1) {
	for($i = 1; $i <= $pagenum; $i++) {
		if($i == $page) {
			echo '&nbsp;&nbsp;['.$i.']';
		} else {
			echo '<a href="?page='. $i .'">&nbsp;' . $i . '&nbsp;</a>';
		}
	}
}
require 'common/footer.php';
?>