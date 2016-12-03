<?php

namespace AE\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="AE\PlatformBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @var int
     *
     * @ORM\Column(name="premiere_tranche", type="integer")
     */
    private $premiereTranche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paie_prem_tranche", type="datetimetz")
     */
    private $datePaiementPremiereTranche;

    /**
     * @var int
     *
     * @ORM\Column(name="deuxieme_ranche", type="integer")
     */
    private $deuxiemeTranche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paie_deux_tranche", type="datetimetz")
     */
    private $datePaiementDeuxiemeTranche;


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
     * Set premiereTranche
     *
     * @param integer $premiereTranche
     *
     * @return Paiement
     */
    public function setPremiereTranche($premiereTranche)
    {
        $this->premiereTranche = $premiereTranche;

        return $this;
    }

    /**
     * Get premiereTranche
     *
     * @return int
     */
    public function getPremiereTranche()
    {
        return $this->premiereTranche;
    }

    /**
     * Set datePaiementPremiereTranche
     *
     * @param \DateTime $datePaiementPremiereTranche
     *
     * @return Paiement
     */
    public function setDatePaiementPremiereTranche($datePaiementPremiereTranche)
    {
        $this->datePaiementPremiereTranche = $datePaiementPremiereTranche;

        return $this;
    }

    /**
     * Get datePaiementPremiereTranche
     *
     * @return \DateTime
     */
    public function getDatePaiementPremiereTranche()
    {
        return $this->datePaiementPremiereTranche;
    }

    /**
     * Set deuxiemeTranche
     *
     * @param integer $deuxiemeTranche
     *
     * @return Paiement
     */
    public function setDeuxiemeTranche($deuxiemeTranche)
    {
        $this->deuxiemeTranche = $deuxiemeTranche;

        return $this;
    }

    /**
     * Get deuxiemeTranche
     *
     * @return int
     */
    public function getDeuxiemeTranche()
    {
        return $this->deuxiemeTranche;
    }

    /**
     * Set datePaiementDeuxiemeTranche
     *
     * @param \DateTime $datePaiementDeuxiemeTranche
     *
     * @return Paiement
     */
    public function setDatePaiementDeuxiemeTranche($datePaiementDeuxiemeTranche)
    {
        $this->datePaiementDeuxiemeTranche = $datePaiementDeuxiemeTranche;

        return $this;
    }

    /**
     * Get datePaiementDeuxiemeTranche
     *
     * @return \DateTime
     */
    public function getDatePaiementDeuxiemeTranche()
    {
        return $this->datePaiementDeuxiemeTranche;
    }
}

