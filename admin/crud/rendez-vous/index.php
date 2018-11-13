<?php
require_once '../../../model/database.php';

$liste_formulaires = getAllFormulaires();
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
    <h1 class="h2">Gestion des rendez-vous</h1>
</div>

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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Message</th>
            <th>Spécialité</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_formulaires AS $formulaire): ?>
            <tr>
                <td><?php echo $formulaire['nom'] ?></td>
                <td><?php echo $formulaire['prenom'] ?></td>
                <td><?php echo $formulaire['mail'] ?></td>
                <td><?php echo $formulaire['tel'] ?></td>
                <td><?php echo $formulaire['date_rdv_format'] ?></td>
                <td><?php echo $formulaire['heure_format'] ?></td>
                <td><?php echo $formulaire['message'] ?></td>
                <td><?php echo $formulaire['specialite'] ?></td>
                <td class="actions">
                <?php if ($formulaire["docteur_id"]== null):?>
                
                    <a href="update.php?id=<?php echo $formulaire['id'] ?>" class="btn btn-primary">
                        <i class="fa fa-pencil"></i>
                        Assigner
                    </a>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $formulaire["id"]?>">
                        <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                        Refuser
                    </form>
                
                <?php else: ?>
                
                    Docteur <?php echo $formulaire["docteur"]?>
                    
                <?php endif;?>
                    </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'
?>