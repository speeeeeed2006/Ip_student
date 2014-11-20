<?php

namespace Odysseus\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_Produit_SousCategorie1_idx", columns={"sousCategorieId"}), @ORM\Index(name="fk_Produit_Etat1_idx", columns={"etatId"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=40, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorieId", type="integer", nullable=false)
     */
    private $categorieid;

    /**
     * @var string
     *
     * @ORM\Column(name="Produitcol", type="string", length=45, nullable=false)
     */
    private $produitcol;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=false)
     */
    private $image;

    /**
     * @var \Souscategorie
     *
     * @ORM\ManyToOne(targetEntity="Souscategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sousCategorieId", referencedColumnName="idSousCategorie")
     * })
     */
    private $souscategorieid;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etatId", referencedColumnName="idEtat")
     * })
     */
    private $etatid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", mappedBy="produitproduit")
     */
    private $commandecommande;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandecommande = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set nom
     *
     * @param integer $nom
     * @return Produit
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
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Produit
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set categorieid
     *
     * @param integer $categorieid
     * @return Produit
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
     * Set produitcol
     *
     * @param string $produitcol
     * @return Produit
     */
    public function setProduitcol($produitcol)
    {
        $this->produitcol = $produitcol;

        return $this;
    }

    /**
     * Get produitcol
     *
     * @return string 
     */
    public function getProduitcol()
    {
        return $this->produitcol;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set souscategorieid
     *
     * @param \Odysseus\BackBundle\Entity\Souscategorie $souscategorieid
     * @return Produit
     */
    public function setSouscategorieid(\Odysseus\BackBundle\Entity\Souscategorie $souscategorieid = null)
    {
        $this->souscategorieid = $souscategorieid;

        return $this;
    }

    /**
     * Get souscategorieid
     *
     * @return \Odysseus\BackBundle\Entity\Souscategorie 
     */
    public function getSouscategorieid()
    {
        return $this->souscategorieid;
    }

    /**
     * Set etatid
     *
     * @param \Odysseus\BackBundle\Entity\Etat $etatid
     * @return Produit
     */
    public function setEtatid(\Odysseus\BackBundle\Entity\Etat $etatid = null)
    {
        $this->etatid = $etatid;

        return $this;
    }

    /**
     * Get etatid
     *
     * @return \Odysseus\BackBundle\Entity\Etat 
     */
    public function getEtatid()
    {
        return $this->etatid;
    }

    /**
     * Add commandecommande
     *
     * @param \Odysseus\BackBundle\Entity\Commande $commandecommande
     * @return Produit
     */
    public function addCommandecommande(\Odysseus\BackBundle\Entity\Commande $commandecommande)
    {
        $this->commandecommande[] = $commandecommande;

        return $this;
    }

    /**
     * Remove commandecommande
     *
     * @param \Odysseus\BackBundle\Entity\Commande $commandecommande
     */
    public function removeCommandecommande(\Odysseus\BackBundle\Entity\Commande $commandecommande)
    {
        $this->commandecommande->removeElement($commandecommande);
    }

    /**
     * Get commandecommande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandecommande()
    {
        return $this->commandecommande;
    }
}
