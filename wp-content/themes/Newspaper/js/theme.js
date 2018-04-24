document.addEventListener("DOMContentLoaded", function(){
	var menuFix = document.querySelector('.td-header-gradient');
	var searchBox = document.querySelector('.td-header-wrap .td-drop-down-search');
	var trangThai = "duoi50";
	window.addEventListener('scroll', function(){
		if(window.pageYOffset > 50){
			if(trangThai=="duoi50"){
				trangThai = "tren50";
				menuFix.classList.add('divHeader');
				searchBox.classList.add('search-box-fix');
			}
		}
		else if(window.pageYOffset < 50){
			if(trangThai=="tren50"){
				trangThai = "duoi50";
				menuFix.classList.remove('divHeader');
				searchBox.classList.remove('search-box-fix');

			}
		}
	});

});