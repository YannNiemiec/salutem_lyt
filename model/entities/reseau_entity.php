<?php

function getAllReseaux(): array {
    global $connection;

    $query = "SELECT 
        reseaux.libelle,
        reseaux.lien,
        reseaux.icone
        FROM reseau;";
            
            $stmt = $connection->prepare($query);
    $stmt->execute();
    
        return $stmt->fetchAll();
}

function updateReseau(int $id, string $lien) {
    global $connection;

    $query = "UPDATE reseaux SET lien = :lien WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":lien", $lien);
    $stmt->execute();
}