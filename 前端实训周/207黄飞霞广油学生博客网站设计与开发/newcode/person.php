<?php
include 'global.php';
$name= $_GET["name"];
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Ie的最新渲染模式-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人主页</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/person_mian.css" rel="stylesheet">
    <link href="less/base.css" rel="stylesheet">

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
                    <li><a href="index.html"><img src="images/name.jpg" alt=""></a></li>
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
                            <li><a href="message2.html">博客</a></li>
                            <li><a href="#">相册</a></li>
                            <li><a href="message2.html">微博</a></li>
                            <li><a href="person.html">关于我</a></li>
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
                            <li><a href="message2.html">发博文</a></li>
                            <li><a href="#">发照片</a></li>
                            <li><a href="message2.html">长微博</a></li>
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
<div class="page01">
    <div class="content_top">
        <h1><a>用户名</a></h1>
        <p><a>http://blog.sina.com.cn/u/2459303645</a></p>
    </div>
    <div class="content_buttom">
        <a><p class="active">首页</p></a>
        <a><p>|博文目录</p></a>
        <a><p>|图片</p></a>
        <a><p>|关于我</p></a>
    </div>
</div>
    <div class="left">
        <div class="left_one">
            <div>

                <p>个人资料</p>
                <p><a>[管理]</a></p>
            </div>
            <div>
                <img src="images/denglu.PNG">
                <p><?php echo $name?></p>
                <input type="button" value="博客">
            </div>
            <div>
                <p>博客等级：5</p>
                <p>博客等级：18</p>
                <p>博客访问：180</p>
            </div>
        </div>
        <div class="left_two">
                <div>
                    <p>图片播放器</p>
                    <p><a>[管理]</a></p>
                </div>
                <div>
                    <p>你还没有上传图片，点击<a>上传图片</a>来上传图片哦！</p>
                </div>
        </div>
        <div class="left_three">
                <div>
                    <p>分类</p>
                    <p><a>[管理]</a></p>
                </div>
                <div>
                    <p><a>全部博文</a></p>
                </div>
        </div>
        <div class="left_four">
                <div>
                    <p>访客</p>
                    <p><a>[管理]</a></p>
                </div>
                <div>
                    <p>暂无访客</p>
                </div>
        </div>
        <div class="left_five">
                <div>
                    <p>搜索博主博文</p>
                </div>
                <div>
                    <input type="text">
                    <input type="button" value="搜索">
                </div>
        </div>
        </div>
    </div>
    <div class="middle">
        <div class="middle_one">
            <div>
                <p>博文</p>
                <p><a>[管理]</a></p>
            </div>
            <?php

         $query = @mysql_query("SELECT * FROM  										php_wen  WHERE name='$name' ORDER  BY id  DESC ");
         $i = 1;
         while($row = @mysql_fetch_assoc($query) and $i<30){
       	 echo "第".$i."篇：<a href=\"aftermessage-2.php?id=$row[id]&name=$name\">$row[title]</a>";
		 $i++;
		 echo '<br/>';
}
?>
            <!--<div>
                <h1>女研究生遭学霸殴打算不算校园暴力</h1>
                <p><a>【编辑】</a></p>
                <p><a>【删除】</a></p>
            </div>
            <div>
                <h2>女研究生遭学霸殴打算不算校园暴力？</h2>
                    <p>校园暴力，是近几年在中国比较突出的校园问题，而且有些暴力事件的学生越来越小，
                        这些校园暴力的存在，跟学校的监管不到位有着很大的关系。因为现在中国教育只注
                        重分数，而忽视人本身的素质问题，有些学生学习很好，但心理素质很差，容不得别
                        人的批评。认为自己都是对的，这样往往会形成以自我为中心，不认同另外声音的存
                        在。这些学生学习成绩虽好，但他她们今步入社会都会吃大亏。但在学校里，这些学
                        生都老师眼中的“宝”呀！他们都会得到学校和老师的特殊关注，因为对当前中国教
                        育来讲，不管学校，还是老师，都是以分而论，而不是以德育而论。这样往往会让很
                        多学生偏离了人生轨道。
                    </p><br>
                    <p>近日，一条“上海女研究生反驳男学霸被尾随暴打”的视频在网上传开，记者了解到，
                        此事发生在上海体育学院体育新闻传播与外语学院的两名研究生之间。据被打学生小
                        莫称，同班的孙同学因课堂上的观点被她反驳而大打出手。昨日上午9时许，上海体育
                        学院官方微博发布消息称，学校正在积极处理此事，并对打人的男生进行了严肃的批
                        评和教育，并会根据校纪校规予以处理。每一起校园暴力出来之后，我们都会去遣责
                        学生，家庭，还有学校老师。但遣责一番之后
                        ，又能如何呢？校园暴力事件是不是就此停止呢？答案是很明显，并但没有停止，事
                        件还在不断的发生。对于该事件女研究生遭学霸殴打，只是因为反驳学霸的观点而遭
                        殴打，可见这位孙学霸的心理素质是很弱的，可能在他到现今的人生经历中，一路风
                        顺，在学习上面，都受各方的表扬。因此，他忍受不了女同学的反驳，认为是对他这
                        个“学霸”的侮辱。校方称这起事件不是校园暴力，只是想维护学校的声誉，其实大
                        不必如做出声明。
                    因为大多数人都会理智的看待这个事件，不会因这一起事件而偏激的认为整个学校有问题。</p><br>
            </div>
            <div class="middle_one_buttom">
                <p><a>阅读</a></p>
                <p><a>留言</a></p>
                <p><a>禁止转载</a></p>
                <p><a>收藏</a></p>
            </div>
        </div>
        <div class="middle_one"><div>
            <p>博文</p>
            <p><a>[管理]</a></p>
        </div>
            <div>
                <h1>大度看对手坐上宝座还是政治姿态？</h1>
                <p><a>【编辑】</a></p>
                <p><a>【删除】</a></p>
            </div>
            <div>
                <h2>大度看对手坐上宝座还是政治姿态？</h2>
                <p>2016年11月的美国总统大选经过双方数十天的激烈交锋之后，已经尘埃落定，
                    结果让大家大跌眼镜，选前民调占据较大优势的希拉里输给了特朗普，尽管
                    她所获得的普选票数超过特朗普近290万张，创下美国历届败选候选人的最高
                    纪录。但她还是输了，她是输给了美国的选举团制。
                    大选结束一周后，即将退休的参议院议员芭芭拉博克瑟就提出一项法案，
                    建议废除选举团制。她在声明中说：“美国是全球唯一一个这样的国家，在
                    这里即使你获得更多的选票，仍会输掉大选。选举团制是一个过时的、伪民
                    主的制度，已经不能代表我们现代社会了，需立刻改变这种制度。”
                </p><br>
            </div>
            <div class="middle_one_buttom">
                <p><a>阅读</a></p>
                <p><a>留言</a></p>
                <p><a>禁止转载</a></p>
                <p><a>收藏</a></p>
            </div>--></div>
    </div>
    <div class="right">
        <div class="right_one">
            <div>
                <p>相册专辑</p>
                <p><a>[管理]</a></p>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- 指示物 -->
                 <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                 </ol>
                <!-- 包装的幻灯片 -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/youshang.png"  class="banner-img-1">
                    </div>
                    <div class="item">
                        <img src="images/youshang2.png" class="banner-img-2">
                    </div>
                    <div class="item">
                    <img src="images/youshang3.jpg" class="banner-img-3">
                    </div>
                    <div class="item">
                        <img src="images/youshang4.jpg" class="banner-img-3">
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
        </div>
        <div class="right_one">
            <div>
                <p>评论</p>
                <p><a>[管理]</a></p>
            </div>
            <div>
                 <p>暂无评论</p>
            </div>
        </div>
        <div class="right_one">
            <div>
                <p>留言</p>
                <p><a>[管理]</a></p>
            </div>
            <div>
               <p>暂无留言</p>
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
