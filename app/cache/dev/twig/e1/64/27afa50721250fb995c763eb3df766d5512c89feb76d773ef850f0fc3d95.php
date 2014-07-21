<?php

/* SmartCampusBundle:Smart:ajout.html.twig */
class __TwigTemplate_e16427afa50721250fb995c763eb3df766d5512c89feb76d773ef850f0fc3d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SmartCampusBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartCampusBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Ajout d'un capteur</h1>

\t";
        // line 9
        $this->env->loadTemplate("SmartCampusBundle:Smart:formulaire.html.twig")->display($context);
        // line 10
        echo "\t
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\" class=\"btn\">
        Retour à l'accueil
    </a>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
