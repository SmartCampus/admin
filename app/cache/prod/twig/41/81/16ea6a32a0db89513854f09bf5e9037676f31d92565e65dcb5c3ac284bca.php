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
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true);
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
        if ((((isset($context["tag"]) ? $context["tag"] : null) == "All") || ((isset($context["tag"]) ? $context["tag"] : null) == null))) {
            // line 14
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatableAll.html.twig")->display($context);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : null) == "Phy")) {
            // line 17
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatablePhy.html.twig")->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : null) == "Vir")) {
            // line 20
            echo "        ";
            $this->env->loadTemplate("SmartCampusBundle:Smart:datatableVir.html.twig")->display($context);
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((isset($context["tag"]) ? $context["tag"] : null) == "Board")) {
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
        return array (  96 => 30,  70 => 19,  53 => 13,  34 => 14,  90 => 39,  145 => 68,  139 => 65,  120 => 56,  58 => 15,  52 => 22,  148 => 71,  137 => 63,  146 => 51,  129 => 40,  97 => 44,  76 => 21,  65 => 18,  100 => 30,  83 => 34,  37 => 22,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  111 => 34,  107 => 33,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 30,  67 => 18,  63 => 27,  59 => 15,  47 => 9,  38 => 15,  94 => 29,  89 => 23,  85 => 24,  79 => 22,  75 => 18,  68 => 14,  56 => 23,  50 => 20,  29 => 3,  87 => 25,  72 => 30,  55 => 14,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 25,  78 => 21,  46 => 9,  27 => 4,  40 => 17,  44 => 17,  35 => 15,  31 => 11,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 44,  115 => 35,  105 => 40,  101 => 30,  91 => 41,  69 => 19,  66 => 15,  62 => 26,  49 => 18,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 53,  109 => 37,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 24,  86 => 28,  82 => 23,  80 => 38,  73 => 20,  64 => 17,  60 => 13,  57 => 24,  54 => 10,  51 => 21,  48 => 10,  45 => 18,  42 => 32,  39 => 6,  36 => 5,  33 => 4,  30 => 6,);
    }
}
