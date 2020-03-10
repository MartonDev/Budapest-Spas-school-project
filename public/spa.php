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

    <h1><?php echo $spa->getName() ?></h1>
    <h2><?php echo $spa->getAuthor() ?></h2>

  </div>

</div>

<?php

   require '../src/inc/footer.inc.php';

 ?>
