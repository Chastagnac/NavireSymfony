<?php

namespace App\Entity;

use App\Repository\AisShipeTypeRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=AisShipeTypeRepository::class)
 */
class AisShipeType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(min=1,
     *              max=9,
     *              minMessage = 'Le type d'un navire est comprus entre 1 et 9",
     *              maxMessage = 'Le type d'un navire est comprus entre 1 et 9",
     *              allowEmptyString = false
     *              )
     */
    private $aisShipType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getAisShipType(): ?string
    {
        return $this->aisShipType;
    }

    public function setAisShipType(string $aisShipType): self
    {
        $this->aisShipType = $aisShipType;

        return $this;
    }
}
