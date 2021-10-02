jQuery(document).ready(function($){
  console.log('custom scripts');  

  // slick slides
  $('.hero_1_block').slick({
    dots: false, 
    infinite: true,
    speed: 3000,
    fade: true, 
    cssEase: 'linear',
    autoplaySpeed: 3000,
    autoplay: true, 
    pauseOnHover: false,
    adaptiveHeight: false
  }); 
 
  $(".navbar-toggler").on('click', ()=>{
    if($(".navbar-collapse").hasClass("ag-show")){
      $(".navbar-collapse").removeClass("ag-show");
    }else{
      $(".navbar-collapse").addClass("ag-show"); 
    } 
  });

  //Video play
  $('.video_play_button').on('click', function(e){
    e.stopPropagation();
      $(this).prev('.video-html').trigger('play');
      $(this).hide('slow');
      $(this).addClass('hidden_play_button');
  });
     
  //Nav bar on scroll
  window.onscroll = function() {
    scrollFunction();
  };
  
  $('.masonry-grid').css({
    'display' : 'flex'
  }).masonry({
    // options... 
    itemSelector: '.grid-item'
  }); 

  
  function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
      $("nav#sticky_nav").addClass("sticky");
      $(".navbar-mobile").addClass("mobile-sticky");
    } else {
      $("nav#sticky_nav").removeClass("sticky"); 
      $(".navbar-mobile").removeClass("mobile-sticky"); 
    } 
  }
});   