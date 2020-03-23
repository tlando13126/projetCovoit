<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class accueilController extends AbstractController
{
    /**
     * @Route("/pages/accueil", name="accueil")
     */
    function accueil()
    {
         $chemainControllerConnexion = "connexion";
        
        return $this->render('pages/accueil.html.twig', ['chemainControllerConnexion' => $chemainControllerConnexion]);
    }
}
