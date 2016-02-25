<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf8">
		<link type="text/css" rel="stylesheet" href="./static/css/base-my.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/my_app.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/bootstrap-theme-my.css" />
		<script type="text/javascript" src="./static/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./static/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
		<title>My App</title>
		
	</head>
	<body>
		<div id="main">
			<div id="category">
			<ul>
				<li id="category-0" class="li-click li-style category-selected">新添加</li>
			</ul>
			<ul id="category-sortable" class="sortable">
			  <li id="category-1" class="li-click category-li li-style">我看看能写多少字</li>
			  <li id="category-2" class="li-click category-li li-style">Item 2</li>
			  <li id="category-3" class="li-click category-li li-style">Item 3</li>
			  <li id="category-4" class="li-click category-li li-style">Item 4</li>
			  <li id="category-5" class="li-click category-li li-style">Item 5</li>		  
			</ul>
			<ul>
				<li id="category-add" class="li-style" data-toggle="modal" data-target="#exampleModal">Add</li>
			</ul>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">添加新的分类</h4>
				  </div>
				  <div class="modal-body">
					请输入分类名称：<input id="newCategory" type="text" class="form-control" placeholder="分类名称，最多为16字符">
				  </div>
				  <div class="modal-footer">
					<button id="addCategoryBtn" type="button" class="btn btn-success">确定</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button> 
				  </div>
				</div>
			  </div>
			</div>
				
			</div>
			<div id="content">
				<div id="app-content-0" class="app-content">
					<ul id="app-sortable" class="sortable">
						<?php
							for($i=0; $i<32; $i++)
							{
								echo "<li class='app-style' id=app_$i>";
						?>
						<img src="./static/img/thumbnail.png">
						<?php
							echo "<div class='app-name'>$i</div>";
						?>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
				<div id="app-content-1" class="app-content not-show">
					Content1
				</div>
				<div id="app-content-2" class="app-content not-show">
					Content2
				</div>
				
			</div>
		</div>
	</body>
</html>
<script>
	var InitAgent = {
		initDroppable: function(){
			$(".category-li").droppable({
			hoverClass: "ul-drag-hover",
			accept: ".app-style",
			drop: function(event, ui){
				var parent = ui.draggable.parent()[0];
				if(parent.id == this.id){
					return;
				}
				var rmDivId = ui.draggable[0].id;
				 $("#" + rmDivId).toggle( "scale" );
			}
		});
		}
	};
	var GlobalValAgent = {
		preCategorySelected: "category-0",
		preShowedContent: "app-content-0",
	}
	var Utils = {
		countStringBytes: function(val){
			var len = 0; 
			for (var i = 0; i < val.length; i++) {
				if (val[i].match(/[^x00-xff]/ig) != null) //全角 
					len += 2; 
				else
					len += 1; 
			};
			return len;
		}
	}
	$(function() {
		$("#category-sortable").sortable({
			revert: true,
			containment: "#category", 
			scroll: false
		});
		$("#category-sortable").droppable({
			activeClass: "ul-drag-active",
			accept: ".app-style",
			drop: function(event, ui){
				var parent = ui.draggable.parent()[0];
				if(parent.id == this.id){
					return;
				}
			}
		});
		InitAgent.initDroppable();
		$("#app-sortable").sortable({
			revert: true,
			opacity: 0.8,
			cursor: "move"
		});
	});
		

	$(".app-style img").hover(function(){
		$(this).addClass("app-list-hover");
	},function(){
		$(this).removeClass("app-list-hover");
	});
	
	$("#addCategoryBtn").click(function(){
		var inputVal = $("#newCategory").val();
		if(Utils.countStringBytes(inputVal) == 0){
			alert("输入不能为空");
			return;
		}
		if(Utils.countStringBytes(inputVal) > 16){
			alert("名字太长了");
			return;
		}
		var liNum = $("#category-sortable li").length;
		var oldHtml = $("#category-sortable").html();
		var newHtml = oldHtml + "<li " + "id=\"category_" + (liNum+1) +"\" class=\"category-li li-style ui-widget-content\">" + inputVal + "</li>"
		$("#category-sortable").html(newHtml);
		InitAgent.initDroppable();
		$('#exampleModal').modal('hide')
	});
	
	$(".li-click").click(function(){
		var id = $(this).attr("id");
		if(id == GlobalValAgent.preCategorySelected)
			return;
		var pos = id.indexOf('-');
		var targetId = "app-content-" + id.substr(pos+1, id.length);
		$("#" + GlobalValAgent.preCategorySelected).removeClass("category-selected");
		$("#" + GlobalValAgent.preShowedContent).hide("slide");
		$(this).addClass("category-selected");
		$("#" + targetId).show("slide");
		GlobalValAgent.preCategorySelected = id;
		GlobalValAgent.preShowedContent = targetId;
	});
	
</script>