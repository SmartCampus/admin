<?php

/* SmartCampusBundle:Smart:datatablePhy.html.twig */
class __TwigTemplate_1a1a2a67d21528e7bd6bea0f8f52a65707cb3f355546f91616dae1fafe2eceee extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"panel panel-default\">
        <table id=\"tablerecherche\" class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Kind</th>
                    <th>Frequency</th>
                    <th>Board</th>
                    <th>Endpoint</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phyAll"]) ? $context["phyAll"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 16
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirP", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "board"), "name"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "pin"), "html", null, true);
            echo "]
                        </td>
                        <td>
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "endpoint"), "ip"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : null), "endpoint"), "port"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>
</div>

<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterP");
        echo "\" class=\"btn btn-primary bouton-accueil\">
    + Capteur Physique
</a>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatablePhy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  145 => 68,  139 => 65,  120 => 56,  58 => 25,  52 => 22,  148 => 71,  137 => 63,  146 => 51,  129 => 40,  97 => 44,  76 => 26,  65 => 18,  100 => 30,  83 => 34,  37 => 22,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  111 => 34,  107 => 33,  61 => 8,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 30,  67 => 15,  63 => 27,  59 => 15,  47 => 9,  38 => 6,  94 => 28,  89 => 23,  85 => 39,  79 => 23,  75 => 18,  68 => 14,  56 => 23,  50 => 39,  29 => 3,  87 => 25,  72 => 16,  55 => 14,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  40 => 17,  44 => 12,  35 => 15,  31 => 11,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 44,  115 => 35,  105 => 40,  101 => 30,  91 => 41,  69 => 19,  66 => 15,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 53,  109 => 37,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 24,  86 => 28,  82 => 22,  80 => 38,  73 => 20,  64 => 28,  60 => 13,  57 => 24,  54 => 10,  51 => 21,  48 => 36,  45 => 18,  42 => 32,  39 => 16,  36 => 16,  33 => 4,  30 => 6,);
    }
}
