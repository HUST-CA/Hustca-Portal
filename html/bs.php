
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/custom.css"/>
    <script src="../styles/js/jquery-1.11.0.min.js"></script>

    <!--mobile menu begin-->
     <!--mobile menu end-->

    <!--二级菜单滑动begin-->
    <!--二级菜单滑动end-->

    <style type="text/css">
        .col-md-4 h2{
            text-align: center;
            font-family: "arial", "微软雅黑";
            font-size: 150%;
            font-weight: 600;
            padding-top: 15%;
            padding-bottom: 8%;
        }
        figure.effect-winston {
            background: #000000;
        }
        figure.effect-winston img {
            -webkit-transition: opacity 0.65s;
            transition: opacity 0.65s;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        figure.effect-winston:hover img {
            opacity: 0.2;
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
     <img src="../images/bs-banner.jpg" class="img-responsive">
    </div>
</div>



<!-- Main Page -->
<div class="container-fluid">
     <div class="container">
           <div class="col-md-12">
                  <div class="col-md-4">
                      <h2>极客周末</h2>
                      <figure  class="effect-winston">
                         <a href="bs/jike.html" target="_blank"><img src="bs/images/1.jpg" class="img-responsive"></a>
                      </figure>
                  </div>
                  <div class="col-md-4">
                      <h2>华中科技大学PPT创意大赛</h2>
                      <figure class="effect-winston">
                          <a href="bs/ppt.html" target="_blank"><img src="bs/images/2.png" class="img-responsive"></a>
                      </figure>
                  </div>
                  <div class="col-md-4">
                      <h2>华中网页制作大赛</h2>
                      <figure  class="effect-winston">
                          <a href="http://www.hzhtml.com" target="_blank"><img src="bs/images/3.png" class="img-responsive"></a>
                      </figure>
                  </div>
            </div>
      </div>
</div>






<!-- Footer -->

<?php  include_once(dirname(__FILE__) . './footer.php'); ?>


<!--up start-->
<script type="text/javascript" src="../styles/js/scrolltopcontrol.js"></script>
<div class="up" style="height: 10px"></div>
<!--up end-->


<script src="../styles/js/bootstrap.min.js"></script>
<script src="../styles/js/myscript.js"></script>
</body>
</html>
