$(document).ready(function() {

	$(".portfolio-item").each(function(i){
		$(this).find("a").attr("href","#work_" + i);
		$(this).find(".port-descr").attr("id" , "work_" + i);
	});

	$("#portfolio_grid").mixItUp();

	$(".s-portfolio li").click(function() {
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	});

	$(".top-text h1").animated("fadeInDown", "fadeOutUp");	
	$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown");

	$(".popup").magnificPopup({type:'image'});
	$(".popup-content").magnificPopup({type:'inline',midClick: true});

	$(".animation-1").animated("flipInY", "flipOutY");	
	$(".animation-2").animated("fadeInLeft", "fadeOutLeft");
	$(".animation-3").animated("fadeInRight", "fadeOutRight");

	$(".left .resume-item").animated("fadeInLeft", "fadeOutDown");
	$(".right .resume-item").animated("fadeInRight", "fadeOutDown");

    var $container = $(".masonry-container");
    	$container.imagesLoaded(function () {
    		$container.masonry({
    			columnWidth: ".grid-item",
    		itemSelector: ".grid-item"
    	});
    });

	function heightDetect(){
		$(".main-head").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect()
	});

	//$('.parallax-window').parallax({imageSrc:'../img/bg.jpg'});



	$(".toggle-mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".top-mnu ul a").click(function() { 
		$(".top-mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top-text").css("opacity", "1");
	}).append("<span>&nbsp;");

	$(".toggle-mnu").click(function(){
		if ($(".top-mnu").is(":visible")){
			$(".top-text").css("opacity", "1");
			$(".top-mnu").fadeOut(600);
			$(".top-mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top-text").css("opacity", ".1");
			$(".top-mnu").fadeIn(600);
			$(".top-mnu li a").addClass("fadeInUp animated");			
		};
	});

	$("input, select, textarea").jqBootstrapValidation(); 
	$(".top-mnu ul a").mPageScroll2id();

	$('.fw_form_fw_form').on('submit', function(){
		var $this = $(this),
			btn = $this.find('button'),
			data = $this.serialize(),
			formAlert = $('.form-alert'),
			loader = '<img class="loader-inner" src="' + portDate.themePath + '/assets/img/preloader.gif" />';

		$.ajax({
			type: 'POST',
			data: data,
			beforeSend: function () {
				btn.attr('disabled', true);
				formAlert.removeClass('alert-success alert-danger').empty();
				btn.after(loader);
			},
			success: function (responce) {
				formAlert.fadeIn(300, function () {
					console.log(responce);
					if (responce.success){
						formAlert.addClass('alert-success').text(responce.data.flash_messages.success.fw_ext_contact_form_process);
						$this[0].reset();
					}else{
						formAlert.addClass('alert-danger');
						var errors = '';
						for (var key in responce.data.errors){
							errors += responce.data.errors[key] + '</br>';
						}
						formAlert.html(errors);
					}
				});
				$('.loader-inner').remove();
				btn.attr('disabled', false);
			},
			error: function () {
				alert('Error!');
			}
		});

		return false;
	});
	$(".loader-inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});
$(window).ready(function() { 

});
