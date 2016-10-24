<?php

namespace BestDeal\ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BestDealReclamationBundle:Default:index.html.twig', array('name' => $name));
    }
}
