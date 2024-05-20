<?php

require('Loader.php');

header("Content-Type: Text/Plain; charset=utf-8");

use Classes\Metier\Utilisateur;
use Classes\System\DbLoader;
use Enumerations\Columns;
use Methods\System\Sanitizer;

$user_email = Sanitizer::Sanitize("uname");
$user_pwd = Sanitizer::Sanitize("pwd");

function getUserInfos(string $username) : ?Utilisateur
{
      $ar_users = DbLoader::GetDatas();

      foreach ($ar_users as $user)
      {
            if ($user[Columns::eMail] == $username)
                  return new Utilisateur($user);
      }

      return null;
}

//if (($user_email != "") && ($user_pwd != ""))
if (($user_email == "") || ($user_pwd == ""))
{
      echo "Données invalide";
      return;
}

$User = getUserInfos($user_email);

if ($User == null)
{
      echo "Utilisateur introuvable !";
      return;
}

echo
      !$User->CheckPassword($user_pwd)
      ? "Mot de passe incorrect"
      :
            $User->GetIdentity() . 
            " (" . $User->GetEMail() . ")" . PHP_EOL . 
            $User->Adresses[0];