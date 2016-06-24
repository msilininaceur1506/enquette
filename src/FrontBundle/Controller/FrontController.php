<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackendBundle\Entity\ThemeRepository;

class FrontController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $themes = $em->getRepository('BackendBundle:Theme')->getAllOrderByName();
        return $this->render('FrontBundle:Front:index.html.twig', array('themes'=>$themes));
    }
}