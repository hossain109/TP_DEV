<?php

namespace Methods\System;

class Sanitizer
{
      public static function Sanitize($key) : string
      {
            if (!isset($_POST[$key])) return "";

            return strip_tags(
                  htmlspecialchars(
                        $_POST[$key]));
      }
}