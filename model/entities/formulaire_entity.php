<?php

function getAllCommentairesByPhoto(int $id): array {
    global $connection;

    $query = "SELECT
                id,
                contenu,
                date_creation
            FROM commentaire
            WHERE photo_id = :id
            ORDER BY date_creation;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
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
    $stmt->bindParam(':mesage', $message);
    $stmt->bindParam(':specialite_id', $specialite_id);

    $stmt->execute();
}
