<?php

function getAllFormulaires(): array {
    global $connection;

    $query = "SELECT
                formulaire.id,
                formulaire.nom,
                formulaire.prenom,
                formulaire.mail,
                formulaire.tel,
                DATE_FORMAT(formulaire.date_rdv, '%e %M %Y') AS 'date_rdv_format',
                DATE_FORMAT(formulaire.heure, '%H:%i') AS 'heure_format',
                formulaire.message,
                specialite_id,
                specialite.libelle AS specialite,
                docteur_id,
                docteur.nom AS docteur
                FROM formulaire
                 INNER JOIN specialite ON specialite.id = formulaire.specialite_id
                 LEFT JOIN docteur ON docteur.id = formulaire.docteur_id
            ORDER BY date_rdv DESC;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertFormulaire(string $nom, string $prenom, string $mail, string $tel, string $date_rdv, string $heure, string $message, int $specialite_id) {
    global $connection;

    $query = "INSERT INTO formulaire (nom, prenom, mail, tel, date_rdv, heure, message, specialite_id) VALUES (:nom, :prenom, :mail, :tel, :date_rdv, :heure, :message, :specialite_id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':date_rdv', $date_rdv);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':specialite_id', $specialite_id);

    $stmt->execute();
}


function UpdateDocteurInFormulaire(string $docteur, int $id) {
    global $connection;

    $query = "UPDATE formulaire SET docteur_id = :docteur WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':docteur', $docteur);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}