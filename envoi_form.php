<?php
require_once 'model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["email"];
$tel = $_POST["tel"];
$date = $_POST["date"];
$heure = $_POST["heure"];
$message = $_POST["message"];
$specialite_id = $_POST["specialite_id"];

insertFormulaire($nom, $prenom, $mail, $tel, $date, $heure, $message, $specialite_id);

header("Location: index.php");