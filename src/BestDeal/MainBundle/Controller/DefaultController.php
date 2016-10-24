<?php

namespace BestDeal\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     public function indexAction()
    {
      /*  $usr= $this->container->get('security.context')->getToken()->getUser();
       // $a=$usr->getId();
         $a=$usr->getUser_type();
       
         
        return $this->render('BestDealMainBundle:Default:index.html.twig',array('usr'=>$a));*/
         
  
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deals = $em->getRepository('BestDealMainBundle:Produit')->findAll();
            
       return $this->render('BestDealMainBundle:Default:index.html.twig',array('deals'=>$deals));
    
     
    }
  
    /* public function indexAction()
    {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $produits = $em->getRepository('BestDealMainBundle:Produit')->findAll();
            
       return $this->render('BestDealMainBundle:Default:index.html.twig',array('produits'=>$produits));
    }
     */
}
