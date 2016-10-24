<?php

namespace BestDeal\CommandeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BestDeal\MainBundle\Entity\Tempproduit;
use BestDeal\CommandeBundle\Form\TempproduitType;
use BestDeal\MainBundle\Entity\CommandeInfo;
use BestDeal\MainBundle\Entity\Commande;



/**
 * Tempproduit controller.
 *
 */
class TempproduitController extends Controller {

    /**
     * Lists all Tempproduit entities1.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BestDealMainBundle:Tempproduit')->findAll();

        return $this->render('BestDealCommandeBundle:Tempproduit:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Tempproduit entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Tempproduit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tempproduit_show', array('id' => $entity->getId())));
        }

        return $this->render('BestDealCommandeBundle:Produit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function ajoutAction($id) {
        $entity = new Tempproduit();


        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository("BestDealCommandeBundle:Client")->find(1);
        $produit = $em->getRepository("BestDealMainBundle:Produit")->find($id);
        $entity->setIdClient($client);
        $entity->setIdProduit($produit);
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('produit'));
    }

    public function confirmerAction() {
        $entity = new Commande();


        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository("BestDealBestDealMainBundle:Client")->find(1);
        $entity->setIdClient($client);
        $entity->setDateRes(new \DateTime);
        $em->persist($entity);
        $em->flush();


        $produitTemps = $em->getRepository('BestDealMainBundle:Tempproduit')->findAll();
        

        foreach ($produitTemps as $produitTemp) {
            $commandeInfo = new CommandeInfo();
            
            $commandeInfo->setIdCommande($entity);
            $commandeInfo->setIdProduit($produitTemp->getIdProduit());          
            $qte=1;
            $commandeInfo->setQte($qte);
            
            $qte_commande=$commandeInfo->getQte();
            $qte_prod_initial=$commandeInfo->getIdProduit()->getQteProduit();
            
            $qte_prod=$qte_prod_initial-$qte_commande;
            $commandeInfo->getIdProduit()->setQteProduit($qte_prod);
            
            

//            $count = CommandeInfo::$counter - 1;
            
            $em->persist($commandeInfo);
            $em->flush();
            $em->remove($produitTemp);
            $em->flush();
        }


//             $produit=$em->getRepository("BestDealCommandeBundle:Produit")->find($id);
//            $entity->setIdClient($client);
//            $entity->setIdProduit($produit);
//            $em->persist($entity);
//            $em->flush();

        return $this->redirect($this->generateUrl('tempproduit'));
    }

    public function bool2str($bool) {
        if ($bool === false) {
            return 'FALSE';
        } else {
            return 'TRUE';
        }
    }

    public function compareObjects(&$o1, &$o2) {
        return bool2str($o1 == $o2);
    }

    /**
     * Creates a form to create a Tempproduit entity.
     *
     * @param Tempproduit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tempproduit $entity) {
        $form = $this->createForm(new TempproduitType(), $entity, array(
            'action' => $this->generateUrl('tempproduit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tempproduit entity.
     *
     */
    public function newAction() {
        $entity = new Tempproduit();
        $form = $this->createCreateForm($entity);

        return $this->render('BestDealMainBundle:Produit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tempproduit entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealMainBundle:Tempproduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tempproduit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BestDealMainBundle:Produit:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Tempproduit entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealMainBundle:Tempproduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tempproduit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BestDealCommandeBundle:Produit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Tempproduit entity.
     *
     * @param Tempproduit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Tempproduit $entity) {
        $form = $this->createForm(new TempproduitType(), $entity, array(
            'action' => $this->generateUrl('tempproduit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Tempproduit entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealMainBundle:Tempproduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tempproduit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tempproduit_edit', array('id' => $id)));
        }

        return $this->render('BestDealCommandeBundle:Produit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tempproduit entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BestDealMainBundle:Tempproduit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tempproduit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tempproduit'));
    }

    /**
     * Creates a form to delete a Tempproduit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tempproduit_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
