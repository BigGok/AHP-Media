$(document).ready(function() {
    var windowHeight = $(window).height();
    var items = $('.smoothflow');
    var currentIndex = 0;
  
    function showNextItem() {
      items.eq(currentIndex).addClass('visible').css('--delay', currentIndex * 0.2 + 's');
      currentIndex++;
      if (currentIndex < items.length) {
        setTimeout(showNextItem, 200);
      }
    }
  
    $(window).scroll(function() {
      var sectionPosition = items.eq(0).offset().top;
      var sectionHeight = items.eq(0).height();
      var scrollPosition = $(window).scrollTop() + windowHeight;
      if (scrollPosition > sectionPosition + sectionHeight / 2) {
        showNextItem();
      }
    });
  });
  