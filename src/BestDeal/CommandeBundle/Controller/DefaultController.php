<?php

namespace BestDeal\CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BestDealCommandeBundle:Default:index.html.twig', array('name' => $name));
    }
}
