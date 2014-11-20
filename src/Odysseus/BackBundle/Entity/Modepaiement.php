<?php

namespace Odysseus\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modepaiement
 *
 * @ORM\Table(name="modepaiement")
 * @ORM\Entity
 */
class Modepaiement
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="idModePaiement", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;



    /**
     * Get idmodepaiement
     *
     * @return boolean 
     */
    public function getIdmodepaiement()
    {
        return $this->idmodepaiement;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Modepaiement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
