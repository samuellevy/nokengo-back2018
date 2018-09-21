var header = {
	search: function() {
		$('.form_area.search_header .action').click(function (e) { 
			if(!$(this).parents('.search_header').hasClass('active')) {
				e.preventDefault();
				$(this).parents('.search_header').addClass('active');
			}			
		});
	},
	init: function() {
		header.search();
	}
};

var webdoor = {	
	webdoor: function() {	
		$('.webdoor_footer .arrow').click(function (e) { 	
			e.preventDefault();	
			target = $('.gallery_featured');	
			$('html, body').animate({	
				scrollTop: target.offset().top	
			}, 1000);				
		});	
		//webdoor	
		$('.webdoor .slider').slick({	
			arrows: false,	
			autoplay: true,	
			autoplaySpeed: 2500,	
			dots:true,	
			appendDots: $('.webdoor_pager')	
		});	
		$('.webdoor_footer .image_description').text($('.slick-current').find('img').attr('title'));	
		
		$('.webdoor .slider').on('afterChange', function(event, slick, currentSlide, nextSlide){	
			var title = $('.webdoor .slider .slick-current').find('img').attr('title');	
			$('.webdoor_footer .image_description').text(title);	
		});	
		$('.brand_layer').css('width', $('.webdoor .wrapper').width());	
		(function hl() {	
			var li = $('.brand_layer img').not('.active'),	
			r  = Math.floor(Math.random() * li.length),	
			h  = li.eq(r).hasClass('active');	
			
			if (h == true) {	
				r  = Math.floor(Math.random() * li.length);	
				h  = li.eq(r).hasClass('active');	
			}	
			var w  = li.filter('.active').length;	
			
			li.eq(r).addClass('active');	
			
			if (w < li.length) setTimeout(hl, 0);	
		})();			
	},	
	init: function() {	
		webdoor.webdoor();	
	}	
};

var gallery_featured = {
	click_item: function() {
		$('.gallery_featured .gallery_item, .gallery_featured .close_gallery').click(function (e) { 
			e.preventDefault();
			if($(this).hasClass('close_gallery')) {
				$('.gallery_featured').removeClass('focus');
				$('.gallery_featured .gallery_item').removeClass('active');
			}
			else {
				$('.gallery_featured').addClass('focus');
				$(this).addClass('active');
			}
		});
		$(window).on('scroll', function(){
			if ($(".gallery_featured").is(':visible')){
				$(".gallery_featured").addClass('show');
			}
		});
	},

	sliderMobGallery: function() {
		$('.featuredGalery__carousel').slick({
			dots: true,
			arrows: false,
		  	infinite: true,
		  	slidesToShow: 1,
		  	slidesToScroll: 1
		});
	},

	init: function() {
		gallery_featured.click_item();
		gallery_featured.sliderMobGallery();
	}
};

var clubnews = {
	slider: function() {
		$('.featured_news .media .slider').slick({
			arrows: false,
			dots: false,
			asNavFor: '.featured_news .slider_news',
			draggable: false,
			fade: true
		});
		$('.featured_news .slider_news').slick({
			arrows: false,
			dots: true,
			asNavFor: '.featured_news .media .slider',
			autoplay: true,
			autoplaySpeed: 2500
		});
		if($('.featured_news .info_news').length >0){
			$('.featured_news .info_news').css('padding-left', $('.logo').offset().left)
		}
	},
	init: function() {
		clubnews.slider();
	}
};
var gallery = {
	slider: function() {
		$('.main_gallery .media .slider').slick({
			arrows: false,
			dots: false,
			asNavFor: '.main_gallery .slider_news',
			draggable: false,
			fade: true
		});
		$('.main_gallery .slider_news').slick({
			arrows: false,
			dots: true,
			asNavFor: '.main_gallery .media .slider',
			autoplay: true,
			autoplaySpeed: 2500
		});
		
		$('.main_slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			draggable: false,
			fade: false,
			variableWidth: true,
			asNavFor: '.slider-nav-thumbnails',
		});
		
		$('.slider-nav-thumbnails').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.main_slider',
			dots: false,
			focusOnSelect: true
		});
		
		// Remove active class from all thumbnail slides
		$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
		
		// Set active class to first thumbnail slides
		$('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');
		
		// On before slide change match active thumbnail to current slide
		$('.main_slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			var mySlideNumber = nextSlide;
			$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
			$('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
		});
	},
	init: function() {
		gallery.slider();
	}
};
var envie_peca = {
	send: function() {
		$('body').on('change', '.file-upload', function (e) {
			e.preventDefault();
			$(this).parents('.form_item').find('.file_text').text($(this).val());
		});
		$('.row_action .add_file').click(function (e) { 
			e.preventDefault();
			var clone = $('<div class="row_send_file"> <div class="form_item file"> <label class="custom-file-upload"><span class="file_text">Envie seu arquivo</span> <input name="files['+qtd_input_pecas+'][filename]" class="file-upload" type="file"> </label><span class="hint">O arquivo deve ter no máximo XXMB e estar no formato jpeg.</span> </div><span class="separator">Ou</span> <div class="form_item"> <input name="medias['+qtd_input_pecas+'][url]" class="input_link" type="text" placeholder="Link do Youtube ou Vimeo"> </div> </div>');
			clone.appendTo('.form_area .wrap');
			qtd_input_pecas++;
		});
	},
	init: function() {
		envie_peca.send();
	}
};
jQuery(document).ready(function($) {
	header.init();
	webdoor.init();
	clubnews.init();
	gallery.init();
	envie_peca.init();
});
$(window).bind("load", function() {
	$('.preloader').fadeOut();
	$('body').addClass('page_start');    
});

//
var qtd_input_pecas = 1;