<?php
// src/BackendBundle/Entity/TypeResponse.php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="types_responses")
 * 
 */
class TypeResponse
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="BackendBundle\Entity\Type", inversedBy="responses")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
     
    protected $type;
    
     /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     */
    private $type_value;
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setTypeValue($newValue){
        $this->type_value = $newValue;
    }
    
    public function getTypeValue(){
        return $this->type_value;
    }
    
    public function setType($newType){
        $this->type = $newType;
    }
    
    public function getType(){
        return $this->type;
    }
    
}