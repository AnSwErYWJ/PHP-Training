<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 error_reporting(E_ALL^E_NOTICE^E_WARNING);
 
 require 'common/config.php';
 require 'mysql/mysql.class.php';
 header("Content-Type: text/html;charset=utf-8");
 
if(isset($_POST["submit"]) && $_POST["submit"] == "注册")
{
	$user = $_POST["id"];
	$psw = $_POST["pw"];
	$psw = md5($psw);
	$psw_confirm = $_POST["pw_confirm"];
	$psw_confirm = md5($psw_confirm);
	if($user != '' && $psw != '' && $psw_confirm != '' && $psw==$psw_confirm){
	DB::connect();	//连接数据库
	$sql = "select nickname from user where nickname = '$_POST[id]'";	//SQL语句
	$result = mysql_query($sql);	//执行SQL语句
	$num = mysql_num_rows($result);	//统计执行结果影响的行数
	if($num)	//如果已经存在该用户
	{
		?>
		<script language=javascript>
		alert('用户名已存在'); 
		history.go(-1);
		</script>
		<?php
	}
	else	//不存在当前注册用户名称
	{
		$sql_insert = "insert into user (nickname,password) values('$_POST[id]','$psw')";
		$res_insert = mysql_query($sql_insert);
		if($res_insert)
		{
			?>
			<script language=javascript>
			alert('注册成功！'); 
			</script>
			<?php
			header('location:login.php');
		}
		else
		{
			?>
			<script language=javascript>
			alert('系统繁忙，请稍候！'); 
			history.go(-1);
			</script>
			<?php
		}	
	}
	DB::close();
	}
}
else
{
	?>
	<script language=javascript>
	alert('提交未成功！'); 
	history.go(-1);
	</script>
	<?php
}
 ?>