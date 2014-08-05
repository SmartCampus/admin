<?php

/* SmartCampusBundle:Smart:datatableVir.html.twig */
class __TwigTemplate_05957540769a6a3c184d17567cd3b5cb34f86d32b380d6b7352d2850c120e8fb extends Twig_Template
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
                    <th>Script</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["virAll"]) ? $context["virAll"] : $this->getContext($context, "virAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 15
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirV", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "script"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
    </div>
</div>

<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterV");
        echo "\" class=\"btn btn-success bouton-accueil\">
    + Capteur Virtuel
</a>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatableVir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  72 => 30,  62 => 26,  56 => 23,  50 => 20,  44 => 17,  38 => 15,  34 => 14,  19 => 1,);
    }
}
