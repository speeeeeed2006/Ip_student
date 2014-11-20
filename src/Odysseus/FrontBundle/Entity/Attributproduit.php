<?php

namespace Odysseus\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attributproduit
 *
 * @ORM\Table(name="attributproduit")
 * @ORM\Entity
 */
class Attributproduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAttributProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idattributproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorieId", type="integer", nullable=true)
     */
    private $categorieid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="attributproduitattributproduit")
     */
    private $categoriecategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoriecategory = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idattributproduit
     *
     * @return integer 
     */
    public function getIdattributproduit()
    {
        return $this->idattributproduit;
    }

    /**
     * Set nom
     *
     * @param integer $nom
     * @return Attributproduit
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
     * Set categorieid
     *
     * @param integer $categorieid
     * @return Attributproduit
     */
    public function setCategorieid($categorieid)
    {
        $this->categorieid = $categorieid;

        return $this;
    }

    /**
     * Get categorieid
     *
     * @return integer 
     */
    public function getCategorieid()
    {
        return $this->categorieid;
    }

    /**
     * Add categoriecategory
     *
     * @param \Odysseus\FrontBundle\Entity\Categorie $categoriecategory
     * @return Attributproduit
     */
    public function addCategoriecategory(\Odysseus\FrontBundle\Entity\Categorie $categoriecategory)
    {
        $this->categoriecategory[] = $categoriecategory;

        return $this;
    }

    /**
     * Remove categoriecategory
     *
     * @param \Odysseus\FrontBundle\Entity\Categorie $categoriecategory
     */
    public function removeCategoriecategory(\Odysseus\FrontBundle\Entity\Categorie $categoriecategory)
    {
        $this->categoriecategory->removeElement($categoriecategory);
    }

    /**
     * Get categoriecategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoriecategory()
    {
        return $this->categoriecategory;
    }
}
