<?php
require_once '../../../model/database.php';

$liste_specialites = getAllEntities("horaire");

require_once '../../layout/header.php';

$id = $_GET["id"];
$horaire = getEntity("horaire", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier un horaire</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="udpate_query.php?id=<?php echo $horaire["id"]?>" method="POST">
    <div class="form-group">
        <label>Heure de début</label>
        <input type="texte" name="debut" class="form-control" value="<?php echo $horaire['debut'];?>" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Heure de fin</label>
        <input type="texte" name="fin" class="form-control" value="<?php echo $horaire['fin'];?>" placeholder="Titre" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-pencil"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>