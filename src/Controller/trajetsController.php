<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class trajetsController extends AbstractController {

    /**
     * @Route("/pages/trajets", name="trajets")
     */

    function trajets() {
        $cheminControllerDeconnexion = "deconnexion";
        return $this->render('pages/trajets.html.twig', ['deconnexionController' => $cheminControllerDeconnexion]);
    }

}