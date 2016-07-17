<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackendBundle\Form\EnquetteType;
use BackendBundle\Entity\Enquette;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Backend:index.html.twig');
    }
    
    
    public function backendNewEnquetteAction($type){
        
        $enq = new Enquette();
        $enqForm = $this->createForm(Enquette, $enq);
        switch($type){
            
            'particulier': 
                return $this->render('BackendBundle:Particulier:newEnquette.html.twig', 'enquette'=>$enquette);
                break;
            'professionel':
                return $this->render('BackendBundle:Pro:newEnquette.html.twig', 'enquette'=>$enquette);
                break;
            'default':
                break;
                
        }
    }
}
