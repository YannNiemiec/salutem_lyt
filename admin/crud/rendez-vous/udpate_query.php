<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];

$docteur = $_POST["docteur_id"];


UpdateDocteurInFormulaire($docteur, $id);

header('Location: index.php');
