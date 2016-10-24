<?php

namespace BestDeal\CommandeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BestDeal\MainBundle\Entity\CommandeInfo;
use BestDeal\CommandeBundle\Form\CommandeInfoType;

/**
 * CommandeInfo controller.
 *
 */
class CommandeInfoController extends Controller
{

    /**
     * Lists all CommandeInfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BestDealCommandeBundle:CommandeInfo')->findAll();

        return $this->render('BestDealCommandeBundle:CommandeInfo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CommandeInfo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CommandeInfo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commandeinfo_show', array('id' => $entity->getId())));
        }

        return $this->render('BestDealCommandeBundle:CommandeInfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a CommandeInfo entity.
    *
    * @param CommandeInfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CommandeInfo $entity)
    {
        $form = $this->createForm(new CommandeInfoType(), $entity, array(
            'action' => $this->generateUrl('commandeinfo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CommandeInfo entity.
     *
     */
    public function newAction()
    {
        $entity = new CommandeInfo();
        $form   = $this->createCreateForm($entity);

        return $this->render('BestDealCommandeBundle:CommandeInfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CommandeInfo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealCommandeBundle:CommandeInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommandeInfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BestDealCommandeBundle:CommandeInfo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing CommandeInfo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealCommandeBundle:CommandeInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommandeInfo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BestDealCommandeBundle:CommandeInfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CommandeInfo entity.
    *
    * @param CommandeInfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CommandeInfo $entity)
    {
        $form = $this->createForm(new CommandeInfoType(), $entity, array(
            'action' => $this->generateUrl('commandeinfo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CommandeInfo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BestDealCommandeBundle:CommandeInfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CommandeInfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commandeinfo_edit', array('id' => $id)));
        }

        return $this->render('BestDealCommandeBundle:CommandeInfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CommandeInfo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BestDealCommandeBundle:CommandeInfo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CommandeInfo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commandeinfo'));
    }

    /**
     * Creates a form to delete a CommandeInfo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commandeinfo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
