jQuery(document).ready((function(e){console.log("custom scripts"),AOS.init();var s="<div class='wrapper-01'></div>";e(".tribe-events-event-image, .tribe-events-single-event-description, .tribe-events-cal-links").wrapAll(s),e(".tribe-events-single-section.primary").wrapAll(s);var i='<div class="events-list-header" style="background-image:url(http://woknrollaz.com/wp-content/uploads/2021/05/events-header-image-01.jpg);"><span><h2>'+e("h1.tribe-events-single-event-title").text()+"</h2></span></div>";e("#tribe-events-pg-template").prepend(i),e(".hero_2_slider").slick({dots:!1,infinite:!0,speed:2e3,fade:!0,cssEase:"linear",autoplaySpeed:3e3,autoplay:!0,pauseOnHover:!1,adaptiveHeight:!1}),e(".testimonials_slider_2").slick({dots:!1,infinite:!0,speed:500,fade:!1,cssEase:"linear",autoplaySpeed:6e3,autoplay:!0,pauseOnHover:!0,adaptiveHeight:!1});var a=document.querySelectorAll(".lazyload");lazyload(a),e(".navbar-toggler").on("click",(()=>{e(".navbar-collapse").hasClass("ag-show")?e(".navbar-collapse").removeClass("ag-show"):e(".navbar-collapse").addClass("ag-show")})),e(".video_play_button").on("click",(function(s){s.stopPropagation(),e(this).prev(".video-html").trigger("play"),e(this).hide("slow"),e(this).addClass("hidden_play_button")})),window.onscroll=function(){document.body.scrollTop>30||document.documentElement.scrollTop>30?(e("nav.sticky_nav").addClass("sticky"),e(".navbar-mobile").addClass("mobile-sticky")):(e("nav.sticky_nav").removeClass("sticky"),e(".navbar-mobile").removeClass("mobile-sticky"))},e(window).load((function(){e(".masonry-grid").css({display:"flex"}).masonry({itemSelector:".grid-item"}),e(".single-event-images-slick-slider").slick({arrows:!0,dots:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear",autoplaySpeed:3e3,autoplay:!1,pauseOnHover:!0,adaptiveHeight:!1,prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'})})),e("a.modal-button").on("click",(function(s){s.preventDefault();var i=e(this).children("img").attr("src");console.log(i);var a=e(".slick-slider-container").find('img[src="'+i+'"]').parents(".slick-slide").attr("data-slick-index");console.log(a),e(".single-event-images-slick-slider").slick("slickGoTo",a),e(".slick-slider-container").css({opacity:"1",visibility:"visible"})})),e(".modal-close").on("click",(function(s){s.preventDefault(),e(".slick-slider-container").css({opacity:"0",visibility:"hidden"})}))}));