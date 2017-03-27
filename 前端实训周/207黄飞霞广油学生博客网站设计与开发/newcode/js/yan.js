/*检验密码是否与一致*/
function cheakNull(form){
    var pwd=form1.pwd1.value;
    if (pwd==""){
        alert("请输入密码！");
    }
    var pwd1=document.getElementById("exampleInputPassword1").value;
    var pwd2=document.getElementById("exampleInputPassword2").value;
    if(pwd1!=pwd2){
        alert("密码不一致，请确认！");
        return false;}

}/*检验姓名*/
function cheakrealName(){

    var str=form1.realname.value;
    if(str==""){
        alert("请输入姓名！");
        form1.realname.focus();
        return;
    }
    else{
        var objExp=/[\u4E00-\u9FA5]{2,}/;
        if(objExp.test(str)==true){
            alert("您输入的姓名正确！");
        }
        else{
            alert("您输入的姓名有误！");
        }
    }
}
/*检验邮箱不能为空*/


