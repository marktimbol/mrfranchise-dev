jQuery(document).ready(function () {

    $.preloadImages = function() {
      for (var i = 0; i < arguments.length; i++) {
        $("<img />").attr("src", "public/images/" + arguments[i]);
      }
    }

    $.preloadImages('slides/slide1.jpg', 'slides/slide2.jpg', 'slides/slide3.jpg', 'slides/slide4.jpg', 'slides/slide5.jpg', 'als/als-beef-bg.jpg', 'backyard-burger/slide1.jpg', 'ffh/slide2.jpg', 'krush-burger/slide1.JPG', 'nancy-pizza/slide1.jpg', 'queens-chips/slide1.jpg', 'featured-opportunities.jpg', 'franchise-opportunity-bg.jpg', 'Jim_Underwood.jpg', 'Karim_El_Ghazl.jpg', 'local-woman.jpg', 'Paul_Fuller.jpg', 'Sara_Mahdi.jpg');

    $('figure.brand').hover(function() {
        $(this).toggleClass('active');
    });

    $(".owl-carousel").owlCarousel({
        items: 6,
        autoPlay: true
    });   

    $('a#tellMeMore').on( 'click' , function() {
        if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if ( target.length ) {
                $('html,body').animate({ scrollTop: target.offset().top }, 1000, 'easeInOutExpo');
                return false;
            }
        }
    });

    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: '<span></span>'
    });

    winW = $(document).width();
    winH = $(window).height();
    
    if ($('.menu-icon').is(':visible')) 
        _isresponsive = true;
    else 
        _isresponsive = false;
    
    if (winH > 700) 
        minH = winH;
    else 
        minH = 700;

    sliderH = minH*0.60;


    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        centeredSlides: true,
        autoplay: 20000,
        autoplayDisableOnInteraction: false,

        onSlideChangeStart: function(){
            $('.swiper-pagination-switch').removeClass('active')
            $('.swiper-pagination-switch').eq(swiper.activeIndex).addClass('active')
        }        
    });

    //navigation
    $('.swiper-pagination-switch').click(function(){
        swiper.slideTo($(this).index());
        $('.swiper-pagination-switch').removeClass('active');
        $(this).addClass('active')
    })    



    rightside_circle_bg = 0;
    var menu_k = 265/550;

    $(document).on('mouseenter', 'a.menu-cell', function() {
        //if(rightside_circle_bg) return false;
        //rightside_circle_bg = 1;
        $('.rightside-popups a.active, .intro-circle.active, .rightside-popups .title.active').removeClass('active');
        $('.line-wrapper').stop(true, true).css({'width':'0'}); 
        
        $('a.menu-cell.active').removeClass('active');
        $(this).addClass('active');
        
        var val = $(this).attr('data-rel');
        $('.rightside-popups').show();

        $('.line-wrapper[data-rel="'+val+'"]').animate({'width':minH*menu_k*0.5+'px'}, 500, function(){});
        $('.intro-circle, .rightside-popups a[data-rel="'+val+'"], .rightside-popups .title[data-rel="'+val+'"]').addClass('active');   
    });
    
    $(document).on('mouseleave', '.rightside-menu', function() {
        //if(rightside_circle_bg) return false;                                                  
        $('a.menu-cell.active').removeClass('active');                                                   
        $('.rightside-popups').hide();  
        $('.rightside-popups a.active, .intro-circle.active, .rightside-popups .title.active').removeClass('active');
        $('.line-wrapper').stop(true, true).css({'width':'0'}); 
    });

    $('.menu-cell').css({'height':minH/$('.rightside-menu .menu-cell').length-2, 'line-height':minH/$('.rightside-menu .menu-cell').length-2+'px'});
    $('.rightside-popups').css({'width':minH*menu_k});

});

