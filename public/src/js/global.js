//MAIN HEADER
(function( $ ){
//MENU TOGGLE
"use strict";

  $('.main_menu > li:has( > ul)').addClass('has-menu');
//   $('.main_menu > li:has( > ul) > a').addClass('not_active');
  //Checks if li has sub (ul) and adds class for toggle icon - just an UI

  $('.main_menu > li > ul:not(:has(ul))').addClass('normal-sub');
  //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu

  

  //Adds menu-mobile class (for mobile toggle menu) before the normal menu
  //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
  //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
  //Done this way so it can be used with wordpress without any trouble

/*
  $(".main_menu > li").on("click", function (e) {
        $(this).children("ul").stop(true, false).fadeToggle(150);
        $(this).children("ul").addClass("toggled");
      e.preventDefault();
  });
*/
// $('.main_menu > li:has( > ul) > a').hover(function(e) {
// 	$(this).next('.depth_0').show();
//   $('.main_menu > li > a').not($(this)).next('.depth_0').hide();
//   e.preventDefault();
//   e.stopPropagation();
// });
// $(document).on("click", function () {
//     $('.main_menu > li:has( > ul)').children("ul").hide();
// });
// $('.depth_0').click(function(e) {
// 	e.stopPropagation();
// });
  //If width is more than 943px dropdowns are displayed on hover

  $(".main_menu > li").click(function() {
    if ($(window).width() <= 1030) {
      $(this).children("ul").fadeToggle(150);
    }
  });
  $('.mob_menu > li:has( > ul) > a').addClass('not_active');
  $(".mob_menu > li").click(function(e) {
//       $(this).children("ul").fadeToggle(150);
  });
  //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

  $(".menu-mobile").click(function(e) {
    $(".main_menu").toggleClass('show-on-mobile');
    e.preventDefault();
  });
  //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)
  
  //MOB MENU TOGGLE

$('.mob_hamburger').click(function () {
   $(".mob").toggleClass('show-on-mobile', 'slow', "easeOutSine");
});
$('.mob_close').click(function () {
    $(".mob").toggleClass('show-on-mobile');
});

//SWIPER PHOTOS
var galleryTop = new Swiper('.gallery-top', {
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',
	    spaceBetween: 10,
	    loop:true,
	    loopedSlides: 5, //looped slides should be the same     
	});
	var galleryThumbs = new Swiper('.gallery-thumbs', {
	    spaceBetween: 10,
	    slidesPerView: 4,
	    touchRatio: 0.2,
	    loop:true,
	    loopedSlides: 5, //looped slides should be the same
	    slideToClickedSlide: true
	});
	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

})(jQuery);
