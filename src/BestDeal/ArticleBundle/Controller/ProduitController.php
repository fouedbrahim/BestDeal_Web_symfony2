<?php

namespace BestDeal\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BestDeal\MainBundle\Entity\Produit;

class ProduitController extends Controller {
    
     public function categorieRechercheAction($idCat) {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $produit = $em->getRepository('BestDealMainBundle:Produit')->findBy(array('idCat'=>$idCat));
        return $this->render('BestDealArticleBundle:Deal:rechercheCat.html.twig', array('deal' => $produit
                ));
    }
    public function infosDeal($idProduit) {
        
        /*l'ORM traite les entities seulement*/
         $em = $this->container->get('Doctrine')->getEntityManager();
         $deal = $em->getRepository('BestDealMainBundle:Produit')->find($idProduit);
         //$form = $this->container->get('form.factory')->create(new ModeleForm, $modele);
          $request = $this->getRequest(); /* récupére les informations contenues dans l'url */
        if ($request->getMethod() == "GET") {
            //$form->bind($request);

               return $this->redirect($this->generateUrl('best_deal_panier'));
         // return $this->render('BestDealArticleBundle:Produit:infosDeal.html.twig', /* Modele ici est le nom du dossier de la page dans le view */ array(
           //         'deal' => $deal
             //           ));
    }
        
    }


}
?>
