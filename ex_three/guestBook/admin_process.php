<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
session_start();
if (!$_SESSION['admin']) {
	return false;
}

error_reporting(E_ALL^E_NOTICE^E_WARNING);
require 'common/config.php';
require 'mysql/mysql.class.php';
header("Content-Type: text/html;charset=utf-8");
 
$id = $_POST['id'];
DB::connect();

/*删除*/
if(isset($_POST["delete"]) && $_POST["delete"] == "删除"){
	if(!empty($_POST['checkboxes']) && is_array($_POST['checkboxes'])){
		$id_muti=implode(",",$_POST['checkboxes']);
		$delete_sql='DELETE FROM guestbook WHERE id in (' . $id_muti . ')'; 
		$result=mysql_query($delete_sql);
		if($result){
		echo "<script>alert('删除成功！');history.go(-1);</script>";}
	}
	else{
		echo "<script>alert('必须选中留言！');history.go(-1);</script>";
	}
}

/*单条编辑*/
if(isset($_POST["edit"]) && $_POST["edit"] == "编辑"){
	if (!(empty($id))) {
		$query="SELECT * FROM guestbook WHERE id =".$id;
		$result=mysql_query($query);
		if($rs=mysql_fetch_array($result)) {
			$title = '后台编辑';
			require 'common/header.php';?>
			
			<html>
				<head>
					<meta charset="UTF-8">
					<script src='js/edit.js'></script>
					<link rel="stylesheet" type="text/css" href="css/css.css" />
				</head>
				<body>
				<h2>后台编辑</h2>
					<div id="post">
						<form name="editform" id="editform" action="edit_post.php" method="post" onSubmit="return checkEdit();">
							<table>
								<br/>
								<tr>
									<td>内容：</td>
									<td><input type="hidden" name = "id" value="<?php echo $rs['id']?>" /></td>
									<td><textarea rows="5" cols="140" name="content" id="content" placeholder=""><?php echo $rs[content]?></textarea></td>
								</tr>
							</table>
							<input type="submit" value="完成" id="finish" >&nbsp;
							<input type="reset" value="重置" id="reset">
						</form>
					</div>
				</body>
			</html>

			<?php require 'common/footer.php';
		}
	}
}
DB::close();
?>