<?php

namespace Classes\Metier;

use Interfaces\Metier\IUtilisateur;

class Utilisateur implements IUtilisateur
{
      private string $title = "";
      private string $first_name = "";
      private string $last_name = "";
      private string $email = "";
      private string $password = "";
      private string $mobile_phone_number = "";

      public array $Adresses = [];

      public function __construct(array $elements)
      {
            foreach ($elements as $key => $value)
            {
                  if (isset($this->$key))
                        $this->$key = ($value != null ? $value : "");
            }

            array_push(
                  $this->Adresses,
                  new Adresse($elements));
      }

      public function CheckPassword(string $needle) : bool
      {
            return $this->password == $needle;
      }

      private function getCompleteName() : string
      {
            return
                  (strlen($this->first_name) > 0
                        ? " " . strtoupper($this->first_name[0]) .
                              (strlen($this->first_name) > 1
                                    ? strtolower(substr($this->first_name, 1))
                                    : "")
                        : ""
                  ) .
                  (strlen($this->last_name) > 0 ? " " . strtoupper($this->last_name) : "");
      }

      public function GetIdentity() : string
      {
            return
                  (strlen($this->title) > 0 ? strtoupper($this->title) : "") .
                  $this->getCompleteName() . PHP_EOL .
                  'Tel. : ' . $this->mobile_phone_number;
      }

      public function GetEMail() : string
      {
            return $this->email;
      }

      public function GetAdresses() : array
      {
            return $this->Adresses;
      }

      public function __toString() : string
      {
            return $this->getCompleteName();
      }
}