<?php

$pdo = new PDO('mysql:host=localhost;dbname=sh_auto', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();

define("RACINE_SITE", $_SERVER["DOCUMENT_ROOT"] . "/Atelier2_SiteVoitures");
define("URL", "http://localhost/Atelier2_SiteVoitures");

?>