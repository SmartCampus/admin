<?php

namespace Smart\CampusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
use Smart\CampusBundle\Entity\Propriete;
use Smart\CampusBundle\Form\ProprieteType;

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

// AFFICHAGE -----------------------------------------------------------------------------------------------------
    
    /** Afiche une Board */
	public function voirBAction($id)
	{
        $board = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Board')
                ->find($id);

        if($board === null)
        {
            throw $this->createNotFoundException('Board[id='.$id.'] inexistant.');
        }
        return $this->render('SmartCampusBundle:Smart:voirB.html.twig', array('board' => $board));
	}
    
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
	
// AJOUT -----------------------------------------------------------------------------------------------------
    
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
                
                return $this->redirect($this->generateUrl('smartcampus_accueil', array('tag' => "Board")));
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
                $em->persist($phy->getEndpoint());
                $em->flush();
                
                return $this->redirect($this->generateUrl('smartcampus_voirP', array('id' => $phy->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutP.html.twig', array('form' => $form->createView(),));
	}
    
    /** Ajouter une propriete a un capteur */
	public function ajouterPropAction($id)
	{
        $prop = new Propriete();
        $tag = $this->getRequest()->query->get('tag');
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->find($id);
        
        if($cap === null)
        {
            $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->find($id);
            if($cap === null)
            {
                throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
            }
        }
        $prop->setCapteur($cap);
        $form = $this->createForm(new ProprieteType, $prop);
            
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($prop);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('info', 'Nouvelle propriété ajouté avec succès');
                
                return $this->redirect($this->generateUrl('smartcampus_voir'.$tag, array('id' => $id)));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutProp.html.twig', array('form' => $form->createView(),));
	}

// MODIFICATION -----------------------------------------------------------------------------------------------------
    
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
                $em->merge($phy->getEndpoint());
                $em->persist($phy);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Modification enregistré avec succès');

            return $this->redirect($this->generateUrl('smartcampus_voirP', array('id' => $phy->getId())));
          }
        }
        
        return $this->render('SmartCampusBundle:Smart:modifP.html.twig', array('form' => $form->createView(), 'capteur'=>$phy,));
	}
	
// SUPPRESSION -----------------------------------------------------------------------------------------------------
    
    /** Supprimer un capteur de la BD */
	public function supprimerAction($id)
	{
        
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->find($id);
        
        if($cap === null)
        {
            $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->find($id);
            if($cap === null)
            {
                throw $this->createNotFoundException('Capteur[id='.$id.'] inexistant.');
            }
        }
        
        $form = $this->createFormBuilder()->getForm();

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST')
        {
          $form->bind($request);

          if($form->isNotValid())
          {
            throw $this->createNotFoundException('ERREUR : formulaire.');
            
          }
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($cap);
        $em->flush();

        return $this->redirect($this->generateUrl('smartcampus_accueil'));
	}
    
    /** Supprimer une propriete */
	public function supprimerPropAction($id)
	{
        $tag = $this->getRequest()->query->get('tag');
        $prop = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Propriete')
                ->find($id);
        if($prop === null)
        {
            throw $this->createNotFoundException('Propriété [id='.$id.'] inexistant.');
        }
        
        $idCap = $prop->getCapteur()->getId();
            
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST')
        {
          $form->bind($request);
          if($form->isNotValid())
          {
            throw $this->createNotFoundException('ERREUR : formulaire.');
          }
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($prop);
        $em->flush();

        return $this->redirect($this->generateUrl('smartcampus_voir'.$tag, array('id' => $idCap)));
	}
    
    // JSON -----------------------------------------------------------------------------------------------------	
    
    /** Afficher la liste des capteurs */
    public function sensorsAction()
    {
        $virAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->findAll();
        
        $phyAll = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->findAll();
        
        $cap = array();
        $res = array();
        $response = new JsonResponse();
        
        foreach($virAll as $vir){
            $cap = array('name' => $vir->getName());
            array_push($res, $cap);
        }

        foreach($phyAll as $phy){
            $cap = array('name' => $phy->getName());
            array_push($res, $cap);
        }
        
        $response->setData(array('sensors' => $res));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /** Afficher les details d'un capteur */
    public function sensorAction($name)
    {
        $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Virtuel')
                ->findOneByName($name);
        
        if($cap === null)
        {
            $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->findOneByName($name);
            if($cap === null)
            {
                throw $this->createNotFoundException('Capteur[name='.$name.'] inexistant.');
            }
        }
        
        if($cap instanceof Virtuel)
        {
            $ret = array('name' => $cap->getName(),
                        'kind' => $cap->getKind(),
                        'frequency' => $cap->getFrequency(),
                        'script' => $cap->getScript());
        }
        
        if($cap instanceof Physique)
        {
            $ret = array('name' => $cap->getName(),
                    'kind' => $cap->getKind(),
                    'frequency' => $cap->getFrequency(),
                    'script' => $cap->getBoard(),
                    'script' => $cap->getEndpoint());
        }
        
        $response = new JsonResponse();
        $response->setData(array('sensor' => $ret));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}