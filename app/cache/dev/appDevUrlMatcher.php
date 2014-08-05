<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/smartcampus')) {
            // smartcampus_accueil
            if (rtrim($pathinfo, '/') === '/smartcampus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'smartcampus_accueil');
                }

                return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::indexAction',  '_route' => 'smartcampus_accueil',);
            }

            // smartcampus_voirB
            if (0 === strpos($pathinfo, '/smartcampus/board') && preg_match('#^/smartcampus/board/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_voirB')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirBAction',));
            }

            // smartcampus_voir
            if (0 === strpos($pathinfo, '/smartcampus/capteur') && preg_match('#^/smartcampus/capteur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_voir')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirAction',));
            }

            if (0 === strpos($pathinfo, '/smartcampus/ajouter')) {
                // smartcampus_ajouterProp
                if (0 === strpos($pathinfo, '/smartcampus/ajouterProp') && preg_match('#^/smartcampus/ajouterProp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_ajouterProp')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterPropAction',));
                }

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

            // smartcampus_modifier
            if (0 === strpos($pathinfo, '/smartcampus/modifier') && preg_match('#^/smartcampus/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_modifier')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/smartcampus/s')) {
                if (0 === strpos($pathinfo, '/smartcampus/supprimer')) {
                    // smartcampus_supprimer
                    if (preg_match('#^/smartcampus/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_supprimer')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::supprimerAction',));
                    }

                    // smartcampus_supprimerProp
                    if (0 === strpos($pathinfo, '/smartcampus/supprimerProp') && preg_match('#^/smartcampus/supprimerProp/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_supprimerProp')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::supprimerPropAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/smartcampus/sensors')) {
                    // smartcampus_sensors
                    if ($pathinfo === '/smartcampus/sensors') {
                        return array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::sensorsAction',  '_route' => 'smartcampus_sensors',);
                    }

                    // smartcampus_sensor
                    if (preg_match('#^/smartcampus/sensors/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartcampus_sensor')), array (  '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::sensorAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
