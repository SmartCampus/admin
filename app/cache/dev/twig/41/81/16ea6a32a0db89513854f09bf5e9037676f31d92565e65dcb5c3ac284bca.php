<?php

/* SmartCampusBundle:Smart:index.html.twig */
class __TwigTemplate_418116ea6a32a0db89513854f09bf5e9037676f31d92565e65dcb5c3ac284bca extends Twig_Template
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
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1><span class=\"glyphicon glyphicon-home\" style=\"cursor: pointer;\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "';\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

    <!-- Navigation -->
    ";
        // line 9
        $this->env->loadTemplate("SmartCampusBundle:Smart:navigation.html.twig")->display($context);
        // line 10
        echo "    <br>
    <div class=\"container\">
        
        ";
        // line 13
        if ((((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "All") || ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == null))) {
            // line 14
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatableAll.html.twig")->display($context);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Phy")) {
            // line 17
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatablePhy.html.twig")->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Vir")) {
            // line 20
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatableVir.html.twig")->display($context);
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "Board")) {
            // line 23
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatableBoard.html.twig")->display($context);
            // line 24
            echo "        ";
        }
        // line 25
        echo "        
    </div>

    <!-- Boite dialogue ajout board -->
    ";
        // line 29
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  96 => 29,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  50 => 10,  48 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
