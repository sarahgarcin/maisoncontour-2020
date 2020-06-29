$(document).ready(function(){
	init();
});


function init(){

	// -------------- OPEN MENU --------------- //
	var menuBtn = $('.menu_btn');
	var nav = $('header .nav');

	$('.menu_btn').on("click", function(e){
	  if(nav.hasClass('active')){
	    nav.removeClass("active");
	    menuBtn.html('Menu');
	  }
	  else{
	  	nav.addClass("active");
	  	menuBtn.html('<span class="menu-arrow">↑&thinsp;</span>RETOUR');
	  }

	});


	// -------------- ALBUM ---------------
	// positionnement des infos au survol
	// $('.album-project figure').mouseenter(function(e){
	// 	var xPos = e.pageX;
	// 	var yPos= e.pageY;
	// 	$(this).parents('.album-project').find('.album-project-info').css({
	// 		'top': yPos,
	// 		'left': xPos,
	// 		'display': 'block'
	// 	})
	// });
	// $('.album-project figure').mouseleave(function(){
	// 	$(this).parents('.album-project').find('.album-project-info').hide();
	// })

	$('.album-project').hover(function(e){
		var xPos = e.pageX;
		var yPos= e.pageY;
		$(this).find('.album-project-info').css({
			'top': yPos,
			'left': xPos,
			'display': 'block'
		})
	}, function(e){
		$(this).find('.album-project-info').hide();
	});

	// système d'affichage / effacement avec les tags
	$('.tags li').on('click', function(){
		var tag = $(this).attr('data-tag');
		$('.album-project').removeClass('hide');
		if(!$(this).hasClass('active')){
			$('.tags li').removeClass('active');
			$(this).addClass('active');
			$('.album-project:not(.'+tag+')').addClass('hide');
		}
		else{
			$(this).removeClass('active');
		}

		

	});

}







