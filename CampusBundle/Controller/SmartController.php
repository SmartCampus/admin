<?php

namespace Smart\CampusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Smart\CampusBundle\Entity\Capteur;
use Smart\CampusBundle\Form\CapteurType;

/** Controller du SmartCampus */
class SmartController extends Controller
{
    /** Index du SmartCampus */
    public function indexAction()
    {
        $tag = $this->getRequest()->query->get('kind');
        
        $capAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Capteur')
                ->findAll();
        
        return $this->render('SmartCampusBundle:Smart:index.html.twig', array('cmp' => count($capAll), 'capAll' => $capAll, 'tag' => $tag));
    }

//-----------------------------------------------------------------------------------------------------
    
    /** Afiche un capteur en particulier */
	public function voirAction($id)
	{
        
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Capteur')
                ->find($id);

        if($cap === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        return $this->render('SmartCampusBundle:Smart:voir.html.twig', array('capteur' => $cap));
        
        //P-B : Afficher un message sans page et avec un tag:
		//return new Response("Affichage du capteur : ".$id." avec le type : ".$tag);
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Ajouter un capteur a la BD */
	public function ajouterAction()
	{		
        $cap = new Capteur();
        $form = $this->createForm(new CapteurType, $cap);
        
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($cap);
                $em->flush();
                
                //P-B : Generer du JSON :
                //$id = 9;
                //$response = new Response(json_encode(array('id' => $id)));
                //$response->headers->set('Content-Type', 'application/json');
                //return $response; TODO : enregistrer le Json et l'envoyer a l'autre base
                
                return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $cap->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajout.html.twig', array('form' => $form->createView(),));
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Modifier les infos d'un capteur */
	public function modifierAction($id)
	{
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Capteur')
                ->find($id);
        
        if($cap === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        $form = $this->createForm(new CapteurType, $cap);
        
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);

            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cap);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Modification enregistré avec succès');

            return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $cap->getId())));
          }
        }
        
        return $this->render('SmartCampusBundle:Smart:modif.html.twig', array('form' => $form->createView(), 'capteur'=>$cap,));
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Supprimer un capteur de la BD */
	public function supprimerAction($id)
	{
        
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Capteur')
                ->find($id);
        
        if($cap === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        $form = $this->createFormBuilder()->getForm();

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST')
        {
          $form->bind($request);

          if ($form->isNotValid())
          {
            throw $this->createNotFoundException('ERREUR : formulaire.');
            
          }
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($cap);
        $em->flush();

        return $this->redirect($this->generateUrl('smartcampus_accueil'));
	}
    
//-----------------------------------------------------------------------------------------------------
    
    /** Redirige sur la page triee */
	public function redirectAction()
	{
        $kind = $_POST['kind'];
        
        /*return new Response("kind : ".$kind);*/
        
        /*return $this->redirect($this->generateUrl('smartcampus_accueil', array('kind' => $kind));*/
        
        return $this->render('SmartCampusBundle:Smart:redirect.html.twig', array('kind' => $kind));
	}
}