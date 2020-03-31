<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SemainesFormationRepository")
 */
class SemainesFormation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $semaine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Formations")
     */
    private $formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemaine(): ?int
    {
        return $this->semaine;
    }

    public function setSemaine(int $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function getFormation(): ?Formations
    {
        return $this->formation;
    }

    public function setFormation(?Formations $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
}
