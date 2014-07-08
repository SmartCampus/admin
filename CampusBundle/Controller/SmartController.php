<?php

namespace Smart\CampusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SmartController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartCampusBundle:Smart:index.html.twig');
    }

	public function voirAction($id)
	{
        $request = $this->getRequest();
		$tag = $request->query->get('tag');

		return new Response("Affichage du capteur : ".$id." avec le tag : ".$tag);
	}
	
	public function ajouterAction()
	{
		$id = 9;
        $response = new Response(json_encode(array('id' => $id)));
		$response->headers->set('Content-Type', 'application/json');
		//return $response; TODO : enregistrer le Json et l'envoyer a l'autre base
		return $this->render('SmartCampusBundle:Smart:ajout.html.twig');
	}
	
	public function modifierAction($id)
	{
        return $this->render('SmartCampusBundle:Smart:modif.html.twig',
            array( 'id' => $id));
	}
	
	public function supprimerAction($id)
	{
        $this->get('session')->getFlashBag()->add('info', 'Capteur supprimer');
        return $this->redirect( $this->generateUrl('smartcampus_accueil'));
	}


/** La gestion d'un formulaire est particulière, mais l'idée est la suivante :
    
    if( $this->get('request')->getMethod() == 'POST' )
    {
      // Ici, on s'occupera de la création et de la gestion du formulaire
      
      $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
    
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');*/ 
}
