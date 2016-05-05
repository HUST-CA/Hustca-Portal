<?php
require_once '../php/conn.php';
$query=mysql_query("select * from ca_tougao");
?>
<html>
<head>
    <title>投递资源列表</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keyword" content="华中科技大学计算机协会"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

</head>
<body>

<div class="container">
    <div class="col-md-12" style="text-align:center">
      <div class="col-md-3">
        <h1 class="index-page-title">投递资源列表</h1>
                <ul class="index-p">
                       <?php
                               while($rs1=mysql_fetch_array($query))
                               {
                                   ?>
                                   <p>
                                     【<a href="<?php echo $rs1['link'];?>" target="_blank"><?php echo $rs1['title'];?></a>】
                                    </p>
                               <?php   }
                            ?>
                </ul>
        </div>


    </div>



</div>


</body>




</html>
