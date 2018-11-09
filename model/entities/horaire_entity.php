<?php

function getAllHoraires(): array {
    global $connection;

    $query = "SELECT 
        horaire.jour,
        horaire.numero_jour,
        DATE_FORMAT(horaire.debut, '%k') AS 'debut_format',
        DATE_FORMAT(horaire.fin, '%k') AS 'fin_format'
        FROM horaire;";
            
            $stmt = $connection->prepare($query);
    $stmt->execute();
    
        return $stmt->fetchAll();
}

function updateHoraires(int $id, string $debut, string $fin) {
    global $connection;

    $query = "UPDATE horaire SET debut = :debut, fin = :fin  WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":debut", $debut);
    $stmt->bindParam(":fin", $fin);
    $stmt->execute();
}