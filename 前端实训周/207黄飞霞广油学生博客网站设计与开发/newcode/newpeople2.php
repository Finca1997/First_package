<?php
include 'global.php';

if(!empty($_POST['sub'])){
	$username = _ESC($_POST['username']);
	$password = md5(_ESC($_POST['password']));
	$query = @mysql_query("INSERT INTO `phpnews`.`php_user` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')");
	if(mysql_insert_id()){
		echo "<script>alert('添加成功');location.href='index.php';</script>";
	}else{
		echo "<script>alert('添加失败');location.href='index.php';</script>";
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
    <title>注册界面</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/mian.css" rel="stylesheet">
    <link href="less/base.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.min.js"></script>

    <![endif]-->
</head>
<body>

<!--#header-->
<header id="header">
    <div class="line"></div>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="images/logo.jpg"> </a>
            </div>

            <div class="collapse navbar-collapse" id="nav_toggle">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><img src="images/name.jpg" alt=""></a></li>
                    <li>

                        <a href="#"><i class="iconfont"><img src="images/shouji.png" alt=""></i>&nbsp;&nbsp;&nbsp;&nbsp;手机端</a>
                    </li>
                    <li>

                        <a href="#"><i class="iconfont"><img src="images/diannao.png" alt=""></i>&nbsp;&nbsp;&nbsp;&nbsp;客户端</a></li>
                    <li>

                        <a href="#"> <i class="iconfont"><img src="images/daohang.png" alt=""></i>&nbsp;&nbsp;&nbsp;&nbsp;长微博</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--/#header-->

<!--#banner-->
<section id="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 指示物 -->
        <!-- <ol class="carousel-indicators">
             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         </ol>-->
        <!-- 包装的幻灯片 -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/top1.jpg"  class="banner-img-1">
            </div>
            <div class="item">
                <img src="images/top2.jpg" class="banner-img-2">
            </div>
            <div class="item">
                <img src="images/top3.jpg" class="banner-img-3">
            </div>
        </div>

        <!-- 控制器 -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
<!--/#banner-->

<!--#wjs_tese-->
<section id="wjs_tese">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="#">娱乐</a></li>
                <li><a href="#">体育</a></li>
                <li><a href="#">文史</a></li>
                <li><a href="#">星座</a></li>
                <li><a href="#">美食</a></li>
                <li><a href="#">设计</a></li>
                <li><a href="#">时尚</a></li>
                <li><a href="#">女性</a></li>
                <li><a href="#">育儿</a></li>
                <li><a href="#">股票</a></li>
                <li><a href="#">教育</a></li>
                <li><a href="#">旅游</a></li>
                <li><a href="#">收藏</a></li>
                <li><a href="#">图片</a></li>
                <li><a href="#">悦博</a></li>
            </ul>
        </div>
    </div>
</section>
<!--#wjs_tese-->

<section id="new_one">
        <!--<form name="form1" onsubmit="return cheakNull(form1)">
            <div class="form-group">
                <h1>新用户注册</h1>
            </div>
            <div class="form-group">
                <label for="name">用户名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="请输入您的用户名">
            </div>
            <div class="form-group">
                <label for="realname">真实姓名</label>
                <input type="text" class="form-control" id="realname" name="realname" placeholder="请输入您的真实姓名">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密码</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd1" placeholder="在这里输入你的密码">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">再次确认密码</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="pwd2" placeholder="请再次输入密码">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">邮箱</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="请输入你的邮箱" onmouseover="kong()">
            </div>
            <div class="form-group form_file">
                <label for="exampleInputFile">选择头像</label>
                <input type="file" id="exampleInputFile">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 是否同意注册
                </label>
            </div>

            <button type="submit" class="btn btn-default" onclick="cheakrealName()">注册</button>
        </form>-->
        <form action="#"  method="post">
<table>
<tr><td>账号：</td><td><input type="text" name="username"></td></tr>
<tr><td>密码：</td><td><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input name="sub" type="submit" value="提交" style="margin-left:35%; width:80px;"></td></tr>
</table>
</form>
</section>
<section id="wjs_tb" class="visible-md visible-lg">
    <div>
        <p>广油学生博客意见反馈留言板  电话：40009873321 提示音后按1号键 欢迎批评指正</p>
        <p>GUANGYOU STUDENT  BLOG |广告服务|联系我们|招聘信息|产品答疑|使用须知|信息回馈</p>
    </div>
</section>

<script src="js/yan.js" type="text/javascript"></script>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/mian01.js"></script>
</body>
</html>
