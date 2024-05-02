<?php
namespace Classes\System;

use IAddresses;
require('..\..\loader.php');

class Addresses implements IAddresses{

      public $addresse;

      function __construct($addresse)
      {
            $this->addresse = $addresse;
      }

      function __toString(){
            return $this->addresse;
      }
}