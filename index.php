<?php

/**
 * Ici, notre fichier index.php représente
 * notre controleur frontal.
 * ----------------------------
 * C'est donc lui qui se charge de rediriger
 * la requète de l'utilisateur vers le bon
 * controleur en s'aidant des paramètres dans l'URL.
 */

include_once 'Controller/DefaultController.php';
include_once 'Controller/MembreController.php';

# Aperçu de GET
# var_dump($_GET);

# Récupération des paramètres GET
$controller = $_GET['controller'] ?? 'default';
$action = $_GET['action'] ?? 'home';

// --- Zone de Routage du Front Controller

$defaultCtrl = new DefaultController();
$membreCtrl = new MembreController();

if ($controller == 'default' && $action == 'home') {
    //    echo "<h1>JE SUIS LA PAGE D'ACCUEIL</h1>";

    /**
     * Ici, notre front controller, transmet la requète
     * de l'utilisateur vers l'action "home" du "default"
     * controleur.
     */

    $defaultCtrl->home();
}

if ($controller == 'default' && $action == 'contact') {
    $defaultCtrl->contact();
}

if ($controller == 'default' && $action == 'presentation') {
    $defaultCtrl->presentation();
}

if ($controller == 'membre' && $action == 'connexion') {
    $membreCtrl->connexion();
}

if ($controller == 'membre' && $action == 'inscription') {
    $membreCtrl->inscription();
}
