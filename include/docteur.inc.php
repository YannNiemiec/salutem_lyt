<article class="doctor-thumbnail">
                <img src="uploads/<?php echo $docteur["image"];?>" alt="<?php $docteur["prenom"] . " " . $docteur["nom"]; ?>">
                <div class="doctor-details">
                    <h4><?php $docteur["prenom"] . " " . $docteur["nom"] ?></h4>
                    <p>Médecin Généraliste</p>
                    <a href="#" class="btn btn-dark">
                        <i class="fa fa-eye"></i>
                        Plus d'informations
                    </a>
                </div>
            </article>