
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
	<meta name="description" content="HUSTCA 华中科技大学计算机协会 华科计算机 协会 社团  华科社团 hust" />
    <link rel="stylesheet" type="text/css" href="../styles/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/font-awesome.min.css"/>


    <script src="../styles/js/jquery-1.11.0.min.js"></script> <!--菜单不滑动可在此引入 jquery-1.11.0.min.js  与menu-mobile.php可重复-->



    <!--mobile menu begin-->
     <!--mobile menu end-->

    <!--二级菜单滑动begin-->
    <!--二级菜单滑动end-->

    <style type="text/css">
        .others{
            text-align: center;
        }
        .others a {
            text-decoration: none;
            color: #000 ;
        }
        .others a:hover{
            text-decoration:none;
            color: #0000FF;

        }
        #accordion .panel{
            display: block;
            padding: 0;
        }
        .col-md-2{text-align: left}
        .col-md-6{text-align: left}
        .btn-primary{
            background-color: #f4efff;
            border-color: #ffffff;
        }
        .btn-lg{
            width: 100%;
            color: #080808;

        }
        #accordion .fa{
            padding-left: 10%;
            padding-right: 10%;
        }

        #accordion .panel-heading a{
            text-decoration: none;
            font-size: 130%;
        }
        #accordion .panel-heading a :hover{
            text-decoration: none;
        }
    </style>

</head>

<body>

  <!--  Navigation Bar -->
  <?php  include_once(dirname(__FILE__) . './navigation.php'); ?>


  <!--mobile menu-->
  <?php  include_once(dirname(__FILE__) . './menu-mobile.php'); ?>



<!-- Main Page -->  <!--四个卡片-->
<?php  include_once(dirname(__FILE__) . './zy/mainpage.html'); ?>


<!--others-->
<?php  include_once(dirname(__FILE__) . './zy/otherresoucre.html'); ?>

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
