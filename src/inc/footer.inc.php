    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo (strpos($_SERVER['REQUEST_URI'], 'furdo') !== false) ? '../' : '' ?>assets/js/main.js"></script>

    <?php if(strpos($_SERVER['REQUEST_URI'], 'furdo') === false) { ?>

    <script>

      let map = L.map('map').setView([47.528622, 19.047683], 14);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {

        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 25,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFydG9uZGV2IiwiYSI6ImNrN25wNjB3ZTAxM2czZm8yamJzMzNjNnIifQ.3OjIxX7KAdvI2khPhIvcmg'

      }).addTo(map);

      <?php

      $i = 0;

      foreach($spas->getSpas() as $key => $value) { ?>

      let spa_<?php echo $i ?> = L.marker([<?php echo $value['location'][0] ?>, <?php echo $value['location'][1] ?>]).addTo(map);

      spa_<?php echo $i ?>.bindPopup("<?php echo $key ?>")<?php if($i == 0) echo '.openPopup()'; ?>;

      <?php

      $i++;

      } ?>

    </script>

    <?php } ?>

  </body>

</html>
