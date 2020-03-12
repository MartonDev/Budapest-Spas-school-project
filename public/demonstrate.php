<?php

  require '../src/inc/header.inc.php';

 ?>

<div class="spa" style="background-image: url(assets/img/thumbnails/gellert_1.jpg);">

  <div class="container">

    <h1 class="spa-name">Gellért fürdő</h1>
    <h2>by Lederer Márton</h2>

    <p>Gratulálunk! Megtaláltátok a Gellért fürdő-t! Olvassatok tovább egy-két érdekes információért! A következő állomást az oldal legalján láthatod.<br /><br />1918 óta Budapest szecessziós gyógyfürdője. A Gellért Hotel és Gyógyfürdő 1912–18-ban épült szecessziós stílusban, az építkezésen orosz hadifoglyok is dolgoztak az első világháború utolsó évében. <br /><br />A fürdő elkészülésekor Európa legkorszerűbb fürdője volt, saját kórházzal. Az eredeti víznyerő forrása a ma a Gellért tér alatt található kút volt, manapság azonban már három másik kutat használnak, melyek a Rác-fürdővel összekötött, a Gellért-hegy alatt húzódó alagútnál helyezkednek el. <br /><br />A fürdő több mint 200 éve működik kisebb-nagyobb felújításokkal és kórházi részlege még mindig fogad betegeket.</p>

    <h1 class="subtitle">Galéria</h1>

    <div class="galery">

      <img src="assets/img/thumbnails/gellert_1.jpg" onclick="openGalery(0)">
      <img src="assets/img/thumbnails/gellert_2.jpg" onclick="openGalery(1)">
      <img src="assets/img/thumbnails/gellert_3.jpg" onclick="openGalery(2)">
      <img src="assets/img/thumbnails/gellert_4.jpg" onclick="openGalery(3)">
      <img src="assets/img/thumbnails/gellert_5.jpg" onclick="openGalery(4)">
      <img src="assets/img/thumbnails/gellert_6.jpg" onclick="openGalery(5)">
      <img src="assets/img/thumbnails/gellert_7.jpg" onclick="openGalery(6)">
      <img src="assets/img/thumbnails/gellert_8.jpg" onclick="openGalery(7)">
      <img src="assets/img/thumbnails/gellert_9.jpg" onclick="openGalery(8)">
      <img src="assets/img/thumbnails/gellert_10.jpg" onclick="openGalery(9)">
      <img src="assets/img/thumbnails/gellert_11.jpg" onclick="openGalery(10)">
      <img src="assets/img/thumbnails/gellert_12.jpg" onclick="openGalery(11)">
      <img src="assets/img/thumbnails/gellert_13.jpg" onclick="openGalery(12)">
      <img src="assets/img/thumbnails/gellert_14.jpg" onclick="openGalery(13)">
      <img src="assets/img/thumbnails/gellert_15.jpg" onclick="openGalery(14)">
      <img src="assets/img/thumbnails/gellert_16.jpg" onclick="openGalery(15)">

    </div>

    <h1 class="subtitle">Következő állomás</h1>

    <p>Oldd meg a rejtvényt, hogy továbbhaladhass!<br />Milyen stílusban épült a Gellért fürdő és melyik évben kezdték el az építkezést?</p>

    <input type="text" placeholder="Válasz...">

  </div>

</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">

    <div class="pswp__container">

      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>

    </div>

    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--share" title="Share"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <div class="pswp__preloader">

          <div class="pswp__preloader__icn">

            <div class="pswp__preloader__cut">

              <div class="pswp__preloader__donut"></div>

            </div>

          </div>

        </div>

      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">

        <div class="pswp__share-tooltip"></div>

      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

      <div class="pswp__caption">

        <div class="pswp__caption__center"></div>

      </div>

    </div>

  </div>

</div>

<script>

  let galeryItems = [

    {

        src: 'assets/img/thumbnails/gellert_1.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_2.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_3.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_4.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_5.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_6.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_7.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_8.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_9.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_10.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_11.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_12.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_13.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_14.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_15.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },
    {

        src: 'assets/img/thumbnails/gellert_16.jpg',
        w: 0,
        h: 0,
        title: 'Forrás: Saját kép'

    },

  ];

</script>

<?php

   require '../src/inc/footer.inc.php';

 ?>
