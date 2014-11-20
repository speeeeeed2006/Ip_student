<?php

namespace Odysseus\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="fk_Commande_modePaiement1_idx", columns={"modePaiement"}), @ORM\Index(name="fk_Commande_etat1_idx", columns={"etatId"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientId", type="integer", nullable=false)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="clientIp", type="string", length=45, nullable=false)
     */
    private $clientip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime", nullable=false)
     */
    private $datecommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="datetime", nullable=false)
     */
    private $datepaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var \Modepaiement
     *
     * @ORM\ManyToOne(targetEntity="Modepaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modePaiement", referencedColumnName="idModePaiement")
     * })
     */
    private $modepaiement;

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
     * @ORM\ManyToMany(targetEntity="Produit", inversedBy="commandecommande")
     * @ORM\JoinTable(name="commande_has_produit",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Commande_idCommande", referencedColumnName="idCommande")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Produit_idProduit", referencedColumnName="idProduit")
     *   }
     * )
     */
    private $produitproduit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produitproduit = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idcommande
     *
     * @return integer 
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set clientid
     *
     * @param integer $clientid
     * @return Commande
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return integer 
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set clientip
     *
     * @param string $clientip
     * @return Commande
     */
    public function setClientip($clientip)
    {
        $this->clientip = $clientip;

        return $this;
    }

    /**
     * Get clientip
     *
     * @return string 
     */
    public function getClientip()
    {
        return $this->clientip;
    }

    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     * @return Commande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime 
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set datepaiement
     *
     * @param \DateTime $datepaiement
     * @return Commande
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return \DateTime 
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set modepaiement
     *
     * @param \Odysseus\FrontBundle\Entity\Modepaiement $modepaiement
     * @return Commande
     */
    public function setModepaiement(\Odysseus\FrontBundle\Entity\Modepaiement $modepaiement = null)
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    /**
     * Get modepaiement
     *
     * @return \Odysseus\FrontBundle\Entity\Modepaiement 
     */
    public function getModepaiement()
    {
        return $this->modepaiement;
    }

    /**
     * Set etatid
     *
     * @param \Odysseus\FrontBundle\Entity\Etat $etatid
     * @return Commande
     */
    public function setEtatid(\Odysseus\FrontBundle\Entity\Etat $etatid = null)
    {
        $this->etatid = $etatid;

        return $this;
    }

    /**
     * Get etatid
     *
     * @return \Odysseus\FrontBundle\Entity\Etat 
     */
    public function getEtatid()
    {
        return $this->etatid;
    }

    /**
     * Add produitproduit
     *
     * @param \Odysseus\FrontBundle\Entity\Produit $produitproduit
     * @return Commande
     */
    public function addProduitproduit(\Odysseus\FrontBundle\Entity\Produit $produitproduit)
    {
        $this->produitproduit[] = $produitproduit;

        return $this;
    }

    /**
     * Remove produitproduit
     *
     * @param \Odysseus\FrontBundle\Entity\Produit $produitproduit
     */
    public function removeProduitproduit(\Odysseus\FrontBundle\Entity\Produit $produitproduit)
    {
        $this->produitproduit->removeElement($produitproduit);
    }

    /**
     * Get produitproduit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduitproduit()
    {
        return $this->produitproduit;
    }
}
