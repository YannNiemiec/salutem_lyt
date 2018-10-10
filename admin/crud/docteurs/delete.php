<?php
require_once '../../../model/database.php';

$liste_categories = getAllEntities("categorie");

require_once '../../layout/header.php';

$id = $_POST["id"];
$categorie = getEntity("categorie", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Supprimer une catégorie</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="delete_query.php?id=<?php echo $categorie["id"]?>" method="POST">
    <label class="supp">Voulez-vous vraiment supprimer cette catégorie ?</label> <br>
    <input type="hidden" name="id" value="<?php echo $categorie["id"]?>">
    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i>
        Supprimer
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>