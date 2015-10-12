/**
 * Created by answer on 2015/10/4.
 */
function setFocus(){
    document.forms[0].userId.focus();
}
function checkNameNull(){
    if(document.myForm.userId.value=="") {
        alert("用户名不可为空！");
        document.myForm.userId.focus();
        return false;
    }
}
function checkPwdNull() {
    if(document.myForm.pwd.value=="")
    {
        alert("密码不可为空！");
        document.myForm.pwd.focus();
        return false;
    }
}
function checkAge(){
    if(document.myForm.age.value.search(/^\d{2}$/)==-1){
        alert("请输入正确的年龄信息！");
        document.myForm.age.value="";
        document.myForm.age.focus();
        return false;
    }
}

function fun(){
    with(document.myForm){
        var d=myselect.selectedIndex;
        if(d==1||d==2||d==3||d==4){
            city.value=myselect.options[d].text;
        }
        if(d==5){
            city.value="";
        }
    }
}