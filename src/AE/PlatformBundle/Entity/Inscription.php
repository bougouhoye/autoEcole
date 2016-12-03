<?php

namespace AE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="AE\PlatformBundle\Repository\InscriptionRepository")
 */
class Inscription
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
     * @var responsable 
     * 
     * @ORM\ManyToOne(targetEntity="AE\PlatformBundle\Entity\Responsable")
     */
    private $responsable;
    
    /**
     * @var client
     * 
     * @ORM\OneToOne(targetEntity="AE\PlatformBundle\Entity\Client")
     */
    private $client;
    
    /**
     * @var agence 
     * 
     * @ORM\ManyToOne(targetEntity="AE\PlatformBundle\Entity\Agence")
     */
    private $agence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;
    
    
    public function __construct()
    {
        $this->date = new \Datetime();
    }

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Inscription
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set responsable
     *
     * @param \AE\PlatformBundle\Entity\Responsable $responsable
     *
     * @return Inscription
     */
    public function setResponsable(\AE\PlatformBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \AE\PlatformBundle\Entity\Responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set client
     *
     * @param \AE\PlatformBundle\Entity\Client $client
     *
     * @return Inscription
     */
    public function setClient(\AE\PlatformBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AE\PlatformBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set agence
     *
     * @param \AE\PlatformBundle\Entity\Agence $agence
     *
     * @return Inscription
     */
    public function setAgence(\AE\PlatformBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \AE\PlatformBundle\Entity\Agence
     */
    public function getAgence()
    {
        return $this->agence;
    }
}
