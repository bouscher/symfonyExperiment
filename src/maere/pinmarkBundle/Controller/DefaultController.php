<?php

namespace maere\pinmarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends Controller
{
    
    public function indexAction($name='Nothing much')
    {
        $response =$this->render('maerepinmarkBundle:Default:index.html.twig', array('name' => $name.' has been inputted'));
        
        return $response;
    }
}
