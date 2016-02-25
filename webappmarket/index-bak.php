<!DOCTYPE html>
<!--
    brief: 列表风格模板
    目录结构：
        +index-list.html
        |**js/base-list.js
        |**css/base-list.html
    author: MichealYang
    date: 2015/5/28
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf8">
        <link type="text/css" rel="stylesheet" href="./static/css/base-list-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/base-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-theme-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/iframe.css" />
        <script type="text/javascript" src="./static/js/jquery-1.11.3.js"></script>
        <title>WebApp</title>
    </head>
    <body>
        <div id="main">
            <div id="head">
                <nav class="navbar navbar-inverse navi-gray">
                    <a class="navbar-brand" href="#">首页</a>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">我的Web</a></li>
                        <li><a href="#">我的App</a></li>
                        <li><a href="#">Web App Store</a></li>
                    </ul>
                </nav>
            </div><!--head end-->
            <div id="middle">
                <div class="base-title-bar">    <!--一个base-title-bar是一个bar-->
                    <span class="base-title-span"></span><span><h4 class="ft-heiti ft-color-green2">大牛Blog</h4></span>
                </div>  <!--base-title-bar end-->
                <div class="container">     <!--一个container是一个包含list的容器-->
                    <!-- list start -->
                    <a  href="http://coolshell.cn/" class="list">
                        <div class="list-img">
                            <img src="./static/img/coolshell.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">酷壳-CoolShell</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">C/C++; 陈皓</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
                    <a  href="http://lusongsong.com/" class="list">
                        <div class="list-img">
                            <img src="./static/img/lusongsong.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">卢松松博客</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">不太清楚</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
                    <a  href="http://www.julyedu.com/index.php" class="list">
                        <div class="list-img">
                            <img src="./static/img/suanfa.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">七月算法</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">算法视频; July; 曹鹏</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
                    <a  href="http://www.ruanyifeng.com/blog/archives.html" class="list">
                        <div class="list-img">
                            <img src="./static/img/gibuli.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">阮一峰网络日志</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">计算机基础; 算法;</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
                    <a  href="http://www.parallellabs.com/blog/" class="list">
                        <div class="list-img">
                            <img src="./static/img/gibuli.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">Parallel Labs</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">并行; 多线程;</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                </div>  <!--container end-->
                <div class="base-title-bar">
                    <span class="base-title-span"></span><span><h4 class="ft-heiti ft-color-green2">常用工具</h4></span>
                </div>  <!--base-title-bar end-->
                <div class="container">
                    <!-- list start -->
                    <a  href="http://runjs.cn/code" class="list">   <!--一个a是一个list-->
                        <div class="list-img">
                            <img src="./static/img/runjs.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">JS编辑预览</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">实时查看js效果</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                    <!-- list start -->
                    <a  href="http://tool.oschina.net/codeformat/html" class="list">
                        <div class="list-img">
                            <img src="./static/img/onlinetools.png" alt="代码格式化"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">代码格式化</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">实时查看js效果</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                    <!-- list start -->
                    <a  href="http://tool.oschina.net/commons" class="list">
                        <div class="list-img">
                            <img src="./static/img/onlinetools.png" alt="常用对照表"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">常用对照表</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">常用对照表</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
					<a  href="http://www.5tu.cn/colors/yansebiao.html" class="list">
                        <div class="list-img">
                            <img src="./static/img/gibuli.png" alt="颜色表"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">颜色表</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">颜色表</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
					<a  href="http://www.uupoop.com/" class="list">
                        <div class="list-img">
                            <img src="./static/img/gibuli.png" alt="在线PS"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">在线PS</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">在线PS</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                    <!-- list start -->
                    <a  href="http://smallpdf.com/cn/unlock-pdf" class="list">
                        <div class="list-img">
                            <img src="./static/img/pdftools.png" alt="pdf处理"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">PDF处理</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">转换、解密、合并、分割</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
					<!-- list start -->
                    <a  href="http://ajaxload.info" class="list">
                        <div class="list-img">
                            <img src="./static/img/ajaxload.png" alt="ajax"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">ajax load</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">ajax load样式</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                    <!-- list start -->
                    <a  href="http://tool.chongbuluo.com/" class="list">
                        <div class="list-img">
                            <img src="./static/img/heiqiu.png" alt="百宝箱"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">工具百宝箱</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">一个百宝箱，有很多工具</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                </div>  <!--container end-->
				<div class="base-title-bar">
                    <span class="base-title-span"></span><span><h4 class="ft-heiti ft-color-green2">Web前端</h4></span>
                </div>  <!--base-title-bar end-->
                <div class="container">
                    <!-- list start -->
                    <a  href="http://www.jqueryrain.com/example/jquery-tabs/" class="list">
                        <div class="list-img">
                            <img src="./static/img/jqueryrain.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">JQuery Rain</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">很多Jquery Demo</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                </div>  <!--container end-->
                <div class="base-title-bar">
                    <span class="base-title-span"></span><span><h4 class="ft-heiti ft-color-green2">网址记录</h4></span>
                </div>  <!--base-title-bar end-->
                <div class="container">
                    <!-- list start -->
                    <a  href="http://honx.in/i/U7JbRYKo13vu6TsJ" class="list">
                        <div class="list-img">
                            <img src="./static/img/hongxing.png" alt="image"/>
                        </div>
                        <div class="list-describe">
                            <div class="list-title">
                                <h4 class="ft-heiti">红杏出墙</h4>
                            </div>
                            <div class="list-abstract">
                                <h6 class="ft-color-93">一枝红杏出墙来</h6>
                            </div>
                        </div>
                    </a>
                    <!-- list end -->
                </div>  <!--container end-->
            </div><!--middle end-->
            <div id="foot">
                Copyright @ MichealYang
            </div><!--foot end-->
        </div><!--main end-->
    </body>
</html>
