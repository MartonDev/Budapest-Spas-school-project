jQuery(function($) {

  $(document).on('click', 'a[href^="#"]', function(e) {

    e.preventDefault();
    $([document.documentElement, document.body]).animate({scrollTop: $($.attr(this, 'href')).offset().top}, 300);

  });

});
