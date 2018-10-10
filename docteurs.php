<?php

require_once "functions.php";
require_once 'model/database.php';

$liste_docteurs = getAllEntities("docteur");

getHeader('Liste des docteurs', 'Liste des docteurs');

getMenu();
?>

<h1 class='nom_docteur'>Liste des docteurs</h1>

<section class="doctors">
<div class="container">
<?php foreach($liste_docteurs as $docteur):?>
            <?php $id = $docteur["id"];?>
            <?php $liste_specialites = getSpecialiteByDocteur($id);?>
            <?php include 'include/docteur.inc.php'; ?>
            <?php endforeach;?>
</div>
</section>

<?php getFooter(); ?>