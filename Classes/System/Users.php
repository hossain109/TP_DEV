<?php

namespace Classes\System;
require_once 'vendor/autoload.php'; 
require('..\..\loader.php');
use IUSers;


class Users implements IUSers{

      private $identity;
      private $email;
      private $address;

      public function __construct($identity, $email, $adresses) {
            $this->identity = $identity;
            $this->email = $email;
            $this->address = $adresses;
        }

      function GetIdentity():string{

            return $this->identity;
      }
      function GetEMail():string{
            
            return $this->email;
      }
      function GetAdresses():array{

            return $this->address;
      }
      public function __toString(): string {
            return $this->identity . " (" . $this->email . ")";
        }
    
}
