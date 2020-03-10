<?php

  /**
   * Spa info loader class
   */

  class Spa {

    private $spaData = null;
    private $spaName = null;

    function __construct($spa_code_name) {

      $spaDataFile = fopen('../src/data/data.json', 'r') or die('Unable to open data JSON');
      $spaAllData = json_decode(fread($spaDataFile, filesize('../src/data/data.json')), true);

      foreach($spaAllData as $key => $value) {

        if(strtolower(str_replace(' ', '-', $key)) == $spa_code_name) {

          $this->spaName = $key;
          $this->spaData = $value;
          break;

        }

      }

      if($this->spaData == null) {

        throw new Exception('Spa ' . $spa_code_name . ' not found');

      }

    }

    public function getName() {

      return $this->spaName;

    }

    public function getAuthor() {

      return $this->spaData['author'];

    }

    public function getGalery() {

      return $this->spaData['galery'];

    }

    public function getText() {

      return $this->spaData['text'];

    }

  }

 ?>
