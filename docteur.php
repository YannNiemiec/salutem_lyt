<?php

require_once "functions.php";
require_once 'model/database.php';

$id = $_GET["id"];

$docteur = getEntity("docteur", $id);

getHeader('Docteur' . ' ' . $docteur["prenom"] . ' ' . $docteur["nom"], 'Fiche du docteur' . ' ' . $docteur["prenom"] . ' ' . $docteur["nom"]);

getMenu();
?>

<div>
<h1>Docteur <?php echo $docteur["prenom"] . " " . $docteur["nom"]; ?></h1>

<h2>Je suis spécialiste en </h2>

<img src="uploads/<?php echo $docteur["image"];?>" alt="<?php $docteur["prenom"] . " " . $docteur["nom"]; ?>">

<p><?php echo $docteur["presentation"]; ?></p>
</div>


<p>N'hésitez pas à me contacter</p>
<p>Par téléphone : <a href="tel:0243785462"><?php echo $docteur["tel"]; ?></a></p>
<p>Par mail : <a href="mailto:contact@salutem.fr"><?php echo $docteur["mail"]; ?></a></p>

<?php getFooter(); ?>