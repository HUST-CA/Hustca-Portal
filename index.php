<!DOCTYPE html>
<html>
	<head>
        <title>华中科技大学计算机协会</title>
        <meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-transform "/>
        <meta name="keyword" content="华中科技大学计算机协会 HUSTCA"/>
		<meta name="description" content="HUSTCA 华中科技大学计算机协会 华科计算机 协会 社团  华科社团 hust" />

		<meta name="viewport" content="width=device-width, initial-scale=1,minimun-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css"/>


        <!--menu-->
        <link type="text/css" rel="stylesheet"  media="screen and (max-width:640px)" href="css/demo.css" />
        <link type="text/css" rel="stylesheet" media="screen and (max-width:640px)" href="css/jquery.mmenu.all.css" />
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
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
            .pic{
                padding-left: 10px;
                padding-right: 10px;

            }
			#blur{
			filter:blur(0px);
			-webkit-filter:blur(0px);
			-moz-filter:blur(0px);
			-ms-filter:blur(0px);
			-o-filter:blur(0px);
			}
        </style>
</head>

    <body>
    <!--  Navigation Bar -->

    <nav class="navbar navbar-default navbar-fixed-top noBorder" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand brandStyle" href="index.php">ＨＵＳＴＣＡ</a>
				</div>

				<div class="collapse navbar-collapse noPadding"	id="myNavbar">
					<div class="navbar-right menustyle">
						<ul class="nav navbar-nav" >

                            <div class="content ss" >
                                <p class="flip"><a href="index.php">首页</a></p>
                            </div>
                            <div class="content ss" >
                                <p class="flip"><a href="html/gk.php">协会概括</a></p>
                                <div class="panel" >
                                    <p ><a href="html/gk.php#introduction">简介</a></p>
                                    <p ><a href="html/gk.php#group">部门</a></p>
                                    <p><a href="html/gk.php#history">历史</a></p>
                                    <p><a href="html/gk.php#people">人事</a></p>
                                </div>
                            </div>
                            <div class="content ss" >
                                <p class="flip"><a href="html/hd.php">活动</a></p>
                                <div class="panel" >
                                    <p><a href="html/hd.php#">近期活动</a></p>
                                    <p ><a href="html/hd.php#">历史活动</a></p>
                                    <p><a href="html/hd.php#">活动概览</a></p>
                                </div>
                            </div>
                            <div class="content" style="float:left;display:block;width:100px;" >
                                <p class="flip"><a href="html/px.php">培训</a></p>
                                <div class="panel"   >
                                    <p ><a href="html/px.php#it">技术部</a></p>
                                    <p ><a href="html/px.php#study">学习小组</a></p>
                                    <p ><a href="html/px.php#repair">义务维修队</a></p>
                                    <p ><a href="html/px.php#ncre">计算机等级</a></p>
                                </div>
                            </div>
                            <div class="content ss" >
                                <p class="flip"><a href="html/bs.php">比赛</a></p>
                                <div class="panel" >
                                    <p ><a href="html/bs.php#">极客周末</a></p>
                                    <p ><a href="html/bs.php#">PPT创意大赛</a></p>
                                    <p ><a href="html/bs.php#">网页制作大赛</a></p>
                                </div>
                            </div>
                            <div class="content" style="float:left;display:block;width:100px;" >
                                <p class="flip"><a href="html/zy.php">资源</a></p>
                                <div class="panel" >
                                    <p ><a href="html/zy.php#">软件</a></p>
                                    <p><a href="html/zy.php#">电影</a></p>
                                    <p><a href="html/zy.php#">动漫</a></p>
                                    <p><a href="html/zy.php#">游戏</a></p>
                                </div>
                            </div>

                            <div class="content" style="float:left;display:block;width:100px;" >
                                <p class="flip"><a href="html/xm.php">项目开发</a></p>
                                <div class="panel" >
                                    <p><a href="html/xm.php#">安卓开发</a></p>
                                    <p><a href="html/xm.php#">网页制作</a></p>
                                    <p><a href="html/xm.php#">产品设计</a></p>
                                    <p><a href="html/xm.php#">美工美化</a></p>
                                </div>
                            </div>

                            <div class="content" style="float:left;display:block;width:100px;">
                                <p class="flip"><a href="html/lt.html">论坛</a></p>
                            </div>
                            <div class="content" style="float:left;display:block;width:100px;">
                                <p class="flip"><a href="html/jr.html">加入我们</a></p>
                            </div>

						</ul>
					</div>
				</div>

			</div>
		</nav>


    <!--mobile menu-->
    <div class="container-fluid sjmenu "  >
        <div class="header">
            <a href="#menu"></a>
            HUST CA
        </div>
        <nav id="menu">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="html/gk.php">协会概括</a>
                    <ul>
                        <li><a href="html/gk.php#introduction">简介</a></li>
                        <li><a href="html/gk.php#group">部门</a>
                            <ul>
                                <li><a href="html/gk/bumen/bumen.php#first">办公室</a></li>
                                <li><a href="html/gk/bumen/bumen.php#sec">权益部</a></li>
                                <li><a href="html/gk/bumen/bumen.php#thirth">财务部</a></li>
                                <li><a href="html/gk/bumen/bumen.php#fourth">活动部</a></li>
                                <li><a href="html/gk/bumen/bumen.php#fifth">媒体部</a></li>
                                <li><a href="html/gk/bumen/bumen.php#sixth">外联部</a></li>
                            </ul>
                        </li>
                        <li><a href="html/gk.php#history">历史</a></li>
                        <li><a href="html/gk.php#people">人事</a></li>
                    </ul>
                </li>
                <li><a href="html/hd.php">活动</a>
                    <ul>
                        <li><a href="html/hd.php#predict">近期活动</a></li>
                        <li><a href="html/hd.php#history">历史活动</a></li>
                        <li><a href="html/hd.php#all">活动概览</a></li>
                    </ul>
                </li>

                <li><a href="html/px.php">培训</a>
                    <ul>
                        <li><a href="html/px.php#it">技术部</a></li>
                        <li><a href="html/px.php#study">学习小组</a>
                            <ul>
                                <li><a href="html/px.php#study">PS 组</a></li>
                                <li><a href="html/px.php#study">Office组</a></li>
                                <li><a href="html/px.php#study">C语言组</a></li>
                                <li><a href="html/px.php#study">Pr/Ae组</a></li>
                            </ul>
                        </li>
                        <li><a href="html/px.php#repair">义务维修队</a></li>
                        <li><a href="ncre/index.html">计算机等级考试培训</a>
                            <ul>
                                <li><a href="html/news/2015/ncre-5.30.html">报名通知</a></li>
                                <li><a href="http://djks.hust.edu.cn" target="_blank">考试报名</a></li>
                                <li><a href="ncre/news/inform.html">培训通知</a></li>
                                <li><a href="ncre/ncrepxapply.html">培训报名</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="html/bs.php">比赛</a>
                    <ul>
                        <li><a href="html/bs.php#">极客周末</a></li>
                        <li><a href="html/bs.php#">华中科技大学PPT创意大赛</a></li>
                        <li><a href="html/bs.php#">华中高校网页制作邀请赛</a></li>
                    </ul>
                </li>
                <li><a href="html/zy.php">资源</a>
                    <ul>
                        <li><a href="html/zy.php#">软件</a></li>
                        <li><a href="html/zy.php#">电影</a></li>
                        <li><a href="html/zy.php#">动漫</a></li>
                        <li><a href="html/zy.php#">游戏</a></li>
                    </ul>
                </li>
                <li><a href="html/lt.php">论坛</a></li>
                <li><a href="html/xm.php">项目开发</a>
                    <ul>
                        <li><a href="html/xm.php#">安卓开发</a></li>
                        <li><a href="html/xm.php#">网页制作</a></li>
                        <li><a href="html/xm.php#">产品设计</a></li>
                        <li><a href="html/xm.php#">美工美化</a></li>
                    </ul>
                </li>
                <li><a href="html/jr.php">加入我们</a>
                    <ul>
                        <li><a href="html/jr/huiyuan.html" target="_blank">会员报名</a></li>
                        <li><a href="html/jr/staff.html" target="_blank">部员申请</a></li>
                        <li><a href="html/jr/corepair.html" target="_blank">维修队招募</a></li>
                        <li><a href="html/jr/webapply.html" target="_blank">网站管理招募</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

		<!-- Main Page -->
