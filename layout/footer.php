<?php
require_once "functions.php";
require_once "model/database.php";
$infos = getEntity("contact", 1);
$liste_horaires = getAllHoraires();
$today = date("N");
?>

<footer class="main-footer">
    <section class="container">
        <article>
            <div class="logo">
                <i class="fa fa-heartbeat"></i>
                Salutem
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis, dolorem doloremque iste molestiae nulla officiis provident quas quos, rerum sapiente sed sint voluptas? Accusantium asperiores dolor dolores in libero?</p>
        </article>
        <article>
            <h3>Nous contacter</h3>
            <ul class="contact-infos">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $infos["mail"];?>"><?php echo $infos["mail"];?></a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:<?php echo $infos["tel"]; ?>"><?php echo $infos["tel"]; ?></a>
                </li>
                <li>
                    <i class="fa fa-ambulance"></i>
                    <a href="tel:<?php echo $infos["tel_urgence"]; ?>"><?php echo $infos["tel_urgence"]; ?></a>
                </li>
            </ul>
        </article>
        <article>
            <h3>Horaires d'ouverture</h3>
            <table class="opening-hours">
                <?php foreach ($liste_horaires as $horaire): ?>
                        <tr <?php
                        if ($today == $horaire["numero_jour"])
                            echo 'class="today"'
                            ?>>
                            <td><?php echo $horaire["jour"] ?></td>
                            <td class = "hours">
                                <?php
                                if (empty($horaire["debut_format"])) {
                                    echo 'Fermé';
                                } else {
                                    echo $horaire["debut_format"] . 'h - ' . $horaire["fin_format"] . 'h';
                                }
                                ?></td>
                        </tr>
<?php endforeach; ?>
            </table>
        </article>
    </section>
</footer>

</body>
</html>