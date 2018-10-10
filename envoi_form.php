<?php
require_once 'model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$date = $_POST["date"];
$heure = $_POST["heure"];
$message = $_POST["message"];
$specialite = $_POST["specialite_id"];

insertFormulaire($nom, $prenom, $mail, $tel, $date, $heure, $message, $specialite);

header("Location: index.php");