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
        return $this->render('pages/trajets.html.twig');
    }
}