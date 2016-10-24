<?php

namespace BestDeal\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BestDeal\MainBundle\Entity\Deal;

class DealController extends Controller {

    public function detailAction($id) {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deal = $em->getRepository('BestDealMainBundle:Produit')->find($id);
        $categories =$em->getRepository('BestDealMainBundle:Categorie')->findAll();
//        $dealDeroul =$em->getRepository('BestDealArticleBundle:Deal')->findBy(array('idCat' => $idCat));
//-------------------------------------------------------------
        $query = $em->createQuery('
            SELECT d FROM  BestDealMainBundle:Produit d , BestDealMainBundle:Categorie c 
            
            WHERE d.idCat = c.idCategorie AND 
            d.idProduit = :id'
                )->setParameter('id', 2);
        $otherDeals = $query->getResult();
         $request = $this->getRequest(); 
        if ($request->getMethod() == "GET") {
            return $this->render('BestDealArticleBundle:Deal:detail.html.twig', array('deal' => $deal,'categories'=>$categories , 'others' => $otherDeals  ));           
    }
    
        }
    

    public function rechercheAction() {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deals = $em->getRepository('BestDealArticleBundle:Produit')->findAll();

        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $deals = $em->getRepository('BestDealArticleBundle:Produit')->findBy(array('nomDeal'=> $request->get('search')));
        } else {
            
        }
        return $this->render('BestDealArticleBundle:Deal:recherche.html.twig', array('Deals' => $deals));
    }
    public function rechercheListeAction() {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deals = $em->getRepository('BestDealArticleBundle:Produit')->findAll();

        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $deals = $em->getRepository('BestDealArticleBundle:Produit')->findBy(array('categorie'=> $request->get('search')));
        } else {
            
        }
        return $this->render('BestDealArticleBundle:Deal:recherche.html.twig', array('Deals' => $deals));
    }
    public function priceAction() {
        
        /*l'ORM traite les entities seulement*/
         $em = $this->container->get('Doctrine')->getEntityManager();
         $deal = $em->getRepository('BestDealMainBundle:Produit')->findAll();
          return $this->render('BestDealArticleBundle:Deal:price.html.twig', /* Modele ici est le nom du dossier de la page dans le view */ array(
                    'deals' => $deal
                        ));
        }
       public function descriptionDealAction($id) {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deal = $em->getRepository('BestDealMainBundle:Produit')->find($id);
        return $this->render('BestDealArticleBundle:Deal:descriptionDeal.html.twig', array('deal' => $deal
                ));
    }
         public function rechercheCatAction($idCat) {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $deal = $em->getRepository('BestDealMainBundle:Produit')->findBy(array('idCat'=>$idCat));
        return $this->render('BestDealArticleBundle:Deal:rechercheCat.html.twig', array('deal' => $deal
                ));
    }
}

?>
