// sticky header
$(document).ready(function () {
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if ($(window).width() >= 765) {
      if (scrollTop > 1) {
        $('header').addClass('sticky');
      } else {
        $('header').removeClass('sticky');
      }
    } else {
      if (scrollTop > 55) {
        $('header').addClass('sticky');
      } else {
        $('header').removeClass('sticky');
      }
    }
  });
});



