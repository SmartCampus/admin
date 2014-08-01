<?php

/* SmartCampusBundle:Smart:voirC.html.twig */
class __TwigTemplate_c10934f09c71ef0b20758982cabc4725b0fdf2842f92a8e7c78c909cf339767d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--parties communes a tout les capteurs-->
<div class=\"row\">
    <div class=\"col-md-2\">Capteur : </div>
    <div class=\"col-md-2\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "</div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-md-2\">Kind :</div>
    <div class=\"col-md-2\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "kind"), "html", null, true);
        echo "</div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-md-2\">Frequency :</div>
    <div class=\"col-md-2\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "frequency"), "html", null, true);
        echo "</div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  32 => 9,  24 => 4,  19 => 1,  96 => 39,  94 => 38,  82 => 29,  75 => 25,  68 => 21,  64 => 19,  62 => 18,  56 => 15,  52 => 13,  50 => 12,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
