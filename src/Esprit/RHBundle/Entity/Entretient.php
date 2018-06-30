<?php

namespace Esprit\RHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entretient
 *
 * @ORM\Table(name="entretient", indexes={@ORM\Index(name="cin", columns={"cin"})})
 * @ORM\Entity(repositoryClass="Esprit\RHBundle\Repository\EntretientsRepository")
 */
class Entretient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=4, nullable=false)
     */
    private $heure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \Esprit\RHBundle\Entity\Candidat
     *
     * @ORM\ManyToOne(targetEntity="Esprit\RHBundle\Entity\Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     * })
     */
    private $cin;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param string $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return Candidat
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param Candidat $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }


}

