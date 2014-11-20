<?php

namespace Odysseus\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attributvaleur
 *
 * @ORM\Table(name="attributvaleur", indexes={@ORM\Index(name="fk_AttributValeur_AttributProduit1_idx", columns={"AttributProduit_idAttributProduit"})})
 * @ORM\Entity
 */
class Attributvaleur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAttributValeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattributvaleur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="integer", nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="AttibutProduitId", type="integer", nullable=false)
     */
    private $attibutproduitid;

    /**
     * @var \Attributproduit
     *
     * @ORM\ManyToOne(targetEntity="Attributproduit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AttributProduit_idAttributProduit", referencedColumnName="idAttributProduit")
     * })
     */
    private $attributproduitattributproduit;



    /**
     * Get idattributvaleur
     *
     * @return integer 
     */
    public function getIdattributvaleur()
    {
        return $this->idattributvaleur;
    }

    /**
     * Set nom
     *
     * @param integer $nom
     * @return Attributvaleur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return integer 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set attibutproduitid
     *
     * @param integer $attibutproduitid
     * @return Attributvaleur
     */
    public function setAttibutproduitid($attibutproduitid)
    {
        $this->attibutproduitid = $attibutproduitid;

        return $this;
    }

    /**
     * Get attibutproduitid
     *
     * @return integer 
     */
    public function getAttibutproduitid()
    {
        return $this->attibutproduitid;
    }

    /**
     * Set attributproduitattributproduit
     *
     * @param \Odysseus\BackBundle\Entity\Attributproduit $attributproduitattributproduit
     * @return Attributvaleur
     */
    public function setAttributproduitattributproduit(\Odysseus\BackBundle\Entity\Attributproduit $attributproduitattributproduit = null)
    {
        $this->attributproduitattributproduit = $attributproduitattributproduit;

        return $this;
    }

    /**
     * Get attributproduitattributproduit
     *
     * @return \Odysseus\BackBundle\Entity\Attributproduit 
     */
    public function getAttributproduitattributproduit()
    {
        return $this->attributproduitattributproduit;
    }
}
