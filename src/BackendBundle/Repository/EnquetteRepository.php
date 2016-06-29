<?php

namespace BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EnquetteRepository extends EntityRepository 
{
    /**
     * 
     * Retourne le nombre d'enquette par type 
     * 
     */
    public function getNbrEnquetteByTheme(){
         $query = $this->getEntityManager()
                      ->createQueryBuilder()
                      ->select('count(e.id) as nbr, IDENTITY(e.theme) as id')
                      ->from($this->_entityName, 'e')
                      ->groupBy('e.theme')
                      ->getQuery();
        $results = $query->getResult();
        $nbrEnquette = array();
        foreach($results as $result){
            $nbrEnquette[$result['id']] = $result['nbr'];
        }
        
        return $nbrEnquette;
    }
}