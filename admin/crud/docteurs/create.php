<?php
require_once '../../layout/header.php';
$liste_specialites = getAllEntities("specialite");
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajout d'un docteur</h1>
</div>

<a href="index.php" class="btn btn-light">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="texte" name="nom" class="form-control" placeholder="Nom" required>
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input type="texte" name="prenom" class="form-control" placeholder="Prénom" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Présentation</label>
        <textarea name="presentation" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Téléphone</label>
        <input type="number" name="telephone" class="form-control" placeholder="Téléphone" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group" >
        <label>Spécialité</label>
        <select name="specialite_ids[]" multiple class="form-control">
            <?php foreach ($liste_specialites as $specialite): ?>
                <option value="<?php echo $specialite["id"] ?>"><?php echo $specialite["libelle"] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?> 
