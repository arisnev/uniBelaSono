/*mobile menu*/
$(function(){
    $('.hamb').click(function(){
      $('.mobile').animate({
        right: 0
      });
      $(this).hide();
      $('.overlay').fadeIn();
    });
  $('.mobile span, .overlay').click(function(){
    $('.mobile').animate({
      right: -250
    });
    $('.hamb').show();
    $('.overlay').fadeOut();
  });
});
