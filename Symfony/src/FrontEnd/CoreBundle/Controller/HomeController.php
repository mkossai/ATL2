<?php

namespace FrontEnd\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FrontEnd\BackEndBundle\Entity\Achtralik;
use FrontEnd\BackEndBundle\Form\AchtralikType;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$atls = $em->getRepository('BackEndBundle:Achtralik')->findBy(array('disabled' => 1 ), array('id' => 'desc'));
    	
    	$categorys = $em->getRepository('BackEndBundle:CategoryAtl')->findAll();

        return $this->render('CoreBundle:Home:index.html.twig', array('atls' => $atls, 'cats' => $categorys));
    }

    public function publicateAction(){
	$user = $this->container->get('security.context')->getToken()->getUser();
    	$request = $this->getRequest();
        if($request->isXmlHttpRequest()){
        	if($request->isMethod('POST')){
			        $entity  = new Achtralik();
			        $form = $this->createForm(new AchtralikType(), $entity);
			        $form->bind($request);
		            $a = $form->getData();
		            
		            $sexe = $this->getRequest()->request->get('sexe');
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
		            $entity->setSex($sexe);
		            $entity->setMerite(0);
		            $entity->setBonne(0);
		            $entity->setActif(0);
		            $em->persist($entity);
		            $em->flush();
		            $em->clear();

		            return new Response('<div class="alert alert-success">Votre ATL a bien été soumis à nos modérateurs, une fois validée elle sera publiée</div>');
        	}
        }

    }

        public function categoryAction($name){
        	$em = $this->getDoctrine()->getManager();
        	$category = $em->getRepository('BackEndBundle:CategoryAtl')->findByName($name);
        	$categorys = $em->getRepository('BackEndBundle:CategoryAtl')->findAll();

        	$atls = $category[0]->getAtls();
        	$category[0]->getAtlsActifs();


        	return $this->render('CoreBundle:Home:category.html.twig', array('atls' => $atls, 'cats' => $categorys));
        } 

        public function modererAction(){
        	$em = $this->getDoctrine()->getManager();
        	$categorys = $em->getRepository('BackEndBundle:CategoryAtl')->findAll();
        	$atls = $categorys[0]->getAtls();
        	return $this->render('CoreBundle:Home:moderer.html.twig', array('atl' => $atls, 'cats' => $categorys));
        	
        } 

        public function bienmeriteAction($id){
		        $em =  $this->getDoctrine()->getManager();
		        $atls = $em->getRepository('BackEndBundle:Achtralik')->findAll();
		        $request = $this->getRequest();
		        if($request->isXmlHttpRequest()){
		            if($request->isMethod('GET')){ 
		                    $atl = new Achtralik();
		                    $atl = $em->getRepository('BackEndBundle:Achtralik')->find($id);
		                    $atl->setMerite($atl->getMerite() + 1);
		                    $em->flush();    
		                
		                return new Response($atl->getMerite());
		                
		            }
		        }
        } 

		function encrypt($data) {
			$key = "df1256:;";  // Clé de 8 caractères max
			$data = serialize($data);
			$td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
			$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
			mcrypt_generic_init($td,$key,$iv);
			$data = base64_encode(mcrypt_generic($td, '!'.$data));
			mcrypt_generic_deinit($td);
			return $data;
		}

		function decrypt($data) {
			$key = "df1256:;";
			$td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
			$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
			mcrypt_generic_init($td,$key,$iv);
			$data = mdecrypt_generic($td, base64_decode($data));
			mcrypt_generic_deinit($td);

			if (substr($data,0,1) != '!')
			    return false;

			$data = substr($data,1,strlen($data)-1);
			return unserialize($data);
		}
}
