<?php

require_once('../vendor/autoload.php');
require('../Loader.php');

use Classes\Metier\Adresse;
use Classes\System\RepositoryManager;

$datas = json_decode(
      RepositoryManager::Load('../DB/UT.json'), true);
$adresse = new Adresse($datas[0]);
echo $adresse;