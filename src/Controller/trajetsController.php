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
        if (extension_loaded('PDO')) {
            $etatPDO = 'PDO OK';
        } else {
            $etatPDO = 'PDO KO';
        }

        /*
        mysql_connect("192.168.33.128", "mysql", "nopassword") or die("Impossible de se connecter");
        mysql_select_db("projet_covoit") or die("pas possible de trouver la base");
        $result = mysql_query("SELECT * FROM utlisateurs");
        $nblignes = mysql_num_rows($result);
        */
        return $this->render('pages/trajets.html.twig');
        
    }

}
