<?php
require_once '../../../model/database.php';

$liste_specialites = getAllEntities("specialite");
$error_msg = null;

if (isset($_GET['errcode'])) {
    $errcode = $_GET['errcode'];
    switch($errcode) {
        case 23000:
            $error_msg = "Erreur lors de la suppression !";
            break;
        default:
            $error_msg = "Une erreur est survenue !";
            break;
    }
}

require_once '../../layout/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des spécialités</h1>
</div>

<a href="create.php" class="btn btn-success">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<?php if($error_msg) : ?>
<div class="alert alert-danger">
    <i class="fa fa-exclamation-triangle"></i>
    <?php echo $error_msg;?>
</div>
<?php endif; ?>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Spécialité</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_specialites AS $specialite): ?>
            <tr>
                <td><?php echo $specialite['libelle'] ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $specialite['id'] ?>" class="btn btn-primary">
                        <i class="fa fa-pencil"></i>
                        Modifier
                    </a>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $specialite["id"]?>">
                        <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                        Supprimer
                    </a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'
?>