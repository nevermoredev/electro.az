/*
	NAVIGATION js
		1. SVG
		2. IMG DRAG FALSE
		3. MAIN PAGE SLIDER
		4. MAIN PAGE search 
		5. TOGGLE SEARCH IN MOBILE 
		6. TOGGLE MENU IN MOBILE
		7. TOGGLE FILTERs IN MOBILE
		8. PRODUCTS SINGLE SLIDER 
		9. CLICK TO COLOR BTN 
		10. HOVER EFFECT FOR MENU
		11. TOGGLE Category IN MOBILE 
		12. Cick menu items in mobile
		13. Filters Click 
		14. modal closer after
		15. change script total price in basket page

*/

	$(function () {
		$(document).ready(function () {

			// 1. SVG
			svg4everybody({});
	

			// 2. IMG DRAG FALSE
			$('img,a').on('dragstart', function () {
				event.preventDefault();
			});


			// 3. MAIN PAGE SLIDER 
			if ($('.products_slider').length) {
				$('.products_slider').slick({
					dots: false,
					arrows: true,
					speed: 2500,
					loop: false,
					autoplay: true,
					autoplaySpeed: 3500,
					draggable: true,
					infinite: true,
					slidesToShow: 1,
					centerMode: false,
					slidesToScroll: 1,
					prevArrow: '<div class="slick_prev_btn"></div>',
					nextArrow: '<div class="slick_next_btn"></div>',
					responsive: [{
							breakpoint: 1800,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 560,
							settings: {
								dots: true,
								arrows: false,
							}
						}
					]
				})
			}


			// 4. MAIN PAGE search 
			$('.search_box input, .search_mobile input').on("keyup", function () {
				if ($(this).val().length == 0) {
					$('.search_box_result').fadeOut()
				} else {
					$('.search_box_result').fadeIn();
				}
			});
			$('.search_box input, .search_mobile input').keyup();
			$('.main, .main_category').on('click', function () {
				$('.search_box_result').fadeOut()
			})


			// 5. TOGGLE SEARCH IN MOBILE 
			$('.search_box_btn').on('click', function (e) {
				e.preventDefault()
				$('.search_mobile').fadeToggle(400)
				$('.main_nav_menu ul').removeClass('toggle_mobile_menu')
			});

			// 6.  TOGGLE MENU IN MOBILE 
			$('.menu_hamburger').on('click', function (e) {
				e.preventDefault()
				$('.main_nav_menu ul').toggleClass('toggle_mobile_menu')
				$('.search_mobile').fadeOut(400)
			});

			// 7.  TOGGLE FILTERs IN MOBILE 
			$('.category_filtering_btn').on('click', function (e) {
				e.preventDefault()
				$('.category_filter').toggleClass('category_filter_active')
				$(this).toggleClass('category_filtering_btn_active')
			});


			// 8. PRODUCTS SINGLE SLIDER 
			// if ($('.single_products_slider_main').length) {
			// 	$('.single_products_slider_main').slick({
			// 		dots: false,
			// 		arrows: false,
			// 		speed: 1000,
			// 		loop: false,
			// 		autoplay: false,
			// 		autoplaySpeed: 2500,
			// 		slidesToShow: 1,
			// 		fade: true,
			// 		slidesToScroll: 1,
			// 		asNavFor: '.single_products_slider_nav',
			// 		responsive: [{
			// 				breakpoint: 1800,
			// 				settings: {
			// 					slidesToShow: 1,
			// 					slidesToScroll: 1,
			// 				}
			// 			}
			// 		]
			// 	})
			// }
			// if ($('.single_products_slider_nav').length) {
			// 	$('.single_products_slider_nav').slick({
			// 		dots: false,
			// 		arrows: true,
			// 		speed: 1500,
			// 		loop: false,
			// 		autoplay: true,
			// 		autoplaySpeed: 2500,
			// 		draggable: true,
			// 		infinite: true,
			// 		centerMode: false,
			// 		slidesToShow: 3,
			// 		slidesToScroll: 1,
			// 		focusOnSelect: true,
			// 		asNavFor: '.single_products_slider_main',
			// 		prevArrow: '<div class="slick_prev_btn"></div>',
			// 		nextArrow: '<div class="slick_next_btn"></div>',
			// 		responsive: [{
			// 				breakpoint: 860,
			// 				settings: {
			// 					slidesToShow: 2,
			// 					slidesToScroll: 1,
			// 				}
			// 			},
			// 			{
			// 				breakpoint: 760,
			// 				settings: {
			// 					slidesToShow: 3,
			// 					slidesToScroll: 1,
			// 				}
			// 			},
			// 			{
			// 				breakpoint: 560,
			// 				settings: {
			// 					slidesToShow: 2,
			// 					slidesToScroll: 1,
			// 				}
			// 			},
			// 			{
			// 				breakpoint: 400,
			// 				settings: {
			// 					slidesToShow: 1,
			// 					slidesToScroll: 1,
			// 				}
			// 			}
			// 		]
			// 	})
			// }

			
			// 8. CLICK TO COLOR BTN 
			$('.single_products_slider_btn_wrap').on('click', function () {
				var changedColor = $(this).find('span').attr('data-color-name')
				$('.single_products_slider_color .text .color_name').text(changedColor)
			});


			// 9. TOTAL COUNT 
			$('.basket_products_count_wrap input').on('keyup mouseup', function () {
				var inpVal                 = $(this).val()
				var priceCount             = $('.basket_main_price').text().replace(/[^.\d]+/g, "").replace(/^([^\.]*\.)|\./g, '$1')
				var totalMainPrice         = $('.total_basket_price span:first')
				var totalMainPriceproducts = $('.total_basket_price_products span:first')
				var totalPrice             = inpVal * priceCount;

				
				var max = parseInt($(this).attr('max'));
				var min = parseInt($(this).attr('min'));
				if ($(this).val() > max) {
					$(this).val(max);
				} else if ($(this).val() < min) {
					$(this).val(min);
				}

				setTimeout(function(){
					totalMainPrice.text(totalPrice)
					totalMainPriceproducts.text(totalPrice)
				})

			});


			// 10. DISCOUNT SLIDER 
			if ($('.products_category_slider').length) {
				$('.products_category_slider').slick({
					dots: false,
					arrows: true,
					speed: 1200,
					loop: false,
					autoplay: true,
					autoplaySpeed: 1000,
					slidesToShow: 6,
					slidesToScroll: 1,
					prevArrow: '<div class="slick_prev_btn"></div>',
					nextArrow: '<div class="slick_next_btn"></div>',
					responsive: [
						{
							breakpoint: 1800,
							settings: {
								slidesToShow: 5,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 1400,
							settings: {
								slidesToShow: 4,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 1200,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 1000,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 700,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1.2,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
								dots: true,
								arrows: false,
							}
						}
					]
				});
			}


			// 10. HOVER EFFECT FOR MENU
			if ($('.products_menu').length) {
				$('.products_menu').hover(function () {
						$('.main').stop().addClass('main_overlay')
						
					}, function () {
						$('.main').stop().removeClass('main_overlay')
					}
				);
			}

			// 11.  TOGGLE Category IN MOBILE 
			$('.main_category_menu_btn').on('click', function (e) {
				e.preventDefault()
				$('.products_menu').toggleClass('products_menu_mobile')
				$(this).toggleClass('main_category_menu_btn_active')
			});
			
			// 12. Cick menu items in mobile
			// if ($(this).width() < 560) {
			// 	$('.products_menu_main > .products_menu_items_parent > a').on('click', function () {
			// 		$(this).next().slideToggle(500)
			// 	});
			// } else {
			// 	console.log(1)
			// }

			// $(window).resize(function () {
			// 	if ($(this).width() < 560) {
			// 		console.log(2)
			// 	} else {
			// 		console.log(1)
			// 	}
			// });

			// OPEN MODAL 
			$('.modal_open_btn').on('click', function () {
				var modalLink        = $(this).attr('data-toggle-modal')
				var modalLinkContent = $(this).attr('data-video-src')

				$(modalLink).fadeIn(400)
				$(modalLink).find('iframe').attr('src', modalLinkContent)
			});
			
			// CLOSE MODAL 
			$('.video_modal_box_wrap').on('click', function () {
				$(this).parent().fadeOut(400)
				$(this).find('iframe').attr('src', '');
			});



			// 13. Filters Click 
			if ($('.category').length) {

				var form = document.querySelector('.category_filter'),
						input = document.querySelectorAll('.category_filter input');

				form.addEventListener('input', function () {
					let inputArray = [];

					for (let i = 0; i < input.length; i++) {
						if (input[i].checked) {
							inputArray.push([input[i].value, input[i].getAttribute('name')]);
							console.log(inputArray);
						} else {
							console.log('error');
						}
					}
				});	

			}


			// 14. modal closer after 
			if($('.modal_general').length) {
				setTimeout(function () {
					$('.modal_general').hide();
				}, 2000);
			} 


			// 15. change script total price in basket page 
			if ($('.basket_user_paying_loyalty_system').length) {
				var inpNameStatus = $(this).find('.filter_radio_wrap input');
				var inpName = $(this).find('.filter_radio_wrap input').val();
				var totalPriceAfter = $('.total_price_count_js');
				var totalPrice = parseInt($('.total_main_price_count_js').text());
				var result;

				if (inpNameStatus.prop('checked')) {
					result = totalPrice - (totalPrice * (inpName / 100));
					result.toFixed(2);
					totalPriceAfter.text(result);
				}

				$('.filter_radio_wrap').on('change', function () {
					var inpNameStatus = $(this).find('input');
					var inpName = $(this).find('input').val();
					var totalPriceAfter = $('.total_price_count_js');
					var totalPrice = parseInt($('.total_main_price_count_js').text());
					var result;

					if (inpNameStatus.prop('checked')) {
						result = totalPrice - (totalPrice * (inpName/100));
						result.toFixed(2);
						totalPriceAfter.text(result);
					}
				});
			}


			//  END DOCS 
		});

		//  END SCRIPTS 
});

    
