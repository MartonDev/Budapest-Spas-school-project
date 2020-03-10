<?php

  require '../src/inc/header.inc.php';

  try {

    $spa = new Spa($_GET['spa-name']);

  }catch (\Exception $e) {

    die($e->getMessage());

  }

 ?>

<div class="spa" style="background-image: url(../assets/img/thumbnails/<?php echo $spa->getThumbnail(); ?>);">

  <div class="container">

    <h1 class="spa-name"><?php echo $spa->getName() ?></h1>
    <h2><?php echo $spa->getAuthor() ?></h2>

    <p>Gratulálunk! Megtaláltátok a <?php echo $spa->getName() ?>-t! Olvassatok tovább egy-két érdekes információért!<br /><?php echo $spa->getText() ?></p>

    <h1 class="subtitle">Galéria</h1>

  </div>

</div>

<?php

   require '../src/inc/footer.inc.php';

 ?>
