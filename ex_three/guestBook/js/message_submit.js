function checkMessage(){
	
	if (message_submit.content.value==""){
		alert("留言内容不能为空！");
		message_submit.content.focus();
		return false;
	}

	var str = message_submit.content.value;

	if (str.length < 15){
		alert("留言内容不可少于15个字");
		message_submit.content.focus();
		return false;
	}

}