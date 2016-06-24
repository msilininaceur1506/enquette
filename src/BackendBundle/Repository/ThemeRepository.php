<?php

namespace BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ThemeRepository extends EntityRepository 
{
    public function getAllOrderByName(){
        $query = $this->getEntityManager()
                      ->createQueryBuilder()
                      ->select('a')
                      ->from($this->_entityName, 'a')
                      ->orderBy('a.name', 'ASC')
                      ->getQuery();
                      
        return  $query->getResult();
    }
}