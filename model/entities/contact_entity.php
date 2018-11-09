<?php

function getAllContacts(): array {
    global $connection;

    $query = "SELECT 
        contact.tel,
        contact.mail,
        contact.adresse,
        contact.tel_urgence
        FROM contact;";
            
            $stmt = $connection->prepare($query);
    $stmt->execute();
    
        return $stmt->fetchAll();
}

function updateContact(int $id, string $tel, string $mail, string $adresse, string $urgence) {
    global $connection;

    $query = "UPDATE contact SET tel = :tel, mail = :mail, adresse = :adresse, tel_urgence = :tel_urgence WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":tel", $tel);
    $stmt->bindParam(":mail", $mail);
    $stmt->bindParam(":adresse", $adresse);
    $stmt->bindParam(":tel_urgence", $urgence);
    $stmt->execute();
}