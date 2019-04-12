<?php

abstract class AbstractController
{
    /**
     * Afficher une page à l'utilisateur.
     * ------------------
     * Je passe juste a la fonction render
     * le nom du fichier. Par ex : membre/connexion
     */
    public function render($page)
    {
        include_once './View/header.php';
        include_once './View/' . $page . '.php';
        include_once './View/footer.php';
    }
}