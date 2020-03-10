<?php

  require '../src/inc/header.inc.php';

  $spa = new Spa($_GET['spa-name']);

 ?>

<h1><?php echo $spa->getName() ?></h1>
<h2><?php echo $spa->getAuthor() ?></h2>

<?php

   require '../src/inc/footer.inc.php';

 ?>
