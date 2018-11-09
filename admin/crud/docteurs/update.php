<?php
require_once '../../../model/database.php';

$liste_docteurs = getAllEntities("docteur");

require_once '../../layout/header.php';

$id = $_GET["id"];
$photo = getEntity("photo", $id);
$liste_photos = getAllEntities("photo");
$liste_tags = getAllEntities("tag");

$photo_liste_tags = getAllTagsByPhoto($id);
$photo_liste_tags_ids = [];
foreach ($photo_liste_tags as $tag) {
    $photo_liste_tags_ids[] = $tag["id"];
}
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modification d'une photo</h1>
</div>

<a href="index.php" class="btn btn-light">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="texte" name="titre" class="form-control" placeholder="Titre" value="<?php echo $photo["titre"]; ?>" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if($photo["image"]):?>
        <img src="../../../uploads/<?php echo $photo["image"]?>" class="img-thumbnail">
        <?php endif;?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $photo["description"]; ?></textarea>
    </div>
    <div class="form-group">
        <label>Catégorie</label>
        <select name="categorie_id" class="form-control">
            <?php foreach ($liste_docteurs as $docteur): ?>
            <?php $selected = ($docteur["id"] == $photo["categorie_id"]) ? "selected" : "";?> 
                <option value="<?php echo $docteur['id'] ?>"<?php echo $selected?>><?php echo $docteur['titre'];?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group" >
        <label>Tags</label>
        <select name="tag_ids[]" multiple class="form-control">
            <?php foreach ($liste_tags as $tag): ?>
                <?php $selected = (in_array($tag["id"], $photo_liste_tags_ids)) ? "selected" : ""; ?>
                <option value="<?php echo $tag["id"] ?>"<?php echo $selected?>><?php echo $tag["titre"] ?></option>
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