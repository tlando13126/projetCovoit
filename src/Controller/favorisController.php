<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class favorisController extends AbstractController
{
    /**
     * @Route("/pages/favoris", name="favoris")
     */
    function favoris()
    {
         if (extension_loaded ('PDO')) {
            $etatPDO = 'PDO OK'; 
        } else {
            $etatPDO = 'PDO KO'; 
        }
        
        return $this->render('pages/trajets.html.twig', ['etatPDO' => $etatPDO]);
    }
}
