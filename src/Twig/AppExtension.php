<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension {
    // On décrit ici nos nouveaux filtres
    public function getFilters() {
        return [
            new TwigFilter('convLettreChiffre', [$this, 'convLC']),
        ];
    }
    // Et ici nos nouvelles fonctions
    public function getFunctions() {
        return [
            // Appellera la fonction LipsumGenerator:generate()
            new TwigFunction('area', [$this, 'calculateArea']),
        ];
    }
    
    public function convLC($phrase, $lettre, $chiffre) {
        $phrase = str_replace($lettre, $chiffre, $phrase);
        return $phrase;
    }
    
    public function calculateArea(int $width, int $length) {
        return $width * $length;
    }
}