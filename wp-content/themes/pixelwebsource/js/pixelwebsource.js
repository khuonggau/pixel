jQuery(function($){
	//var blockScroll = $('#main-wrapper').blockScroll();
	$('section').height($(window).height());

	// Scroll to bullet button
	$('.bullet-wrapper ul li:nth-child(1)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.zero-pixel').offset().top},'slow');
	});
	$('.bullet-wrapper ul li:nth-child(2)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.pixel-01').offset().top},'slow');
	});
	$('.bullet-wrapper ul li:nth-child(3)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.pixel-02').offset().top},'slow');
	});
	$('.bullet-wrapper ul li:nth-child(4)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.pixel-03').offset().top},'slow');
	});
	$('.bullet-wrapper ul li:nth-child(5)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.pixel-04').offset().top},'slow');
	});
	$('.bullet-wrapper ul li:nth-child(6)').bind('touchstart click',function(){
		$('html,body').animate({scrollTop:$('.pixel-05').offset().top},'slow');
	});

	$('.px-main .masthead-brand').click(function(e){
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.zero-pixel').offset().top},'slow')
	})

	if( $(window).width() > 1600 ){
		if( $(window).height() < 800 ){
			/* Design Page */
			$('.design .zero-pixel').css({'min-height':'600px'});
			$('.design .zero-pixel .site-right img').css({'width':'75%'});
		}else{
			/* Design Page */
			$('.design .zero-pixel').css({'min-height':''});
			$('.design .zero-pixel .site-right img').css({'width':''});
		}
	}

	if($(window).width() < 767){
		/* about*/
		$('.about .pixel-02 .site-left').appendTo($('.about .pixel-02 .site-wrapper-inner'))
		$('.about .pixel-01 .site-left, .about .pixel-02 .site-right, .about .pixel-03 .site-left').height(300);

		/* design */
		$('.design .zero-pixel .site-right').height(400);
		$('.design .pixel-01 .site-left').height(300);

		/* marketing */
		$('.marketing .pixel-03 .site-left').appendTo($('.marketing .pixel-03 .site-wrapper-inner'))
		$('.marketing .pixel-02 .site-right, .marketing .pixel-03 .site-left').height(300);

		/* partnership */
		$('.partnership .pixel-01 .site-left').appendTo($('.partnership .pixel-01 .site-wrapper-inner'))
		$('.partnership .pixel-01 .site-left, .partnership .pixel-02 .site-right').height(300);

		/* price */
		$('.price .zero-pixel .site-left').appendTo($('.price .zero-pixel .site-wrapper-inner'))
	}

	if($(window).height() < 600){
		/* Home Page */
		$('.px-main .pixel-01, .px-main .pixel-02, .px-main .pixel-03').css({'height':'100%'});
		$('.px-main .cover-px .inner').css({'margin-top':'0'});
		$('.animated img').css({'width':'250px','height':'auto'});

		/* Design Page */
		$('.design .zero-pixel').css({'min-height':'700'});
		$('.design .zero-pixel .site-right img').css({'width':'70%'});
	}else{
		/* Home Page */
		$('.px-main .cover-px .inner').css({'margin-top':'80px'});
		$('.animated img').css({'width':'','height':''});

		// ===== Design Page =====
		$('.design .zero-pixel .site-right img').css({'width':''});
	}

	// Scroll Event
	$(window).on('scroll',function(e){
		$('section').height($(window).height())
		
		$('.bullet-wrapper ul li span').css({'display':'none'});
		var lengthOfScroll = $(window).height()

		if($(window).scrollTop() >= 0 && $(window).scrollTop() < lengthOfScroll){
			$('.bullet-wrapper ul li:nth-child('+(1)+') span').css({'display':'block'});
			$('.pixel-01 .animated img').addClass('tada')
		}
		if($(window).scrollTop() >= lengthOfScroll && $(window).scrollTop() < lengthOfScroll * 2){
			$('.bullet-wrapper ul li:nth-child('+(2)+') span').css({'display':'block'});
			$('.pixel-02 .animated img').addClass('spin')
		}
		if($(window).scrollTop() >= lengthOfScroll * 2 && $(window).scrollTop() < lengthOfScroll * 3){
			$('.bullet-wrapper ul li:nth-child('+(3)+') span').css({'display':'block'});
			$('.pixel-03 .animated img').addClass('moveRightToLeft')
		}
		if($(window).scrollTop() >= lengthOfScroll * 3){
			$('.bullet-wrapper ul li:nth-child('+(4)+') span').css({'display':'block'});
		}

		if($(window).scrollTop() >= lengthOfScroll){
			$('.masthead-brand').css({'background-image':'url(wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'})
			$('.about .masthead-brand, .blog .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'})
			$('.single-post .blog .masthead-brand, .archive .blog .masthead-brand').css({'background-image':'url(../../wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'});
			$('.privacy .masthead-brand, .term .masthead-brand, .price .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})
			$('.design .masthead-brand, .marketing .masthead-brand, .partnership .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})
			$('.contact .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2-w.png)'})
			$('.lastestwork .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})
			$('.single-work .masthead-brand').css({'background-image':'url(../../images/logo2.png)'})
			$('.thankyou .masthead-brand').css({'background-image':'url(../images/logo2-w.png)'})
			$('.mastnav').css({'background-color':'#fff'})
			$('.masthead-brand').css({'color':'#333','text-shadow':'none'})
			$('.masthead-nav > li > a').css({'color':'#333','text-shadow':'none'})
			$('.single-work .masthead-nav > li > a').css({'color':'#000','text-shadow':'none'})

			$('.px-main #px-nav, .design #px-nav, .blog #px-nav, .price #px-nav, .marketing #px-nav, .partnership #px-nav, .about #px-nav, .lastestwork #px-nav').css({'background-color':'#fff','color':'#000'})

			$('.contact .mastnav, .thankyou .mastnav').css({'background-color':'transparent'})

			if($(window).width() < 669){
				// ===== Menu For Home Page =====
				$('.px-main .mastnav').css({'background':'none'});
				$('.px-main #px-nav').css({'color':'#fff','background':'none'});
				$('.px-main .masthead-brand').css({'background-image':'url(wp-content/themes/pixelwebsource/images/logo2-w.png)','background-position':'0 0'})

				// ===== Home Page =====
				// $('.px-main .cover-px .inner').css({'margin-top':'0'});

				// ===== Blog =====
				$('.blog .masthead-brand').css({'background-image':'url(../images/logo2.png)'})
				$('.blog .mastnav').css({'background-color':'#fff'})
				$('.blog .px-nav').css({'color':'000','background-color': '#fff'})
				$('.single-post .blog .masthead-brand, .archive .blog .masthead-brand').css({'background-image':'url(../../wp-content/themes/pixelwebsource/images/logo2.png)'});
			}
		}else{
			$('.masthead-brand').css({'background-image':'url(wp-content/themes/pixelwebsource/images/logo2-w.png)','background-position':'0 0'})
			$('.about .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'})
			$('.blog .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'})
			$('.single-post .blog .masthead-brand, .archive .blog .masthead-brand').css({'background-image':'url(../../wp-content/themes/pixelwebsource/images/logo2.png)','background-position':'0 0'});
			$('.privacy .masthead-brand,.term .masthead-brand,.price .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})
			$('.design .masthead-brand,.marketing .masthead-brand,.partnership .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2-w.png)'})
			$('.contact .masthead-brand,.lastestwork .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})
			$('.single-work .masthead-brand').css({'background-image':'url(../../images/logo2.png)'})
			$('.thankyou .masthead-brand').css({'background-image':'url(../images/logo2-w.png)'})
			$('.mastnav').css({'background':'#fff'})
			$('.contact .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2-w.png)'})
			$('.px-main .mastnav,.design .mastnav, .partnership .mastnav, .contact .mastnav').css({'background':'none'})
			$('.about .mastnav').css({'background':'#fff'})
			$('.marketing .mastnav').css({'background':'none'})
			$('.masthead-brand').css({'color':'#fff'})
			$('.masthead-nav > li > a').css({'color':'#fff'})
			$('.lastestwork .masthead-nav > li > a, .single-work .masthead-brand').css({'color':'#000','text-shadow':'none'})
			$('.privacy .masthead-nav > li > a, .term  .masthead-nav > li > a, .blog .masthead-nav > li > a, .price .masthead-nav > li > a').css({'color':'#333','text-shadow':'none'})
			$('.about .masthead-nav > li > a').css({'color':'#000'})
			$('.single-work .masthead-nav > li > a').css({'color':'#000','text-shadow':'none'})

			$('.px-main #px-nav').css({'background-color':'transparent','color':'#fff'})
			$('.design #px-nav').css({'background-color':'transparent','color':'#fff'})
			$('.marketing #px-nav').css({'background-color':'transparent','color':'#fff'})
			$('.partnership #px-nav').css({'background-color':'transparent','color':'#fff'})
			$('.lastestwork #px-nav').css({'background-color':'#fff','color':'#000'})
			$('.thankyou .mastnav').css({'background-color':'transparent'})

			if($(window).width() < 1025){
				$('.design #px-nav').css({'background-color':'#fff','color':'#000'})
				$('.design .mastnav').css({'background':'#fff'})
				$('.design .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'})

				if($(window).scrollTop() == 0){
					$('.design .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2-w.png)'})
					$('.design .mastnav').css({'background':'none'})
					$('.design #px-nav').css({'background-color':'transparent','color':'#fff'})
				}
			}

			if($(window).width() < 669){
				$('.blog .masthead-brand').css({'background-image':'url(../wp-content/themes/pixelwebsource/images/logo2.png)'});
				$('.blog .mastnav').css({'background-color':'#fff'});
				$('.blog .px-nav').css({'color':'000','background-color': '#fff'});
				$('.single-post .blog .masthead-brand, .archive .blog .masthead-brand').css({'background-image':'url(../../wp-content/themes/pixelwebsource/images/logo2.png)'});
			}
		}

		if($(window).height() < 600){
			// ===== Home Page =====
			// $('.px-main .pixel-01, .px-main .pixel-02').css({'height':'100%'});
			$('.px-main .cover-px .inner').css({'margin-top':'0'});
			$('.animated img').css({'width':'250px','height':'auto'});

			// ===== Design Page =====
			$('.design .zero-pixel').css({'min-height':'700'});
			// $('.design .zero-pixel .site-right img').css({'width':'70%'});
		}else{
			// ===== Home Page =====
			$('.px-main .cover-px .inner').css({'margin-top':'70px'});
			$('.animated img').css({'width':'','height':''});

			// ===== Design Page =====
			// $('.design .zero-pixel .site-right img').css({'width':''});
		}
	}); // END Scroll Event

	$('#px-nav').click(function(e){
		e.preventDefault()
		$('.mastnav').height($(window).height())
		$('.mastnav').addClass('mastnav-static')
		$('.mastnav .inner').height($('#main-wrapper').height())
		//$('.mastnav .inner').addClass('solid-color-screen')
		$('.main-nav-wrapper').addClass('main-nav-wrapper-display')
		$('.px-close-nav').addClass('px-close-nav-display')
		$('.masthead-brand, .mastfoot .inner h1').css({'position':'fixed'})
		$('.mobile-request-a-quote').css({'z-index':'999'})
		$('.inner').css({'padding':'0'})
		$(this).addClass('hide')
		$('.masthead-brand').addClass('hide')
		$('body').addClass('blue-frame').height($(window).height())
		$('.forkit').addClass('hide')
		$(window).on('scroll',function(){
			$('.mastnav').height($(window).height())
		})
	})

	$(window).resize(function(e){
		$('section').height($(window).height());
		$('.zoom-wrapper').width($(window).width()*80/100)

		if( $(window).width() > 1600 ){
			if( $(window).height() < 800 ){
				/* Design Page */
				$('.design .zero-pixel').css({'min-height':'600px'});
				$('.design .zero-pixel .site-right img').css({'width':'75%'});
			}else{
				/* Design Page */
				$('.design .zero-pixel').css({'min-height':''});
				$('.design .zero-pixel .site-right img').css({'width':''});
			}
		}

		if($(window).width() > 1027){
			$('#works ul li article .wrapper-img a').click(function(e){
				e.preventDefault()
				var currentIndex = $(this).parent().parent().parent().index()
				console.log(currentIndex)
				$('.zoom-wrapper ul li:nth-child('+(currentIndex+1)+')').addClass('show')
				$('.portfolio-btn').addClass('show')
				$('.ablack').addClass('show')
			})
		}
		
		$('.portfolio-btn').click(function(){
			$('.portfolio-btn').removeClass('show')
			$('.zoom-wrapper ul li').removeClass('show')
			$('.portfolio-btn').removeClass('show')
			$('.ablack').removeClass('show')
		})


		if($(window).width() < 768){
			/* about*/
			$('.about .pixel-02 .site-left').appendTo($('.about .pixel-02 .site-wrapper-inner'));
			// $('.about .pixel-01 .site-left, .about .pixel-02 .site-right, .about .pixel-03 .site-left').height($(window).height()/2);
			$('.about .pixel-01 .site-left, .about .pixel-02 .site-right, .about .pixel-03 .site-left').height(300);

			/* design */
			$('.design .zero-pixel .site-right').height(400);
			$('.design .pixel-01 .site-left').height(300);

			/* marketing */
			$('.marketing .pixel-03 .site-left').appendTo($('.marketing .pixel-03 .site-wrapper-inner'));
			$('.marketing .pixel-02 .site-right, .marketing .pixel-03 .site-left').height(300);

			/* partnership */
			$('.partnership .pixel-01 .site-left').appendTo($('.partnership .pixel-01 .site-wrapper-inner'));
			$('.partnership .pixel-01 .site-left, .partnership .pixel-02 .site-right').height(300);

			/* Pricing Page */
			$('.price .zero-pixel .site-left').appendTo($('.price .zero-pixel .site-wrapper-inner'));
		}else{
			/* about*/
			$('.about .pixel-02 .site-right').appendTo($('.about .pixel-02 .site-wrapper-inner'));
			$('.about .pixel-01 .site-left, .about .pixel-02 .site-right, .about .pixel-03 .site-left').height(1);

			/* Design Page */
			$('.design .zero-pixel').height( $(window).height() );
			$('.design .zero-pixel .site-right').css({'height':''});

			/* marketing */
			$('.marketing .pixel-03 .site-right').appendTo($('.marketing .pixel-03 .site-wrapper-inner'));
			$('.marketing .pixel-02 .site-right, .marketing .pixel-03 .site-left').height(1);

			/* partnership */
			$('.partnership .pixel-01 .site-right').appendTo($('.partnership .pixel-01 .site-wrapper-inner'));
			// $('.partnership .pixel-01 .site-left, .partnership .pixel-02 .site-right').height(1);

			/* Pricing Page */
			$('.price .zero-pixel .site-right').appendTo($('.price .zero-pixel .site-wrapper-inner'));
		}

		if($(window).height() < 600){
			/* Homepage Page */
			$('.px-main .cover-px .inner').css({'margin-top':'0'});
			
			/* Design Page */
			$('.design .zero-pixel').css({'min-height':'700'});
			$('.design .zero-pixel .site-right img').css({'width':'70%'});
		}else{
			/* Home Page */
			$('.px-main .cover-px .inner').css({'margin-top':'70px'});

			/* Design Page */
			$('.design .zero-pixel .site-right img').css({'width':''});
		}
	}); // window.resize()

	$('.zoom-wrapper').width($(window).width()*80/100)

	if($(window).width() > 1027){
		$('#works ul li article .wrapper-img a').click(function(e){
			e.preventDefault()
			var getSRC = $(this).children().attr('src')

			$('.zoom-wrapper').addClass('show')
			$('.zoom-wrapper ul li').append('<img src="'+getSRC+'" alt="" />').addClass('show')
			$('.portfolio-btn').addClass('show')
			$('.ablack').addClass('show')

			$('html,body').animate({scrollTop:$('.site-wrapper').offset().top},'fast');
		})
	}

	$('.portfolio-btn').click(function(){
		$('.portfolio-btn').removeClass('show')
		$('.zoom-wrapper').removeClass('show')
		$('.zoom-wrapper ul li').removeClass('show').children().remove()
		$('.portfolio-btn').removeClass('show')
		$('.ablack').removeClass('show')
	})
	/*end latestwork*/
			
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent.toLowerCase())

	// Reload page when resize
	// if(!isMobile){
	// 	setTimeout(function()
	// 	{
	// 	    $(window).bind('resize', function(e)
	// 	    {
	// 	        if(window.RT) clearTimeout(window.RT);
	// 	        window.RT = setTimeout(function()
	// 	        {
	// 	            this.location.reload(false); /* false to get page from cache */
	// 	        }, 300);        
	// 	    });
	// 	}, 1000);
	// }

	if( isMobile ){
		// Display Quote Button for device
		$('.mobile-request-a-quote').css({'display':'block'});
		$('.mobile-request-a-quote').click(function(e){
			e.preventDefault()
			$('#request_form').removeClass('pushup').fadeIn('slow');
			$('#request_form').css({'top':'0%'});
		})

		// Hide Forkit for device
		// $('.forkit').css({'display':'none'});
		$('.forkit').remove();
	}
			
	if($(window).width() < 1025){
		$('.mobile-request-a-quote').click(function(e){
			e.preventDefault()
			$('#request_form').removeClass('pushup').fadeIn('slow');
			$('#request_form').css({'top':'0%'});
		})

		$('.close-button').click(function(e){
			e.preventDefault()
			$('#request_form').fadeOut('slow');
		})
	}
	$('.masthead-nav > li').click(function(){
		if($(this).hasClass('open-subnav')){
			$(this).removeClass('open-subnav')
		} else {
			$(this).addClass('open-subnav')
		}
	})

	$('.scroll-down').click(function(e){
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.pixel-01').offset().top},'slow')
	})

	$('.work').on('mouseover',function(){
		$(this).children('img').css({'transform':'scale(1.5)'})
	})
	.on('mouseout',function(){
		$(this).children('img').css({'transform': 'scale(1)'});
	})
	.on('mousemove', function(e){
			$(this).children('img').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
	});

	/* contact form */
	$('#contact-form').hide()
	$('ul.ul-contact li:nth-child(2) .img').css({'cursor':'pointer'});
	$('#show-contact-form, ul.ul-contact li:nth-child(2) .img,.pj-btn-px').click(function(e){
		e.preventDefault()
		if(!$('#contact-form').hasClass('active')){
			$('#contact-form').addClass('active')
			$('.zero-pixel').addClass('ct-height')

			$('.contact .zero-pixel').css('height', 'auto !important');
			$('.contact .zero-pixel .site-wrapper-inner').css('padding-top', '130px');
		}
		else{
			$('#contact-form').removeClass('active')
			$('.zero-pixel').removeClass('ct-height')

			$('.contact .zero-pixel .site-wrapper-inner').css('padding-top', '0');
		}
		$('html,body').animate({scrollTop:$('#show-contact-form').offset().top - 10},'slow')
	})

	/* price form */
		$('.request-a-quote-price').click(function(e){
			e.preventDefault()
			$('#request_form').removeClass('pushup').addClass('pushdown')
		})
		$('.close-button').click(function(e){
			e.preventDefault()
			$('#request_form').removeClass('pushdown').addClass('pushup');
		})

	if($(window).width() < 768){
		// Footer
		// $('.field-of-business .ul-02').width($(window).width()-60)
		$('.mastfoot .inner').css({'padding':'0 0 !important'})
	}

});