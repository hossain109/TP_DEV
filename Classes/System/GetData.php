<?php

use Classes\System\DbLoader;

require('..\..\loader.php');

$results = DbLoader::GetDatas();
var_dump($results);