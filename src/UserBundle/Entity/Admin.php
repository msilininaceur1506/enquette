<?php
// src/AppBundle/Entity/Admin.php

namespace UserBundle\Entity;

use UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Admin extends User
{
    /**
	 * Name
	 * @ORM\Column(type="string", length=20)
	*/
    protected $name;
    
    public function __construct(){
        parent::__construct();
        $this->user_type = 'admin';
        $this->roles = array('ROLE_ADMIN');
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
}