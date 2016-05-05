
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
    <script src="../js/jquery-1.11.0.min.js"></script>

    <!--hd-history start-->
    <link rel="stylesheet" type="text/css" href="hd/hd-history/css/default.css" />
    <link rel="stylesheet" type="text/css" href="hd/hd-history/css/component.css" />
    <script src="hd/hd-history/js/modernizr.custom.js"></script>
     <!--end-->

    <!--mobile menu begin-->
     <!--mobile menu end-->

    <!--二级菜单滑动begin-->
    <!--二级菜单滑动end-->
    <style type="text/css">
        .col-md-4 h4{
            text-align: center;
            font-family: "arial", "微软雅黑";
            padding-top: 10px;
        }
        .col-md-4 img{
            width: 100%;
            padding-top: 10px;
        }

        .container h6 {
            font-family: "arial", "微软雅黑";
            font-size: 150%;
            font-weight: 500;
            text-align: center;
            color: #000000;
            padding-top: 20px;

        }
        .banner{
            height: auto;
            padding-top: -20px;
        }

    </style>
</head>

<body>


<!--  Navigation Bar -->
<?php  include_once(dirname(__FILE__) . './navigation.php'); ?>


<!--mobile menu-->
<?php  include_once(dirname(__FILE__) . './menu-mobile.php'); ?>

<div class="banner">
    <div class="banner-images">
        <img src="../images/hd-banner.jpg" class="img-responsive">
    </div>
</div>

<!-- Main Page -->
<?php
require_once("config/db-conn.php");

/*下面是各个类别的分类 规则是基于WordPress的文章分类*/

/*$query5 活动预告 规则：文章+类别为活动(category id =12)+已经发布+按日期去最新3篇的文章+倒叙 ; 具体可在数据库查看*/
$query5=mysql_query("select ID,post_title,post_excerpt,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id =12 and taxonomy = 'category' order  by ID desc limit 3");

/*$query4 历史活动 规则：文章+类别为活动(category id =2)+已经发布+按日期去最新的9条文章+倒叙 ; 具体可在数据库查看*/
$query4=mysql_query("select ID,post_title,post_excerpt,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id =2 and taxonomy = 'category' order  by ID desc limit 9");

?>


<div class="container-fluid">

    <div class="container" id="predict">                            <!--活动预告-->
        <h6>活动预告</h6>
         <div class="demo-3 ">
            	<ul class="grid cs-style-3">
                    	<?php  while($rs5=mysql_fetch_array($query5)) {  ?>
            					      <li>
                                <figure>
                                    		  <?php $num = rand(1,7);?>
                                    		  <a  href="<?php echo $rs5['guid'];?>" target="_blank">
                                    		 	<img  class="imgsize" src="hd/images/<?php echo $num?>.png">
                                    		 	</a> 	<? ?>
                                    <figcaption>
                                        <h3><?php echo $rs5['post_title'];?></h3>
                                        <p><?php echo $rs5['post_excerpt'];?></p>
                                    </figcaption>
                                </figure><br>
                                    <h4 style="color:blue"><a  href="<?php echo $rs5['guid'];?>" target="_blank"><?php echo $rs5['post_title'];?></a></h4>
                            </li>
            					 <?php   } ?>
            </ul>
         </div>

    </div>



    <div class="container" id="history">                        <!--历史活动-->
        <h6>历史活动</h6>

        <div class="demo-3 ">
        	<ul class="grid cs-style-3">
              	<?php   while($rs4=mysql_fetch_array($query4))   {  ?>
      					      <li>

                              	<figure>
                              		<?php $num = rand(1,30);?>
                              		 <a  href="<?php echo $rs4['guid'];?>" target="_blank">
                              		 	<img  class="imgsize" src="hd/images/lishi/<?php echo $num?>.jpg">
                              		 	</a> 	<? ?>
                            <figcaption>
                               <h3><?php echo $rs4['post_title'];?></h3>
                               <p><?php echo $rs4['post_excerpt'];?></p>
                          </figcaption>
                              </figure><br>
                              <h4 style="color:blue"><a  href="<?php echo $rs4['guid'];?>" target="_blank"><?php echo $rs4['post_title'];?></a></h4>
                        </li>
      					 <?php  }   ?>
          </ul>
      </div>

   </div>
     <div class="container" id="history">                        <!--活动概览-->
        <h6><a href="wwww.hustca.com/news/gailan" target="_blank">活动概览</a></h6>
         <div class="demo-3 ">
          	<ul class="grid cs-style-3">
  					          <li>
                          	<figure>
                          		<?php $num = rand(1,30);?>
                          		 <a href="wwww.hustca.com/news/gailan" target="_blank">
                          		 	<img  class="imgsize" src="hd/images/lishi/<?php echo $num?>.jpg" alt="计算机协会活动事件概览">
                          		 	</a> 	<? ?>
                          </figure>
                    </li>
          </ul>

       </div>

    </div>

</div>







<!-- Footer -->
<?php  include_once(dirname(__FILE__) . './footer.php'); ?>




<script src="../js/bootstrap.min.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>
