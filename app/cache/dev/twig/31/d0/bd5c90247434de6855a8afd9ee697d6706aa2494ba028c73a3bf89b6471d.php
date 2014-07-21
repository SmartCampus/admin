<?php

/* SmartCampusBundle:Smart:recherche.html.twig */
class __TwigTemplate_31d0bd5c90247434de6855a8afd9ee697d6706aa2494ba028c73a3bf89b6471d extends Twig_Template
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
        <div id=\"tabaccueil\" class=\"panel-heading\">Liste des capteurs</div>
        <table id=\"tabaccueil\" class=\"table table-hover\">
            <tr>
                <th>Name    <span class=\"glyphicon glyphicon-sort\" style=\"cursor: pointer;\" onclick=\"alert('tri');\"></span></th>
                <th>Kind    <span class=\"glyphicon glyphicon-sort\" style=\"cursor: pointer;\" onclick=\"alert('tri');\"></span></th>
                <th>Frequency   <span class=\"glyphicon glyphicon-sort\" style=\"cursor: pointer;\" onclick=\"alert('tri');\"></span></th>
            </tr>
            <!--";
        // line 10
        $context["ret"] = (isset($context["capAll"]) ? $context["capAll"] : $this->getContext($context, "capAll"));
        echo "-->
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capAll"]) ? $context["capAll"] : $this->getContext($context, "capAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 12
            echo "                ";
            if (((((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == null) || ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) == "indiferent")) || ($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind") == (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag"))))) {
                // line 13
                echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voir", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
                echo "';\">
                        <td>
                            ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  66 => 25,  59 => 21,  53 => 18,  47 => 15,  41 => 13,  38 => 12,  34 => 11,  19 => 1,  103 => 31,  100 => 30,  94 => 24,  88 => 20,  85 => 19,  79 => 16,  75 => 15,  71 => 14,  64 => 9,  61 => 8,  55 => 6,  50 => 33,  48 => 30,  42 => 26,  40 => 19,  37 => 18,  35 => 8,  30 => 10,  23 => 1,);
    }
}
