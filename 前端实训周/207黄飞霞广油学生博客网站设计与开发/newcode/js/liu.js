/**
 * Created by Administrator on 2016/12/8.
 */
//1、获取屏幕宽度
//2、改变图片的src
function  think() {
    var bodyWith=$(document).width();
    if(bodyWith>640){
        $("#banner .banner-img-1").attr("scr","images/slide_01_2000x410.jpg");
        $("#banner .banner-img-2").attr("scr","images/slide_02_2000x410.jpg");
        $("#banner .banner-img-3").attr("scr","images/slide_03_2000x410.jpg");
    }
    else if(bodyWith<=640){
        $("#banner .banner-img-1").attr("scr","images/slide_01_640x410.jpg");
        $("#banner .banner-img-2").attr("scr","images/slide_02_640x410.jpg");
        $("#banner .banner-img-3").attr("scr","images/slide_03_640x410.jpg");
    }
}
window.onresize=function () {
    think();
};

var startX,
    startM,
    startTo=70;
$(".carousel").on("touchstart",function (e) {
    console.log(e.originalEvent.touches[0].clientX);
    startX=e.originalEvent.touches[0].clientX;
});
$(".carousel").on("touchmove",function (e) {
    console.log(e.originalEvent.touches[0].clientX);
    startM=e.originalEvent.touches[0].clientX;
});
$(".carousel").on("touchend",function (e) {
    console.log(startX>startM ?"←":"→");
    if(Math.abs(startM-startX)>startTo){
        $(".carousel").carousel(startX>startM ? "next":"prev");
    }
});/**
 * Created by asus on 2016-12-09.
 */
