<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('EphemeroidtestBundle_homepage', new Route('/hello/{name}', array(
    '_controller' => 'EphemeroidtestBundle:Default:index',
)));

return $collection;
