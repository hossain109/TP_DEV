<?php declare(strict_types=1);

require_once('vendor/autoload.php');
require(__DIR__ . '\..\Loader.php');

use PHPUnit\Framework\TestCase;
use Classes\Metier\Utilisateur;
use Classes\System\RepositoryManager;

final class UserTest extends TestCase
{
      private static function load_UT_DB() : array
      {
            return json_decode(
                  RepositoryManager::Load(__DIR__ . '\..\DB\UT.json'), true);
      }

      public function testUser(): void
      {
            $awaiting_email = "odumont@bonnet.fr";
            $awaiting_identity = "MME. Éléonore BOURDON";

            $user = new Utilisateur(UserTest::load_UT_DB()[0]);

            $this->assertSame($user->GetEMail(), $awaiting_email);
            $this->assertSame($user->GetIdentity(), $awaiting_identity);
      }

      public function testUserAdresseCount(): void
      {
            $user = new Utilisateur(UserTest::load_UT_DB()[0]);

            $this->assertSame(count($user->GetAdresses()), 1);
      }
}

