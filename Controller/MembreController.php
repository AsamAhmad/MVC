<?php

include_once 'AbstractController.php';

class MembreController extends AbstractController
{
    public function connexion()
    {
        $this->render('membre/connexion');
    }

    public function inscription()
    {
        $this->render('membre/inscription');
    }
}