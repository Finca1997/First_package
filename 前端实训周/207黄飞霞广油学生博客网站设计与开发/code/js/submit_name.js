/**
 * Created by Administrator on 2017/1/8 0008.
 */

/*检验姓名正确，一个汉字也算错误*/
function cheakrealName() {
    var str = form1.realname.value;
    if (str == "") {
        alert("请输入姓名！");
        form1.realname.focus();
        return;
    }
    else {
        var pwd = form1.pwd1.value;
        if (pwd == "") {
            alert("请输入密码！");
            form1.pwd.focus();
        }
    }
}

/*检验密码不能为空*/
/*
function cheakNull(form) {
    var pwd = form1.pwd1.value;
    if (pwd == "") {
        alert("请输入密码！");
    }
}
*/



