<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
error_reporting(E_ALL^E_NOTICE);

$title = '留言板';
require 'common/header.php';
require 'common/config.php';
require 'mysql/mysql.class.php';

header("Content-Type:text/html;charset=utf-8");

if(!$_SESSION['admin'] && !$_SESSION['user']){
header('location:login.php');
}


$gb_count_sql = 'SELECT count(*) FROM ' . GB_TABLE_NAME; //查询共有几条记录
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
$pagedata_sql = 'SELECT  nickname,content,createtime FROM ' . GB_TABLE_NAME . ' WHERE status = 0 ORDER BY createtime DESC LIMIT ' . $offset . ',' . PER_PAGE_GB;
$sql_page_result = mysql_query($pagedata_sql);
$sql_page_array = array();
while($temp = mysql_fetch_array($sql_page_result)) {
	$sql_page_array[] = $temp;
}

DB::close();

echo '<h2>留言板</h2>';
//循环输出数据库中满足条件id留言内容
foreach((array)$sql_page_array as $key => $value){
	echo '<table>';
	echo '<tr><td>用户名：</td><td>'. $value['nickname'] . '</td><tr>';
	echo '<tr><td>内容:</td><td>' . $value['content'] . '</td><tr>';
	//将时间转换成指定格式时间
	date_default_timezone_set('PRC');
	echo '<tr><td>时间：</td><td>' . date('Y-m-d H:i:s', $value['createtime']) .'</td><tr>';
	echo '</table>';
	echo '<hr />';
}

echo '总共:  '.$gb_count.' 条留言';
echo '<br />';
if ($pagenum > 1) {
	for($i = 1; $i <= $pagenum; $i++) {
		if($i == $page) {
			echo '&nbsp;&nbsp;['.$i.']';
		} else {
			echo '<a href="?page='. $i .'">&nbsp;' . $i . '&nbsp;</a>';
		}
	}
}
?>

<html>
<head>
    <meta charset="UTF-8">
	<script src='js/message_submit.js'></script>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
<div id="post">
<form name="message_submit" id="form" action="post.php" method="post" onSubmit="return checkMessage();">
<table>
<tr>
<br />
  <td>匿名：</td>
  <td>
	<input type="radio" name="nickname" value="yes" />是
	<input type="radio" name="nickname" value="no" checked="checked"/>否
	<br />
  </td>
</tr> 
<tr>
  <td>内容：</td>
  <td><textarea rows="5" cols="140" name="content" id="content" placeholder="必填"></textarea></td>
</tr>
  </table>
  <input type="submit" value="留言" id="sub" >&nbsp;
  <input type="reset" value="重置" id="reset">
</form>
</div>
</body>
</html>

<?php require 'common/footer.php';?>
