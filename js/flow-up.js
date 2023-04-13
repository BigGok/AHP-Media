$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var windowHeight = $(this).height();
  
    $('.flowup').each(function() {
      var containerOffset = $(this).offset().top;
  
      if (scrollTop > containerOffset - windowHeight) {
        $(this).addClass('animate');
      }
    });
  });