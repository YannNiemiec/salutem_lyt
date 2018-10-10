<?php
require_once "functions.php";
require_once "model/database.php";

$liste_docteurs = getAllEntities("docteur");
$infos = getEntity("contact", 1);
$liste_specialite = getAllEntities("specialite");
        
getHeader("Salutem - Maison médicale", "Page d'accueil de Salutem");
getMenu();
?>
   

<main>
    <section class="home-top">
        <article class="container">
            <h1>Salutem</h1>
            <h2>Maison de santé</h2>
            <a href="#appointment" class="btn btn-dark">Prendre rendez-vous</a>
        </article>
    </section>
    <section class="home-boxes">
        <div class="container">
            <article>
                <h3>Centre médicale</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis delectus dolorem, est eveniet ex explicabo id iure iusto magni maiores nam non numquam odio officiis quaerat reiciendis repellat totam.</p>
                <a href="#" class="btn btn-light">Lire la suite</a>
            </article>
            <article>
                <h3>Horaires d'ouverture</h3>
                <table class="opening-hours">
                    <tr>
                        <td>Lundi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr class="today">
                        <td>Mardi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td class="hours">9h - 17h</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td class="hours">9h - 12h</td>
                    </tr>
                    <tr>
                        <td>Dimanche</td>
                        <td class="hours">Fermé</td>
                    </tr>
                </table>
            </article>
            <article>
                <h3>Numéro d'urgence</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci assumenda aut delectus dolores illo laboriosam provident reiciendis tempore vel?</p>
                <p>
                    <a href="tel:<?php echo $infos["tel_urgence"]; ?>" class="phone-number"><?php echo $infos["tel_urgence"]; ?></a>
                </p>
                <a href="#" class="btn btn-light">Lire la suite</a>
            </article>
        </div>
    </section>

    <section class="doctors">
        <div class="container">
            <article>
                <form action="envoi_form.php" class="form-appointment" method="POST">
                    <h3>Prendre rendez-vous</h3>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="text" name="prenom " placeholder="Prénom" required>
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="tel" placeholder="Téléphone" required>
                    <input type="date" name="date" placeholder="Date" required>
                    <input type="time" name="heure" step="900" placeholder="Heure" required>
                    <select name="specialite_id" required >
                        <option disabled selected>Choisissez une spécialité</option>
                        <?php foreach ($liste_specialite as $specialite) : ?>
                        <option value="<?php echo $specialite["id"]?>"><?php echo $specialite["libelle"]?></option>
                        <?php endforeach; ?>
                    </select>
                    <textarea name= "message" placeholder="Votre message"></textarea>
                    <button type="submit" class="btn btn-light">
                        <i class="fa fa-check"></i>
                        Envoyer
                    </button>
                </form>
            </article>
           <?php foreach($liste_docteurs as $docteur):?>
            <?php $id = $docteur["id"];?>
            <?php $liste_specialites = getSpecialiteByDocteur($id);?>
            <?php include 'include/docteur.inc.php'; ?>
            <?php endforeach;?>
        </div>
    </section>

</main>

<?php
getFooter();
?>