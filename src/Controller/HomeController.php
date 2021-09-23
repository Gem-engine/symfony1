<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @route("/accueil" name="accueil")
     */

    public function afficherAccueil()
    {
        return $this->render('accueil.html.twig');
    }

    /**
     * @route("reglement_interieur" name="reglement_interieur")
     */

    public function afficherReglementInterieur()
    {
        return $this->render('reglement_interieur.html.twig');
    }
}
