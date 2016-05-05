
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
	<meta name="description" content="HUSTCA 华科计算机 协会 社团 华中科技大学计算机协会 华科社团 hust" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>

    <!--menu-->
    <link type="text/css" rel="stylesheet"  media="screen and (max-width:640px)" href="../css/demo.css" />
    <link type="text/css" rel="stylesheet" media="screen and (max-width:640px)" href="../css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mmenu.min.all.js"></script>
    <script type="text/javascript">
        $(function() {
            $('nav#menu').mmenu({
                extensions	: [ 'effect-slide-menu', 'pageshadow' ],
                searchfield	: true,
                counters	: true,
                navbars		: [
                    {
                        position	: 'top'
                    }, {
                        position	: 'bottom',
                        content		: [ '<a href="http://www.hustca.com">华中科技大学计算机协会</a>' ]
                    }
                ]
            });
        });
    </script>
    <!--menu-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".flip").mouseover(function(){
                $(this).next("div").slideDown(500);
            });
            $(".content").mouseleave(function(){
                $(this).children("div").slideUp(500);
            });
        });
    </script>

    <style type="text/css">
        div.panel,p.flip
        {

            margin:0px;
            padding:5px;
            text-align:center;
            border: hidden 0px #000000;
        }
        div.panel
        {

            height:auto;
            display:none;
        }
        .col-md-12 h3{
            text-align: center;
        }
        .banner{
            height: auto;
        }
        .green{
            color: green;
        }
        .bk{
            color: #005082;
            text-align: center;

        }
    </style>
</head>

<body>
  <!--  Navigation Bar -->
  <?php  include_once(dirname(__FILE__) . './navigation.php'); ?>


  <!--mobile menu-->
  <?php  include_once(dirname(__FILE__) . './menu-mobile.php'); ?>




<!-- Banner -->
<div class="banner">
    <div class="banner-images">
        <img src="../images/xm-banner.jpg" class="img-responsive">
    </div>
</div>


<!-- Main Page -->
<div class="container-fluid xm">
    <div class="col-md-12">
        <div class="col-md-3 ">
            <h3><i class="green fa fa-android"></i> 安卓开发</h3>
                <h4>组长：田昊 李薛子相</h4>
            <h4>组员：<br>战庶  林智剑 <br>周杨杰 寇猛</h4>

        </div>
        <div class="col-md-3">
            <h3><i class="green fa fa-globe"></i> 网站建设</h3>

            <h4>组长：赵海峰 陈超 </h4>
            <h4>组员：<br>王保田 黄钊 <br>徐智敏 吕泊村 <br>许润泽 黄惠泉</h4>

        </div>
        <div class="col-md-3">
            <h3><i class="green fa fa-rocket"></i> 产品设计</h3>
                <h4>组长：暂无 </h4>
            <h4>组员：暂无</h4>

        </div>
        <div class="col-md-3">
            <h3><i class="green fa fa-pencil"></i> 美工美化</h3>
             <h4>组长：李子田</h4>
            <h4> 组员：<br>王亮亮 黄惠泉</h4>

        </div>
    </div>
</div>
<div class="container-fluid jm">
    <h3><a href="jr/It.html" target="_blank"><i class="fa fa-user green"></i> 加盟<i class="fa fa-user green"></i></a></h3>

</div>

<div class="container-fluid " style="text-align: center">
    <h3><a href="engineer/index.html" target="_blank"  >点击进入计算机协会技术团队板块 </a></h3>

</div>



<!-- Footer -->
 <?php  include_once(dirname(__FILE__) . './footer.php'); ?>

<!--up start-->
<script type="text/javascript" src="../js/scrolltopcontrol.js"></script>
<div style="height:10px;"></div>
<!--up end-->




<script src="../js/bootstrap.min.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>
