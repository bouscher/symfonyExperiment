<?php

namespace EphemeroidTest\EphemeroidtestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EphemeroidtestBundle:Default:index.html.twig', array('name' => $name));
    }
}
