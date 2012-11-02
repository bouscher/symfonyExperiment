<?php
namespace maere\pinmarkBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class latestController extends Controller{
    public function indexAction(){
        $data=array(
            'name'=>'Some weired name'
        );
        
        $content = $this->render('maerepinmarkBundle:Latest:latest.html.twig',$data);
        
        $response=new Response($content,'200');       
        $response->headers->set('Content-Type', 'text/html');
        $response->setCharset('utf-8');       
        $response->setPublic();
        $response->setPublic();
        $response->setMaxAge(0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->prepare();
        $response->sendHeaders();
        
        return $content;
    }
}
?>
