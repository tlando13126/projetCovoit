<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< Updated upstream
 * @ORM\Entity(repositoryClass="App\Repository\SemaineFormationRepository")
=======
 * @ORM\Entity()
 * @ORM\Table(name="SemaineFormation")
>>>>>>> Stashed changes
 */
class SemaineFormation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\formations", inversedBy="SemaineFormation")
     */
    private $semaine;

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
}
