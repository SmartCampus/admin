<?php

/* SmartCampusBundle:Smart:modif.html.twig */
class __TwigTemplate_bcec26e8c31664a87da0f306510d2f2e2e0ccef953601047ceba7635d0d1cd29 extends Twig_Template
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
        echo " - Modificatiop";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Modification du capteur ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        $this->env->loadTemplate("SmartCampusBundle:Smart:formulaireEdit.html.twig")->display($context);
        // line 10
        echo "\t
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voir", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        Retour à ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "
    </a>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  49 => 10,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
