<?php

function insertDocteur(string $nom, string $prenom, string $image, string $presentation, string $tel, string $mail) {
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
}

function updateDocteur(int $id, string $nom, string $prenom, string $image, string $presentation, string $tel, string $mail) {
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
}