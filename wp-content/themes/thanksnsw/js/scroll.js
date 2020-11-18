$(document).ready(function(){
  
jQuery('.scroll-dowm-arrow').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.campaign-row', 800, {axis:'y'});
   
});

    jQuery('.scroll-down-ser').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('div.page-news-wrap', 800, {axis:'y'});

    });

    jQuery('.scroll-down-cat').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('div.services-wrap', 1200, {axis:'y'});

    });


jQuery(function($){{$(window).scroll(function(){if($(window).scrollTop()>150)$('#scroll-to-top').addClass('displayed');else $('#scroll-to-top').removeClass('displayed');});$('#scroll-to-top').click(function(){$("html, body").animate({scrollTop:"0px"});return false;});}

});
	
});

