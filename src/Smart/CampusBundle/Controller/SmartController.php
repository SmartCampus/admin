<?php

namespace Smart\CampusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Smart\CampusBundle\Entity\Capteur;
use Smart\CampusBundle\Entity\Virtuel;
use Smart\CampusBundle\Form\VirtuelType;
use Smart\CampusBundle\Form\VirtuelEditType;
use Smart\CampusBundle\Entity\Physique;
use Smart\CampusBundle\Form\PhysiqueType;
use Smart\CampusBundle\Form\PhysiqueEditType;
use Smart\CampusBundle\Entity\Board;
use Smart\CampusBundle\Form\BoardType;
use Smart\CampusBundle\Entity\Endpoint;
use Smart\CampusBundle\Form\EndpointType;

/** Controller du SmartCampus */
class SmartController extends Controller
{
    /** Index du SmartCampus */
    public function indexAction()
    {        
        $boardAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Board')
                ->findAll();
        
        $virAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->findAll();
        
        $phyAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->findAll();
        
        //recupere le tag dans l'url
        $tag = $this->getRequest()->query->get('tag');
        
        return $this->render('SmartCampusBundle:Smart:index.html.twig', array('tag' => $tag, 'boardAll' => $boardAll, 'virAll' => $virAll, 'phyAll' => $phyAll));
    }

//-----------------------------------------------------------------------------------------------------
    
    /** Afiche un capteur Virtuel */
	public function voirVAction($id)
	{
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->find($id);

        if($cap === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        return $this->render('SmartCampusBundle:Smart:voirV.html.twig', array('capteur' => $cap));
	}
    
    /** Afiche un Physique */
    public function voirPAction($id)
	{
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->find($id);

        if($cap === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        return $this->render('SmartCampusBundle:Smart:voirP.html.twig', array('capteur' => $cap));
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Ajouter une board */
	public function ajouterBAction()
	{		
        $board = new Board();
        $form = $this->createForm(new BoardType, $board);
        
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($board);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('info', 'Nouvelle board ajouté avec succès');
                
                return $this->redirect($this->generateUrl('smartcampus_accueil'));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutB.html.twig', array('form' => $form->createView(),));
	}
    
    /** Ajouter un capteur Virtuel a la BD */
	public function ajouterVAction()
	{		
        $vir = new Virtuel();
        $vir->setScript("Taper ici votre script");
        $form = $this->createForm(new VirtuelType, $vir);
        
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($vir);
                $em->flush();
                
                return $this->redirect($this->generateUrl('smartcampus_voirV', array('id' => $vir->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutV.html.twig', array('form' => $form->createView(),));
	}
    
    /** Ajouter un capteur Physique a la BD */
    public function ajouterPAction()
	{		
        $phy = new Physique();
        $form = $this->createForm(new PhysiqueType, $phy);
        
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($phy);
                /*$em->persist($phy->getBoard());
                $em->persist($phy->getEndpoint());*/
                $em->flush();
                
                return $this->redirect($this->generateUrl('smartcampus_voirP', array('id' => $phy->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutP.html.twig', array('form' => $form->createView(),));
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Modifier les infos d'un capteur Virtuel */
	public function modifierVAction($id)
	{
        $vir = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->find($id);
        
        if($vir === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        $form = $this->createForm(new VirtuelEditType, $vir);
        
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);

            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($vir);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Modification enregistré avec succès');

            return $this->redirect($this->generateUrl('smartcampus_voirV', array('id' => $vir->getId())));
          }
        }
        
        return $this->render('SmartCampusBundle:Smart:modifV.html.twig', array('form' => $form->createView(), 'capteur'=>$vir,));
	}
    
    /** Modifier les infos d'un capteur Physique */
	public function modifierPAction($id)
	{
        $phy = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->find($id);
        
        if($phy === null)
        {
            throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
        }
        
        $form = $this->createForm(new PhysiqueEditType, $phy);
        
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);

            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($phy);
                $em->persist($phy->getBoard());
                $em->persist($phy->getEndpoint());
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Modification enregistré avec succès');

            return $this->redirect($this->generateUrl('smartcampus_voirP', array('id' => $phy->getId())));
          }
        }
        
        return $this->render('SmartCampusBundle:Smart:modifP.html.twig', array('form' => $form->createView(), 'capteur'=>$phy,));
	}
	
//-----------------------------------------------------------------------------------------------------
    
    /** Supprimer un capteur de la BD */
	public function supprimerAction($name)
	{
        
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->find($name);
        
        if($cap === null)
        {
            $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->find($name);
            if($cap === null)
            {
                throw $this->createNotFoundException('Element[name='.$name.'] inexistant.');
            }
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
}

//P-B : Generer du JSON :
//$id = 9;
//$response = new Response(json_encode(array('id' => $id)));
//$response->headers->set('Content-Type', 'application/json');
//return $response; TODO : enregistrer le Json et l'envoyer a l'autre base