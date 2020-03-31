<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class compteController extends AbstractController
{
    /**
     * @Route("/pages/compte", name="compte")
     */
    function compte()
    {
        $cheminControllerMaj = "majCompte";
        return $this->render('pages/compte.html.twig', ['majCompteController' => $cheminControllerMaj]);
    }
}