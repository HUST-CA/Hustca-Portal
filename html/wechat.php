<!DOCTYPE html>
<html>
<head>
    <title>Wechat News--HUSTCA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css/custom.css"/>



    <!--mobile menu begin-->
     <!--mobile menu end-->

    <!--二级菜单滑动begin-->
    <!--二级菜单滑动end-->

</head>

<body>

<!--  Navigation Bar -->
<!--这里不必引入navigation.php 因为wechat.php尚未在菜单中 仅在手机版显示 需要 引入menu-mobile.php -->



<!--mobile menu-->
<?php  include_once(dirname(__FILE__) . './menu-mobile.php'); ?>



<!-- Banner -->
<div class="banner">
    <div class="banner-images">
     <img src="../styles/images/bs-banner.jpg" class="img-responsive">

    </div>
</div>

<div class="main-page">
	<?php
error_reporting(E_ALL^E_NOTICE);
//RSS源地址列表数组
$rssfeed = array("http://rss.iwgc.cn/rss/5684-a8f1dbb4b4b53dffaeca4457b30ed79c2911");


for($i=0;$i<sizeof($rssfeed);$i++){//分解开始
    $buff = "";
    $rss_str="";
    //打开rss地址，并读取，读取失败则中止
    $fp = fopen($rssfeed[$i],"r") or die("can not open $rssfeed");
    while ( !feof($fp) ) {
        $buff .= fgets($fp,4096);
    }
    //关闭文件打开
    fclose($fp);

    //建立一个 XML 解析器
    $parser = xml_parser_create();
    //xml_parser_set_option -- 为指定 XML 解析进行选项设置
    xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,1);
    //xml_parse_into_struct -- 将 XML 数据解析到数组$values中
    xml_parse_into_struct($parser,$buff,$values,$idx);
    //xml_parser_free -- 释放指定的 XML 解析器
    xml_parser_free($parser);

    foreach ($values as $val) {
        $tag = $val["tag"];
        $type = $val["type"];
        $value = $val["value"];
        //标签统一转为小写
        $tag = strtolower($tag);

        if ($tag == "item" && $type == "open"){
            $is_item = 1;
        }else if ($tag == "item" && $type == "close") {
            //构造输出字符串
            $rss_str .= "<a href='".$link."' target=_blank>".$title."</a><br />";
            $is_item = 0;
        }
        //仅读取item标签中的内容
        if($is_item==1){
            if ($tag == "title") {$title = $value;}
            if ($tag == "link") {$link = $value;}
        }
    }

}
?>

	<div class="container">
		<div class="col-md-12" style="text-align: center;padding-top: 10%;">

				<h4>微信号: hustca</h4>
 				<p><?php echo $rss_str."<br />";  ?></p>


		</div>
	</div>
</div>






<!--copyright-->
<?php  include_once(dirname(__FILE__) . './footer.php'); ?>





<script src="../styles/js/bootstrap.min.js"></script>
<script src="../styles/js/myscript.js"></script>
</body>
</html>
