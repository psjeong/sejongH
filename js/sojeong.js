$(function(){

    $(window).scroll(function(){
     if( $(window).scrollTop() > 0){
       $('body').addClass('scroll');
     }else{
       $('body').removeClass('scroll');
     }

   });

});


$('.navbar-nav').hover(function(){
  $('.menuBG').addClass('openBG');
});
$('.navbar-nav').mouseleave(function(){
  $('.menuBG').removeClass('openBG');
});



$('#allMenu').click(function(){
  $('#navbarResponsive').toggleClass('openMenu');
});



$(document).ready(function () {
  //owl
  jQuery("#sliderBn").owlCarousel({
    autoplay:true,
    autoplayTimeout:4000,// 1000 -> 1초
    autoplayHoverPause:false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    loop:true,
    //margin:10,//이미지 사이의 간격
    nav:false,
    responsive:{
      0:{
        items:1 // 모바일
      },
      600:{
        items:1 // 브라우저 600px 이하
      },
      1000:{
        items:1 // 브라우저 100px 이하
      }
    }
  });

  jQuery("#newsSlider").owlCarousel({
    autoplay:false,
    loop:false,
    margin:20,
    nav:true,
    navText: ["<img src='/sejongH_Img/btn-left-white.png'>","<img src='/sejongH_Img/btn-right-white.png'>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:3
      }
    }
  });

  $("#psjPopup .closebtn").click(function(){
    $('#psjPopup').addClass('popClose');
    $('#pDim').addClass('popClose');
  });

});
