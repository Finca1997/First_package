<?php
include 'global.php';
if(!empty($_POST['sub'])){
	$username = trim($_POST['username']);
	$password = md5(trim($_POST['password']));
	if($_POST['username']=="root"&&$_POST['password']==123456){
		echo "<script>alert('管理员登陆成功');location.href='manage.php';</script>";
		}
	
	 else{
	$sql = "SELECT * FROM `php_user` WHERE `username` = '$username' AND `password` = '$password'";
	$query = @mysql_query($sql);
	$result = @mysql_fetch_row($query);
	
	if(is_array($result)){
		$_SESSION['islogin'] = $result[1];
		echo "<script>alert('登陆成功');location.href='message2.php?name=$username';</script>";
	}else{
		echo "<script>alert('登陆失败');</script>";
	}
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
    <title>广油学生博客</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/mian.css" rel="stylesheet">
    <link href="less/base.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.4a2.min.js" type="text/javascript"></script>
    <script src="js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
    　　<script src="js/submit_name.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $("#KinSlideshow").KinSlideshow();
        })
    </script>
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
                        <a href="#"><img src="images/name.jpg" alt=""></a></li>
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

<section id="wjs_news">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="carousel-example-generi" class="carousel slide" data-ride="carousel">

                    <!-- 指示物 -->
                     <ol class="carousel-indicators">
                         <li data-target="#carousel-example-generi" data-slide-to="0" class="active"></li>
                         <li data-target="#carousel-example-generi" data-slide-to="1"></li>
                         <li data-target="#carousel-example-generi" data-slide-to="2"></li>
                         <li data-target="#carousel-example-generi" data-slide-to="3"></li>
                     </ol>
                    <!-- 包装的幻灯片 -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/zuoshang1.PNG"  class="banner-img-1">
                        </div>
                        <div class="item">
                            <img src="images/zuoshang2.png" class="banner-img-2">
                        </div>
                        <div class="item">
                            <img src="images/zuoshang3.jpg" class="banner-img-3">
                        </div>
                        <div class="item">
                            <img src="images/zuoshangsi.jpg" class="banner-img-3">
                        </div>


                       <!-- <a class="left carousel-control" href="#carousel-example-generi" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generi" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="news" style=" font-size:2rem;">
                   <!-- <h1><a href="#">广东石油化工学院以“两学一做”为原动力</a></h1>
                    <p><a href="#">【聚焦】开展两学一做学习教育，要拉动学校发展</a></p>
                    <p><a  href="#">【热议】我校成功跻身广东省普通本科转型试点高校</a></p>
                    <h1><a  href="#">校园理学院宿舍评分表</a></h1>
                    <p><a  href="#">【聚焦】各区宿舍评分标准及宿舍比分</a></p>
                    <p><a  href="#">【热议】评分标准的质疑和参考标准</a></p>
                    <ul>
                        <li><a href="#">校园理学院宿舍评分表（第1周）</a></li>
                        <li><a href="#">校园理学院宿舍评分表（第2周）</a></li>
                        <li><a href="#">校园理学院宿舍评分表（第3周）</a></li>
                        <li><a href="#">校园理学院宿舍评分表（第4周）</a></li>
                        <li><a href="#">校园理学院宿舍评分表（第5周）</a></li>
                        <li><a href="#">校园理学院宿舍评分表（第6周）</a></li>
                    </ul>-->
                    <?php

               $query = @mysql_query("SELECT * FROM `php_news3` ORDER BY `id` DESC");
               $i = 1;
               while($row = @mysql_fetch_assoc($query) and $i<12){
       	        echo "<a href=\"news3.php?id=$row[id]\">$row[title]</a>";
		       $i++;
			   echo '<br/>';
						}
					?>
                </div>
            </div>
            <div class="col-md-3">
                <h2>广油博友，欢迎回来</h2>
                <p>登陆后可按你的兴趣设置页面内容</p>
                <form  class="form1" name="form1" onsubmit="return cheakNull(form1)" method="post">
                    <input class="text_name" type="text" name="username" id="realname" placeholder="微博/QQ/手机"><br>
                    <input class="text_password" type="password" name="password" placeholder="密码" id="pwd">
                    <input name="sub" class="button_submit" type="submit" value="登录" onclick="cheakrealName()">
                    <input type="checkbox" class="checkbox">
                    <span>记住用户名</span>
                    <a class="wangji">忘记密码</a>
                    <a class="zhuce" href="newpeople2.php">立即注册</a>
                </form>
            </div>

        </div>
    </div>

</section>

<section id="wjs_tz" class="visible-md visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                   <i class="iconfont"></i>
                   <h3><a>公告栏</a></h3>
                   <?php

       			  $query = @mysql_query("SELECT * FROM `php_news` ORDER BY `id` DESC");
      		      $i = 1;
      		      while($row = @mysql_fetch_assoc($query) and $i<12){
       	 		  echo "第".$i."：<a href=\"news.php?id=$row[id]\">$row[title]</a>";
		 		  $i++;
		 		  echo '<br/>';
  					}
				 ?>
                   <!--<p><a>【你知道吗】|广油有个马拉松达人||梁老师</a></p>
                   <p><a>【重大消息】|关于做好2017年度教育部人文社会科学研究一般项目申报工作的通知
                   </a></p>
                   <p><a>【茂名日报】|广油有个马拉松达人||梁老师</a></p>
                   <p><a>【紧急通知】|关于清理占用职工宿舍楼道车辆的通知</a></p>
                   <p><a>【招聘聘书】|广东石油化工学院2017年公开招聘管理岗位人员启事</a></p>-->
            </div>
            <div class="col-md-4">
                <i class="iconfont"></i>
                <h3><a>猜你喜欢</a></h3>
                <?php

       		   $query = @mysql_query("SELECT * FROM `php_news2` ORDER BY `id` DESC");
     	       $i = 1;
       		   while($row = @mysql_fetch_assoc($query) and $i<12){
       	 	   echo "第".$i."：<a href=\"news2	.php?id=$row[id]\">$row[title]</a>";
			   $i++;
			   echo '<br/>';
					}
					?>
                <!--<p><a>一读就懂|广东石油化工学院转型发展方案</a></p>
                <p><a>健康知识|多吃水果多喝开水</a></p>
                <p><a>娱乐新闻|的某某届摇滚节节目现场</a></p>
                <p><a>图片欣赏|改良后的露天矿风景宜人</a></p>
                <p><a>你画我猜|饭堂挂画作品收集</a></p>-->
            </div>
            <div class="col-md-4">
                <i class="iconfont"></i>
                <h3><a>图片欣赏</a></h3>
                <img src="images/1.PNG">
            </div>

        </div>
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
</body>
</html>
