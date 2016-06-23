<?php
// src/AppBundle/Entity/Particular.php

namespace UserBundle\Entity;

use UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Particular extends User
{
    /**
	 * First Name
	 * @ORM\Column(type="string", length=20)
	*/
    protected $first_name;
    
    /**
	 * Last Name
	 * @ORM\Column(type="string", length=20)
	*/
    protected $last_name;
    
        public function getFirstName(){
        return $this->first_name;
    }
    
    public function setFirstName($first){
        $this->first_name= $first;
    }
    
    public function getLastName(){
        return $this->last_name;
    }
    
    public function setLastName($last){
        $this->last_name= $last;
    }
}