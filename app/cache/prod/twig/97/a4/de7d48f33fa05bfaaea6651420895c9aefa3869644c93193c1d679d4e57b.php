<?php

/* SmartCampusBundle:Smart:voirV.html.twig */
class __TwigTemplate_97a4de7d48f33fa05bfaaea6651420895c9aefa3869644c93193c1d679d4e57b extends Twig_Template
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
        echo " - Visualisation";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Visualisation de ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "name"), "html", null, true);
        echo "</h1>

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-2\">Capteur : </div>
                <div class=\"col-md-2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "name"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Kind :</div>
                <div class=\"col-md-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "kind"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Frequency :</div>
                <div class=\"col-md-2\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "frequency"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Script :</div>
                <div class=\"col-md-2\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "script"), "html", null, true);
        echo "</div>
            </div>
        </div>

        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\" class=\"btn\">
            Retour à l'accueil
        </a>

        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_modifierV", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Modifier
        </a>

        <input type=\"button\" value=\"Supprimer\" class=\"btn btn btn-danger\" onclick=\"suppr('";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_supprimer", array("name" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : null), "name"))), "html", null, true);
        echo "');\">

        <div id=\"supp-message\" title=\"Suppression\" style=\"visibility: hidden\">            
          <span class=\"ui-icon ui-icon-circle-check\" style=\"float:left; margin:0 7px 50px 0;\"></span>
            <p>Voulez-vous vraiment supprimer ce capteur ?</p>
        </div>
    </div>
\t
    <!-- Boite dialogue Modification capteur -->
    ";
        // line 49
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
        // line 50
        echo "
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  127 => 62,  96 => 40,  70 => 19,  53 => 13,  34 => 14,  90 => 39,  145 => 68,  139 => 65,  120 => 54,  58 => 27,  52 => 22,  148 => 71,  137 => 63,  146 => 51,  129 => 40,  97 => 32,  76 => 20,  65 => 18,  100 => 30,  83 => 34,  37 => 22,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  111 => 34,  107 => 33,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  131 => 52,  119 => 42,  108 => 49,  102 => 32,  71 => 30,  67 => 23,  63 => 29,  59 => 18,  47 => 19,  38 => 15,  94 => 37,  89 => 36,  85 => 33,  79 => 22,  75 => 28,  68 => 18,  56 => 23,  50 => 20,  29 => 3,  87 => 25,  72 => 19,  55 => 14,  21 => 2,  26 => 6,  98 => 31,  93 => 31,  88 => 25,  78 => 21,  46 => 9,  27 => 4,  40 => 17,  44 => 18,  35 => 11,  31 => 11,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 61,  121 => 38,  117 => 44,  115 => 35,  105 => 40,  101 => 41,  91 => 41,  69 => 19,  66 => 15,  62 => 15,  49 => 20,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 55,  116 => 41,  112 => 53,  109 => 37,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 24,  86 => 28,  82 => 32,  80 => 38,  73 => 20,  64 => 17,  60 => 13,  57 => 24,  54 => 13,  51 => 13,  48 => 10,  45 => 18,  42 => 7,  39 => 6,  36 => 5,  33 => 10,  30 => 9,);
    }
}
