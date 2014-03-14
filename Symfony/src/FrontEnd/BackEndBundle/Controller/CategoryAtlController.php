<?php

namespace FrontEnd\BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FrontEnd\BackEndBundle\Entity\CategoryAtl;
use FrontEnd\BackEndBundle\Form\CategoryAtlType;

/**
 * CategoryAtl controller.
 *
 */
class CategoryAtlController extends Controller
{

    /**
     * Lists all CategoryAtl entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackEndBundle:CategoryAtl')->findAll();

        return $this->render('BackEndBundle:CategoryAtl:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CategoryAtl entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new CategoryAtl();
        $form = $this->createForm(new CategoryAtlType(), $entity);
        $form->bind($request);
        
        if ($form->isValid()) {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $entity->setCreatedat(new \DateTime());
            $entity->setCreatedBy($user->getUsername());
            $entity->setAtls();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoryatl_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:CategoryAtl:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new CategoryAtl entity.
     *
     */
    public function newAction()
    {
        $entity = new CategoryAtl();
        $form   = $this->createForm(new CategoryAtlType(), $entity);

        return $this->render('BackEndBundle:CategoryAtl:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoryAtl entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:CategoryAtl')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryAtl entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:CategoryAtl:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing CategoryAtl entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:CategoryAtl')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryAtl entity.');
        }

        $editForm = $this->createForm(new CategoryAtlType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:CategoryAtl:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing CategoryAtl entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:CategoryAtl')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoryAtl entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CategoryAtlType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoryatl_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:CategoryAtl:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CategoryAtl entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:CategoryAtl')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategoryAtl entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoryatl'));
    }

    /**
     * Creates a form to delete a CategoryAtl entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
