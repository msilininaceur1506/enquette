<?php
// src/BackendBundle/Entity/EnquetteResponse.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="enquettes_responses")
 * 
 */
class EnquetteResponse
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="responses")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
     
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="BackendBundle\Entity\TypeResponse")
     * @ORM\JoinColumn(name="type_reponse_id", referencedColumnName="id")
     */
    private $type_reponse;
    
    /**
     * @ORM\ManyToOne(targetEntity="BackendBundle\Entity\Enquette", inversedBy="responses")
     * @ORM\JoinColumn(name="enquette_id", referencedColumnName="id")
     */
    private $enquette;
    
    
     /**
	 * Valid
	 * @ORM\Column(type="boolean")
	*/
    private $valid;
    
    public function getId(){
        return $this->id;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setUser($newUser){
        $this->user = $newUser;
    }
    
    public function setTypeReponse($type_reponse){
        $this->type_reponse = $type_reponse;
    }
    
    public function getTypeReponse(){
        return $this->type_reponse;
    }
    
    public function setEnquette($newEnquette){
        $this->enquette = $newEnquette;
    }
    
    public function getEnquette(){
        return $this->enquette;
    }
    
    public function setValid($valid){
        $this->valid = $valid;;
    }
    
    public function isValid(){
        return ($this->valid == true);
    }
    
    
}