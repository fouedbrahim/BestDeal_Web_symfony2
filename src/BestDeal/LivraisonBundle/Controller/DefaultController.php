<?php

namespace BestDeal\LivraisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BestDeal\MainBundle\Entity\Livraison;

class DefaultController extends Controller
{
    public function indexAction()
    {     
        
        return $this->render('BestDealLivraisonBundle:Default:index.html.twig', array());
    }
    public function addAction($adresse){
         $liv = new Livraison();
         $em = $this->container->get('Doctrine')->getEntityManager();
        //  $liv->setAdresse($adresse);
          
          $request=  $this->getRequest();
          if ($request->getMethod()=='POST')
         {
         $a=$this->get('request')->request->get('a');
         $liv->setAdresse($a);
         $liv->setEtat(1);
         $em->persist($liv);
             $em->flush();
             //Redirection
            return $this->redirect($this->generateUrl('map_homepage'));
         }
         else {
             //Ajout Base de donnée
             //echo "suite a un post";   
             $liv->setAdresse($adresse);
          $liv->setEtat(1);
             $em->persist($liv);
             $em->flush();
             //Redirection
            return $this->redirect($this->generateUrl('map_homepage'));
         }
    }
}
