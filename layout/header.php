<?php
require_once "functions.php";
require_once "model/database.php";
$infos = getEntity("contact", 1);
$liste_reseaux= getAllEntities("reseaux");
$jour = date("N");
$heure = date("G");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header>
            <div class="header-top">
                <div class="container">
                    <div class="social-networks">
                        <?php foreach ($liste_reseaux as $reseau):?>
                            <a href="#"><i class="fa fa-<?php echo $reseau["icone"]?>"></i></a>
                        <?php endforeach;?>
                    </div>
                    <div class="contact-infos">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:<?php echo $infos["tel"]; ?>"><?php echo $infos["tel"]; ?></a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:<?php echo $infos["mail"];?>"><?php echo $infos["mail"];?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="logo">
                        <i class="fa fa-heartbeat"></i>
                        Salutem
                    </div>
                    <div class="status">
                        Votre centre est actuellement 
                        <?php if($jour<6 AND $jour>0 AND $heure<17 AND $heure>9) {
                            echo '<span class="open">ouvert</span>';
                        } elseif ($jour>5 AND $jour<7 AND $heure>9 AND $heure<12) {
                            echo '<span class="open">ouvert</span>';
                    } else {
                        echo '<span class="close">fermé</span>';
                    }
?>
                        
                   
                    </div>
                </div>
            </div>