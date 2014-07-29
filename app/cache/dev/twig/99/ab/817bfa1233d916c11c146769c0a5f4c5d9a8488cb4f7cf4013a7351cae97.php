<?php

/* SmartCampusBundle:Smart:navigation.html.twig */
class __TwigTemplate_99ab817bfa1233d916c11c146769c0a5f4c5d9a8488cb4f7cf4013a7351cae97 extends Twig_Template
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
        if ((((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "All") || ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == null))) {
            // line 2
            echo "<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\">
    <li class=\"active\"><a href=\"?tag=All\">Tout les capteurs</a></li>
    <li><a href=\"?tag=Phy\">Capteurs Physique</a></li>
    <li><a href=\"?tag=Vir\">Capteurs Virtuels</a></li>
    <li><a href=\"?tag=Board\">Boards</a></li>
</ul>
";
        }
        // line 9
        echo "
";
        // line 10
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Phy")) {
            // line 11
            echo "<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\">
    <li><a href=\"?tag=All\">Tout les capteurs</a></li>
    <li class=\"active\"><a href=\"?tag=Phy\">Capteurs Physique</a></li>
    <li><a href=\"?tag=Vir\">Capteurs Virtuels</a></li>
    <li><a href=\"?tag=Board\">Boards</a></li>
</ul>
";
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Vir")) {
            // line 20
            echo "<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\">
    <li><a href=\"?tag=All\">Tout les capteurs</a></li>
    <li><a href=\"?tag=Phy\">Capteurs Physique</a></li>
    <li class=\"active\"><a href=\"?tag=Vir\">Capteurs Virtuels</a></li>
    <li><a href=\"?tag=Board\">Boards</a></li>
</ul>
";
        }
        // line 27
        echo "
";
        // line 28
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Board")) {
            // line 29
            echo "<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\">
    <li><a href=\"?tag=All\">Tout les capteurs</a></li>
    <li><a href=\"?tag=Phy\">Capteurs Physique</a></li>
    <li><a href=\"?tag=Vir\">Capteurs Virtuels</a></li>
    <li class=\"active\"><a href=\"?tag=Board\">Boards</a></li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  49 => 20,  47 => 19,  44 => 18,  35 => 11,  33 => 10,  30 => 9,  21 => 2,  19 => 1,  96 => 30,  94 => 29,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 28,  58 => 27,  55 => 14,  53 => 13,  48 => 10,  46 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