<?php
require_once("html/config/db-conn.php");
/*下面是各个类别的分类 规则是基于WordPress的文章分类*/
/*$query1 最新活动 规则：文章+类别为活动(category id =2)+已经发布+按日期去最新的四条文章+倒叙 ; 具体可在数据库查看*/
$query1=mysql_query("select ID,post_title,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id = 2 and taxonomy = 'category' order by ID desc limit 4");

/*$query2 最新培训 规则：文章+类别为培训(category id =3)+已经发布+按日期去最新的四条文章+倒叙 ; 具体可在数据库查看*/
$query2=mysql_query("select ID,post_title,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id = 3 and taxonomy = 'category' order by ID desc limit 4");

/*$query3 最新比赛 规则：文章+类别为比赛(category id =4)+已经发布+按日期去最新的四条文章+倒叙 ; 具体可在数据库查看*/
$query3=mysql_query("select ID,post_title,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id = 4 and taxonomy = 'category' order by ID desc limit 4");

/*$query4 图文板块第一行第一块 通知类别  规则：文章+类别为通知(category id =5)+已经发布+按日期去最新的一条文章 ; 具体可在数据库查看*/
$query4=mysql_query("select ID,post_title,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id =5 and taxonomy = 'category' order  by ID desc limit 1");

/*$query5 图文板块第二行第一块 系统类别  规则：文章+类别为系统(category id =6)+已经发布+按日期去最新的一条文章 ; 具体可在数据库查看*/
$query5=mysql_query("select ID,post_title,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id =19 and taxonomy = 'category' order  by ID desc limit 1");


 ?>

		<div class="container-fluid noPadding">

            <div class="container-fluid headpicture"></div>

            <div class="container  text-center">
                <div class="col-md-12">
			<div class="col-md-3">
				<h1 class="index-page-title">最新活动</h1>
                <ul class="index-p">
										   <?php
						                   while($rs1=mysql_fetch_array($query1))
						                   {
						                       ?>
						                       <p>
												             【<a href="<?php echo $rs1['guid'];?>" target="_blank"><?php echo $rs1['post_title'];?></a>】
						                        </p>
						                   <?php   }
												    ?>
                </ul>
        </div>

            <div class="col-md-5">
      			<h1 class="index-page-title">最新培训</h1>
                <ul class="index-p">
							      <?php
			                   while($rs2=mysql_fetch_array($query2))
			                   {
			                       ?>
			                       <p>
									              【<a href="<?php echo $rs2['guid'];?>" target="_blank"><?php echo $rs2['post_title'];?></a>】
			                        </p>
			                   <?php   }
										 ?>
                </ul>
             </div>
        <div class="col-md-4">
			   <h1 class="index-page-title">最新比赛</h1>
               <ul class="index-p">
		               <?php
			                   while($rs3=mysql_fetch_array($query3))
			                   {
			                       ?>
			                       <p>
								               	【<a href="<?php echo $rs3['guid'];?>" target="_blank"><?php echo $rs3['post_title'];?></a>】
			                        </p>
		                   <?php }
		                   ?>
                </ul>
         </div>
