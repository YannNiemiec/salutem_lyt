<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$debut = $_POST["debut"];
$fin = $_POST["fin"];
$id = $_POST["id"];

updateHoraires($id, $debut, $fin);

header('Location: index.php');
