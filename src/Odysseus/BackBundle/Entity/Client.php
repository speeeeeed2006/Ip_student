<?php

namespace Odysseus\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="fk_Client_Adresse1_idx", columns={"Adresse_idAdresse"}), @ORM\Index(name="fk_Client_Etat1_idx", columns={"etatId"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=45, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="premium", type="boolean", nullable=false)
     */
    private $premium;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=45, nullable=false)
     */
    private $mdp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="datetime", nullable=false)
     */
    private $datedenaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeCreation", type="datetime", nullable=false)
     */
    private $datedecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeModification", type="datetime", nullable=true)
     */
    private $datedemodification;

    /**
     * @var \Adresse
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Adresse_idAdresse", referencedColumnName="idAdresse")
     * })
     */
    private $adresseadresse;

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
     * Set idclient
     *
     * @param integer $idclient
     * @return Client
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return integer 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Client
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
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
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return Client
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set premium
     *
     * @param boolean $premium
     * @return Client
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean 
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Client
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     * @return Client
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime 
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set datedecreation
     *
     * @param \DateTime $datedecreation
     * @return Client
     */
    public function setDatedecreation($datedecreation)
    {
        $this->datedecreation = $datedecreation;

        return $this;
    }

    /**
     * Get datedecreation
     *
     * @return \DateTime 
     */
    public function getDatedecreation()
    {
        return $this->datedecreation;
    }

    /**
     * Set datedemodification
     *
     * @param \DateTime $datedemodification
     * @return Client
     */
    public function setDatedemodification($datedemodification)
    {
        $this->datedemodification = $datedemodification;

        return $this;
    }

    /**
     * Get datedemodification
     *
     * @return \DateTime 
     */
    public function getDatedemodification()
    {
        return $this->datedemodification;
    }

    /**
     * Set adresseadresse
     *
     * @param \Odysseus\BackBundle\Entity\Adresse $adresseadresse
     * @return Client
     */
    public function setAdresseadresse(\Odysseus\BackBundle\Entity\Adresse $adresseadresse)
    {
        $this->adresseadresse = $adresseadresse;

        return $this;
    }

    /**
     * Get adresseadresse
     *
     * @return \Odysseus\BackBundle\Entity\Adresse 
     */
    public function getAdresseadresse()
    {
        return $this->adresseadresse;
    }

    /**
     * Set etatid
     *
     * @param \Odysseus\BackBundle\Entity\Etat $etatid
     * @return Client
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
}
