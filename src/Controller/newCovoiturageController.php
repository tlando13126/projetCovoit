<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class newCovoiturageController extends AbstractController
{
    /**
     * @Route("/pages/newCovoiturage", name="newCovoiturage")
     */
    function index()
    {
        $cheminControllerAdd = "add";
        return $this->render('pages/newCovoiturage.html.twig', ['addController' => $cheminControllerAdd]);
    }
}