<?php
// src/BackendBundle/Entity/Theme.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ThemeRepository")
 * @ORM\Table(name="themes_enquette")
 * 
 */
class Theme
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
     * @ORM\OneToMany(targetEntity="Enquette", mappedBy="theme")
     */
    private $enquettes;

    public function __construct()
    {
        $this->enquettes = new ArrayCollection();
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
    
    public function getEnquettes(){
        return $this->enquettes;
    }
    
    public function __toString(){
        return $this->name;
    }
}
