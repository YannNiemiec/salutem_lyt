<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$specialite = getEntity("specialite", $id);

$error = deleteEntity($id, "specialite");

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
} 

header('Location: index.php');
