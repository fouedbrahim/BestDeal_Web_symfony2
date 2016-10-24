<?php

namespace BestDeal\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BestDeal\MainBundle\Entity\Categorie;

class CategorieController extends Controller {

    public function categoriesAction() {
        $em = $this->container->get('Doctrine')->getEntityManager();
        $categories = $em->getRepository('BestDealMainBundle:Categorie')->findAll();
        return $this->render('BestDealArticleBundle:Categorie:categories.html.twig', array('categories' => $categories
                ));
    }

}
?>
