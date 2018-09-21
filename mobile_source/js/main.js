var webdoor = {
	webdoor: function() {
		//webdoor
		$('.webdoor .slider').slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2500,
			dots:true,
			appendDots: $('.webdoor_pager')
		});
		$('.webdoor .wrapper').height(($(window).height() - $('#header').outerHeight()));
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

var global = {
	menuMob: function() {
		$(".viewMob i").on('click', function() {
			$(".menuMob").fadeIn();
			$("body").css("overflow","hidden");
		});

		$(".clouseLightBox").on('click', function() {
			$(".menuMob").fadeOut();
			$("body").css("overflow","scroll");
		});
	},

	init: function() {
		global.menuMob();
	}
}
var envie_peca = {
	send: function() {
		$('body').on('change', '.file-upload', function (e) {
			e.preventDefault();
			$(this).parents('.form_item').find('.file_text').text($(this).val());
		});
		$('.row_action .add_file').click(function (e) { 
			e.preventDefault();
			var clone = $('<div class="boxAnexo" style="margin-top:20px;"> <div class="anexo"><i class="icon-document"></i><span>Envie seu arquivo</span> <input name="files['+qtd_input_pecas+'][filename]" class="file-upload" type="file"> </div> <p>O arquivo deve ter no máximo 500kb e estar no formato jpeg.</p> <p> <span>ou</span></p> <div class="link"> <div class="link__box"> <input name="medias['+qtd_input_pecas+'][url]" class="input_link" type="text" placeholder="Link do Youtube"><i class="icon-attachment"></i> </div> </div> </div>');
			clone.appendTo('.form_area .wrap');
			qtd_input_pecas++;
		});
	},
	init: function() {
		envie_peca.send();
	}
};

$(document).ready(function($) {

	global.init();
	envie_peca.init();
	webdoor.init();
	gallery_featured.init();
});
var qtd_input_pecas = 1;