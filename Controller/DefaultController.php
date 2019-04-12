<?php

include_once 'AbstractController.php';

/**
 * Une action correspond à une page de mon site.
 * Une action n'est rien d'autre qu'une fonction.
 */
class DefaultController extends AbstractController
{

    /**
     * Page d'Accueil
     */
    public function home()
    {
        # Récupération des articles dans la BDD par exemple...
        # $articles = ...

        # Transmission des informations à la vue.
        $this->render('default/home');
    }

    /**
     * Page de Présentation
     */
    public function presentation()
    {
        $this->render('default/presentation');
    }

    /**
     * Page Contact
     */
    public function contact()
    {
        $this->render('default/contact');
    }

}