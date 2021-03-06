<?php
require_once '../../../model/database.php';

$liste_specialites = getAllEntities("specialite");

require_once '../../layout/header.php';

$id = $_GET["id"];
$specialite = getEntity("specialite", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier une catégorie</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="udpate_query.php?id=<?php echo $specialite["id"]?>" method="POST">
    <div class="form-group">
        <label>Specialité</label>
        <input type="texte" name="libelle" class="form-control" value="<?php echo $specialite['libelle'];?>" placeholder="specialité" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-pencil"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>