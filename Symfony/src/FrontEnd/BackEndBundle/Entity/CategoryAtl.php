<?php

namespace FrontEnd\BackEndBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use FrontEnd\BackEndBundle\Entity\Achtralik;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAtl
 */
class CategoryAtl
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @ORM\OneToMany(targetEntity="Achtralik", mappedBy="category")
     */
    protected $atls;

    public function __construct()
    {
        $this->atls = new ArrayCollection();
    }

    public function getAtls()
    {
        return $this->atls;
    }

    public function updateAtlEtat(Achtralik $a){
        $updatesatls = $this->atls;
        $test = false;
        //if(is_array($updatesatls)){
        foreach ($updatesatls as $value) {

            var_dump($value->getId());

            var_dump($a->getId());
            
            if($value->getId() == $a->getId()){

                var_dump($a);
                echo "valeur de value avant ".$value->getDisabled();
                echo "valeur de a avant ".$a->getDisabled();
                $value->setDisabled($a->getDisabled());
                $value->setMerite($a->getMerite());
                $value->setCategory($a->getCategory());
                echo "valeur de value apres ".$value->getDisabled();
                $test = true;
               die("dakhel if");
                break;
                echo "khrej men boucle";
            }
          
            

            }
            if($test == false){
                echo "in the loop";
                $this->addAtl($a);

                $this->getAtlsActifs();
                die();
            }
                
            
        //}

    }

    public function getAtlsActifs(){
       $atlsactifs = $this->atls;
        
        foreach ($atlsactifs as $key => $value) {
            var_dump($value->getId());

        }

        return $atlsactifs;
    }
    /**
    * Add Atl
    *
    * @param Achtralik $atl
    */
    public function addAtl(Achtralik $atl)
   {
       $this->atls[] = $atl;
   }    

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
     * Set name
     *
     * @param string $name
     * @return CategoryAtl
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return CategoryAtl
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return CategoryAtl
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set atls
     *
     * @param \stdClass $atls
     * @return CategoryAtl
     */
    public function setAtls(Achtralik $atl = null)
    {
        $this->atls = $atl;
    
        return $this;
    }

}