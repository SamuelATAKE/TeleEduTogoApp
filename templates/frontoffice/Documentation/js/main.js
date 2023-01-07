 ;
 (function ($) {
     "use strict";

     //*=============menu sticky js =============*//
     var $window = $(window);
     var didScroll,
         lastScrollTop = 0,
         delta = 5,
         $mainNav = $("#sticky"),
         $mainNavHeight = $mainNav.outerHeight(),
         scrollTop;

     $window.on("scroll", function () {
         didScroll = true;
         scrollTop = $(this).scrollTop();
     });

     setInterval(function () {
         if (didScroll) {
             hasScrolled();
             didScroll = false;
         }
     }, 200);

     function hasScrolled() {
         if (Math.abs(lastScrollTop - scrollTop) <= delta) {
             return;
         }
         if (scrollTop > lastScrollTop && scrollTop > $mainNavHeight) {
             $mainNav.removeClass("fadeInDown").addClass("fadeInUp").css('top', -$mainNavHeight);
         } else {
             if (scrollTop + $(window).height() < $(document).height()) {
                 $mainNav.removeClass("fadeInUp").addClass("fadeInDown").css('top', 0);
             }
         }
         lastScrollTop = scrollTop;
     }

     function navbarFixed() {
         if ($('#sticky').length) {
             $(window).scroll(function () {
                 var scroll = $(window).scrollTop();
                 if (scroll) {
                     $("#sticky").addClass("navbar_fixed");
                 } else {
                     $("#sticky").removeClass("navbar_fixed");
                 }
             });
         };
     };
     navbarFixed();

     function navbarFixedTwo() {
         if ($('#stickyTwo').length) {
             $(window).scroll(function () {
                 var scroll = $(window).scrollTop();
                 if (scroll) {
                     $("#stickyTwo").addClass("navbar_fixed");
                 } else {
                     $("#stickyTwo").removeClass("navbar_fixed");
                 }
             });
         };
     };
     navbarFixedTwo();

     //*=============menu sticky js =============*//

     //         page scroll 
     function bodyFixed() {
         var windowWidth = $(window).width();
         if ($('#sticky_doc').length) {
             if (windowWidth > 576) {
                 var tops = $('#sticky_doc');
                 var leftOffset = tops.offset().top;

                 $(window).on('scroll', function () {
                     var scroll = $(window).scrollTop();
                     if (scroll >= leftOffset) {
                         tops.addClass("body_fixed");
                     } else {
                         tops.removeClass("body_fixed");
                     }
                 });
             }
         }
     }
     bodyFixed();


     /*  Menu Click js  */
     function Menu_js() {
         if ($('.submenu').length) {
             $('.submenu > .dropdown-toggle').click(function () {
                 var location = $(this).attr('href');
                 window.location.href = location;
                 return false;
             });
         }
     }
     Menu_js();


     $('.doc_menu a[href^="#"]:not([href="#"]').on('click', function (event) {
         var $anchor = $(this);
         $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
         }, 900);
         event.preventDefault();
     });

     $(window).on("load", function () {
         if ($('.scroll').length) {
             $(".scroll").mCustomScrollbar({
                 mouseWheelPixels: 50,
                 scrollInertia: 0,
             });
         }
     });

     /*--------------- doc_documentation_area Switcher js--------*/
     if ($(".doc_documentation_area").length > 0) {
         //switcher 
         var switchs = true;
         $("#right").on("click", function (e) {
             e.preventDefault();
             if (switchs) {
                 $(".doc_documentation_area,#right").addClass("overlay");
                 $(".doc_right_mobile_menu").animate({
                     "right": "0px"
                 }, 100);
                 switchs = false;
             } else {
                 $(".doc_documentation_area,#right").removeClass("overlay");
                 $(".doc_right_mobile_menu").animate({
                     "right": "-250px"
                 }, 100);
                 switchs = true;
             }
         });

         $("#left").on("click", function (e) {
             e.preventDefault();
             if (switchs) {
                 $(".doc_documentation_area,#left").addClass("overlay");
                 $(".doc_mobile_menu").animate({
                     "left": "0px"
                 }, 300);
                 switchs = false;
             } else {
                 $(".doc_documentation_area,#left").removeClass("overlay");
                 $(".doc_mobile_menu").animate({
                     "left": "-245px"
                 }, 300);
                 switchs = true;
             }
         });
     }

     if ($(".mobile_menu").length > 0) {
         var switchs = true;
         $(".mobile_btn").on("click", function (e) {
             if (switchs) {
                 $(".mobile_menu").addClass("open");
             }
         })
     }

     /*--------------- slick js--------*/
     if ($('.doc_feedback_slider').length) {
         $('.doc_feedback_slider').slick({
             autoplay: true,
             slidesToShow: 1,
             slidesToScroll: 1,
             autoplaySpeed: 2000,
             speed: 1000,
             dots: false,
             arrows: true,
             prevArrow: '.prev',
             nextArrow: '.next',
         });
     }
     /*--------------- parallaxie js--------*/
     function parallax() {
         if ($(".parallaxie").length) {
             $('.parallaxie').parallaxie({
                 speed: 0.5,
             });
         }
     }
     parallax();

     /*--------------- tooltip js--------*/
     function tooltip() {
         if ($('.tooltips').length) {
             $('.tooltips').tooltipster({
                 interactive: true,
                 arrow: true,
                 animation: 'fade',
                 delay: 200,
             });
         }
     }
     tooltip();
     $('.tooltips_one').data('tooltip-custom-class', 'tooltip_blue').tooltip();
     $('.tooltips_two').data('tooltip-custom-class', 'tooltip_danger').tooltip();

     $(document).on('inserted.bs.tooltip', function (e) {
         var tooltip = $(e.target).data('bs.tooltip');
         $(tooltip.tip).addClass($(e.target).data('tooltip-custom-class'));
     });

     /*--------------- wavify js--------*/
     if ($('.animated-waves').length) {
         $('#animated-wave-three').wavify({
             height: 40,
             bones: 4,
             amplitude: 70,
             color: "rgba(188, 214, 234, 0.14)",
             speed: .3
         });

         $('#animated-wave-four').wavify({
             height: 60,
             bones: 5,
             amplitude: 90,
             color: "rgba(188, 214, 234, 0.14)",
             speed: .2
         });
     }

     /*--------------- nav-sidebar js--------*/
     if ($('.nav-sidebar > li').hasClass('active')) {
         $(".nav-sidebar > li.active").find('ul').slideDown(700);
     }

     function active_dropdown() {
         $('.nav-sidebar > li .icon').on('click', function (e) {
             $(this).parent().find('ul').first().toggle(300);
             $(this).parent().siblings().find('ul').hide(300);
         });
     }
     active_dropdown();

     $('.nav-sidebar > li .icon').each(function () {
         var $this = $(this);
         $this.on('click', function (e) {
             var has = $this.parent().hasClass('active');
             $('.nav-sidebar li').removeClass('active');
             if (has) {
                 $this.parent().removeClass('active');
             } else {
                 $this.parent().addClass('active');
             }
         });
     });

     /*--------------- mobile dropdown js--------*/
     function active_dropdown2() {
         $('.menu > li .mobile_dropdown_icon').on('click', function (e) {
             $(this).parent().find('ul').first().slideToggle(300);
             $(this).parent().siblings().find('ul').hide(300);
         });
     }
     active_dropdown2();

     /*--------------- search js--------*/
     $('.search a').on('click', function () {
         if ($(this).parent().hasClass('open')) {
             $(this).parent().removeClass('open')
         } else {
             $(this).parent().addClass('open')
         }
         return false
     });

     /*--------------- niceSelect js--------*/
     function select() {
         if ($('.custom-select').length) {
             $('.custom-select').niceSelect();
         }
         if ($('#mySelect').length) {
             $('#mySelect').selectpicker();
         }
     }
     select();

     /*--------------- counterUp js--------*/
     function counterUp() {
         if ($('.counter').length) {
             $('.counter').counterUp({
                 delay: 1,
                 time: 250
             });
         };
     };

     counterUp();

     /*--------------- popup-js--------*/
     function popupGallery() {
         if ($(".img_popup").length) {
             $(".img_popup").each(function () {
                 $(".img_popup").magnificPopup({
                     type: 'image',
                     closeOnContentClick: true,
                     closeBtnInside: false,
                     fixedContentPos: true,
                     removalDelay: 300,
                     mainClass: 'mfp-no-margins mfp-with-zoom',
                     image: {
                         enabled: true,
                         navigateByImgClick: true,
                         preload: [0, 1] // Will preload 0 - before current, and 1 after the current image,
                     }
                 });
             })
         }
     }
     popupGallery();

     /*--------------- video js--------*/
     function video() {
         if ($("#inline-popups").length) {
             $('#inline-popups').magnificPopup({
                 delegate: 'a',
                 removalDelay: 500, //delay removal by X to allow out-animation
                 mainClass: 'mfp-no-margins mfp-with-zoom',
                 preloader: false,
                 midClick: true
             });
         }
     }
     video();

     if ($('#post').length > 0) {
         $.rvFontsize({
             targetSection: '#post',
             store: true, // store.min.js required!
             controllers: {
                 appendTo: '#rvfs-controllers',
                 showResetButton: true
             }
         });
     }

     /*=========== anchors js ===========*/

     if ($(".load-order-2").length) {
         var Anchor1 = new AnchorJS();
         document.addEventListener("DOMContentLoaded", function (event) {
             Anchor1 = new AnchorJS();
             Anchor1.add('.load-order-2');
         });
     }


     /*--------- WOW js-----------*/
     function bodyScrollAnimation() {
         var scrollAnimate = $('body').data('scroll-animation');
         if (scrollAnimate === true) {
             new WOW({}).init()
         }
     }
     bodyScrollAnimation();

     /*------------ Cookie functions and color js ------------*/
     function createCookie(name, value, days) {
         var expires = "";
         if (days) {
             var date = new Date();
             date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
             expires = "; expires=" + date.toUTCString();
         }
         document.cookie = name + "=" + value + expires + "; path=/";
     }

     function readCookie(name) {
         var nameEQ = name + "=";
         var ca = document.cookie.split(';');
         for (var i = 0; i < ca.length; i++) {
             var c = ca[i];
             while (c.charAt(0) == ' ') c = c.substring(1, c.length);
             if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
         }
         return null;
     }

     function eraseCookie(name) {
         createCookie(name, "", -1);
     }
     var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
     var selectedNightTheme = readCookie("body_dark");

     if (selectedNightTheme == "true" || (selectedNightTheme === null && prefersDark)) {
         applyNight();
         $('#something').prop('checked', true);
     } else {
         applyDay();
         $('#something').prop('checked', false);
     }

     function applyNight() {
         $("body.doc").addClass("body_dark");
     }

     function applyDay() {
         $("body.doc").removeClass("body_dark");
     }

     $('#something').change(function () {
         if ($(this).is(':checked')) {
             applyNight();
             $(".tab-btns").css("color", "#6b707f");
             createCookie("body_dark", true, 999)
         } else {
             applyDay();
             $(".tab-btns").css("color", "#10b3d6");
             createCookie("body_dark", false, 999);
         }
     });

     $('.mobile_menu_btn').on('click', function () {
         $('body').removeClass('menu-is-closed').addClass('menu-is-opened');
     });
     $('.close_nav').on("click", function (e) {
         if ($('.side_menu').hasClass('menu-opened')) {
             $('.side_menu').removeClass('menu-opened');
             $('body').removeClass('menu-is-opened')
         } else {
             $('.side_menu').addClass('menu-opened');
         }
     });

     $('.click_capture').on('click', function () {
         $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
         $('.side_menu').removeClass('menu-opened');
     });


     /*--------------- Tab button js--------*/
     $('.next').on('click', function () {
         $('.v_menu .nav-item > .active').parent().next('li').find('a').trigger('click');
     });

     $('.previous').on('click', function () {
         $('.v_menu .nav-item > .active').parent().prev('li').find('a').trigger('click');
     });
     /*------------ MAILCHIMP js ------------*/
     if ($(".mailchimp").length > 0) {
         $(".mailchimp").ajaxChimp({
             callback: mailchimpCallback,
             url: "http://droitlab.us15.list-manage.com/subscribe/post?u=0fa954b1e090d4269d21abef5&id=a80b5aedb0" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
         });
     }
     if ($(".mailchimp_two").length > 0) {
         $(".mailchimp_two").ajaxChimp({
             callback: mailchimpCallback,
             url: "https://droitthemes.us19.list-manage.com/subscribe/post?u=5d334217e146b083fe74171bf&amp;id=0e45662e8c" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
         });
     }
     $(".memail").on("focus", function () {
         $(".mchimp-errmessage").fadeOut();
         $(".mchimp-sucmessage").fadeOut();
     });
     $(".memail").on("keydown", function () {
         $(".mchimp-errmessage").fadeOut();
         $(".mchimp-sucmessage").fadeOut();
     });
     $(".memail").on("click", function () {
         $(".memail").val("");
     });

     function mailchimpCallback(resp) {
         if (resp.result === "success") {
             $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
             $(".mchimp-sucmessage").fadeOut(500);
         } else if (resp.result === "error") {
             $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
         }
     }


     /*============= preloader js css =============*/
     var cites = [];
     cites[0] = "We design kbDoc for the readers, optimizing not for page views or engagement";
     cites[1] = "kbDoc turns out that context is a key part of learning.";
     cites[2] = "You can create any type of product documentation with kbDoc";
     cites[3] = "Advanced visual search system powered by Ajax";
     var cite = cites[Math.floor(Math.random() * cites.length)];
     $('#preloader p').text(cite);
     $('#preloader').addClass('loading');

     setTimeout(function () {
         $('#preloader').fadeOut(500, function () {
             $('#preloader').removeClass('loading');
         });
     }, 500);

     function Click_menu_hover() {
         if ($('.tab-demo').length) {
             $.fn.tab = function (options) {
                 var opts = $.extend({}, $.fn.tab.defaults, options);
                 return this.each(function () {
                     var obj = $(this);

                     $(obj).find('.tabHeader li').on(opts.trigger_event_type, function () {
                         $(obj).find('.tabHeader li').removeClass('active');
                         $(this).addClass('active');

                         $(obj).find('.tabContent .tab-pane').removeClass('active show');
                         $(obj).find('.tabContent .tab-pane').eq($(this).index()).addClass('active show');

                     })
                 });
             }
             $.fn.tab.defaults = {
                 trigger_event_type: 'click', //mouseover | click é»˜è®¤æ˜¯click
             };
         }
     }
     Click_menu_hover();

     function Tab_menu_activator() {
         if ($('.tab-demo').length) {
             $('.tab-demo').tab({
                 trigger_event_type: 'mouseover'
             });
         }
     }
     Tab_menu_activator();

     function fAqactive() {
         $(".doc_faq_info .card").on('click', function () {
             $(".doc_faq_info .card").removeClass("active");
             $(this).addClass('active');
         });
     }
     fAqactive();

 })(jQuery)