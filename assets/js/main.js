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

	//  -------------- Actualité ---------------
	// déplier actualités
	$('.actualite h2').on('click', function(){
		
		$('.actualite').find('.content-to-hide').removeClass('active');
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}
		else{
			$('.actualite h2').removeClass('active');
			$(this).addClass('active');
			$(this).parents('.actualite').find('.content-to-hide').addClass('active');

		}
		
		
	});

		//  -------------- Escales ---------------
	// déplier escales
	$('.list-project__details__inner').on('click', function(){
		if($(this).parents('article').hasClass('active')){
			$(this).parents('article').removeClass('active');
		}
		else{
			$('.list-projects article').removeClass('active');
			$(this).parents('article').addClass('active');
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
		});
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


	//  page 
	// déplier les listes
	$('.list article').on('click', function(){
		$('.list article').find('.content-to-hide').removeClass('active');
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).find('.content-to-hide').removeClass('active');
		}
		else{
			$('.list article').removeClass('active');
			$(this).addClass('active');
			$(this).find('.content-to-hide').addClass('active');
		}
	});

	// déplier "en savoir plus"
	$('.more-btn').on('click', function(){
		$('.foldtext').find('.content-to-hide').removeClass('active');
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).next('.content-to-hide').removeClass('active');
		}
		else{
			$('.foldtext .content-to-hide').removeClass('active');
			$(this).addClass('active');
			$(this).next('.content-to-hide').addClass('active');
		}
	});

	// custom audio player
	GreenAudioPlayer.init({
    selector: '.audioplayer', // inits Green Audio Player on each audio container that has class "player"
    stopOthersOnPlay: true,
    enableKeystrokes: true
	});
	// });


	// custom audio player
	// document.addEventListener('DOMContentLoaded', function() {
	//   new GreenAudioPlayer('.audioplayer',{
	//     // selector: '.audioplayer',
	//     stopOthersOnPlay: true,
	//     enableKeystrokes: true
	// 	});
	// });

}







