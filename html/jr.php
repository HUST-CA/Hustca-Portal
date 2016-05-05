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
        #baoming{
            font-family: "Microsoft YaHei";
            font-size:150%;
            font-weight: 500;
            text-align: center;
            padding-top:19%;
            padding-bottom: 10%;
            text-shadow: #fffda4;


        }
        #baoming a {
            font-family: "Microsoft YaHei";
            font-size:150%;
            font-weight: 500;
            text-align: center;
            color: #000;
            text-decoration: none;
            text-shadow: #fffda4;
        }
        #baoming a :hover{
            font-family: "Microsoft YaHei";
            font-size:150%;
            font-weight: 500;
            text-align: center;
            color : #7786ff;

        }
        .banner{
            margin-top: 0;
            padding: 0  0 40px 0;
            background: url("jr/images/jr-banner.jpg") repeat;
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
    <div class="container">
        <div class="col-md-12 " id="baoming">
            <div class="col-md-3 ">
                <a href="jr/huiyuan.html" target="_blank"> 学员报名</a>
            </div>
            <div class="col-md-3 ">
                <a href="jr/staff.html" target="_blank"> 部员申请</a>
            </div>
            <div class="col-md-3 ">
                <a href="jr/It.html" target="_blank"> 技术加盟</a>
            </div>
            <div class="col-md-3 ">
                <a href="jr/corepair.html" target="_blank">维修队招募</a>
            </div>


        </div>

    </div>
</div>
<!-- Main Page -->






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
