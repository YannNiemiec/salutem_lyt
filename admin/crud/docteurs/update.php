<?php
require_once '../../../model/database.php';

$liste_docteurs = getAllEntities("docteur");
$liste_specialites = getAllEntities("specialite");

$id = $_GET["id"];
$docteur = getEntity("docteur", $id);

$docteur_liste_specialites = getSpecialiteByDocteur($id);
$docteur_liste_specialites_ids = [];
foreach ($docteur_liste_specialites as $specialite) {
    $docteur_liste_specialites_ids[] = $specialite["id"];
}
require_once '../../layout/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modification d'un docteur</h1>
</div>

<a href="index.php" class="btn btn-light">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="update_query.php?id=<?php echo $docteur["id"]?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="texte" name="nom" class="form-control" placeholder="Nom" value="<?php echo $docteur["nom"]?>" required>
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input type="texte" name="prenom" class="form-control" placeholder="Prénom" value="<?php echo $docteur["prenom"]?>" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if($docteur["image"]):?>
        <img src="../../../uploads/<?php echo $docteur["image"]?>" class="img-thumbnail">
        <?php endif;?>
    </div>
    <div class="form-group">
        <label>Présentation</label>
        <textarea name="presentation" class="form-control"><?php echo $docteur["presentation"]?></textarea>
    </div>
    <div class="form-group">
        <label>Téléphone</label>
        <input type="number" name="telephone" class="form-control" placeholder="Téléphone" value="<?php echo $docteur["tel"]?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $docteur["mail"]?>" required>
    </div>
    <div class="form-group" >
        <label>Spécialité</label>
        <select name="specialite_ids[]" multiple class="form-control">
            <?php foreach ($liste_specialites as $specialite): ?>
                <?php $selected = (in_array($specialite["id"], $docteur_liste_specialites_ids)) ? "selected" : ""; ?>
                <option value="<?php echo $specialite["id"] ?>"<?php echo $selected; ?>><?php echo $specialite["libelle"] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    
    <input type="hidden" name="id" value="<?php echo $photo["id"]; ?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?> 