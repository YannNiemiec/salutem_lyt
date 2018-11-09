<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$lien = $_POST["lien"];
$id = $_POST["id"];

updateReseau($id, $lien);

header('Location: index.php');