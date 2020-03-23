<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="formations")
 */
class formations {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue (strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Filieres", mappedBy="customer")
     */
    public $filiere;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Semaine_formation")
     */
    public $semaine_formation;
}