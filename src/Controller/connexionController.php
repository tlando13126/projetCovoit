<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class connexionController extends AbstractController
{
    /**
     * @Route("/pages/connexion", name="connexion")
     */
    function connexion() {

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        // Appel de la base de données pour la connexion
        // Récupération des données
        // Vérification et validation si valeurs correctes

        return $this->render('pages/trajets.html.twig', ['password' => $password, 'email' => $email]);
    }
}