<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\MovieRepository")
 */
class Movie
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
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Company", cascade={"persist"})
     */
    private $companies;
    
    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Cast", cascade={"persist"})
     */
    private $casts;
    
    /**
     * @var string
     *
     * @ORM\Column(name="frTitle", type="string", length=255)
     */
    private $frTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="enTitle", type="string", length=255)
     */
    private $enTitle;
    
     /**
     * @var string
     *
     * @ORM\Column(name="music", type="string", length=255)
     */
    private $music;
    
     /**
     * @var string
     *
     * @ORM\Column(name="screenplay", type="string", length=255)
     */
    private $screenplay;
    
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="plot", type="text")
     */
    private $plot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releaseDate", type="date")
     */
    private $releaseDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="runningTime", type="time")
     */
    private $runningTime;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;


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
     * Set frTitle
     *
     * @param string $frTitle
     *
     * @return Movie
     */
    public function setFrTitle($frTitle)
    {
        $this->frTitle = $frTitle;

        return $this;
    }

    /**
     * Get frTitle
     *
     * @return string
     */
    public function getFrTitle()
    {
        return $this->frTitle;
    }

    /**
     * Set enTitle
     *
     * @param string $enTitle
     *
     * @return Movie
     */
    public function setEnTitle($enTitle)
    {
        $this->enTitle = $enTitle;

        return $this;
    }

    /**
     * Get enTitle
     *
     * @return string
     */
    public function getEnTitle()
    {
        return $this->enTitle;
    }

    /**
     * Set plot
     *
     * @param string $plot
     *
     * @return Movie
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return string
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return Movie
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set runningTime
     *
     * @param \DateTime $runningTime
     *
     * @return Movie
     */
    public function setRunningTime($runningTime)
    {
        $this->runningTime = $runningTime;

        return $this;
    }

    /**
     * Get runningTime
     *
     * @return \DateTime
     */
    public function getRunningTime()
    {
        return $this->runningTime;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Movie
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add company
     *
     * @param \BackBundle\Entity\Company $company
     *
     * @return Movie
     */
    public function addCompany(\BackBundle\Entity\Company $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \BackBundle\Entity\Company $company
     */
    public function removeCompany(\BackBundle\Entity\Company $company)
    {
        $this->companies->removeElement($company);
    }

    /**
     * Get companies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * Add cast
     *
     * @param \BackBundle\Entity\Cast $cast
     *
     * @return Movie
     */
    public function addCast(\BackBundle\Entity\Cast $cast)
    {
        $this->casts[] = $cast;

        return $this;
    }

    /**
     * Remove cast
     *
     * @param \BackBundle\Entity\Cast $cast
     */
    public function removeCast(\BackBundle\Entity\Cast $cast)
    {
        $this->casts->removeElement($cast);
    }

    /**
     * Get casts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCasts()
    {
        return $this->casts;
    }

    /**
     * Set music
     *
     * @param string $music
     *
     * @return Movie
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return string
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Movie
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set screenplay
     *
     * @param string $screenplay
     *
     * @return Movie
     */
    public function setScreenplay($screenplay)
    {
        $this->screenplay = $screenplay;

        return $this;
    }

    /**
     * Get screenplay
     *
     * @return string
     */
    public function getScreenplay()
    {
        return $this->screenplay;
    }
    
    public function __toString(){
        return $this->getEnTitle();
    }

     
   
}
