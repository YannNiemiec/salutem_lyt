<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["libelle"];
$id = $_POST["id"];

updateSpecialite($libelle, $id);

header('Location: index.php');
