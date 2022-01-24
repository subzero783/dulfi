jQuery(document).ready(function($){
  console.log('custom scripts');  

  // slick slides
  $('.hero_1_slider').slick({
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

  // Instagram social feed block
  $('#sb_instagram #sbi_images > .sbi_item:lt(4)').wrapAll('<div class="left_side"></div>');

  if($('body').hasClass('woocommerce-shop')){
    // Catalog/Tienda/Store page JS
    var wrapperDiv = '<div class="right-side-content"></div>';
    $('.woocommerce-notices-wrapper, .woocommerce-result-count, .woocommerce-ordering, ul.products').wrapAll(wrapperDiv);
  
    var wrapperDiv2 = '<div class="top-content"></div>';
    $('.woocommerce-breadcrumb, .woocommerce-products-header').wrapAll(wrapperDiv2);
  
    $('#wp-block-search__input-1').attr('placeholder', 'Buscar');

    $('.wp-block-search__button').html('<i class="fas fa-search"></i>');

    $(document).on('submit', 'form.wp-block-search', function(e){
      e.preventDefault();
      var searchTerm = $(this).find('input[type="search"]').val();
      window.location.href = '/tienda/?s='+searchTerm+'&post_type=product';
    }); 
  }

});   