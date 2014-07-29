<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'smartcampus_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/smartcampus/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_voirV' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirVAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/smartcampus/virtuel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_voirP' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::voirPAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/smartcampus/physique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_ajouterB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterBAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/smartcampus/ajouterB',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_ajouterV' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/smartcampus/ajouterV',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_ajouterP' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::ajouterPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/smartcampus/ajouterP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_modifierV' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::modifierVAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/smartcampus/modifierV',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_modifierP' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::modifierPAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/smartcampus/modifierP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smartcampus_supprimer' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Smart\\CampusBundle\\Controller\\SmartController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/smartcampus/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
