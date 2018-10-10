<?php

function getSpecialiteByDocteur(int $id): array {
    global $connection;

    $query = "SELECT
                id,
                libelle
            FROM specialite
            INNER JOIN docteur_has_specialite ON docteur_has_specialite.specialite_id = specialite.id
            WHERE docteur_has_specialite.docteur_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSpecialite(string $libelle) {
    global $connection;

    $query = "INSERT INTO specialite (libelle) VALUES (:libelle)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->execute();
}

function updateSpecialite(int $id, string $libelle) {
    global $connection;

    $query = "UPDATE specialite SET libelle = :libelle WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->execute();
}
