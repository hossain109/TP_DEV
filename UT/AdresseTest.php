<?php declare(strict_types=1);

require_once('vendor/autoload.php');
require(__DIR__ . '\..\Loader.php');

use PHPUnit\Framework\TestCase;
use Classes\Metier\Adresse;
use Classes\System\RepositoryManager;

final class AdresseTest extends TestCase
{
      private static function load_UT_DB() : array
      {
            return json_decode(
                  RepositoryManager::Load(__DIR__ . '\..\DB\UT.json'), true);
      }

      public function testAdresse(): void
      {
            $awaiting =
                  "20, avenue Leclerc

            48503 PEREZ-SUR-SANCHEZ
            BRETAGNE";

            $adresse = new Adresse(AdresseTest::load_UT_DB()[0]);

            $this->assertSame($adresse->__toString(), $awaiting);
          }
}

