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
                <a class="nav-link <?php echo isActive("/crud/formulaires") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/formulaires/">
                    <i class="fa fa-picture-o"></i>
                    Formulaires
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/docteurs") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/docteurs/">
                    <i class="fa fa-picture-o"></i>
                    Docteurs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/specialités") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/specialites/">
                    <i class="fa fa-picture-o"></i>
                    Spécialités
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/horaires") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/horaires/">
                    <i class="fa fa-comments"></i>
                    Horaires
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/contacts") ? 'active' : ''; ?>" href="<?php echo $site_admin; ?>crud/contacts/">
                    <i class="fa fa-comments"></i>
                    Contacts
                </a>
            </li>
        </ul>

    </div>
</nav>