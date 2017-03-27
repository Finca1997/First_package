
    //1.获取屏幕的宽度
    //2.改变图片的src

    function tink(){
        var bodyWidth=$(document).width();
        if (bodyWidth > 640)
        {
            $("#banner .banner-img-1").attr("src","images/slide_01_2000x410.jpg");
            $("#banner .banner-img-2").attr("src","images/slide_02_2000x410.jpg");
            $("#banner .banner-img-3").attr("src","images/slide_03_2000x410.jpg");
        }
        else if(bodyWidth <= 640)
        {
            $("#banner .banner-img-1").attr("src","images/slide_01_640x340.jpg");
            $("#banner .banner-img-2").attr("src","images/slide_02_640x340.jpg");
            $("#banner .banner-img-3").attr("src","images/slide_03_640x340.jpg");
        }
    }

    window.onresize=function(){
        tink();
    };

    /*改变颜色*/
    $("#wjs_cp .panel-default .panel-body:odd").css("background","#2681c5");


    /*----------------------------------轮播图----------------------------------------------*/

    //$('.carousel').carousel()
    //1.获取鼠标按下去的 X1值
    //2.获取鼠标移动的X2值
    //松开鼠标  x1 > x2  向左carousel("prev")

    var startX=0,
        startM=0,
        startTo=70;

    $(".carousel").on("touchstart",function(e){
        //console.log(e);
        startX=e.originalEvent.touches[0].clientX;
    });

    $(".carousel").on("touchmove",function(e){
        //console.log(e.originalEvent.touches[0].clientX);
        startM=e.originalEvent.touches[0].clientX;


    });


    $(".carousel").on("touchend",function(e){

        if (Math.abs(startX - startM) > startTo)
        {
           // console.log(startX > startM ? "←": "→" );

            if(startX - startM === startX)
            {
                return false;
            }
            else if (startX > startM)
            {
                $(this).carousel("next");
                startX=0;
                startM=0;
            }
            else if(startX < startM)
            {
                $(this).carousel("prev");
                startX=0;
                startM=0;
            }



        }
    });

