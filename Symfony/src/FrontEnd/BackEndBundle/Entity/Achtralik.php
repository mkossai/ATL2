<?php

namespace FrontEnd\BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achtralik
 */
class Achtralik
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @var integer
     */
    private $disabled;


    /**
     * @ORM\ManyToOne(targetEntity="CategoryAtl", inversedBy="atls")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Achtralik
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Achtralik
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Achtralik
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     * @return Achtralik
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    
        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime 
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Achtralik
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var string
     */
    private $auteur;


    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Achtralik
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
    /**
     * @var string
     */

    /**
     * @var string
     */
    private $sex;


    /**
     * Set sex
     *
     * @param string $sex
     * @return Achtralik
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * @var integer
     */
    private $bonne;

    /**
     * @var integer
     */
    private $merite;


    /**
     * Set bonne
     *
     * @param integer $bonne
     * @return Achtralik
     */
    public function setBonne($bonne)
    {
        $this->bonne = $bonne;
    
        return $this;
    }

    /**
     * Get bonne
     *
     * @return integer 
     */
    public function getBonne()
    {
        return $this->bonne;
    }

    /**
     * Set merite
     *
     * @param integer $merite
     * @return Achtralik
     */
    public function setMerite($merite)
    {
        $this->merite = $merite;
    
        return $this;
    }

    /**
     * Get merite
     *
     * @return integer 
     */
    public function getMerite()
    {
        return $this->merite;
    }



    /**
     * Set disabled
     *
     * @param integer $disabled
     * @return Achtralik
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
    
        return $this;
    }

    /**
     * Get disabled
     *
     * @return integer 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }


    /**
     * @var string
     */
    private $actif;


    /**
     * Set actif
     *
     * @param string $actif
     * @return Achtralik
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    
        return $this;
    }

    /**
     * Get actif
     *
     * @return string 
     */
    public function getActif()
    {
        return $this->actif;
    }
}