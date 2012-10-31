<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('maerepinmarkBundle_homepage', new Route('/', array(
    '_controller' => 'maerepinmarkBundle:Default:index'
))
);
$collection->add('maerepinmarkBundle_hastewas', new Route('/latest', array(
    '_controller' => 'maerepinmarkBundle:latest:index'
))
);




return $collection;
