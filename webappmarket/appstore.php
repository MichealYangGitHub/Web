<!DOCTYPE html>
<html>
	<head>
		<title>App Store</title>
		<meta http-equiv="content-type" content="text/html;charset=utf8">
		<link type="text/css" rel="stylesheet" href="./static/css/base-my.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/my_app_store.css" />
		<script type="text/javascript" src="./static/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./static/js/jquery.raty.min.js"></script>
		<script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./static/js/my_app_store.js"></script>
	</script>
	</head>
	<body onresize="OnResizeFunc();">
		<div id="main">
			<div id="appsList" class="showApp-style">
				<div class="search-bar-style">
				</div>
				<div id="category">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  			<div class="panel panel-default"><!--这是每个pannel的开始-->
			    			<div class="panel-heading" role="tab" id="headingOne">			      
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><!--指定响应id为collapseOne-->
						          	<h4 class="panel-title">IT</h4>
						        </a>
			    			</div>
			    			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"><!--这个id 是collapseOne，collapse组件即是通过id来定位collapse pannel的-->
				      			<div class="panel-body">
				        			Collapse item 1
				      			</div>
			    			</div>
			  			</div><!--panel end-->
			  			<div class="panel panel-default">
			    			<div class="panel-heading" role="tab" id="headingTwo">
			        			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          				<h4 class="panel-title">设计</h4>
			        			</a>			      
			    			</div>
			    			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      				<div class="panel-body">
			        				Collapse Item 2
			     				</div>
			    			</div>
			  			</div>
			  			<div class="panel panel-default">
			    			<div class="panel-heading" role="tab" id="headingThree">			      
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          <h4 class="panel-title">游戏</h4>
						        </a>			      
			    			</div>
			    			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      				<div class="panel-body">
			        				Collapse Item 3
			      				</div>
			    			</div>
			  			</div>
			  			<div class="panel panel-default">
			    			<div class="panel-heading" role="tab" id="headingFour">			      			
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          <h4 class="panel-title">其他</h4>
						        </a>			      
			    			</div>
			    			<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						     	<div class="panel-body">
						    		Collapse Item 4
						    	</div>
			    			</div>
			  			</div>
					</div>
				</div>
				<div id="content">
					<?php
						for($index=0; $index<12; $index++)
						{
							echo "<div class=\"appstore-app-list\" id=app_$index>";
					?>
						<!--<div class="appstore-app-list">-->
							<img src="./static/img/thumbnail.png" data-toggle="modal" data-target="#exampleModal"></img>
							<div class="appstore-app-desc">
								<p class="appstore-app-title ft-size-18"><b>Title</b></p>
								<div class="line-linear-griadent"></div>
								<p class="appstore-app-abstract ft-size-12">我瞅瞅能写多少字我瞅瞅能写多少字我瞅瞅能写多</p>
								<div id="appstore-abstract-btn">									
									<button class="btn btn-info abstract-btn-size" type="button" data-toggle="modal" data-target="#exampleModal">简介</button>
									<button class="btn btn-success abstract-btn-size" type="button">进入</button>
									<button class="btn-gray abstract-btn-size" type="button">收藏</button>
								</div>
							</div>
						</div>
					<?php
						}
					?>
					<div class="appstore-app-list">
						<img id="appstore-list-add" src="./static/img/add-1.png" data-toggle="modal" data-target="#addModal"></img>
					</div>
					
					<!--增加Modal Dialog-->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
					      </div>
					      <div class="modal-body">
					      	<!--从数据库中读出数据-->
					      	<table>
					      		<tr>
					      			<td class="modal-thumbnail"><img src="./static/img/thumbnail.png"></img></td>
					      			<td class="modal-stars">
					      				<div class="modal-final-score"></div><div id="modal-final-score-h">0</div><div id="modal-final-score-l">.0</div>
							      		<div class="modal-people">
							      			<table class="modal-tb-statistic">
							      				<tr><td>0</td><td>&nbsp;&nbsp;&nbsp;&nbsp;人评价</td></tr>
							      				<tr><td>0</td><td>&nbsp;&nbsp;&nbsp;&nbsp;次使用</td></tr>
							      				<tr><td>0</td><td>&nbsp;&nbsp;&nbsp;&nbsp;人收藏</td></tr>
							      			</table>
							      		</div>
							      		<div id="modal-star">
								      		<table class="modal-star-tb">
								      			<tr><td class="modal-star modal-5star"></td><td class="modal-blank"></td><td class="modal-percentage"><div class="div-percentage" style="width: 20.9%; "></td><td class="modal-score">99.9%</td></tr>
								      			<tr><td class="modal-star modal-4star"></td><td class="modal-blank"></td><td class="modal-percentage"><div class="div-percentage" style="width: 51%; "></td><td class="modal-score">1</td></tr>
								      			<tr><td class="modal-star modal-3star"></td><td class="modal-blank"></td><td class="modal-percentage"><div class="div-percentage" style="width: 26.2%; "></td><td class="modal-score">1</td></tr>
								      			<tr><td class="modal-star modal-2star"></td><td class="modal-blank"></td><td class="modal-percentage"><div class="div-percentage" style="width: 1.7%; "></td><td class="modal-score">1</td></tr>
								      			<tr><td class="modal-star modal-1star"></td><td class="modal-blank"></td><td class="modal-percentage"><div class="div-percentage" style="width: 0.3%; "></td><td class="modal-score">1</td></tr>
								      		</table>
							      		</div>
							      		<div id="modal-evaluate">
							      		</div>
							      		<button id="modal-commit" type="button" class="btn btn-info">提交</button>
					      			</td>
					      		</tr>
					      	</table>
					      	<div class="modal-tab">
					      		<span id="modal-tab-btn-left" class="modal-tab-btn">详情</span><span id="modal-tab-btn-right" class="modal-tab-btn">评价</span>
					      	</div>
					      	
					      	<div id="modal-abstract" class="modal-info">
					      		<p><h4><b>应用描述：</b></h4></p>
					      		<p>这个应用是干嘛用的</p>
					      		<p><h4><b>添加时间：</b></h4></p>
					      		<p>2015年9月15日</p>
					      	</div>
					      	<div id="modal-comment" class="modal-info">
					      		<?php
					      			for($i=0; $i<15; $i++){
					      		?>
					      		<div class="modal-comment-content">
					      			<span class="modal-comment-span">这个软件非常好！我非常喜欢！</span>
					      			<span class="modal-comment-author">Comment by MichealYang @ 2015/9/21</span>
					      		</div>
					      		<?php
							      	}
							    ?>
					      		
					      		<textarea id="modal-my-comment" class="form-control" rows="3" placeholder="请输入您的评论~"></textarea>
					      		<button id="modal-btn-comment" type="button" class="btn btn-success">提交</button>
					      	</div>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" class="btn btn-success">进入应用</button>
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
					      </div>
					    </div>
					  </div>
					</div><!--exampleModal end-->
					<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="addModalLabel">添加WebApp</h4>
					      </div><!--modal-header end-->
					      <div class="modal-body">
					      	<table class="table table-bordered">
					      		<tr>
					      			<td class="add-tb-desc"><span>添加图片<br><a class="add-tb-del">delete</a></span></td>
					      			<td class="add-tb-content"><img id="add-tb-img" src="./static/img/thumbnail.png"></td>
					      		</tr>
					      		<tr>
					      			<td class="add-tb-desc"><span>应用简介</span></td>
					      			<td class="add-tb-content"><textarea class="form-control" rows="2" placeholder="输入简介，不多于20字"></textarea></td>
					      		</tr>
					      		<tr>
					      			<td class="add-tb-desc"><span>应用描述</span></td>
					      			<td class="add-tb-content"><textarea class="form-control" rows="5" placeholder="输入对应用的描述"></textarea></td>
					      		</tr>
					      		<tr>分类</tr>
					      	</table>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" class="btn btn-success">Add</button>
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
					      </div>
					  	</div><!--modal-content end-->
					  </div><!--modal-dialog end-->
					</div><!--addmodal end-->
					<!---->
				</div>
			</div>
			<!--
			<div id="showApp" class="showApp-style">
				<div class="search-bar-style">
					showApp
				</div>
			</div>
			-->
		</div>
	</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$("#modal-tab-btn-left").addClass("modal-tab-btn-click");
	$("#modal-abstract").slideDown();
	$("#modal-comment").slideUp();
});
$("#modal-tab-btn-left").addClass("modal-tab-btn-click");
$("#modal-evaluate").raty({
	hints: ['很差', '差', '一般', '好', '很好'],
	path:"static/img",
	starOff: 'star-off.png',
	starOn: 'star-on.png',
	size: 20,
	click: function (score, evt) {
		//alert('u selected '+score);
	}
});
$("#appstore-list-add").hover(function(){
	$("#appstore-list-add").attr("src", "./static/img/add-2.png");
},function(){
	$("#appstore-list-add").attr("src", "./static/img/add-1.png");
});
$("#appstore-list-add").click(function(){
});

