<?php

namespace Odysseus\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Attributproduit", inversedBy="categoriecategory")
     * @ORM\JoinTable(name="categorie_has_attributproduit",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Categorie_idCategory", referencedColumnName="idCategorie")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="AttributProduit_idAttributProduit", referencedColumnName="idAttributProduit")
     *   }
     * )
     */
    private $attributproduitattributproduit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attributproduitattributproduit = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idcategorie
     *
     * @return integer 
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categorie
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

    /**
     * Add attributproduitattributproduit
     *
     * @param \Odysseus\FrontBundle\Entity\Attributproduit $attributproduitattributproduit
     * @return Categorie
     */
    public function addAttributproduitattributproduit(\Odysseus\FrontBundle\Entity\Attributproduit $attributproduitattributproduit)
    {
        $this->attributproduitattributproduit[] = $attributproduitattributproduit;

        return $this;
    }

    /**
     * Remove attributproduitattributproduit
     *
     * @param \Odysseus\FrontBundle\Entity\Attributproduit $attributproduitattributproduit
     */
    public function removeAttributproduitattributproduit(\Odysseus\FrontBundle\Entity\Attributproduit $attributproduitattributproduit)
    {
        $this->attributproduitattributproduit->removeElement($attributproduitattributproduit);
    }

    /**
     * Get attributproduitattributproduit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributproduitattributproduit()
    {
        return $this->attributproduitattributproduit;
    }
}
