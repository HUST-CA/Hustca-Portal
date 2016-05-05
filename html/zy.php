
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
	<meta name="description" content="HUSTCA 华中科技大学计算机协会 华科计算机 协会 社团  华科社团 hust" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../html/zy/zy.css"/>

    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!--menu-->
    <link type="text/css" rel="stylesheet"  media="screen and (max-width:640px)" href="../css/demo.css" />
    <link type="text/css" rel="stylesheet" media="screen and (max-width:640px)" href="../css/jquery.mmenu.all.css" />

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



<!-- Main Page -->
<?php  include_once(dirname(__FILE__) . './zy/mainpage.html'); ?>


<!--others-->
<?php  include_once(dirname(__FILE__) . './zy/otherresoucre.html'); ?>

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
