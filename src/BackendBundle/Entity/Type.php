<?php
// src/BackendBundle/Entity/Type.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    
    
    
    public function setId($id){
        $this->id = $id;
    }
    public function setName($newName){
        $this->name = $newName;
    }
    
    public function getName(){
        return $this->name;
    }
}
