<!DOCTYPE html>
<html>
<head>
    <title>Wechat News--HUSTCA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css"/>
    <script src="../js/jquery-1.11.0.min.js"></script>
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
				<h4 style="color: green;"><a href="http://mp.weixin.qq.com/profile?src=3&timestamp=1461584859&ver=1&signature=TJ9-ta1CCt5UC7zajROO1YxwF5dLkrcxQaGyt4u*tkFJegW8vIB9GryuzNT4K1T0bDN99hLt6yaLVG5-a7ojRg==" target="_blank"> 华中大计协</a></h4>
				<p><?php echo $rss_str."<br />";  ?></p>


		</div>
	</div>
</div>






<!--copyright-->
<?php  include_once(dirname(__FILE__) . './footer.php'); ?>





<script src="../js/bootstrap.min.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>
