<?php

namespace BestDeal\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BestDealArticleBundle:Default:index.html.twig', array('name' => $name));
    }
   
    
}
