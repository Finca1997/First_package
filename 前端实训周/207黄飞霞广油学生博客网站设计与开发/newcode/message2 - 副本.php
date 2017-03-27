<?php
error_reporting(0);
include 'global.php';
if(!empty($_POST['sub'])){
	$title = _ESC($_POST['title']);
	$content = _ESC($_POST['content']);
	$username=$_GET["name"];
	$query = @mysql_query("INSERT INTO `phpnews`.`php_wen` (`id`, `title`, `content`,`name`) VALUES (NULL, '$title', '$content','$username')");
	if(mysql_insert_id()){
		echo "<script>alert('添加成功');location.href='person.php?name=$username';</script>";
	}else{
		echo "<script>alert('添加失败');</script>";
	}
}

if(isset($_GET['act'])){
	session_destroy();
	switch ($_GET['act']){
		case 'login':
			header('location:login.php');
			break;
		case 'index':
			header('location:index.php');
			break;
	}
	
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Ie的最新渲染模式-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>编辑博文</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/aftermessage_mian.css" rel="stylesheet">
    <link href="less/base.css" rel="stylesheet">
    
    <!--uediter--->
    <script type="text/javascript" charset="utf-8" src="uediter/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="uediter/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="uediter/lang/zh-cn/zh-cn.js"></script>

    <!--[if lt IE 9]>
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--#header-->
<header id="header">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#"><img src="images/name.jpg" alt=""></a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="输入要搜索的关键字" width="200%">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.html">学生博客首页</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">您的博客 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">博客</a></li>
                            <li><a href="#">相册</a></li>
                            <li><a href="#">微博</a></li>
                            <li><a href="#">关于我</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">我的资料</a></li>
                            <li><a href="#">我的钱包</a></li>
                            <li><a href="#">我的设置</a></li>
                            <li><a href="#">我的消息</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">发博文 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">365</a></li>
                            <li><a href="#">发博文</a></li>
                            <li><a href="#">发照片</a></li>
                            <li><a href="#">长微博</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">消息 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">我的纸条</a></li>
                            <li><a href="#">我的评论</a></li>
                            <li><a href="#">我的留言</a></li>
                            <li><a href="#">我的回复</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>
<!--/#header-->
<section id="body">
    <div class="editor">
      
        <form action="#"  method="post" onClick="ch();">
            <table>
                <tr><td>标题：</td><td><input type="text" name="title"></td></tr>
                <tr><td>内容：</td>
                    <td>
                        <script id="editor" type="text/plain" style="width:1000px;height:500px; clear:both; margin:auto;"></script>
                    </td>
                </tr>
            </table>
            <textarea name="content" id="wenben" style="display:none;"></textarea>
           <input type="submit" name="sub" value="发布" class="fabu">
           
        </form>
        

    </div>
</section>

<section id="wjs_tb" class="visible-md visible-lg">
    <div>
        <p>广油学生博客意见反馈留言板  电话：40009873321 提示音后按1号键 欢迎批评指正</p>
        <p>GUANGYOU STUDENT  BLOG |广告服务|联系我们|招聘信息|产品答疑|使用须知|信息回馈</p>
    </div>
</section>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/mian01.js"></script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }	
	function ch(){
		
		document.getElementById("wenben").text=UE.getEditor('editor').getPlainTxt();
		alert(document.getElementById("wenben").text);
		alert("ch");
		}
</script>
</body>
</html>
