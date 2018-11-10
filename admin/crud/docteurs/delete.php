<?php
require_once '../../../model/database.php';

$liste_docteurs = getAllEntities("docteur");

require_once '../../layout/header.php';

$id = $_POST["id"];
$docteur = getEntity("docteur", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Supprimer un docteur</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="delete_query.php?id=<?php echo $docteur["id"]?>" method="POST">
    <label class="supp">Voulez-vous vraiment supprimer ce docteur ?</label> <br>
    <input type="hidden" name="id" value="<?php echo $docteur["id"]?>">
    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i>
        Supprimer
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>