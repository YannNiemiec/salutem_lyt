<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["specialite"];
$id = $_POST["id"];

updateSpecialite($id, $libelle);

header('Location: index.php');
