<?php

namespace AE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AE\PlatformBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetimetz")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;
    
    /**
     * @var adresse 
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\Adresse", cascade={"persist"})
     */
    private $adresse;
    
    /**
     * @var ville 
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\Ville")
     */
    private $ville;
    
    /**
     * @var categorie
     * 
     * @ORM\ManyToOne(targetEntity="AE\PlatformBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    
    /**
     * @var filiation 
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\Filiation", cascade={"persist"})
     */
    private $filiation;
    
     /**
     * @var paiement 
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\Paiement", cascade={"persist"})
     */
    private $paiement;
    
    /**
     * @var pc 
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\PC", cascade={"persist"})
     */
    private $pc;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
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
     * Set prenom
     *
     * @param string $prenom
     *
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Client
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     *
     * @return Client
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
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
     * Set adresse
     *
     * @param \AE\PlatformBundle\Entity\Adresse $adresse
     *
     * @return Client
     */
    public function setAdresse(\AE\PlatformBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \AE\PlatformBundle\Entity\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set categorie
     *
     * @param \AE\PlatformBundle\Entity\Categorie $categorie
     *
     * @return Client
     */
    public function setCategorie(\AE\PlatformBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AE\PlatformBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set filiation
     *
     * @param \AE\PlatformBundle\Entity\Filiation $filiation
     *
     * @return Client
     */
    public function setFiliation(\AE\PlatformBundle\Entity\Filiation $filiation = null)
    {
        $this->filiation = $filiation;

        return $this;
    }

    /**
     * Get filiation
     *
     * @return \AE\PlatformBundle\Entity\Filiation
     */
    public function getFiliation()
    {
        return $this->filiation;
    }

    /**
     * Set paiement
     *
     * @param \AE\PlatformBundle\Entity\Paiement $paiement
     *
     * @return Client
     */
    public function setPaiement(\AE\PlatformBundle\Entity\Paiement $paiement = null)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return \AE\PlatformBundle\Entity\Paiement
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set pc
     *
     * @param \AE\PlatformBundle\Entity\PC $pc
     *
     * @return Client
     */
    public function setPc(\AE\PlatformBundle\Entity\PC $pc = null)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return \AE\PlatformBundle\Entity\PC
     */
    public function getPc()
    {
        return $this->pc;
    }
}
