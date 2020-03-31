<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class monCompteController extends AbstractController
{
    /**
     * @Route("/pages/monCompte", name="monCompte")
     */
    function monCompte()
    {
         if (extension_loaded ('PDO')) {
            $etatPDO = 'PDO OK'; 
        } else {
            $etatPDO = 'PDO KO'; 
        }
        
        return $this->render('pages/trajets.html.twig', ['etatPDO' => $etatPDO]);
    }
}
