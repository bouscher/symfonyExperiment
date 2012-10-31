<?php
namespace maere\pinmarkBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class latestController extends Controller{
    public function indexAction(){
        $data=array(
            
        );
        $response=$this->render('maereoubnarkBundle:Latest:latest.html.twig',$data);
        return $response;
    }
}
?>
