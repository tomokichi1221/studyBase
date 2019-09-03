$(function(){
  $('.slider').slick({
    autoplay:true,
    autoplaySpeed:2000,
    fade:true,
    speed:3000
  });
  $('.return-top').click(function() {
    $('body,html').animate({scrollTop:0},300,'linear');
  });
  $('.faq').click(function() {
    var $answer = $(this).find('.answer');
    if ($answer.hasClass('open')) {
      $answer.removeClass('open');
      $answer.slideDown();
      $(this).find('.modal-button').text('-');
    }else {
      $answer.addClass('open');
      $answer.slideUp();
      $(this).find('.modal-button').text('+');
    }
  });
  $('.title').fadeIn(2000);
  $('.sub-title').fadeIn(3000);

  $('.imformation').hover(function() {
    $('.faq').fadeIn(1500);
  })
  $('#login-show').click(function() {
    $('#login-modal').fadeIn();
  });
  $( ".input" ).focusin(function() {
    $( this ).find( "span" ).animate({"opacity":"0"}, 200);
  });

  $( ".input" ).focusout(function() {
    $( this ).find( "span" ).animate({"opacity":"1"}, 300);
  });

  $(".login").submit(function(){
    $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
    $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
    $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
    $("input").css({"border-color":"#2ecc71"});
    return false;
  });
});
