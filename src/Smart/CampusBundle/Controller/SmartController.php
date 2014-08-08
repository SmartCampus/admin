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

/** Controller du SmartCampus ================================================================== */
class SmartController extends Controller
{
    /** Index du SmartCampus ------------------------------------------------------------------ */
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

// =====================================================================================================
// AFFICHAGE -------------------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Afiche une Board ------------------------------------------------------------------ */
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
    
    /** Afiche un capteur Virtuel ------------------------------------------------------------------ */
	public function voirAction($id)
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
        
        if($cap instanceof Virtuel)
        {
            return $this->render('SmartCampusBundle:Smart:voirV.html.twig', array('capteur' => $cap));
        }
        if($cap instanceof Physique)
        {
            return $this->render('SmartCampusBundle:Smart:voirP.html.twig', array('capteur' => $cap));
        }
	}
	
// =====================================================================================================
// AJOUT -----------------------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Ajouter une board ------------------------------------------------------------------ */
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
    
    /** Ajouter un capteur Virtuel a la BD ------------------------------------------------------------------ */
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
                
                return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $vir->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutV.html.twig', array('form' => $form->createView(),));
	}
    
    /** Ajouter un capteur Physique a la BD ------------------------------------------------------------------ */
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
                
                return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $phy->getId())));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutP.html.twig', array('form' => $form->createView(),));
	}
    
    /** Ajouter une propriete a un capteur ------------------------------------------------------------------ */
	public function ajouterPropAction($id)
	{
        $prop = new Propriete();
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
                
                return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $id)));
            }
        }
        
        return $this->render('SmartCampusBundle:Smart:ajoutProp.html.twig', array('form' => $form->createView(),));
	}

// =====================================================================================================
// MODIFICATION ----------------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Modifier les infos d'un capteur Virtuel ------------------------------------------------------------------ */
	public function modifierAction($id)
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
        
        if($cap instanceof Virtuel)
        {
            $form = $this->createForm(new VirtuelEditType, $cap);
            $rend='SmartCampusBundle:Smart:modifV.html.twig';
        }
        if($cap instanceof Physique)
        {
            $form = $this->createForm(new PhysiqueEditType, $cap);
            $rend='SmartCampusBundle:Smart:modifP.html.twig';
        }
        
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
        
        return $this->render($rend, array('form' => $form->createView(), 'capteur'=>$cap,));
	}
    
	
// =====================================================================================================
// SUPPRESSION -----------------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Supprimer un capteur de la BD ------------------------------------------------------------------ */
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
        if($cap instanceof Physique)
        {
            $em->remove($cap->getEndpoint());
        }
        $em->remove($cap);
        $em->flush();

        return $this->redirect($this->generateUrl('smartcampus_accueil'));
	}
    
    /** Supprimer une propriete ------------------------------------------------------------------ */
	public function supprimerPropAction($id)
	{
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

        return $this->redirect($this->generateUrl('smartcampus_voir', array('id' => $idCap)));
	}
    
// =====================================================================================================
// GENERATION JSON -------------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Afficher la liste des capteurs ------------------------------------------------------------------ */
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
        
        foreach($virAll as $vir){
            $name = $vir->getName();
            $lien = $this->generateUrl('smartcampus_sensor', array('name' => $name));
            $cap = array('name' => $name, 'lien' => $lien);
            array_push($res, $cap);
        }

        foreach($phyAll as $phy){
            $name = $phy->getName();
            $lien = $this->generateUrl('smartcampus_sensor', array('name' => $name));
            $cap = array('name' => $name, 'lien' => $lien);
            array_push($res, $cap);
        }
        
        
        
        //return $response; = json_encode($lien, JSON_UNESCAPED_SLASHES);
        return new JsonResponse(array('sensors' => $res));
        
        // ======== Transforme les '\/' en '/' pour l'affichage =============================
        
        /*$response = new JsonResponse(array('sensors' => $res));
        $response = str_replace("\\/", "/", $response);
        $response->headers->set('Content-Type', 'application/json');
        return new Response($response);*/
        
        /*$response = new JsonResponse(array('sensors' => $res));
        $response = stripslashes($response);
        $response->headers->set('Content-Type', 'application/json');
        return new Response($response);*/
        
    }
    
    /** Afficher les details d'un capteur ------------------------------------------------------------------ */
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
        
        //recupere les propriete du capteur
        $propriete = array();
        $propAll = $cap->getPropriete();
        foreach($propAll as $prop)
        {
            $proptmp = array('name' => $prop->getName(),
                          'value' => $prop->getValue());
            array_push($propriete, $proptmp);
        }
        
        if($cap instanceof Virtuel)
        {
            $ret = array('name' => $cap->getName(),
                         'kind' => $cap->getKind(),
                         'frequency' => $cap->getFrequency(),
                         'script' => $cap->getScript(),
                         'properties' => $propriete);
        }
        
        if($cap instanceof Physique)
        {
            $ret = array('name' => $cap->getName(),
                         'kind' => $cap->getKind(),
                         'frequency' => $cap->getFrequency(),
                         'pin' => $cap->getPin(),
                         'board' => array('name' => $cap->getBoard()->getName()),
                         'endpoint' => array('ip' => $cap->getEndpoint()->getIp(),
                                             'port' => $cap->getEndpoint()->getPort()),
                         'properties' => $propriete);
        }
        
        /*$response->headers->set('Content-Type', 'application/json'); /** Ajouté automatiquement dans le cas de JsonResponse */
        return new JsonResponse(array('sensor' => $ret));
    }
    
