<?php

/* SmartCampusBundle::layout.html.twig */
class __TwigTemplate_84a7836e392d9c62d13e1a62f6510f747f45af8e5e844ca4519da04d542ee3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  108 => 49,  96 => 40,  89 => 36,  82 => 32,  75 => 28,  67 => 23,  59 => 18,  51 => 13,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
