<!--mobile menu begin-->
<link type="text/css" rel="stylesheet"  media="screen and (max-width:640px)"  href="../css/demo.css" />
<link type="text/css" rel="stylesheet" media="screen and (max-width:640px)"   href="../css/jquery.mmenu.all.css" />
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
<!--mobile menu end-->

<div class="sjmenu ">
    <div class="header">
        <a href="#menu"></a>
        HUST CA
    </div>
    <nav id="menu">
        <ul>
            <li><a href="../index.php">首页</a></li>
            <li><a href="gk.php">协会概括</a>
                <ul>
                    <li><a href="gk.php#introduction">简介</a></li>
                    <li><a href="gk.php#group">部门</a>
                        <ul>
                            <li><a href="gk/bumen/bumen.html#first">办公室</a></li>
                            <li><a href="gk/bumen/bumen.html#sec">权益部</a></li>
                            <li><a href="gk/bumen/bumen.html#thirth">财务部</a></li>
                            <li><a href="gk/bumen/bumen.html#fourth">活动部</a></li>
                            <li><a href="gk/bumen/bumen.html#fifth">媒体部</a></li>
                            <li><a href="gk/bumen/bumen.html#sixth">外联部</a></li>
                        </ul></li>
                    <li><a href="gk.php#history">历史</a></li>
                    <li><a href="gk.php#people">人事</a></li>
                </ul>
            </li>
            <li><a href="hd.php">活动</a>
                <ul>
                    <li><a href="hd.php#predict">近期活动</a></li>
                    <li><a href="hd.php#history">历史活动</a></li>
                    <li><a href="hd.php#all">活动概览</a></li>
                </ul>
            </li>

            <li><a href="px.php">培训</a>
                <ul>
                    <li><a href="px.php#it">技术部</a></li>
                    <li><a href="px.php#study">学习小组</a>
                        <ul>
                            <li><a href="px.php#study">PS 组</a></li>
                            <li><a href="px.php#study">Office组</a></li>
                            <li><a href="px.php#study">C语言组</a></li>
                            <li><a href="px.php#study">Pr/Ae组</a></li>
                        </ul></li>
                    <li><a href="px.php#repair">义务维修队</a></li>
                    <li><a href="../ncre/index.html">计算机等级考试培训</a>
                        <ul>
                            <li><a href="news/2015/ncre-5.30.html">报名通知</a></li>
                            <li><a href="http://djks.hust.edu.cn" target="_blank">考试报名</a></li>
                            <li><a href="../ncre/news/inform.html">培训通知</a></li>
                            <li><a href="../ncre/ncrepxapply.html">培训报名</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="bs.php">比赛</a>
                <ul>
                    <li><a href="bs.php#">极客周末</a></li>
                    <li><a href="bs.php#">华中科技大学PPT创意大赛</a></li>
                    <li><a href="bs.php#">华中高校网页制作邀请赛</a></li>
                </ul>
            </li>
            <li><a href="zy.php">资源</a>
                <ul>
                    <li><a href="zy.php#">软件</a></li>
                    <li><a href="zy.php#">电影</a></li>
                    <li><a href="zy.php#">动漫</a></li>
                    <li><a href="zy.php#">游戏</a></li>
                </ul>
            </li>
            <li><a href="lt.php">论坛</a></li>
            <li><a href="xm.php">项目开发</a>
                <ul>
                    <li><a href="xm.php#">安卓开发</a></li>
                    <li><a href="xm.php#">网页制作</a></li>
                    <li><a href="xm.php#">产品设计</a></li>
                    <li><a href="xm.php#">美工美化</a></li>
                </ul>
            </li>
            <li><a href="jr.php">加入我们</a>
                <ul>
                    <li><a href="jr/huiyuan.html" target="_blank">会员报名</a></li>
                    <li><a href="jr/staff.html" target="_blank">部员申请</a></li>
                    <li><a href="jr/It.html" target="_blank">技术加盟</a></li>
                    <li><a href="jr/corepair.html" target="_blank">维修队招募</a></li>
                    <li><a href="jr/webapply.html" target="_blank">网站管理招募</a></li>
                </ul>
            </li>
			<li><a href="wechat.php">微信资讯</a></li>
        </ul>
    </nav>
</div>
