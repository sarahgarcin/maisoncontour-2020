$(document).ready(function(){
	init();
});


function init(){

	// LOADER
	$(window).on('load', function() {
		$(".page_loader").fadeOut("slow");
	});

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

	// $('.album-project').hover(function(event){
	// 	var left = event.pageX - $(this).offset().left;
 //     var top = event.pageY - $(this).offset().top;
	// 	$(this).find('.album-project-info').css({
	// 		'top': top,
	// 		'left': left,
	// 		// 'display': 'block'
	// 	});
	// // }, function(e){
	// // 	$(this).find('.album-project-info').hide();
	// });
	$('.album-project').each(function(){
		console.log($(this).offset().left);
		if($(this).offset().left > $(window).width() / 1.5){
			console.log('hello');
			$(this).find('.album-project-info').css({
				'left' : '-250px'
			})
		}
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

	// projet
	 $('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  fade: false,
		  infinite: true,
		  //adaptiveHeight: true,
		  // variableWidth: true,
		  asNavFor: '.slider-nav'
		});

		$('.slider-nav').slick({
		  // slidesToShow: 3,
		  // slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: true,
		  arrows: false,
		  centerMode: true,
		  focusOnSelect: true, 
  		variableWidth: true
		});



	//  page 
	// déplier les listes
	$('.list article h3').on('click', function(){
		$('.list article').find('.content-to-hide').removeClass('active');
		$parent = $(this).parent('article');
		if($parent.hasClass('active')){
			$parent.removeClass('active');
			$parent.find('.content-to-hide').removeClass('active');
		}
		else{
			$('.list article').removeClass('active');
			$parent.addClass('active');
			$parent.find('.content-to-hide').addClass('active');
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


	// générer un sommaire
	$('body[data-template="default"] h2').each(function(){
		var title = $(this).html();
		var anchor = $(this).attr('id');
		var htmlToAdd = '<li data-anchor="'+anchor+'"><a href="#'+anchor+'">'+title+'</a></li>';
		$('.sidebar .table-of-contents ul').append(htmlToAdd);
	});

	var targetOffset = $('body[data-template="default"] h2').offset().top;

	var $w = $(window).scroll(function(){
		$('body[data-template="default"] h2').each(function(){
			var targetOffset = $(this).offset().top;
			var nextTargetOffset = $(this).next().offset().top;
			if ( ($w.scrollTop()+100) > targetOffset && ($w.scrollTop()+100) < nextTargetOffset) {
				console.log($(this).attr('id'));
				$('.sidebar .table-of-contents ul li').removeClass('active');
				$('.sidebar .table-of-contents ul li[data-anchor='+$(this).attr('id')+']').addClass('active');
			}
		});
	    // if ( $w.scrollTop() > targetOffset ) {
	    // 	console.log('hello');   
	    //     // $('#voice2').css({"border-bottom":"2px solid #f4f5f8"});
	    //     // $('#voice3').css({"border-bottom":"2px solid #2e375b"});
	    // }
	});

}







