<?php

function getAllDocteursBySpecialite ($id) {
    global $connection;
    
    $query = "SELECT docteur.id, docteur.nom FROM docteur
            INNER JOIN docteur_has_specialite ON docteur_has_specialite.specialite_id = specialite.id
            WHERE docteur_has_specialite.specialite_id = :id;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetchAll();

}

function insertDocteur(string $nom, string $prenom, string $image, string $presentation, string $tel, string $mail, array $specialite_ids) {
    global $connection;

    $query = "INSERT INTO docteur (nom, prenom, image, presentation, tel, mail) VALUES (:nom, :prenom, :image, :presentation, :tel, :mail)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':presentation', $presentation);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    
    $id = $connection->lastInsertId();
    
    foreach($specialite_ids as $specialite_id) {
        insertDocteurHasSpecialite($id, $specialite_id);
    }
}

function insertDocteurHasSpecialite(int $docteur_id, int $specialite_id) {
    global $connection;
    
    $query = "INSERT INTO docteur_has_specialite (docteur_id, specialite_id) VALUES (:docteur_id, :specialite_id)";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":docteur_id", $docteur_id);
    $stmt->bindParam(":specialite_id", $specialite_id);
    $stmt->execute();
}


function updateDocteur(int $id, string $nom, string $prenom, string $image, string $presentation, string $tel, string $mail, array $specialite_ids) {
    global $connection;

    $query = "UPDATE docteur SET nom = :nom, prenom = :prenom, image = :image, presentation = :presentation, tel = :tel, mail = :mail WHERE id = :id";

    $stmt = $connection->prepare($query);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':presentation', $presentation);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    
    deleteDocteurHasSpecialite($id);
    
    foreach ($specialite_ids as $specialite_id) {
        insertDocteurHasSpecialite($id, $specialite_id);
    }
}

function deleteDocteurHasSpecialite(int $docteur_id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM docteur_has_specialite WHERE docteur_id = :docteur_id";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":docteur_id", $docteur_id);
    $stmt->execute();
}

