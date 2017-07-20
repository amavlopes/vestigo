function openMenu(){

	$("#navbar-custom").stop().animate({
		top: "54px",
	}, 350, function() {

		// Animation complete.
		$('body').addClass('menu-aberto');
		//some o icon-menu 
		$("#icon-menu").css('display','none');
		$("#icon-close").css('display','block');
	});

}//

function closeMenu(){

	$("#navbar-custom").stop().animate({
		top: "-215px",
	}, 350, function() {

		// Animation complete.
		$('body').removeClass('menu-aberto');
		//some o icon-menu 
		$("#icon-close").css('display','none');
		$("#icon-menu").css('display','block');
	});

}//

function goToSessao(sessao){

	var goTo = $(sessao).offset().top - 53; //55 top height

	$("html, body").stop().animate({
        scrollTop: goTo
    }, '700', function() {});
    
	return false; 

}//

$(document).ready(function(){
	
	//Header e footer Compartlhados entre a "pagina one" e servicos
	//$("[data-role='header'], [data-role='footer']").toolbar();

	//apenas o footer compartilhado com a pagina de servicos
	$("[data-role='footer']").toolbar();

	//goToSessao("#home");

	//Menu open
	$("body").on( "click", "#icon-menu", function() {
		
		//abrir o menu
		openMenu();

	});//open

	//Menu close
	$("body").on( "click", "#icon-close, #navbar-custom a", function() {
		
		//fecha o menu
		closeMenu();

	});//open	

	/* menu options */

		//ao clicar na logo
		$('#logo a').click(function(){

			//remove a classe ativa
			$('.active').removeClass('active');			
			//adiciona a atual
			$("#navbar-custom li:first-child a").addClass('active');

			goToSessao("#inicio");
			closeMenu();

		});//

		//ao clicar em nossos planos
		$('#veja-nplanos').click(function(){

			//remove a classe ativa
			$('.active').removeClass('active');			
			goToSessao("#planos");

		});//		

		//removendo a classe ativa e adcionando a atual
		$('#navbar-custom li a').click(function(){

 			var sessao = $(this).attr("href");		
 			//console.log(sessao);

			//remove a classe ativa
			$('.active').removeClass('active');
			//adiciona a atual
			$(this).addClass('active');
			
			//fecha o menu
			closeMenu();

			goToSessao(sessao);			

		});//

	//slider testimonials
	var bxSlider;
    bxSlider = $('.bxslider').bxSlider({
		auto: true,
		mode: 'horizontal',
		captions: false,
		controls: false,
		touchEnabled: false,
		pager: true
    });	

});