jQuery(document).ready(function($) {
			 if ($(window).width() > 768) {	
	$('.header-menu-con li').hover(function() {
			  $(this).children('ul').show();
        },
        function() {
			$(this).children('ul').hide();
        });
	 }
$('#slider .owl-carousel').owlCarousel({
    loop:true,
	items: 1,
})
$('.about-photo .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
})
function tabs(tabTit,on,tabCon,event){
        $(tabTit).children().on(event,function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
            $(tabCon).children().eq(index).show().siblings().hide();
        });
    };
    tabs(".tab-nav","on",".tab-con",'mouseover'); 

	
	$('.entry-content img').parent("a").addClass("fancybox").attr("data-fancybox-group","gallery");
	$('.fancybox').fancybox();	
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});


$('#header .button').on('click', function() {
			if ($(this).toggleClass('active').hasClass('active')) {
				$('.header-menu-con').addClass('active');
			} else {
				$('.header-menu-con').removeClass('active');
			}
		});
});

