$(document).ready(function(){
	$('.ui.dropdown.language').dropdown();
	$('.calendar').dateDropper();
	$('.owl-carousel#pageCarusel').owlCarousel({
		loop:false,
		margin:10,
		dots: true,
		nav:false,
		responsive:{
			600:{
				items:2
			},
			1000:{
				items:5
			}
		}
	});
	$(".reservaBtnTag").click(function(){
		$(".cta-form").addClass("animated shake");
		setTimeout(function(){
			$(".cta-form").removeClass("animated shake");
		}, 2000);
		return false;
	});
	$(".cta-submit").click(function(e){
		if($(".cta-form #name").val() == ''){
			$(".cta-form .contain .name-cta-form").addClass("error");
		}else
		if($(".cta-form #email").val() == ''){
			$(".cta-form .contain .email-cta-form").addClass("error");
		}else
		if($(".cta-form #phone").val() == ''){
			$(".cta-form .contain .phone-cta-form").addClass("error");
		}else{
			$(".cta-form").addClass("loading");
			$.ajax({
				url: "post/post_email.php",
				type: "post",
				data: { 
					name: $(".cta-form #name").val(),
					email: $(".cta-form #email").val(),
					phone: $(".cta-form #phone").val(),
					date: $(".cta-form #date").val(),
					people: $(".cta-form .people").attr("data"),
					nameHidden: $(".cta-form .nameHidden").val(),
					priceHidden: $(".cta-form .priceHidden").val()
				},
				success: function(response) {
					if(response == 'ok'){
						$('.submit-cta').modal('show');
						$(".cta-form").removeClass("loading");
					}
				},
				error: function(xhr) {
					console.log("Hubo un error!");
				}
			});
		}
		return false;
	});
	$(".contacto-submit").click(function(e){
		$(".form.contacto").addClass("loading");
		$.ajax({
			url: "post/post_email_contacto.php",
			type: "post",
			data: { 
				name: $(".contacto #name").val(),
				email: $(".contacto #email").val(),
				phone: $(".contacto #phone").val(),
				message: $(".contacto #message").val()
			},
			success: function(response) {
				console.log(response);
				if(response == 'ok'){
					$('.submit-cta').modal('show');
					$(".form.contacto").removeClass("loading");
				}
			},
			error: function(xhr) {
				console.log("Hubo un error!");
			}
		});
		return false;
	});
	$(document).on('click', '.people-num .ui.none.button', function(){
		var 
			people = $('.people-num .people').attr("data"),
			final;
		if ($(this).hasClass('r')){
			final = parseInt(people) + 1;
			$('.people-num .people').html(final);
			$('.people-num .people').attr("data", final);
		}
		if ($(this).hasClass('l')){
			if(people > 1){
				final = parseInt(people) - 1;
				if(people == 2){
					$('.people-num .people').html("Solo yo");
				}else{
					$('.people-num .people').html(final);
				}
				$('.people-num .people').attr("data", final);	
			}
		}
		if(final >= 1){
			$('.totalprice > span').html(final * $('form .priceHidden').val());
		}
		return false;
	});
	if($(window).width() > 763 ){
		$('.item-nav.ui.dropdown').dropdown({
			transition: 'slide down',
			duration : 100
		});
		$('.ui.sticky').sticky({offset: 10,context: '.block'});
	}else{
		//telefonos
		$(".ui.dropdown.item-nav").click(function(){
			if($("nav").hasClass("fixedNav")){
				var topperForNav = $("nav").height();
			}else{
				var topperForNav = $("header").height() + $("nav").height();
			}
			$('body').dimmer('show');
			$('.menu').removeClass("mostrar");
			$(this).children('.menu').css("top", topperForNav).addClass("mostrar animated fadeInDown");
			$(".ui.dimmer").addClass("MenuDimmer");
			return false;
		});
		$(".menu a.item").click(function(){
			var linkTo = $(this).attr("href");
			location.href= linkTo;
			return false;
		});
		$(document).on('click', function(e){
			var container = $(".menu");
            if (!container.is(e.target) && container.has(e.target).length === 0) { 
				$('body').dimmer('hide');
				$('.menu').removeClass("mostrar");
            }
		});
		$(window).scroll(function(){
			a = $(this).scrollTop();
			if( a > $("header").height()){
				$("nav").addClass("fixedNav");
				$("body").css("margin-top", $("nav").height());
			}else{
				$("nav").removeClass("fixedNav");
				$("body").css("margin-top", 0);
			}
		});
		//Menu en Responsive
		$("nav .container").scroll(function(){
			var xNav = $(this).scrollLeft();
			if(xNav > 10){
				$("nav").addClass("snleft");
			}
			if(xNav > 140){
				$("nav").addClass("snleft");
				$("nav").addClass("snrightN");
			}
			if(xNav < 140){
				$("nav").removeClass("snrightN");
			}
			if(xNav < 10){
				$("nav").removeClass("snleft");
			}
		});
	}
});
if($(window).width() > 763 ){
$(window).scroll(function(){
	a = $(this).scrollTop();
	$(".wall figure img").css('top', a / 3 + 'px');
});
}

$({property: 0}).animate({property: 100}, {
    duration: 2000,
    step: function() {
        var _percent = Math.round(this.property);
        $('.loading').css('width',  _percent+"%");
        if(_percent == 105) {
            $(".loading").addClass("done");
        }
    }
});