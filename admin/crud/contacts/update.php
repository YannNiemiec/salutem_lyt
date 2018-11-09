<?php
require_once '../../../model/database.php';

$liste_contacts = getAllEntities("contact");

require_once '../../layout/header.php';

$id = $_GET["id"];
$contact = getEntity("contact", $id)
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier les contacts</h1>
</div>

<a href="index.php" class="btn btn-light retour">
    <i class="fa fa-arrow-left"></i>
    Retour
</a>
<form action="udpate_query.php?id=<?php echo $contact["id"]?>" method="POST">
    <div class="form-group">
        <label>Tel</label>
        <input type="texte" name="tel" class="form-control" value="<?php echo $contact['tel'];?>" placeholder="Téléphone" required>
    </div>
    <div class="form-group">
        <label>Mail</label>
        <input type="texte" name="mail" class="form-control" value="<?php echo $contact['mail'];?>" placeholder="Mail" required>
    </div>
    <div class="form-group">
        <label>Adresse</label>
        <input type="texte" name="adresse" class="form-control" value="<?php echo $contact['adresse'];?>" placeholder="Adresse" required>
    </div>
    <div class="form-group">
        <label>Tel_Urgence</label>
        <input type="texte" name="tel_urgence" class="form-control" value="<?php echo $contact['tel_urgence'];?>" placeholder="Téléphone_urgence" required>
    </div>
    
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-pencil"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'
?>