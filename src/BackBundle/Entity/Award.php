<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Award
 *
 * @ORM\Table(name="award")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\AwardRepository")
 */
class Award
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
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Movie")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $movie;
    /**
     * @var string
     *
     * @ORM\Column(name="win", type="string", length=255)
     */
    private $win;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date")
     */
    private $year;


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
     * Set win
     *
     * @param string $win
     *
     * @return Award
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return string
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Award
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set movie
     *
     * @param \BackBundle\Entity\Movie $movie
     *
     * @return Award
     */
    public function setMovie(\BackBundle\Entity\Movie $movie)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \BackBundle\Entity\Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
