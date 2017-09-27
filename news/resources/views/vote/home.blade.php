<!DOCTYPE html>
<html>
<head>
    <title>投票</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- 轮播图 -->
<div id="myCarousel" class="carousel slide slide_banner" data-ride="carousel">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner" data-ride="carousel">
        <div class="item active">
            <img src="http://www.news.com/img/ydlb-1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img src="http://www.news.com/img/ydlb-2.jpg" alt="Second slide">
        </div>
        <div class="item">
            <img src="http://www.news.com/img/ydlb-3.jpg" alt="Third slide">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel" 
        data-slide="prev">&lsaquo;
    </a>
    <a class="carousel-control right" href="#myCarousel" 
        data-slide="next">&rsaquo;
    </a>
</div>
<script type="text/javascript">
    
    $(function () {
    // 获取手指在轮播图元素上的一个滑动方向（左右）

    // 获取界面上轮播图容器
    var $carousels = $('.carousel');
    var startX,endX;
    // 在滑动的一定范围内，才切换图片
    var offset = 50;
    // 注册滑动事件
    $carousels.on('touchstart',function (e) {
        // 手指触摸开始时记录一下手指所在的坐标x
        startX = e.originalEvent.touches[0].clientX;

    });
    $carousels.on('touchmove',function (e) {
        // 目的是：记录手指离开屏幕一瞬间的位置 ，用move事件重复赋值
        endX = e.originalEvent.touches[0].clientX;
    });
    $carousels.on('touchend',function (e) {
        //console.log(endX);
        //结束触摸一瞬间记录手指最后所在坐标x的位置 endX
        //比较endX与startX的大小，并获取每次运动的距离，当距离大于一定值时认为是有方向的变化
        var distance = Math.abs(startX - endX);
        if (distance > offset){
            //说明有方向的变化
            //根据获得的方向 判断是上一张还是下一张出现
            $(this).carousel(startX >endX ? 'next':'prev');
        }
    })
});
</script>
<div class="count_number">
    <ul>
        <li><p>参与选手</p><span>30</span></li>
        <li><p>累计投票</p><span>100256</span></li>
        <li><p>访问量</p><span>1025468</span></li>
    </ul>
    <div class="clear"></div>
</div>

<div class="countdown">
    <ul>
        <li class="clock"></li>
        <li>
            <p>距离活动结束还有：</p>
            <p>860 天 03 时 08 分 21 秒</p>
        </li>
    </ul>
    <div class="clear"></div>
</div>

<div class="containers">
    <div class="introduce">
        <div><span>tt</span>投票测试</div>
        <div><span>tm</span>2017-10-01至2017-10-05</div>
        <div><span>ts</span>活动介绍</div>
    </div>
    <div class="list">
        <div class="ls_tp">
            <a href="">
                <img src="http://www.news.com/img/dyd.jpg" alt="" width="180">
            </a>
            <div class="username">14号 获悉</div>
            <div class="toup">
                <span class="toup_float like"></span>
                <a href="#modal-container-apply_for" role="button" data-toggle="modal"><button type="button" class="toup_float">申领</button></a>
                <span class="toup_float p_num">5456</span>
                <span class="p_play">已申请</span>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="ls_tp">
            <a href="">
                <img src="http://www.news.com/img/ys.jpg" alt="" width="180">
            </a>
            <div class="username">14号 获悉</div>
            <div class="toup">
                <span class="toup_float like"></span>
                <a href="#modal-container-apply_for" role="button" data-toggle="modal"><button type="button" class="toup_float">申领</button></a>
                <span class="toup_float p_num">5456</span>
                <span class="p_play">已申请</span>
            </div>
        </div>  
        <div class="clear"></div>      
    </div>

</div>
<div class="apply_for" id="modal-container-apply_for" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label>姓名：</label><input type="text" name="username">
        </div>
        <div class="form-group">
            <label>手机号：</label><input type="tel" name="tel">
        </div>
        <div class="form-group">
            <label>验证码：</label><input type="text" name="yzm">
        </div>
        <div class="form-group sub_apply">
            <input type="submit" name="submit" value="我要申领">
        </div>
    </form>
</div>
<div class="search" id="modal-container-367841" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <p>搜一搜</p>
    <p><input type="search" name="search"></p>
</div>
<div class="footer">
    <nav>
        <a href="/">
            <p>home 
                <span class="glyphicon glyphicon-home"  style="color: rgb(255, 140, 60);"></span>
            </p>
            <span>首页</span>
        </a>
        <a href="tel:17701308624"><p>tel</p><span>咨询</span></a>
        <a id="modal-367841" href="#modal-container-367841" role="button" data-toggle="modal">
            <p>search</p><span>搜</span>
        </a>
        <a href="/rank"><p>ser</p><span>排行</span></a>
        <a href=""><p>lap</p><span>我要拉票</span></a>
    </nav>
</div>
</body>
</html>
