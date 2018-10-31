<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$presentation = $_POST["presentation"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$specialite_ids = isset ($_POST["specialite_ids"]) ? $_POST['specialite_ids']: [];

//Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertDocteur($nom, $prenom, $filename, $presentation, $telephone, $email, $specialite_ids);

header('Location: index.php');
