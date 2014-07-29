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
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

    <!-- Navigation -->
    ";
        // line 9
        $this->env->loadTemplate("SmartCampusBundle:Smart:navigation.html.twig")->display($context);
        // line 10
        echo "    
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
        return array (  96 => 30,  94 => 29,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 10,  46 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
