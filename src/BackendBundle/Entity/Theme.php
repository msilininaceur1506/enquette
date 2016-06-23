<?php
// src/BackendBundle/Entity/Theme.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
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
    
    
    
    public function setName($newName){
        $this->name = $newName;
    }
    
    public function getName(){
        return $this->name;
    }
}
