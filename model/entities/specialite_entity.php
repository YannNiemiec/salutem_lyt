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

