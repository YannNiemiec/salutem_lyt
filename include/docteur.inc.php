<article class="doctor-thumbnail">
                <img src="uploads/<?php echo $docteur["image"];?>" alt="<?php $docteur["prenom"] . " " . $docteur["nom"]; ?>">
                <div class="doctor-details">
                    <h4><?php echo $docteur["prenom"] . " " . $docteur["nom"] ?></h4>
                    <p>
                        <?php foreach ($liste_specialites as $specialite): ?>
                        <?php echo $specialite["libelle"]?>
                        <?php endforeach;?>
                    </p>
                    <a href="docteur.php?id=<?php echo $docteur["id"]; ?>" class="btn btn-dark">
                        <i class="fa fa-eye"></i>
                        Plus d'informations
                    </a>
                </div>
            </article>