<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes"/>

  
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/ui-lightness/jquery-ui.css"/>
  
  <link rel="stylesheet" href="css/spinner.css" >

  
  <style>
	body{
		font-family: 'Roboto', sans-serif;
	}

	.bg-main{
		position: absolute;
		top:0;
		bottom:0;
		right: 0;
		left: 0;
	}
	
	.bg-img{
		background-position: center center !important;
		width: 100%;
		height: 100%;
		
		/* TRANSITION */
		-webkit-transition: background 1s ease-out;
		-moz-transition: background 1s ease-out;
		-o-transition: background 1s ease-out;
		transition: background 1s ease-out;
		-webkit-transform: translateZ(0);
	}
	
		
	.middle{
		text-align: center;
		height: 80px;
		background-image: url(img/media/HomeBack.png);
		background-repeat: repeat;
		background-size: contain;
		position: absolute;
		top: 40%;
		font-size: 40px;
		font-weight: 600;
		color: #505050;
	}
	
	.floor{
		height: 100px;
		background-image: url(img/media/floor.png);
		background-repeat: repeat;
		background-size: contain;
		position: absolute;
		bottom: 0;
		display: inline-flex;
	}
	
	.home-button{
		border-left: 1px rgba(255,255,255,0.05) solid;
		border-right: 1px rgba(255,255,255,0.05) solid;
		margin-top: 10px;
		margin-bottom: 15px;
		width: 300px;
	}
	
	.sub-home-button{
		border-left: 1px rgba(255,255,255,0.05) solid;
		border-right: 1px rgba(255,255,255,0.05) solid;
		margin-top: 5px;
		margin-bottom: 15px;
		font-size: 20px;
	}	
	
	a {
		text-decoration: none !important;
		outline: none !important;
		color:#505050;
		-o-transition:.2s;
		-ms-transition:.2s;
		-moz-transition:.2s;
		-webkit-transition:.2s;
		/* ...and now for the proper property */
		transition:.5s;
	}
	
	a:hover {
		color: #0084ff;
	}
	
	.sub-menu{
		margin-top: 3px;
		display: flex;
		height: 40px;
	}
	
	.sub-menu-left{
		transform: scaleX(-1);
		float: left;
	}
	
	.sub-menu-right{
		float: right;
	}
	
	.sub-menu-middle{
		background: #00070a;
		display: flex;
	}
	

	.col-centered {
		display:inline-flex;
		float:none;
	}
	
	.panel-content{
		min-height: 85%;
		background-image: url(img/media/ContentPanel.png);
		margin-top: 20px;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		padding-bottom: 20px;
		z-index: 10;
		
		padding-top: 20px;
		font-weight: 600;
		font-size: 18px;
	}
	
	.panel-content a{
		color: #bdbdbd;
		font-weight: 300;
		width: 100%;
	}
	
	.panel-content a:hover {
		color: #0084ff !important;
	}
	
	.list-group-item{
		background-color: transparent !important;
		border-right: none;
		border-left: none;
	}
	
	
	.floor-button{
		height: 48px;
		width: 48px;
		margin-top: 30px;
		border: 1px solid #000;
		border-radius: 5px;
		margin-left: 20px;
		padding: 0;
		
		outline:none !important;
		
		background: #2f2f2f; /* Old browsers */
		background: -moz-linear-gradient(top,  #2f2f2f 40%, #101010 60%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #2f2f2f 40%,#101010 60%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #2f2f2f 40%,#101010 60%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2f2f2f', endColorstr='#101010',GradientType=0 ); /* IE6-9 */
	}
	
	.floor-button:active, .floor-button:hover{
		background: #0488e6; /* Old browsers */
		background: -moz-linear-gradient(top,  #0488e6 30%, #025dcb 70%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #0488e6 30%,#025dcb 70%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #0488e6 30%,#025dcb 70%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0488e6', endColorstr='#025dcb',GradientType=0 ); /* IE6-9 */
	}
	
	.floor-button img{
		width: 35px;
		height: 35px;
	}

	
	
	
	
	#container {
 
    text-align: justify;
    -ms-text-justify: distribute-all-lines;
    text-justify: distribute-all-lines;
    
    /* just for demo */
    
}

.box {
    width: 150px;
    height: 125px;
    background:#ccc;
    vertical-align: top;
    display: inline-block;
    *display: inline;
    margin:10px;
    zoom: 1
}
.stretch {
    width: 100%;
    display: inline-block;
    font-size: 0;
    line-height: 0
}

</style>
</head>

<body>

<div class="loading-panel" style="display:none;">
	<div class="spinner-overlay"></div>
	<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>

<div class="bg-main">
  <div class="bg-img" style="background: url('img/backgrounds/SKINDEFAULT.jpg');">
  </div>
</div>

<div class="main-menu">
	<div class="col-lg-12 middle">
		<section class="center main-menu-slider">
		</section>
	  
		<div class="col-lg-12 main-submenu" style="margin-top:-16px;">
		</div>
	  
	</div>
</div>

<div class="panel-menu" style="display:none;">
	<div class="col-lg-12">
		<div class="col-lg-7 panel-content">
			<ul class="list-group panel-menu-item">
			</ul>
		</div>
	</div>
</div>

<div class="panel-menu-thumbnails" style="display:none;">
	<div class="col-lg-12 panel-content">
		<ul class="list-group panel-menu-thumbnails-item">
			<div id="container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <span class="stretch"></span>
</div>
	
		</ul>
	</div>
</div>

	<div class="col-lg-12 floor">
		<div class="col-lg-6">
			<button id="floor-favourites-btn" class="floor-button" style="margin-left: 0px;"><img src="img/media/icon_favourites.png"></button>
			<button id="floor-power-btn" class="floor-button" style=""><img src="img/media/icon_power.png"></button>
		</div>
		<div class="col-lg-6" style="text-align: right;">
			<button id="floor-back-btn" class="floor-button" style="display: none;"><img src="img/media/icon_back.png"></button>
			<button id="floor-home-btn" class="floor-button" style="display: none;"><img src="img/media/icon_home.png"></button>
		</div>
	</div>

	
	
	
	
	

	
	
	
</body>

<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="KodiJS/js/core.js"></script>
<script type="text/javascript" src="KodiJS/addons/exodus/exodus.js"></script>


<script>
$(document).ready(function(){

	var menu_selected = "VIDEOS";
	var submenu_selected = "#home-videos-submenu";
	
	$(document.body).on('click','.home-button-btn', function(e)
	{
		e.preventDefault();
		
		menu_selected = $(this).text();
		
		var home_button_id = this.id;
		
		var submenu_id = "#"+home_button_id.replace("-btn", "-submenu");
		
		$(submenu_selected).hide('slide', {direction: 'up'}, 200 , function() {
			$(submenu_id).show('slide', {direction: 'up'}, 200);
			
			submenu_selected = submenu_id;
		});
	});
	
	$("#floor-home-btn").click(function(e)
	{
		e.preventDefault();
		
		KodiJS.Screen_Background("img/backgrounds/SKINDEFAULT.jpg");
		KodiJS.Screen_Show("main-menu");
			
		KodiJS.ShowFloorButtons(false);
	});
	
	//LOAD SLIDES
	KodiJS.LoadMenu();
});
</script>

</html>