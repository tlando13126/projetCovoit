<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    /**
     * @Route("/pages/index", name="index")
     */
    function index()
    {
         $cheminControllerConnexion = "connexionController";
        
        return $this->render('pages/index.html.twig', ['connexionController' => $cheminControllerConnexion]);
    }
}
