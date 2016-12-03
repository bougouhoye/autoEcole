<?php

namespace AE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiation
 *
 * @ORM\Table(name="filiation")
 * @ORM\Entity(repositoryClass="AE\PlatformBundle\Repository\FiliationRepository")
 */
class Filiation
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
     * @ORM\Column(name="nom_pere", type="string", length=255)
     */
    private $nomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_pere", type="string", length=255)
     */
    private $prenomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_mere", type="string", length=255)
     */
    private $prenomMere;


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
     * Set nomPere
     *
     * @param string $nomPere
     *
     * @return Filiation
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere
     *
     * @return string
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set prenomPere
     *
     * @param string $prenomPere
     *
     * @return Filiation
     */
    public function setPrenomPere($prenomPere)
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    /**
     * Get prenomPere
     *
     * @return string
     */
    public function getPrenomPere()
    {
        return $this->prenomPere;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     *
     * @return Filiation
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set prenomMere
     *
     * @param string $prenomMere
     *
     * @return Filiation
     */
    public function setPrenomMere($prenomMere)
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    /**
     * Get prenomMere
     *
     * @return string
     */
    public function getPrenomMere()
    {
        return $this->prenomMere;
    }
}

