<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('maerepinmarkBundle_homepage', new Route('/maere/{name}', array(
    '_controller' => 'maerepinmarkBundle:Default:index',
)));

return $collection;