// =====================================================================================================
// RECUPERATION JSON -----------------------------------------------------------------------------------
// =====================================================================================================
    
    /** Recuperer Json ------------------------------------------------------------------ */
    public function jsonAction()
    {
        $this->get('session')->getFlashBag()->add('log-head', 'Logs de synchronisation :');
        
        $url = "http://smartcampus.unice.fr/data-api/sensors";
        $json = file_get_contents($url);
        
        if($json === null)
        {
            throw $this->createNotFoundException('Pas de Json trouve a l_adresse ['.$url.']');
        }
        
        $obj = json_decode($json);
        $arr = json_decode($json, true);
        
        //affiche la hierarchie de l'objet ou array -- décommenter pour voir ;)
        /*$dump = var_dump($arr);*/
        
        //array de tout les capteurs
        $capAll = $obj->{'_items'};
        
        foreach($capAll as $cap){
            $this->checkInBase($cap->{'name'});
        }
        
        $this->get('session')->getFlashBag()->add('log-tail', 'Synchronisé effectué avec succès');
        
        return $this->redirect($this->generateUrl('smartcampus_accueil'));
    }
    
    /** Verifi si capteur existe en BD ------------------------------------------------------------------ */
    public function checkInBase($name)
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
                $this->addInBase($name);
            }
        }
        if($cap != null)
        {
            $cap = $this->getDoctrine()
                ->getRepository('SmartCampusBundle:Physique')
                ->findOneByName($name);
            if($cap != null)
            {
                $this->get('session')->getFlashBag()->add('log-info', 'Capteurs '.$name.' déjà présent dans la base');
            }
        }
    }
    
    /** Ajoute capteur en BD ------------------------------------------------------------------ */
    public function addInBase($name)
    {
        $em = $this->getDoctrine()->getManager();
            
        //recuperer le capteur
        $url = "http://smartcampus.unice.fr/data-api/sensors";
        $json = file_get_contents($url);
        
        if($json === null)
        {
            throw $this->createNotFoundException('Pas de Json trouve a l_adresse ['.$url.']');
        }
        
        $obj = json_decode($json);
        //obtenir la liste de tout les element
        $capAll = $obj->{'_items'};
        
        $select = 0;
        foreach($capAll as $cap){
            if($cap->{'name'} == $name){
                $i = $select;
            }
            $select = $select+1;
        }
        
        //creation d'un capteur virtuel
        if(preg_match('/V$/', $capAll[$i]->{'name'}))
        {
            //creation du capteur
            $vir = new Virtuel();
            $vir->setName($capAll[$i]->{'name'});
            $vir->setKind($capAll[$i]->{'kind'});
            $vir->setFrequency($capAll[$i]->{'frequency'});
            $vir->setScript($capAll[$i]->{'script'});
            
            $em->persist($vir);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('log-ajout', 'Capteurs '.$name.' créé avec succès');
        }
        
        //creation d'un capteur physique
        if(!preg_match('/V$/', $capAll[$i]->{'name'}))
        {
            //creation de la board si existe pas
            $boardname = $capAll[$i]->{'board'};
            $board = $this->getDoctrine()
                    ->getRepository('SmartCampusBundle:Board')
                    ->findOneByName($boardname);

            if($board === null)
            {
                $board = new Board();
                $board->setName($boardname);
                $em->persist($board);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('log-ajout', 'Board '.$boardname.' créé avec succès');
            }
            
            //creation endpoint
            $endpoint = new Endpoint();
            $endpoint->setIp($capAll[$i]->{'endpoint'}->{'ip'});
            $endpoint->setPort($capAll[$i]->{'endpoint'}->{'port'});
            $em->persist($endpoint);
            $em->flush();
            
            //creation du capteur
            $phy = new Physique();
            $phy->setName($capAll[$i]->{'name'});
            $phy->setKind($capAll[$i]->{'kind'});
            $phy->setFrequency($capAll[$i]->{'frequency'});
            $phy->setPin($capAll[$i]->{'pin'});
            $phy->setBoard($board);
            $phy->setEndpoint($endpoint);
            
            $em->persist($phy);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('log-ajout', 'Capteurs '.$name.' créé avec succès');
        }
    }
}