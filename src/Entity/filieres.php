<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="filieres")
 */
class Filieres {
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
     * @ORM\OneToMany(targetEntity="App\Entity\Utilisateurs")
     */
    public $utilisateur;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Formations")
     */
    public $formation;

}