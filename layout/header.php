<?php
require_once "functions.php";
require_once "model/database.php";
$infos = getEntity("contact", 1);
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
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
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
                        Votre centre est actuellement <span class="open">ouvert</span>
                    </div>
                </div>
            </div>