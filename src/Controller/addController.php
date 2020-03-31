<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class addController extends AbstractController
{
    /**
     * @Route("/pages/add", name="add")
     */
    function add()
    {
        // Appel de la base de données pour la connexion
        // Récupération des données
        // Vérification et validation si valeurs correctes
        return $this->render('pages/trajets.html.twig');
    }
}