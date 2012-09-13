<?php

namespace maere\pinmarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        $shitcrap =$this->render('maerepinmarkBundle:Default:index.html.twig', array('name' => $name.' is an asshole'));
        $shitcrap=$shitcrap;
        $response=new Response("$shitcrap");
        return $response;
    }
}
