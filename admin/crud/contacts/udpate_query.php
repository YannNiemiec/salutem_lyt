<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$adresse = $_POST["adresse"];
$urgence = $_POST["tel_urgence"];

updateContact($id, $tel, $mail, $adresse, $urgence);

header('Location: index.php');