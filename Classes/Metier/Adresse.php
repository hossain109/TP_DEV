<?php

namespace Classes\Metier;

use Interfaces\Metier\IAdresse;

class Adresse implements IAdresse
{
      private string $street_address = "";
      private string $secondary_address = "";
      private string $post_code = "";
      private string $city = "";
      private string $region = "";

      public function __construct(array $elements)
      {
            foreach ($elements as $key => $value)
            {
                  if (isset($this->$key))
                        $this->$key = ($value != null ? $value : "");
            }
      }

      public function __toString() : string
      {
            return
                  $this->street_address . PHP_EOL .
                  $this->secondary_address . PHP_EOL .
                  strtoupper($this->post_code) . " " . strtoupper($this->city) . PHP_EOL .
                  strtoupper($this->region);
      }
}