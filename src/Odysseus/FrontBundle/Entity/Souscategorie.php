<?php

namespace Odysseus\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscategorie
 *
 * @ORM\Table(name="souscategorie", indexes={@ORM\Index(name="fk_SousCategorie_Categorie1_idx", columns={"categorieId"})})
 * @ORM\Entity
 */
class Souscategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSousCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsouscategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorieId", referencedColumnName="idCategorie")
     * })
     */
    private $categorieid;



    /**
     * Get idsouscategorie
     *
     * @return integer 
     */
    public function getIdsouscategorie()
    {
        return $this->idsouscategorie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Souscategorie
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
     * Set categorieid
     *
     * @param \Odysseus\FrontBundle\Entity\Categorie $categorieid
     * @return Souscategorie
     */
    public function setCategorieid(\Odysseus\FrontBundle\Entity\Categorie $categorieid = null)
    {
        $this->categorieid = $categorieid;

        return $this;
    }

    /**
     * Get categorieid
     *
     * @return \Odysseus\FrontBundle\Entity\Categorie 
     */
    public function getCategorieid()
    {
        return $this->categorieid;
    }
}
