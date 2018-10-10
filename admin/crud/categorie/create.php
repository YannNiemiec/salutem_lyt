<?php require_once '../../layout/header.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajout d'une catégorie</h1>
</div>

<a href="index.php" class="btn btn-light">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>

<form action="create_query.php" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="texte" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?> 
