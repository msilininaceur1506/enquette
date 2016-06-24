<?php
// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="user_type", type="string")
 * @ORM\DiscriminatorMap({"professional" = "Professional", "user" = "User", "particular" = "Particular", "admin" = "Admin"})
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\Group")
     * @ORM\JoinTable(name="user_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    
    
    /**
	 * Adresse
	 * @ORM\Column(type="string", length=100, nullable=true)
	*/
    protected $adresse;
    
    /**
     * @ORM\OneToMany(targetEntity="BackendBundle\Entity\Enquette", mappedBy="user")
     */
    private $enquettes;

    public function __construct()
    {
        parent::__construct();
        $this->enquettes = new ArrayCollection();
        // your own logic
    }
    
    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($newadresse){
        $this->adresse = $newadresse;
    }
    
    public function __toString(){
        return '';
    }
    
    public function isProfessional(){
        if($this->type == 'Professional')
            return true;
        else
            return false;
    }
    
    public function isAdmin(){
        if($this->type == 'Admin')
            return true;
        else
            return false;
    }
    
    
    public function isParticular(){
        if($this->type == 'Particular')
            return true;
        else
            return false;
    }
    
    
    public function setType($newType){
        $this->type = $newType;
    }
}