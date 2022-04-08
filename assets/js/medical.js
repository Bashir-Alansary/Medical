$(function () {

  $(document).scroll(function () {
    var $nav = $(".nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

   // smoothly scroll when pressing on links
  $('.navbar li.ab a').on('click', function(e) {
    e.preventDefault();
    $('body, html').animate({
      scrollTop: $('#' + $(this).data('scroll')).offset().top - 150
    }, 1000);
  });
});