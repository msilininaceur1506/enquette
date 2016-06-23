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
}