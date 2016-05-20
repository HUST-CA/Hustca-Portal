
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
	<meta name="description" content="HUSTCA 华科计算机 协会 社团 华中科技大学计算机协会 华科社团 hust" />
    <link rel="stylesheet" type="text/css" href="../styles/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/font-awesome.min.css"/>
   <link rel="stylesheet" type="text/css" href="../styles/css/custom.css"/>


   <script src="../styles/js/jquery-1.11.0.min.js"></script> <!--菜单不滑动可在此引入 jquery-1.11.0.min.js  与menu-mobile.php可重复-->






    <!--mobile menu begin-->
     <!--mobile menu end-->

    <!--二级菜单滑动begin-->
    <!--二级菜单滑动end-->



    <style type="text/css">
        .px a{
        	color:blue;
        	text-decoration:none;
        }
        li {list-style-type:none;}
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
        <img src="../styles/images/px-banner.jpg" class="img-responsive">
    </div>
</div>


<!-- Main Page -->
<div class="container-fluid px">
      <div class="col-md-12" id="study">
      	<?php
      	 require( dirname( __FILE__ ) . '/../news/wp-load.php' );
         ?>

        <h3>学习小组</h3>
        <div class="col-md-4"  >
            <h4>PS学习小组</h4>
                 <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=21&title_li='); ?> </h5>
        </div>

          <div class="col-md-4"  >
            <h4>C学习小组</h4>
               <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=24&title_li='); ?> </h5>
        </div>

          <div class="col-md-4"  >
            <h4>Office学习小组</h4>
             <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=25&title_li='); ?> </h5>
        </div>
    </div>

      <div class="col-md-12" id="it">
        <h3>技术部</h3>
         <div class="col-md-3">
            <h4>WEB组Meet Up</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=22&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>

        <div class="col-md-3">
            <h4>安卓组Meet Up</h4>

                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=27&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>

        <div class="col-md-3">
            <h4>美工组Meet Up</h4>

                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=28&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>
          <div class="col-md-3">
              <h4>Design组Meet Up</h4>
                  <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=29&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

          </div>

    </div>
      <div class="col-md-12" id="repair">
        <h3>义务维修队</h3>
            <div class="col-md-6">
                <h4>培训</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=23&title_li='); ?></h5>
            </div>
            <div class="col-md-6">
                <h4>实战</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=26&title_li='); ?> </h5>
            </div>

    </div>

    <div class="col-md-12" id="ncre">
        <h3>计算机等级考试培训</h3>

                <h4><a href="../ncre/index.html" target="_blank">NCRE板块</a></h4>



    </div>



</div>












<!-- Footer -->
<?php  include_once(dirname(__FILE__) . './footer.php'); ?>

<!--up start-->
<script type="text/javascript" src="../styles/js/scrolltopcontrol.js"></script>
<div style="height:10px;"></div>
<!--up end-->




<script src="../styles/js/bootstrap.min.js"></script>
<script src="../styles/js/myscript.js"></script>
</body>
</html>
