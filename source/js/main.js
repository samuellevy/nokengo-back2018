// $(document).ready(function(){
//     $(".navbar").click(function(){
//         $("#nav").toggleClass('active');
//     });
// });

var basics = {
    navBar: function(){
        $(".navbar").click(function(){
            $("#nav").toggleClass('active');
        });
    },
    clickNavigation: function() {
        $(".nav-item").click(function(){
            event.preventDefault();
            section = $(this).attr('data-href');
            position = $(section).offset().top;
            $('html,body').animate({scrollTop: position},'slow');
            $("#nav").toggleClass('active');
        });

        $(".to-screen").click(function(){
            event.preventDefault();
            section = $(this).attr('data-href');
            position = $(section).offset().top;
            $('html,body').animate({scrollTop: position},'slow');
        });
        
    },
    scrollControl: function(){
        var lastScrollTop = 0;
        var old_screen = 'home';
        $(window).scroll(function (event) {
            var st = $(this).scrollTop();
            var scroll = $(window).scrollTop();
            var screen = 'home';
            var pages = [];
            pages['home'] = $('#header').offset().top;
            pages['estudio'] = $('#header').offset().top;
            pages['tecnologia'] = $('#tecnologia').offset().top;
            pages['capacidades'] = $('#capacidades').offset().top;
            pages['inovacao'] = $('#labs').offset().top;
            pages['contato'] = $('#contato').offset().top;
            
            if(scroll < pages['tecnologia']){
                screen = 'home';
                $('.navbar').removeClass('right');
            }
            else if(scroll > pages['tecnologia'] && scroll <  pages['capacidades']){
                screen = 'tecnologia';
                $('.navbar').addClass('right');
            }
            else if(scroll >  pages['capacidades'] && scroll <  pages['inovacao']){
                screen = 'capacidades';
                before = 'tecnologia';
                after = 'labs';
                if (st > lastScrollTop){
                    to = before;
                } else {
                   to = after;
                }
                $('.tag[data-screen='+to+']').removeClass('fixed');
                $('.tag[data-screen='+to+']').addClass('absolute');
            }
            else if(scroll >  pages['inovacao'] && scroll <  pages['contato'] - 200){
                screen = 'labs';
                before = 'capacidades';
                after = 'contato';
                if (st > lastScrollTop){
                    to = before;
                } else {
                   to = after;
                }
                // $('.tag[data-screen='+to+']').removeClass('fixed');
                // $('.tag[data-screen='+to+']').addClass('absolute');
            }
            else if(scroll >= pages['contato']){
                screen = 'contato';
                before = 'labs';
                if (st > lastScrollTop){
                    to = before;
                } else {
                   to = after;
                }
                // $('.tag[data-screen='+to+']').removeClass('fixed');
                $('.tag[data-screen='+to+']').addClass('absolute');
            }

            if(screen != old_screen){
                $('.tag[data-screen='+old_screen+']').removeClass('fixed');
                $('.tag[data-screen='+old_screen+']').addClass('absolute');

                $('.tag[data-screen='+screen+']').removeClass('absolute');
                $('.tag[data-screen='+screen+']').addClass('fixed');
                old_screen = screen;
                console.log('nao igual');
            }else{
                console.log('igual');
            }

            console.log(scroll + ' - ' + screen + ' - ' + old_screen);
            lastScrollTop = st;
        });
    },
    
    init: function() {
        basics.navBar();
        basics.clickNavigation();
        basics.scrollControl();
    }
}

$(document).ready(function() {
    basics.init();
});