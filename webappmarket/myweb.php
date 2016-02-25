<!DOCTYPE html>
<!--
    brief: 列表风格模板
    目录结构：
        +index-card.html
        |**js/base-card.js
        |**css/base-card.html
    author: MichealYang
    date: 2015/5/28
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf8">
        <link type="text/css" rel="stylesheet" href="./static/css/base-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/base-card-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
        <link type="text/css" rel="stylesheet" href="./static/css/bootstrap-theme-my.css" />
        <script type="text/javascript" src="./static/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./static/js/base-card-my.js"></script>
        <title>WebApp</title>
    </head>
    <body>
        <div id="main">
            <div id="cardTab">
                <div id="cardTabContainer">
					<ul id="cardTabContainerUl">
					<?php
						echo "<li class=\"tabActive\" id=\"tabLiFirst\">常用</li>";
						echo "<li >学习</li>";
						echo "<li id=\"tabAdd\">+</li>";
					?>
						<!--<li class="tabActive" id="tabLiFirst">常用</li>-->
						<!--<li >学习</li>-->
						<!--<li id="tabAdd">+</li>-->
					</ul>
				</div>
            </div>
			<div id="content" class="container">     <!--可以被更改内容的div-->
				<div id="leftSlide" class="slide-style">
					<div id="leftSlideBar" class="slideBar-style slideBar-left">
					</div><!--leftSlideBar end-->	
				</div>
				<div id="middleSlide">
					<div id="slideContainer">
						<div id="webBoard1" class="webBoard-style">
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test2">
								<!-- card start -->
								<a  href="http://google.com" class="card">
									<div class="link-bg">
										<img src="./static/img/google.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des2">
									<span class="card-des-title">Google</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test2">
								<!-- card start -->
								<a  href="http://google.com" class="card">
									<div class="link-bg">
										<img src="./static/img/google.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des2">
									<span class="card-des-title">Google</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test2">
								<!-- card start -->
								<a  href="http://google.com" class="card">
									<div class="link-bg">
										<img src="./static/img/google.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des2">
									<span class="card-des-title">Google</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							<div class="card-web" id="test1">
								<!-- card start -->
								<a  href="http://coolshell.cn/" class="card">
									<div class="link-bg">
										<img src="./static/img/gibuli.png" alt="描述..."/>
									</div>
								</a>
								<div class="card-describe" id="test-des1">
									<span class="card-des-title">酷壳</span>
									<span class="card-modify">修改</span>
									<span class="card-delete">删除</span>
								</div>
								<!-- card end -->
							</div>
							
						</div><!--WebBoard1 end-->
						<div id="webBoard2" class="webBoard-style">
						asdffsdasd
						</div><!--WebBoard2 end-->
					</div><!--middleSlide end-->
				</div><!-- slideContainer end -->
				<div id="rightSlide" class="slide-style">
					<div id="rightSlideBar" class="slideBar-style slideBar-right">
					</div><!--rightSlideBar end-->
				</div>
            </div>  <!--middle end-->
        </div><!--main end-->
    </body>
</html>

<script type="text/javascript">
var boardNum = 2;
var currentBoard = 1;
var boardWidth = $("#middleSlide").width() ;
var preLi = $("#tabLiFirst");
    
$(document).ready(function(){
	$(".card-describe").animate({top:'30px'},"slow");
	$(".webBoard-style").width(boardWidth );
	$("#slideContainer").css({width:boardNum*boardWidth});
});

$(window).resize(function(){
	boardWidth = $("#middleSlide").width();
	$(".webBoard-style").width(boardWidth);
	$("#slideContainer").css({width:boardNum*boardWidth});
});

$(".card-web").hover(function(){
	//var obj = $(this);
	//obj.children('.card-describe').animate({top:'-30px'},"slow");
},function(){
	//var obj = $(this);
	//obj.children('.card-describe').animate({top:'30px'},"slow");
});

//board滑动控制
$(".slideBar-left").hover(function(){
	if(currentBoard == 1){
		$(".slideBar-left").css('cursor',"default");
	}else{
		$(".slideBar-left").css('cursor',"pointer");
	}
});
$(".slideBar-right").hover(function(){
	if(currentBoard == boardNum){
		$(".slideBar-right").css('cursor',"default");
	}else{
		$(".slideBar-right").css('cursor',"pointer");
	}
});
$(".slideBar-left").click(function(){
	if(currentBoard == 1){
		return;
	}
	var offSetWidth = (currentBoard-2)*boardWidth;
	$("#slideContainer").animate({marginLeft:offSetWidth}, "fast");
	currentBoard = currentBoard - 1;
});

$(".slideBar-right").click(function(){
	if(boardNum - currentBoard == 0){
		return;
	}
	var offSetWidth = (currentBoard-2)*boardWidth;
	$("#slideContainer").animate({marginLeft:offSetWidth}, "fast");
	currentBoard = currentBoard + 1;
});

$("#cardTabContainer li").click(function(){
    if($(this).attr("id") == "tabAdd")
        return;
	if(preLi != null){
    	preLi.removeClass("tabActive");
    }
    $(this).addClass("tabActive");
	
    preLi = $(this);
    
});
    
    $("#tabAdd").click(function(){
        var preHtml = $("#cardTabContainerUl").html();
        var targetHtml = preHtml.substring(0, preHtml.length-30);
        targetHtml += "<li class='tabActive'>Zengjia</li>"
        targetHtml += "<li id='tabAdd'>+</li>"
        $("#cardTabContainerUl").html(targetHtml);
        preLi.removeClass("tabActive");
    });

    
</script>
