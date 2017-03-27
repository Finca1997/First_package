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
    <!--uediter--->
    <script type="text/javascript" charset="utf-8" src="uediter/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="uediter/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="uediter/lang/zh-cn/zh-cn.js"></script>
    
    <title>广油学生博客</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/aftermessage_mian.css" rel="stylesheet">
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
                <p><a>[更多]</a></p>
            </div>
            <div>
                <img src="images/17.PNG">
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
                <p>相关博文</p>
                <p><a>[更多]</a></p>
            </div>
            <div>
                <ul>
                    <li><p><a>我终于变成变成自己讨厌的样子</a></p></li>
                </ul>
            </div>
        </div>
        <div class="left_three">
            <div>
                <p>推荐博文</p>
                <p><a>[更多]</a></p>
            </div>
            <div>
                <ul>
                    <li><p><a>现在这个世界到底怎么了</a></p></li>
                    <li><p><a>我不喜欢这个世界我只喜欢你</a></p></li>
                </ul>
            </div>
        </div>
        <div class="left_four">
            <div>
                <p>谁看过这篇博文</p>
                <p><a>[更多]</a></p>
            </div>
            <div>
                <p>暂无访客</p>
            </div>
        </div>
    </div>
    </div>
    <div class="middle">
        <div class="middle_one">
            <div>
                <p>博文</p>
                <p><a>[更多]</a></p>
            </div>
            
            <div style="word-break:break-all;">
               <?php
if(isset($_GET['id'])){
	$id = intval($_GET['id']);
	$query = @mysql_query("SELECT * FROM `php_wen` WHERE `id` = '$id'");
	$row = mysql_fetch_row($query);
	echo '<h3 align="center">'.$row[1].'</h3>';
	echo '  <p>'.$row[2].'</p>';
	
}
?>
                <!--<h2>女研究生遭学霸殴打算不算校园暴力？</h2>
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
                    因为大多数人都会理智的看待这个事件，不会因这一起事件而偏激的认为整个学校有问题。</p><br>-->
            </div>
            <div class="middle_one_buttom">
                <p><a>阅读</a></p>
                <p><a>留言</a></p>
                <p><a>禁止转载</a></p>
                <p><a>收藏</a></p>
                <p><a>前一篇</a></p>
                <p><a>后一篇</a></p>
            </div>
        </div>
        <div class="middle_one"><div>
            <p>评论</p>
            
        </div>
            <div >
             <script id="editor" type="text/plain" style="width:800px;height:100px; clear:both;"></script>
            </div>
            <div>

            </div>
            <div class="middle_one_buttom">
                <p><a>前一篇</a></p>
                <p><a>后一篇</a></p>
            </div></div>
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


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
	function ch(){
		alert("ch");
		document.getElementById("wenben").text=UE.getEditor('editor').getPlainTxt();
		}
</script>
</body>
</html>
