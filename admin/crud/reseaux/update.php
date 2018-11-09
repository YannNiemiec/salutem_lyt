<?php
require_once '../../../model/database.php';

$liste_reseaux = getAllEntities("reseaux");

require_once '../../layout/header.php';

$id = $_GET["id"];
$reseau = getEntity("reseaux", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier un contact</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>
<form action="udpate_query.php?id=<?php echo $reseau["id"]?>" method="POST">
    <div class="form-group">
        <label>Lien</label>
        <input type="texte" name="lien" class="form-control" value="<?php echo $reseau['lien'];?>" placeholder="Lien" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-pencil"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>