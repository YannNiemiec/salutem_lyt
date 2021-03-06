<?php

function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

/**
 * Affiche le contenu du fichier header.php
 * @param string $title Titre de la page
 * @param string $description MetaDescription de la page
 */
function getHeader(string $title, string $description, array $stylesheets = []) {
    require_once 'layout/header.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}

function isActive(string $url, bool $endWith = false): bool {
    if (
            (!$endWith && strpos($_SERVER['REQUEST_URI'], $url))
            || ($endWith && endsWith($_SERVER['REQUEST_URI'], $url))
            ) {
        return true;
    }
    return false;
}

function endsWith(string $str, string $search): bool {
    $length = strlen($search);
    return substr($str, -$length) === $search;
}

