$(document.body).on('click','#submenu-exodus-btn', function(e)
{
	e.preventDefault();
	
	KodiJS.Screen_Background(KodiJS.addonsPath+"exodus/data/bg.jpg");
	console.log("working");

	KodiJS.Panel_RemoveAll("panel-menu");
	
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-up-btn", "..");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-movies-btn", "Movies");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-tvshows-btn", "TV Shows");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-mymovies-btn", "My Movies");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-mytvshows-btn", "My TV Shows");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-newmovies-btn", "New Episodes");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-newmovies-btn", "New Movies");
	KodiJS.Panel_AddItem("panel-menu", "exodus-panel-search-btn", "Search");
	
	KodiJS.Screen_Show("panel-menu");
		
	KodiJS.ShowFloorButtons(true);
});

$(document.body).on('click','#exodus-panel-movies-btn', function(e)
{
	e.preventDefault();

//KodiJS.Loading(true);
	
	KodiJS.Screen_Show("panel-menu-thumbnails");
});