<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$liste_docteurs = getAllEntities("docteur");


require_once '../../layout/header.php';

?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Assigner un docteur</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="udpate_query.php?id=<?php echo $id?>" method="POST">
    <div class="form-group">
        <label>Choisir un docteur</label>
        <select name="docteur_id" class="form-control">
            <?php foreach ($liste_docteurs as $docteur) :?>
            <option value="<?php echo $docteur['id'] ?>">Docteur <?php echo $docteur["nom"]?><option>
            <?php endforeach;?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-pencil"></i>
        Assigner
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>