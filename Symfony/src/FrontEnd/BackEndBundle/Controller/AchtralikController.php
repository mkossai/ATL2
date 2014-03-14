<?php

namespace FrontEnd\BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FrontEnd\BackEndBundle\Entity\Achtralik;
use FrontEnd\BackEndBundle\Form\AchtralikType;

/**
 * Achtralik controller.
 *
 */
class AchtralikController extends Controller
{

    /**
     * Lists all Achtralik entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackEndBundle:Achtralik')->findBy(array('disabled' => 1), array('id' => 'ASC'));

        return $this->render('BackEndBundle:Achtralik:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Achtralik entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Achtralik();
        $form = $this->createForm(new AchtralikType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $a = $form->getData();
            $user = $this->container->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $entity->setCreatedAt(new \Datetime());
            $entity->setPublishedAt(new \Datetime());
            $entity->setAuteur($user->getUsername());
            $entity->setIp($_SERVER["REMOTE_ADDR"]);
            $entity->setDisabled(0);
            $category = $a->getCategory();
            $entity->setCategory($category);
            $cat = $em->getRepository('BackEndBundle:CategoryAtl')->findByName($category->getName());
            $cat[0]->addAtl($entity);

            $entity->setMerite(0);
            $entity->setBonne(0);
            $entity->setActif(0);            
            $em->persist($entity);
            $em->persist($cat[0]);
            $em->flush();
            $em->clear();

            return $this->redirect($this->generateUrl('admin_achtralik_show', array('id' => $entity->getId())));
        }

        return $this->render('BackEndBundle:Achtralik:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Achtralik entity.
     *
     */
    public function newAction()
    {
        $entity = new Achtralik();
        $form   = $this->createForm(new AchtralikType(), $entity);
        return $this->render('BackEndBundle:Achtralik:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Achtralik entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Achtralik')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achtralik entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $categoryName = $entity->getCategory()->getName();
        return $this->render('BackEndBundle:Achtralik:show.html.twig', array(
            'entity'      => $entity,
            'category'    => $categoryName,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Achtralik entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackEndBundle:Achtralik')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achtralik entity.');
        }
        $entity->setCategory('');
        $editForm = $this->createForm(new AchtralikType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackEndBundle:Achtralik:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Achtralik entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BackEndBundle:Achtralik')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achtralik entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $entity->setCategory('');
        $editForm = $this->createForm(new AchtralikType(), $entity);
        $editForm->bind($request);
        if ($editForm->isValid()) {

            $cat = $entity->getCategory();
            $cat->updateAtlEtat($entity);
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_achtralik_edit', array('id' => $id)));
        }

        return $this->render('BackEndBundle:Achtralik:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Achtralik entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackEndBundle:Achtralik')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Achtralik entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_achtralik'));
    }

    /**
     * Creates a form to delete a Achtralik entity by id.
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

    public function validateAction(){
        $em =  $this->getDoctrine()->getManager();
        $query = $em->getRepository('BackEndBundle:Achtralik')->createQueryBuilder('p')
            ->where('p.disabled = :val')
            ->setParameter('val', '0')
            ->orderBy('p.id', 'DESC')
            ->getQuery();        
        $atls = $query->getResult();
        $request = $this->getRequest();

        if($request->isMethod('POST')){
            $idAtl = $this->getRequest()->request->get('idAtl');
            $actifAls = $this->getRequest()->request->get('actifAls');
            
            foreach ($idAtl as $key => $id) {
                $atl = new Achtralik();
                $atl = $em->getRepository('BackEndBundle:Achtralik')->find($id);
                $atl->setDisabled($actifAls[$key]);

                echo $catname = $atl->getCategory()->getName();
                
                 $cat = $atl->getCategory();
                 $cat->getAtlsActifs();
                 die("");
                //$cat->updateAtlEtat($atl);
                $em->persist($atl);
                $em->flush();    
            }
            return $this->render('BackEndBundle:Achtralik:index.html.twig', array('entities' => $atls));
            
        }
        return $this->render('BackEndBundle:Achtralik:validate.html.twig', array(
                                                    'entities' => $atls, 
                                                    ));
    }

    public function deserveAction(){
        $em =  $this->getDoctrine()->getManager();
        $atls = $em->getRepository('BackEndBundle:Achtralik')->findAll();
        $request = $this->getRequest();
        if($request->isXmlHttpRequest()){
            if($request->isMethod('POST')){
                $idAtl = $this->getRequest()->request->get('idAtl');
                $countmerite = $this->getRequest()->request->get('countmerite');
                $coountvalide = $this->getRequest()->request->get('coountvalide');

                foreach ($idAtl as $key => $id) {
                    $atl = new Achtralik();
                    $atl = $em->getRepository('BackEndBundle:Achtralik')->find($id);
                    $atl->setMerite($countmerite[$key]);
                    $atl->setBonne($coountvalide[$key]);
                    $em->flush();    
                }
                return new Response('<div class="alert alert-success">Votre compteur de mérite à bien été mis à jour !</a>');
                
            }
        }

    }
}
