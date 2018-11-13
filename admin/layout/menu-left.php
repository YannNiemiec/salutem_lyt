<?php require_once __DIR__ . '/../../functions.php'; ?>

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive('/admin/', true) ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/rendez-vous") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/rendez-vous/">
                    <i class="fa fa-calendar"></i>
                    Rendez-vous
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/docteurs") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/docteurs/">
                    <i class="fa fa-user-md"></i>
                    Docteurs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/specialités") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/specialites/">
                    <i class="fa fa-star"></i>
                    Spécialités
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/horaires") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/horaires/">
                    <i class="fa fa-hourglass-half"></i>
                    Horaires
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/reseaux") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/reseaux/">
                    <i class="fa fa-hand-peace-o"></i>
                    Réseaux
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/contacts") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/contacts/">
                    <i class="fa fa-info"></i>
                    Contacts
                </a>
            </li>
        </ul>

    </div>
</nav>