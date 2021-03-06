<?php
// src/BackendBundle/Entity/Theme.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\EnquetteRepository")
 * @ORM\Table(name="enquettes")
 * 
 */
class Enquette
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="BackendBundle\Entity\Theme", inversedBy="enquettes")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     */
    private $theme;
    
    /**
     * @ORM\ManyToOne(targetEntity="BackendBundle\Entity\Type", inversedBy="enquettes")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;
    
    
   /**
	 * Titre
	 * @ORM\Column(type="string", length=50, nullable=false)
	 * 
	 */ 
    private $titre;
    
     /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="enquettes")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    
    private $authorised_user;
    
    private $authorised_group;
    /**
	 * Description
	 * @ORM\Column(type="string", length=100)
	*/
    private $description;
    
    /**
     * @var \DateTime $created_at
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created_at;
    
    /**
     * @var \DateTime $updated_at
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated_at;
 
    /**
	 * Active
	 * @ORM\Column(type="boolean")
	*/
    private $active;
    
    /**
	 * Public
	 * @ORM\Column(type="boolean")
	*/
    private $public; 
    
    /**
     * @ORM\OneToMany(targetEntity="BackendBundle\Entity\EnquetteResponse", mappedBy="enquette")
     */
    private $responses;
    
    public function getId(){
        return $this->id;
    }
    
    public function setTheme($newTheme){
        $this->theme = $newTheme;
    }
    
    public function getTheme(){
        return $this->theme;
    }
    
    
    public function setType($newType){
        $this->type = $newType;
    }
    
    public function getType(){
        return $this->type;
    }
    
    
    public function setTitre($newTitre){
        $this->titre = $newTitre;
    }
    
    public function getTitre(){
        return $this->titre;
    }
    
    public function setDescription($newDesc){
        $this->description = $newDesc;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setCreatedAt($creDate){
        $this->created_at = $creDate;
    }
    
    public function getCreatedAt(){
        return $this->created_at;
    }
    
    
     public function setUpdatedAt($upDate){
        $this->updated_at = $upDate;
    }
    
    public function getUpdatedAt(){
        return $this->updated_at;
    }
    
    public function setActive($newActiv){
        $this->active = $newActiv;
    }
    
    public function isActive(){
        return $this->active;
    }
    
    public function setUser($newUser){
        $this->user = $newUser;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function isPublic(){
        return ($this->public == true);
    }
    
    public function setPblic($public){
        $this->public = $public;
    }
    
    public function getResponses(){
        return $this->responses;
    }
    
    public function __toString(){
        return $this->titre;
    }
}
