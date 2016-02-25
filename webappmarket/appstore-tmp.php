<!DOCTYPE html>
<html>
	<head>
		<title>App Store</title>
		<meta http-equiv="content-type" content="text/html;charset=utf8">
		<link type="text/css" rel="stylesheet" href="./static/css/my_app_store.css" />
		<link type="text/css" rel="stylesheet" href="./static/css/bootstrap-my.css" />
		<script type="text/javascript" src="./static/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./static/js/my_app_store.js"></script>
	</head>
	<body>
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
					content
				</div>
			</div>
			<div id="showApp" class="showApp-style">
				<div class="search-bar-style">
					showApp
				</div>
			</div>
		</div>
	</body>
</html>