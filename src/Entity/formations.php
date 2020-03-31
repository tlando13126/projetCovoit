<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< Updated upstream
 * @ORM\Entity(repositoryClass="App\Repository\FormationsRepository")
=======
 * @ORM\Entity()
 * @ORM\Table(name="Formations")
>>>>>>> Stashed changes
 */
class Formations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\filieres", inversedBy="formations")
     * @ORM\OneToMany(targetEntity="App\Entity\SemaineFormation", inversedBy="formations")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
