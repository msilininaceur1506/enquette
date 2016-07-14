<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfessionelController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $mesEnquettes = $em->getRepository('BackendBundle:Enquette')->getListEnquetteByUser($user->getId());
        return $this->render('BackendBundle:Pro:index.html.twig', array('mesEnquettes'=>$mesEnquettes));
    }
}