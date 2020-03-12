jQuery(function($) {

  $(document).on('click', 'a[href^="#"]', function(e) {

    e.preventDefault();
    $([document.documentElement, document.body]).animate({scrollTop: $($.attr(this, 'href')).offset().top}, 300);

  });

});

function openGalery(page) {

  let gallery = new PhotoSwipe(document.querySelectorAll('.pswp')[0], PhotoSwipeUI_Default, galeryItems, {index: page});
  gallery.listen('gettingData', (index, item) => {

    if(item.w < 1 || item.h < 1) {

      let img = new Image();

      img.onload = function() {

        item.w = this.width;
        item.h = this.height;
        gallery.invalidateCurrItems();
        gallery.updateSize(true);

      }

      img.src = item.src;

    }

  });
  gallery.init();

}
