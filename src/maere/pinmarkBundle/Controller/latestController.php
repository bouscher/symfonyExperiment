<?php
namespace maere\pinmarkBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class latestController extends Controller{
    public function indexAction(){
        $data=array(
            
        );
        
        $content = $engine->render('AcmeArticleBundle:Article:index.html.twig',$data);
        
        $response=new Response($content);       
        $response->setPublic();
        $response->setPublic();
        $response->setMaxAge(0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $this->render('maereoubnarkBundle:Latest:latest.html.twig',$data);
        return $response;
    }
}
?>
