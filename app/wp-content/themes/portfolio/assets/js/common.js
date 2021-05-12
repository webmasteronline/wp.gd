$(document).ready(function() {

	
	var str = $('.frontend-wrap .title-block').text();  //ищим наш логотип
		str = '<span>' + str.substring(0,1) + '</span>' + str.slice(1); //str.slice(0 , -1) перет все символы из логотипа кроме последней. добовляем тег <span> и str.substr(-1) возвращает последний сивол
		$('.frontend-wrap .title-block').html(str); //выводим что получилось
	
	var str = $('.backend-wrap .title-block').text();  //ищим наш логотип
		str = '<span>' + str.substring(0,1) + '</span>' + str.slice(1); //str.slice(0 , -1) перет все символы из логотипа кроме последней. добовляем тег <span> и str.substr(-1) возвращает последний сивол
		$('.backend-wrap .title-block').html(str); //выводим что получилось
	
	var str = $('.portfolio-s .title-block').text();  //ищим наш логотип
		str = '<span>' + str.substring(0,1) + '</span>' + str.slice(1); //str.slice(0 , -1) перет все символы из логотипа кроме последней. добовляем тег <span> и str.substr(-1) возвращает последний сивол
		$('.portfolio-s .title-block').html(str); //выводим что получилось

	var str = $('#contacts .title-block').text();  //ищим наш логотип
		str = str.trim();
		str = '<span>' + str.substring(0,1) + '</span>' + str.slice(1); //str.slice(0 , -1) перет все символы из логотипа кроме последней. добовляем тег <span> и str.substr(-1) возвращает последний сивол
		$('#contacts .title-block').html(str); //выводим что получилось

	$('#wpcr3_fname').attr('placeholder','Your name');
	$('#id_wpcr3_ftext').attr('placeholder','Comment');
	$('#wpcr3_femail').attr('placeholder','Your e-mail');

	$('.header__burger').click(function(event) {
			$('.header__burger,.top-menu-categ').toggleClass('active');
			$('body').toggleClass('lock'); // отключаем скрол у контента когда открыто мобильное меню

	});

	$(".header__burger").click(function(){
		if ($(".top-menu-categ").is(".active")){
			$(".top-text").css("opacity", ".1");
			$(".category-head-body").fadeIn(600);
			$(".category-head-body li a").addClass("fadeInDown animated");
		} else {
			$(".top-text").css("opacity", "1");
			$(".category-head-body li a").removeClass("fadeInDown animated");
		};
	});
	//$("#portfolio_grid").mixItUp();

	/*
		$(".s-portfolio li").click(function() {
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	});
	*/
	



	$(".portfolio-s li").click(function() {
		$(".portfolio-s li").removeClass("active");
		$(this).addClass("active");
	});



	if (document.body.clientWidth>768){
		$(".top-text h1").animated("fadeInDown", "fadeOutUp");
		$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown");
		$(".big-title").animated("fadeIn", "fadeOut");



		$(".animation-1").animated("flipInY", "flipOutY");
		//$(".portfolio-s .title-block").animated("fadeInLeft", "fadeOutLeft");
		//$(".portfolio-s .desc").animated("fadeInRight", "fadeOutRight");
		//$(".left .resume-item").animated("fadeInLeft", "fadeOutDown");
		//$(".right .resume-item").animated("fadeInRight", "fadeOutDown");
	}	


	// красивый вывод всех постов с помощью галереи Masonry . Обернул в функцию что бы запустить снова после AJax ответа
	function loadMasonry() {
		var $container = $(".masonry-container");
		$container.imagesLoaded(function () {
			$container.masonry({
				columnWidth: ".grid-item",
				itemSelector: ".grid-item"
			});
		});

		// Всплывающее окно описания поста full img и кнопка на пост
		$(".portfolio-item").each(function(i){
			$(this).find("#popup-cont").attr("href","#work_" + i);
			var elemCount = $('.portfolio-item #popup-cont').length;
			var n = i;
            n++;
			if( n < elemCount){
			$(this).find(".next a").attr("href","#work_" + n);
			}else{
			    n = elemCount - 1;
                $(this).find(".next a").attr("href","#work_" + n);
            }

			var p = i;
			p--;
			if (p<0){p=0};
			$(this).find(".prew a").attr("href","#work_" + p);
			$(this).find(".port-descr").attr("id" , "work_" + i);
		});

		$(".popup").magnificPopup({type:'image'});
		$(".popup-content").magnificPopup({type:'inline',midClick: true});
	}
	loadMasonry();

	function heightDetect(){
		$(".main-head").css("height",$(window).height());
	};

	heightDetect();
	$(window).resize(function(){
		heightDetect()
	});


	// var url = portDate.bgPath.url;
	// console.log(url);
	// $('.parallax-window').parallax({imageSrc: url});


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


	$(document).on('click', '.js-filter-item a', function(e) {
	    e.preventDefault();
		var category = $(this).data('category'),
			 content = $('.masonry-container');
		$.ajax({
			url: myPlugin.ajaxurl,
			data: {action: 'filter', category: category},
			type: 'post',
			success: function (responce) {
				content.fadeIn(300, function () {
				$('.js-filter').html(responce);
				loadMasonry();
				});
			},
			error: function (responce) {
				console.warn(responce);
			}
		});

	});



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
                $('.border-error').removeClass('border-error');
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
							var nameFild = document.getElementsByName(key);
                            $(nameFild).addClass('border-error');
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

// Post likes

jQuery(document).ready(function($){
	$(".noactive_svg").click(function(event){
		heart = $(this);
		post_id = heart.data("post_id");
		var html = '';
		html += '<span class="like-t">likes</span>';
		$.ajax({
			type: "post",
			url: ajax_var.url,
			data: "action=post-like&nonce="+ajax_var.nonce+"&post_like=&post_id="+post_id,
			success: function(count){
				if(count != "already"){
					heart.addClass("is-active");
					heart.parent().next(".likecount").text(count).append(html);
				}
			}
		});
		return false;
	});
});




$('.wpcr3_product').slick({
	arrow: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	adaptiveHeight: true,
	easing: 'ease', //эффекты прокрутки
	infinite: false, //прокрутка бесконечна - true
	autoplay:false,
	pauseOnFocus:true,
	pauseOnHover:true,
	pauseOnDotsHover:true,
	waitForAnimate: true, //сколько не кликай быстрее не будет
	//dots:true,
	responsive:[
		{
			breakpoint: 888,
				settings:{
					slidesToShow: 2,
				}
		},{
			breakpoint: 520,
			settings:{
				slidesToShow: 1,
			}
		}
	]
});

window.onresize = function(event) {
	var mql = window.matchMedia('screen and (max-width: 520px)');
	if (mql.matches) {

		$('.resume-list').slick({
		arrow: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide: true,
		infinite: false, //прокрутка бесконечна - true
		});

	} else {
	    // нет, размер окна более 479px 
	}
};


	$('.count').countUp({
		delay: 10,
		time: 1500
	});








 	//
	// jQuery(document).ready(function($) {
	// 	var data = {
	// 		action: 'hello',
	// 		name: myPlugin.name
	// 	};
	//
	// 	// с версии 2.8 'ajaxurl' всегда определен в админке
	// 	jQuery.post( myPlugin.ajaxurl, data, function(response) {
	// 		alert('Получено с сервера: ' + response);
	// 	});
	// });

/*
	//Ajax вывод постов
	var $mainBox = $('.masonry-container');

    $('.filter_div li a').click(function (e) {
        e.preventDefault();

        var idCat = $(this).attr('id');


        ajaxCat(idCat);
    });

	function ajaxCat(idCat) {


		jQuery.post(
			myPlugin.ajaxurl,
			{
				action: 'category',
				cat_name: idCat
			},
			function (response) {
				$mainBox
					.html(response)
					.animate({opacity: 1}, 300);
			});
	}
*/

    // $(document).on('click', '.filter_div li a', function(e) {
    //     e.preventDefault();
    //     var idCat = $(this).attr('id');
    //     var mayThis = $(this);
    //     var data = {
	// 		'dataType': 'html',
    //         'action': 'load_posts_by_ajax',
    //         'cat_name': idCat
    //     };
    //     $.post(myPlugin.ajaxurl, data, function(response) {
    //         if($.trim(response) != '') {
    //             $("#row_append").empty() // #row_append ID секция постов
    //             $('#row_append').append(response);
    //             $(mayThis).addClass('active');
    //             $('.filter_div li a').not(mayThis).removeClass('active');
    //         }
    //     });
    // });
	//
	//

 
// var $container = $(".masonry-container");
// 	$container.imagesLoaded(function () {
// 		$container.masonry({
// 			columnWidth: ".grid-item",
// 		itemSelector: ".grid-item"
// 	});
// });
// jQuery(window).load(function () {
// 	jQuery('.masonry-container').masonry({
// 		columnWidth: ".grid-item",
// 		itemSelector: ".grid-item"
// 	});
// });