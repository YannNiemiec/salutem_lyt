<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST["titre"];
$id = $_POST["id"];

updateCategorie($titre, $id);

header('Location: index.php');
