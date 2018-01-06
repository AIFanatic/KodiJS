var KodiJS = new function()
{
    this.menu_selected = "VIDEOS";
    this.submenu_selected = "#home-videos-submenu";
	this.screen_showing = ".main-menu";
	
	this.addonsPath = "KodiJS/addons/";
	
    this.ShowFloorButtons = function (right)
	{
		$("#floor-favourites-btn").fadeOut(200);
		$("#floor-power-btn").fadeOut(200);
		$("#floor-back-btn").fadeOut(200);
		
		$("#floor-home-btn").fadeOut(200, function() {
			if(right)
			{
				$("#floor-back-btn").fadeIn(200);
				$("#floor-home-btn").fadeIn(200);
			}
			else
			{
				$("#floor-favourites-btn").fadeIn(200);
				$("#floor-power-btn").fadeIn(200);
			}
		});
    };
	
    this.LoadMenu = function ()
	{
		$('.main-menu-slider').slick({
			dots: false,
			infinite: false,
			arrows: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			]
		});
			
		$.ajax({url: "layout/default/main.json", success: function(data)
		{
			var fields = data["menu"];
			
			$.each(fields, function(i, item) {
				var field_id = fields[i]["id"];
				var field_text = fields[i]["text"];
			
				$('.main-menu-slider').slick('slickAdd','<div class="home-button"><a href="#" class="home-button-btn" id="'+field_id+'">'+field_text+'</a></div>');
				
				//LOAD SUBMENU
				if(fields[i]["submenu"]!==undefined)
				{				
					var submenu = fields[i]["submenu"];
					
					var submenu_main_id = field_id.replace("-btn", "-submenu");
					
					var submenu_html = $(".main-submenu").html();

					submenu_html += '<div style="display: none;" class="sub-menu col-centered" id="'+submenu_main_id+'"> \
											<img class="sub-menu-left" src="img/media/HomeSubEnd.png"> \
												<div class="sub-menu-middle">';
					
					$.each(submenu, function(i, item) {
						var submenu_id = submenu[i]["id"];
						var submenu_text = submenu[i]["text"];
						
						submenu_html+='<div class="col-lg-6 sub-home-button"> \
											<a id="'+submenu_id+'" href="#">'+submenu_text+'</a> \
										</div>';
					});
					
					submenu_html += '</div> \
								<img class="sub-menu-right" src="img/media/HomeSubEnd.png"> \
							</div>';
					
					$(".main-submenu").html(submenu_html);
				}
			});
		}});
    };
	
	this.Screen_Show = function (panel_id)
	{
		$(this.screen_showing).fadeOut(200 , function(){
			$("."+panel_id).fadeIn(200);
			this.screen_showing = "."+panel_id;
			
			console.log(this.screen_showing);
		});
		
		this.screen_showing = "."+panel_id;
	};
	
	this.Panel_AddItem = function (panel_type, panel_id, panel_text)
	{
		$("."+panel_type+"-item").append('<li class="list-group-item"><a href="#" id="'+panel_id+'" class="panel-left-item">'+panel_text+'</a></li>');
	};
	
	this.Panel_RemoveAll = function (panel_type)
	{
		$("."+panel_type+"-item").html('');
	};
	
	this.Screen_Background = function (bg)
	{
		//$(".bg-img").css("display", "none");
		$(".bg-img").css("background", "url('"+bg+"')");
	};
	
	this.Loading = function (value)
	{
		if(value) $(".loading-panel").fadeIn(200);
		else $(".loading-panel").fadeOut(200);
	};
}