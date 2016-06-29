<?php
// src/BackendBundle/Entity/Type.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="types_enquette")
 * 
 */
class Type
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Enquette", mappedBy="type")
     */
    private $enquettes;

    /**
     * @ORM\OneToMany(targetEntity="TypeResponse", mappedBy="type")
     */
    private $responses;

    public function __construct()
    {
        $this->enquettes = new ArrayCollection();
        $this->responses = new ArrayCollection();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setName($newName){
        $this->name = $newName;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function __toString(){
        return $this->name;
    }
}
