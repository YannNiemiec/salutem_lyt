<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$docteur = getEntity("docteur", $id);

$error = deleteEntity($id, "docteur");

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
} 

unlink("../../../uploads/". $docteur["image"]);

header('Location: index.php');
