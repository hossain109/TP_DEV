<?php

header("Content-Type: Text/Plain; charset=utf-8");

// Enumerations
require('Enumerations/Alphabets.php');
require('Enumerations/Columns.php');
require('Enumerations/EncryptMode.php');

// Interfaces
require('Interfaces/System/ILoader.php');
require('Interfaces/System/ISaver.php');
require('Interfaces/System/IDbLoader.php');

require('Interfaces/Metier/IAdresse.php');
require('Interfaces/Metier/IUtilisateur.php');

// Classes
require('Methods/System/Sanitizer.php');

require('Classes/Metier/Adresse.php');
require('Classes/Metier/Utilisateur.php');

require('Classes/System/Encoder.php');
require('Classes/System/RepositoryManager.php');
require('Classes/System/DbLoader.php');
