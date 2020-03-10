<?php

  if(count($_GET) != 1 || $_GET['action'] == '') {

    header('HTTP/1.0 404 Not Found');
    die();

  }

  header('Content-Type: application/json');

  require '../src/class/API.php';
  $API = new API();

  switch(str_replace('/api/', '', $_SERVER['REQUEST_URI'])) {

    case 'test':

      echo json_encode(array());

      break;

    default:

      header('HTTP/1.0 404 Not Found');
      die();

      break;

  }

 ?>
