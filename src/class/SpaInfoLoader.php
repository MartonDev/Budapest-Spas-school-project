<?php

  /**
   * Spa info loader class
   */

  class Spa {

    private $spaData = null;
    private $spaName = null;
    private $next = null;

    function __construct($spa_code_name) {

      $spaDataFile = fopen('../src/data/data.json', 'r') or die('Unable to open data JSON');
      $spaAllData = json_decode(fread($spaDataFile, filesize('../src/data/data.json')), true)['spas'];

      foreach($spaAllData as $key => $value) {

        if((strtr(strtolower(str_replace(' ', '-', $key)), $this->getAccentedLetters()) . '-' . $value['suffix']) == $spa_code_name) {

          $this->spaName = $key;
          $this->spaData = $value;

        }else if($this->spaData != null) {

          $this->next = $key;
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

    public function getThumbnail() {

      return $this->spaData['thumbnail'];

    }

    public function getSuffix() {

      return $this->spaData['suffix'];

    }

    public function getNextSpa() {

      return $this->next;

    }

    private function getAccentedLetters() {

      return array('Ő' => 'O', 'ő' => 'o', 'Ú' => 'U', 'ú' => 'u', 'Ö' => 'O', 'ö' => 'o', 'Ü' => 'U', 'ü' => 'u', 'Ó' => 'O', 'ó' => 'o', 'É' => 'E', 'é' => 'e', 'Á' => 'A', 'á' => 'a', 'Ű' => 'U', 'ű' => 'u', 'Í' => 'I', 'í' => 'i');

    }

  }

 ?>
