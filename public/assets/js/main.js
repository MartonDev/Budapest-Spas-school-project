jQuery(function($) {

  $(document).on('click', 'a[href^="#"]', function(e) {

    e.preventDefault();
    $([document.documentElement, document.body]).animate({scrollTop: $($.attr(this, 'href')).offset().top}, 300);

  });

});

function openGalery(page) {

  let gallery = new PhotoSwipe(document.querySelectorAll('.pswp')[0], PhotoSwipeUI_Default, galeryItems, {index: page});
  gallery.init();

}
