<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class majCompteController extends AbstractController
{
    /**
     * @Route("/pages/majCompte", name="majCompte")
     */
    function majCompte()
    {
        // Appel de la base de données pour la connexion
        // Récupération des données
        // Vérification et validation si valeurs correctes
        $cheminControllerDeconnexion = "deconnexion";
        return $this->render('pages/trajets.html.twig', ['deconnexionController' => $cheminControllerDeconnexion]);
    }
}