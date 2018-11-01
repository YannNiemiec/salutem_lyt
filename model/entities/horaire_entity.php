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
