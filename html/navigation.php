<!--     说明         -->
<!--
1.响应式设计 自动调整页面结构
2.二级菜单滑动特效   如果没有滑动 一般是 jquery-1.11.0.min.js的问题 看看是否缺失 由于在menu-mobile.php中已经引入了 jquery-1.11.0.min.js  所以注意别重复引用
3.

-->
<!--Author:Naihai 赵海峰-->

<!--二级菜单滑动begin-->
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
<!--二级菜单滑动end-->

<!--二级菜单样式begin-->
<style type="text/css">
    div.panel,p.flip {
        margin:0px;
        padding:5px;
        text-align:center;
        border: hidden 0px #000000;
    }
    div.panel {
        height:auto;
        display:none;
    }
</style>
<!--二级菜单样式end-->



<nav  class="navbar navbar-default navbar-fixed-top noBorder" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brandStyle" href="../index.php" style="color:#03F">ＨＵＳＴＣＡ</a>
        </div>

        <div class="collapse navbar-collapse noPadding"	id="myNavbar">
            <div class="navbar-right menustyle">
                <ul class="nav navbar-nav" >

                    <div class="content ss" >
                        <p class="flip"><a href="../index.php">首页</a></p>
                    </div>
                    <div class="content ss" >
                        <p class="flip"><a href="gk.php">协会概括</a></p>
                        <div class="panel">
                            <p><a href="gk.php#introduction">简介</a></p>
                            <p><a href="gk.php#group">部门</a></p>
                            <p><a href="gk.php#history">历史</a></p>
                            <p><a href="gk.php#people">人事</a></p>
                        </div>
                    </div>
                    <div class="content ss" >
                        <p class="flip"><a href="hd.php">活动</a></p>
                        <div class="panel">
                            <p><a href="hd.php#predict">近期活动</a></p>
                            <p><a href="hd.php#history">历史活动</a></p>
                            <p><a href="hd.php#all">活动概览</a></p>
                        </div>
                    </div>
                    <div class="content ss" >
                        <p class="flip"><a href="px.php">培训</a></p>
                        <div class="panel">
                            <p><a href="px.php#it">技术部</a></p>
                            <p><a href="px.php#study">学习小组</a></p>
                            <p><a href="px.php#repair">义务维修队</a></p>
                            <p><a href="px.php#ncre">计算机等级</a></p>
                        </div>
                    </div>
                    <div class="content ss" >
                        <p class="flip"><a href="bs.php">比赛</a></p>
                        <div class="panel">
                            <p><a href="bs.php#">极客周末</a></p>
                            <p><a href="bs.php#">PPT创意大赛</a></p>
                            <p><a href="bs.php#">网页制作大赛</a></p>
                        </div>
                    </div>
                    <div class="content ss" >
                        <p class="flip"><a href="zy.php">资源</a></p>
                        <div class="panel">
                            <p><a href="zy.php#">软件</a></p>
                            <p><a href="zy.php#">电影</a></p>
                            <p><a href="zy.php#">动漫</a></p>
                            <p><a href="zy.php#">游戏</a></p>
                        </div>
                    </div>

                    <div class="content ss" >
                        <p class="flip"><a href="xm.php">项目开发</a></p>
                        <div class="panel">
                            <p><a href="xm.php#">安卓开发</a></p>
                            <p><a href="xm.php#">网页制作</a></p>
                            <p><a href="xm.php#">产品设计</a></p>
                            <p><a href="xm.php#">美工美化</a></p>
                        </div>
                    </div>

                    <div class="content ss" >
                        <p class="flip" ><a href="lt.php">论坛</a></p>
                    </div>
                    <div class="content ss" >
                        <p class="flip" ><a href="jr.php">加入我们</a></p>
                    </div>

                </ul>
            </div>
        </div>

    </div>
</nav>
