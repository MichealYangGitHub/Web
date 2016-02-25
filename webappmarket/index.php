<!DOCTYPE html>
<!--
    brief: WebApp index
    目录结构：
        +index.php
    author: MichealYang
    date: 2015/5/28
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf8">
		<link type="text/css" rel="stylesheet" href="./static/css/base-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/index-navi.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/index-main.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-theme-my.css" />
        <script type="text/javascript" src="./static/js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="./static/js/index-main.js"></script>
        <title>WebApp</title>
    </head>
    <body onresize="onResizeFunc();">
        <div id="index-main">
            <div id="index-head" class="navi-style">
                <nav class="navbar navbar-inverse navi-gray">
                    <a id="usersetting" class="navbar-brand" href="#">User</a>
                    <ul id="navi-list" class="nav navbar-nav">
                        <li id="myweb" class="active"><a href="#">MY Web</a></li>
                        <li id="myapp"><a href="#">MY App</a></li>
                        <li id="appstore"><a href="#">Web App Store</a></li>
                    </ul>
                </nav>
            </div><!--index-head end-->
            <div id="index-content">
                <iframe id="iframe-content" class="iframe-style" src="myweb.php" width="100%" scrolling="yes" frameborder=0 onload="onResizeFunc();">
                </iframe>
            </div><!--content end-->
        </div><!--index-main end-->
    </body>
</html>
<script type="text/javascript">
	$("#navi-list li").click(function(){
		var naviListArr = ["myweb", "myapp", "appstore"]
		var clickId = $(this).attr("id");
		for(i in naviListArr){
			if(naviListArr[i] != clickId){
				$("#"+naviListArr[i]).removeClass("active");
			}else{
				$("#" + clickId).addClass("active");
				SwitchWorkspace(clickId);
			}
		}
	});
	function SwitchWorkspace(id){
		var targetPhp = id + ".php";
		$("#iframe-content").attr("src", targetPhp);
	}
</script>