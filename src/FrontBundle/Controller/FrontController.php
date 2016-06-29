<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackendBundle\Entity\ThemeRepository;

class FrontController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('FrontBundle:Front:index.html.twig');
    }
    
    public function listEnqueteAction($theme){
        
        $em = $this->getDoctrine()->getManager();
        
        if(empty($theme))
            throw $this->createNotFoundException('Le nom du thème est obligatoire');
        
        $themeObject =  $em->getRepository('BackendBundle:Theme')->findOneByName($theme);
        if(!$themeObject)
            throw $this->createNotFoundException('Ce theme n\'existe pas');
            
        return $this->render('FrontBundle:Front:listEnquette.html.twig', array('theme'=>$themeObject));
    }
    
    
    public function listThemeAction(){
        $em = $this->getDoctrine()->getManager();
        $themes = $em->getRepository('BackendBundle:Theme')->getAllOrderByName();
        $themesCount = $em->getRepository('BackendBundle:Enquette')->getNbrEnquetteByTheme();
        return $this->render('FrontBundle:Front:listTheme.html.twig', array('themes'=>$themes, 'themesCount'=>$themesCount));
    }
}