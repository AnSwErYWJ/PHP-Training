function Checklogin(){

	if (myform.id.value==""){
		alert("用户名不能为空！");
		myform.id.focus();
		return false;
	}

	if (myform.pw.value==""){
		alert("密码不能为空！");
		myform.pw.focus();
		return false;
	}

}