</div>

		  <div class="container-fluid textstyle pic">
				<div class="row text-center latestProjects">
					<?php
                   while($rs4=mysql_fetch_array($query4))
                   {
                       ?>
					   <div class="col-md-4 col-sm-12">
                        <a  href="<?php echo $rs4['guid'];?>" target="_blank">
                            <img id="blur" class="imgsize" src="images/l3.jpg" alt="  ">
                        </a>
                        <p><?php echo $rs4['post_title'];?><a href="news" style="color:#7f7f7f" target="_blank">more</a></p>
                    </div>
					 <?php
                   }

                  ?>
					   <div class="col-md-4 col-sm-6">
						<a href="html/fm/list/index.php" target="_blank">
							<img  id="blur" class="imgsize" src="images/l1.jpg" alt=" ">
						</a>
						<p>计算机协会IT名人论坛记录<a href="news"  style="color:#7f7f7f" target="_blank">more</a> </p>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="http://ncre.hustca.com" target="_blank">
							<img id="blur" class="imgsize" src="images/l2.jpg" alt="   ">
						</a>
						<p>计算机等级考试培训系统<a href="http://ncre.hustca.com"   style="color:#7f7f7f" target="_blank">more</a></p>
					</div>
                        <!--涉及到more 的链接 需要到此文件里修改-->
						<!--第一个显示重要通知 后面两个显示重要的链接 需要自定义 即在此文件中修改-->

				</div>
			</div>

			 <div class="container-fluid textstyle pic">
				<div class="row text-center latestProjects">
									<?php
				                   while($rs5=mysql_fetch_array($query5))
				                   {
				                       ?>
									   <div class="col-md-4 col-sm-12">
				                        <a  href="<?php echo $rs5['guid'];?>" target="_blank">
				                            <img id="blur" class="imgsize" src="images/l4.jpg" alt="  ">
				                        </a>
				                        <p><?php echo $rs5['post_title'];?><a href="news" style="color:#7f7f7f" target="_blank">more</a></p>
				             </div>
									 <?php
				                   }
				             ?>
					   <div class="col-md-4 col-sm-6">
						<a href="chaxun" target="_blank">
							<img   id="blur" class="imgsize" src="images/l5.jpg"   alt=" ">
						</a>
						<p><a href="chaxun"  style="color:#000000" target="_blank">计算机协会会员信息查询</a> </p>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="http://edu.hustca.com" target="_blank">
							<img id="blur" class="imgsize" src="images/l6.jpg" alt="   ">
						</a>
						<p><a href="http://edu.hustca.com"   style="color:#000000" target="_blank">计算机协会视频教学网站</a></p>
					</div>
            <!--涉及到more 的链接 需要到此文件里修改-->
						<!--第一个显示重要通知 后面两个显示重要的链接 需要自定义 即在此文件中修改-->

				</div>
			</div>


		</div>
            <div class="col-md-12" style="text-align: center ;padding-top: 30px">
                <a href="http://www.hustca.com" target="_blank">华中科技大学计算机协会</a>
            </div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/myscript.js"></script>

	 </div>
    </body>
</html>




<!-- GoStats Simple HTML Based Code -->
<a target="_blank" title="msn计数器" href="http://gostats.cn">
    <img alt="msn计数器" src="http://c4.gostats.cn/bin/count/a_400845/t_7/i_3/z_0/show_hits/counter.png" style="border-width:0" /></a>
<!-- End GoStats Simple HTML Based Code -->
