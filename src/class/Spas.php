<?php

  /**
   * Spas class
   */

  class Spas {

    private $spas = null;

    function __construct() {

      $spaDataFile = fopen('../src/data/data.json', 'r') or die('Unable to open data JSON');
      $fcontent = json_decode(fread($spaDataFile, filesize('../src/data/data.json')), true);
      $this->spas = $fcontent['spas'];
      $not_used_spas = $fcontent['not_used_spas'];

      foreach($not_used_spas as $key => $value) {

        $this->spas[$key] = $value;

      }

    }

    public function getSpas() {

      return $this->spas;

    }

  }

 ?>
