<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/smartcampus')) {
            // smartcampus_accueil
            if (rtrim($pathinfo, '/') === '/smartcampus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'smartcampus_accueil');
                }

                return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::indexAction',  '_route' => 'smartcampus_accueil',);
            }

            // smartcampus_voirV
            if (0 === strpos($pathinfo, '/smartcampus/virtuel') && preg_match('#^/smartcampus/virtuel/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_voirV')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirVAction',));
            }

            // smartcampus_voirP
            if (0 === strpos($pathinfo, '/smartcampus/physique') && preg_match('#^/smartcampus/physique/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_voirP')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirPAction',));
            }

            if (0 === strpos($pathinfo, '/smartcampus/ajouter')) {
                // smartcampus_ajouterB
                if ($pathinfo === '/smartcampus/ajouterB') {
                    return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterBAction',  '_route' => 'smartcampus_ajouterB',);
                }

                // smartcampus_ajouterV
                if ($pathinfo === '/smartcampus/ajouterV') {
                    return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterVAction',  '_route' => 'smartcampus_ajouterV',);
                }

                // smartcampus_ajouterP
                if ($pathinfo === '/smartcampus/ajouterP') {
                    return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterPAction',  '_route' => 'smartcampus_ajouterP',);
                }

            }

            if (0 === strpos($pathinfo, '/smartcampus/modifier')) {
                // smartcampus_modifierV
                if (0 === strpos($pathinfo, '/smartcampus/modifierV') && preg_match('#^/smartcampus/modifierV/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_modifierV')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::modifierVAction',));
                }

                // smartcampus_modifierP
                if (0 === strpos($pathinfo, '/smartcampus/modifierP') && preg_match('#^/smartcampus/modifierP/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_modifierP')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::modifierPAction',));
                }

            }

            // smartcampus_supprimer
            if (0 === strpos($pathinfo, '/smartcampus/supprimer') && preg_match('#^/smartcampus/supprimer/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_supprimer')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::supprimerAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
