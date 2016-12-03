<?php

namespace AE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity(repositoryClass="AE\PlatformBundle\Repository\AgenceRepository")
 */
class Agence
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var responsable
     * 
     * @ORM\ManyToMany(targetEntity="AE\PlatformBundle\Entity\Responsable", cascade={"persist"})
     */
    private $responsable;
    
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Agence
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Agence
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Agence
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
     * @return Agence
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
     * Constructor
     */
    public function __construct()
    {
        $this->responsable = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add responsable
     *
     * @param \OC\PlatformBundle\Entity\Responsable $responsable
     *
     * @return Agence
     */
    public function addResponsable(\OC\PlatformBundle\Entity\Responsable $responsable)
    {
        $this->responsable[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \OC\PlatformBundle\Entity\Responsable $responsable
     */
    public function removeResponsable(\OC\PlatformBundle\Entity\Responsable $responsable)
    {
        $this->responsable->removeElement($responsable);
    }

    /**
     * Get responsable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}
