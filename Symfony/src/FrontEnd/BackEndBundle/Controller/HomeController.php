<?php

namespace FrontEnd\BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FrontEnd\BackEndBundle\Entity\Achtralik;
use FrontEnd\BackEndBundle\Form\AchtralikType;

class HomeController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$atls = $em->getRepository('BackEndBundle:Achtralik')->findBy(array('disabled' => 1), array('id' => 'ASC'));
    	
        return $this->render('BackEndBundle:Home:index.html.twig', array('atls' => $atls));
    }

    public function publicateAction(){

    	$request = $this->getRequest();
        if($request->isXmlHttpRequest()){
        	if($request->isMethod('POST')){
			        $entity  = new Achtralik();
			        $form = $this->createForm(new AchtralikType(), $entity);
			        $form->bind($request);
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
		            $em->persist($entity);
		            $em->flush();
        	}
        }

    }
}
