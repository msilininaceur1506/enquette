<?php
// src/AppBundle/Entity/Professional.php

namespace UserBundle\Entity;

use UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Professional extends User
{
    /**
	 * raison sociale
	 * @ORM\Column(type="string", length=100)
	*/
    protected $raison_social;
    
    
    public function __construct(){
        parent::__construct();
        $this->user_type = 'professional';
        $this->roles = array('ROLE_PRO');
    }

    public function getRaisonSocial(){
        return $this->raison_social;
    }
    
    
    public function setRaisonSocial($raison){
        $this->raison_social = $raison;
    }
    
    public function __toString(){
        return $this->raison_social;
    }
}