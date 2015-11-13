function Checkreg(){
	
if (myform1.id.value==""){
	alert("用户名不能为空！");
	myform1.id.focus();
	return false;
}
     
if (myform1.pw.value==""){
	alert("密码不能为空！");
	myform1.pw.focus();
	return false;
}

if (myform1.pw_confirm.value==""){
	alert("确认密码不能为空！");
	myform1.pw.focus();
	return false;
}

if (myform1.pw.value != myform1.pw_confirm.value){
	alert("两次密码不一致！");
	myform1.pw.focus();
	return false;
}

}