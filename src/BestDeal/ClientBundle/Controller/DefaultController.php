<?php

namespace BestDeal\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BestDealClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