$(".appstore-app-list").hover(function(){
	$(this).addClass("appstore-app-list-hover");
},function(){
	$(this).removeClass("appstore-app-list-hover");
});

$("#appstore-abstract-btn .btn-info").click(function(){
	//alert("info_" + $(this).parent().parent().parent().attr('id'));
});

$('#exampleModal').on('show.bs.modal', function (event) {
	var target = $(event.relatedTarget);
	var tagName =target.get(0).tagName;
	var modal = $(this);
	var recipient = null;
	if(tagName == "BUTTON"){
		recipient = "info_" + target.parent().parent().parent().attr('id');
	}else if(tagName == "IMG"){
		recipient = "info_" + target.parent().attr('id');
	}
	
	modal.find('.modal-title').text('New message to ' + recipient);
	modal.find('.modal-body input').val(recipient);
});

$("#appstore-abstract-btn .btn-success").click(function(){
	//alert("enter_" + $(this).parent().parent().parent().attr('id'));
});

$("#appstore-abstract-btn .btn-gray").click(function(){
	if($(this).hasClass('btn-my')){
		$(this).removeClass("btn-my");
	}else{
		$(this).addClass("btn-my");
	}

});

$("#modal-tab-btn-left").click(function(){
	$("#modal-tab-btn-left").addClass("modal-tab-btn-click");
	$("#modal-tab-btn-right").removeClass("modal-tab-btn-click");
	$("#modal-abstract").slideDown();
	$("#modal-comment").slideUp();
});

$("#modal-tab-btn-right").click(function(){
	$("#modal-tab-btn-right").addClass("modal-tab-btn-click");
	$("#modal-tab-btn-left").removeClass("modal-tab-btn-click");
	$("#modal-comment").slideDown();
	$("#modal-abstract").slideUp();
});

function onResizeFunc(){
    alert("resize");
    var winWidth = 0;
    var winHeight = 0;
    if (window.innerHeight){
        winWidth = window.innerWidth;
        winHeight = window.innerHeight;
    }
        
    else if ((document.body) && (document.body.clientHeight))
    {
        winWidth = document.body.clientWidth;
        winHeight = document.body.clientHeight;
    }
    if (document.documentElement  && document.documentElement.clientHeight && document.documentElement.clientWidth)
    {
        winHeight = document.documentElement.clientHeight;
        winWidth = document.documentElement.clientWidth;
    }
    var categaryWidth = winWidth * 0.1;
    if(categaryWidth <= 100){
        categaryWidth = 100;
    }
    $("#content").height(winWidth-categaryWidth);
}
</script>