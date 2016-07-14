<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Backend:index.html.twig');
    }
    
    
    public function backendNewEnquetteAction(){
        
    }
}
