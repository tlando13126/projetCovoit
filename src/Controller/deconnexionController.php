<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class deconnexionController extends AbstractController
{
    /**
     * @Route("/pages/deconnexion", name="deconnexion")
     */
    function deconnexion()
    {
        // Deconnecter $_SESSION
        $cheminControllerConnexion = "connexion";
        return $this->render('pages/index.html.twig', ['connexionController' => $cheminControllerConnexion]);
    }
}