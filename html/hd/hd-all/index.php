<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title> </title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<?php
        	 require_once("../..conn.php");
           $query5=mysql_query("select ID,post_title,post_excerpt,guid from wp_posts,wp_term_relationships,wp_term_taxonomy where ID=object_id and wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id and post_type='post' and post_status = 'publish' and wp_term_relationships.term_taxonomy_id =12 and taxonomy = 'category' order  by ID desc limit 3");
				   while($rs5=mysql_fetch_array($query5))
            {
              ?>
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about">第26届活动概览</h2>
					</div>
					<div class="bl-content">
						<h2>第26届活动概览</h2>
						<p>

						</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section id="bl-work-section">
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-works">第25届活动概览</h2>
					</div>
					<div class="bl-content">
						<h2>第25届活动概览</h2>
						<p> </p>
						<ul id="bl-work-items">
							<li data-panel="panel-1"><a href="#"><img src="images/1.jpg" /></a></li>
							<li data-panel="panel-2"><a href="#"><img src="images/2.jpg" /></a></li>
							<li data-panel="panel-3"><a href="#"><img src="images/3.jpg" /></a></li>
							<li data-panel="panel-4"><a href="#"><img src="images/4.jpg" /></a></li>
						</ul>

					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-blog">第24届活动概览</h2>
					</div>
					<div class="bl-content">
						<h2>第24届活动概览 </h2>
						<p>  </p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-contact">第23届活动概览</h2>
					</div>
					<div class="bl-content">
						<h2>第23届活动概览</h2>
						<p>   </p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<?php $num = rand(1,7);?>
					<div data-panel="panel-<?php echo $num?>">
						<div>
							<img src="images/<?php echo $num?>.jpg" />							
							<h4 style="color:blue"><a  href="<?php echo $rs5['guid'];?>" target="_blank"><?php echo $rs5['post_title'];?></a></h4>
							<p><?php echo $rs5['post_excerpt'];?></p>
						</div>
					</div>
					 
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div> 
                  
                  
                  
                     
					 <?php
                   }

                  ?>

		</div><!-- /container -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>
	</body>
</html>
